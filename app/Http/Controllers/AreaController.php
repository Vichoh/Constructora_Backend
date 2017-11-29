<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::get();
        return \Response::json($areas, 200); 
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

            $id = Area::insertGetId([
                'descripcion' => $request->descripcion,
            ]);
            
            $area = Area::where([

                ['id' , $id],
            ])->first();
            return \Response::json($area, 201)->header('Location' , 'http://localhost:8000/api/areas');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Area' .$e);
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
            $area = Area::find($id);
            
            

            if (!isset($area)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro la Area con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($area, 200);

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

            $area = Area::find($id);

            if (isset($area)) {

                $area->update($request->all());
                return \Response::json($area, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el area'], 404);

            }

        }catch(\Exception $e){

            \Log::info('Error al actualizar el area'. $e);
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
            $area = Area::find($id);
            if (!isset($area)) {
                return \Response::json(['Area no existe'],404); 
            }
            $area->delete();
            return \Response::json('Area Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }

    }
}
