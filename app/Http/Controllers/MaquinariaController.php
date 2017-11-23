<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Maquinaria;
use App\Http\Requests\StoreMaquinaria;
use JWTAuth;
use App\Http\Controllers\AuthController;

class MaquinariaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
     $maquinarias = Maquinaria::with('ubicacion', 'modelo', 'rendimiento', 'marca')
     ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
     ->get();
     return \Response::json($maquinarias, 200); 
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
    public function store(StoreMaquinaria $request, AuthController $auth)
    {
        try {

    

            $id = Maquinaria::insertGetId([
           
                'identificacion' => $request->identificacion,
                'descripcion' => $request->descripcion,
                'numero_serie' => $request->numero_serie,
                'patente' => $request->patente,
                'anho' => $request->anho,
                'ubicacion_id' => $request->ubicacion_id,
                'rendimiento_id' => $request->rendimiento_id,
                'modelo_id' => $request->modelo_id,
                'marca_id' => $request->marca_id,
                'constructora_id' => $auth->getAuthenticatedUser()->constructora_id,
            ]);

            $maquinaria = Maquinaria::where([
                ['id' , $id]
            ])->first();


            return \Response::json($maquinaria, 201)->header('Location' , 'http://localhost:8000/api/maquinarias');
            
        } catch (Exception $e) {

            \Log::info('Error al crear Maquinaria' .$e);
            return \Response::json(['created' => false ], 500);  
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id, AuthController $auth)
    {
        try{
            $maquinaria = Maquinaria::with('ubicacion', 'modelo', 'rendimiento', 'marca')
            ->where([
                ['id' ,  $id],
                ['constructora_id',$auth->getAuthenticatedUser()->constructora_id]
            ])
            ->first(); 

            if (!isset($maquinaria)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro la maquinaria con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($maquinaria, 200);

        }catch(\Exception $e){

            \Log::critical("Error {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, AuthController $auth)
    {
        try{

            $maquinaria = Maquinaria::where([
                ['id' ,  $id],
                ['constructora_id',$auth->getAuthenticatedUser()->constructora_id]
            ])
            ->first(); 
            


            if (isset($maquinaria)) {

                $maquinaria->update($request->all());
                return \Response::json($maquinaria, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el maquinaria'], 404);

            }

        }catch(\Exception $e){

            \Log::info('Error al actualizar el maquinaria'. $e);
            return \Response::json('Error',500); 

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, AuthController $auth)
    {
        try{
            $maquinaria = Maquinaria::where([
                ['id' ,  $id],
                ['constructora_id',$auth->getAuthenticatedUser()->constructora_id]
            ])
            ->first(); 
            if (!isset($maquinaria)) {
                return \Response::json(['maquinaria no existe'],404); 
            }
            $maquinaria->delete();
            return \Response::json('maquinaria Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
