<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Obra;
use App\Cliente;
use App\Tipo_Obra;
use App\Contructora;
use App\Http\Requests\StoreObra;
use JWTAuth;
use App\Http\Controllers\AuthController;

class ObraController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
       
        $obras = Obra::with('cliente', 'tipo_obra', 'constructora')
                        ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
                        ->get();
        return \Response::json($obras, 200); 
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
    public function store(StoreObra $request, AuthController $auth)
    {
        try {
           
            $request['constructora_id'] = $auth->getAuthenticatedUser()->constructora_id;

            Obra::create($request->validated());
            return \Response::json(['data' => $request->validated()], 201)->header('Location' , 'http://localhost:8000/api/obras');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Obra' .$e);
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
        try {

            $obra = Obra::findOrFail($id);
              

        } catch (Exception $e) {
            
            $datos =[
                'errors'    => true,
                'msg'       => $e->getMessage(),
            ]; 
            return \Response::json($datos, 404); 
        }


        return \Response::json($obra, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        try{

            $obra = Obra::find($id);

            if (isset($obra)) {

                $obra->update($request->all());
                return \Response::json($obra, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el obra'], 404);

            }
        
        }catch(\Exception $e){

            \Log::info('Error al actualizar el obra'. $e);
            return \Response::json('Error',500); 

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $obra = Obra::find($id);
            if (!isset($obra)) {
                return \Response::json(['Obra no existe'],404); 
            }
            $obra->delete();
            return \Response::json('Usuario Eliminado',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
