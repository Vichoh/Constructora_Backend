<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Empresa;
use JWTAuth;
use App\Http\Controllers\AuthController;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {   

        $clientes = Cliente::select('clientes.*')
                        ->with('empresa')
                        ->join('obras', 'clientes.id', '=', 'obras.cliente_id')
                        ->where('obras.constructora_id', $auth->getAuthenticatedUser()->constructora_id)->get();
        return $clientes;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

         try {

            Empresa::create($request->all());
            $empresa = Empresa::where('razon_social' , $request->razon_social)->get();
            $cliente = new Cliente([
                'empresa_id' => $empresa[0]->id
            ]);

            $cliente->save();
            return \Response::json(['data' => $request->all()], 201)->header('Location' , 'http://localhost:8000/api/clientes');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Cliente' .$e);
            return \Response::json(['created' => false ], 500); 
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Cliente::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->update($request->all());
        return ['update' => true];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);
        return ['delete' => true];
    }
}
