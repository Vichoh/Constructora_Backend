<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Empresa;
use JWTAuth;
use App\Http\Controllers\AuthController;



/**
 * @resource Controlador para el cliente
 *
 * Controlador para el cliente
 */
class ClienteController extends Controller
{
    /**
     * etodo que lista todos los clientes de una constructora esta validado por el id de la constructora
     *  
     * @return \Illuminate\Http\Response
     * 
     */
    public function index(AuthController $auth)
    {   

        $clientes = Cliente::select('clientes.*')
                        ->with('empresa')
                        ->join('obras', 'clientes.id', '=', 'obras.cliente_id')
                        ->where('obras.constructora_id', $auth->getAuthenticatedUser()->constructora_id)->get();
        return \Response::json($clientes, 200);
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
     * Metodo store para crear un nuevo Cliente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        try {

            $idEmpresa = Empresa::insertGetId([
                'rut' => $request->rut,
                'razon_social' => $request->razon_social,
                'ciudad' => $request->ciudad,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'celular' => $request->celular,
                'fax' => $request->fax,
                'email' => $request->email,
                'web' => $request->web,
                'pais' => $request->pais,
                'observacion' => $request->observacion,
            ]);

            $idCliente = Cliente::insertGetId([
                'empresa_id' => $idEmpresa,
            ]);


            $cliente = Cliente::where([
                ['id' , $idCliente]
            ])->first();

            
            return \Response::json($cliente, 201)->header('Location' , 'http://localhost:8000/api/clientes');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Cliente' .$e);
            return \Response::json(['created' => false ], 500); 
        }
    }

    /**
     * Obtener los clientes .
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try{
            $cliente = Cliente::find($id);
            
            

            if (!isset($cliente)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro el cliente con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($cliente, 200);

        }catch(\Exception $e){

            Log::critical("Error {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json('Error', 500); 
        }
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
     * Actualizar CLiente.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{

            $cliente = Cliente::find($id);

            if (isset($cliente)) {

                $cliente->update($request->all());
                return \Response::json($cliente, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el cliente'], 404);

            }
        
        }catch(\Exception $e){

            \Log::info('Error al actualizar el cliente'. $e);
            return \Response::json('Error',500); 

        }
    }

    /**
     * Eliminar cliente.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try{
            $cliente = Cliente::find($id);
            if (!isset($cliente)) {
                return \Response::json(['Cliente no existe'],404); 
            }
            $cliente->delete();
            return \Response::json('Cliente Eliminado',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
