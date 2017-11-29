<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estado;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados = Estado::get();
        return \Response::json($estados, 200);
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
            $id = Estado::insertGetId([
                'descripcion' => $request->descripcion,
            ]); 

            $estado = Estado::where([
                ['id', $id]
            ])->first();
            
            return \Response::json($estado, 201)->header('Location' , 'http://localhost:8000/api/estados');
            
        } catch (Exception $e) {
            \Log::info('Error al crear estado' .$e);
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
            $estado = Estado::find($id);
            
            

            if (!isset($estado)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro la estado con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($estado, 200);

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

            $estado = Estado::find($id);

            if (isset($estado)) {

                $estado->update($request->all());
                return \Response::json($estado, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el estado'], 404);

            }

        }catch(\Exception $e){

            \Log::info('Error al actualizar el estado'. $e);
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
            $estado = Estado::find($id);
            if (!isset($estado)) {
                return \Response::json(['estado no existe'],404); 
            }
            $estado->delete();
            return \Response::json('Estado Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
