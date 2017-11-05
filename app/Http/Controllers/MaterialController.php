<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Rendimiento;
use App\Marca;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $materiales = Trabajador::with('rendimiento', 'marca')->get();
        return \Response::json($materiales, 200); 
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

            Material::create($request->all());
            return \Response::json(['created' => true], 201);
            
        } catch (Exception $e) {
            
            \Log::info('Error al crear material' .$e);
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

            $material = Material::findOrFail($id)->with('rendimiento', 'marca')->get();
              

        } catch (Exception $e) {
            
            $datos =[
                'errors'    => true,
                'msg'       => $e->getMessage(),
            ]; 
            return \Response::json($datos, 404); 
        }


        return \Response::json($material, 200);
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

            $material = Material::find($id);
            
           

            if (isset($material)) {

                $material->update($request->all());
                return \Response::json($material, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el material'], 404);

            }
        
        }catch(\Exception $e){

            \Log::info('Error al actualizar el material'. $e);
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
        try {

            Material::destroy($id);
            return \Response::json(['deleted' => true], 200);
            
        } catch (Exception $e) {

             \Log::info('Error al eliminar el material'. $e);
            return \Response::json('Error',500); 
        }
    }
}
