<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Trabajador;
use App\Persona;
use App\Area;
use App\Rendimiento;
use App\Http\Requests\StoreTrabajador;


class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trabajadores = Trabajador::with('persona', 'area', 'rendimiento')->get();
        return \Response::json($trabajadores, 200); 
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
    public function store(StoreTrabajador $request)
    {
        try {

            Trabajador::create($request->validated());
            return \Response::json(['created' => true], 200);
            
        } catch (Exception $e) {
            
            \Log::info('Error al crear Trabajador' .$e);
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

            $trabajador = Trabajador::findOrFail($id)->with('persona', 'area', 'rendimiento')->get();


              

        } catch (Exception $e) {
            
            $datos =[
                'errors'    => true,
                'msg'       => $e->getMessage(),
            ]; 
            return \Response::json($datos, 404); 
        }


        return \Response::json($trabajador, 200);
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

            $trabajador = Trabajador::find($id);
            
           

            if (isset($trabajador)) {

                $trabajador->update($request->all());
                return \Response::json($trabajador, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el trabajador'], 404);

            }
        
        }catch(\Exception $e){

            \Log::info('Error al actualizar el trabajador'. $e);
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

            Trabajador::destroy($id);
            return \Response::json(['deleted' => true], 200);
            
        } catch (Exception $e) {

             \Log::info('Error al eliminar el trabajador'. $e);
            return \Response::json('Error',500); 
        }
    }
}
