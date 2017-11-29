<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Modelo;

class ModeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        $modelos = Modelo::get();
        return \Response::json($modelos, 200); 
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
            $id = Modelo::insertGetId([
                'descripcion' => $request->descripcion,
            ]);

            $modelo = Modelo::where([
                ['id', $id]
            ])->first();

            return \Response::json($modelo, 201)->header('Location' , 'http://localhost:8000/api/modelos');
            
        } catch (Exception $e) {
            \Log::info('Error al crear el Modelo' .$e);
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
        try{
            $modelo = Modelo::find($id);
            
            

            if (!isset($modelo)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro el Modelo con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($modelo, 200);

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

            $modelo = Modelo::find($id);

            if (isset($modelo)) {

                $modelo->update($request->all());
                return \Response::json($modelo, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el modelo'], 404);

            }

        }catch(\Exception $e){

            \Log::info('Error al actualizar el modelo'. $e);
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
            $modelo = Modelo::find($id);
            if (!isset($modelo)) {
                return \Response::json(['Modelo no existe'],404); 
            }
            $modelo->delete();
            return \Response::json('Modelo Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }

    }
}
