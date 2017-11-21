<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Marca;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $marcas = Marca::get();
        return \Response::json($marcas, 200); 
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

            Marca::create($request->all());
            return \Response::json($request->all(), 201)->header('Location' , 'http://localhost:8000/api/marcas');
            
        } catch (Exception $e) {
            \Log::info('Error al crear la Marca' .$e);
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
            $marca = Marca::find($id);
            
            

            if (!isset($marca)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro la marca con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($marca, 200);

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

        $marca = Marca::find($id);

        if (isset($marca)) {

            $marca->update($request->all());
            return \Response::json($marca, 200);

        }else{

            return \Response::json(['error' => 'No se encontro la marca'], 404);

        }

    }catch(\Exception $e){

        \Log::info('Error al actualizar la marca'. $e);
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
            $marca = Marca::find($id);
            if (!isset($marca)) {
                return \Response::json(['Marca no existe'],404); 
            }
            $marca->delete();
            return \Response::json('Marca Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
