<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Trabajador;
use App\Persona;
use App\Area;
use App\Rendimiento;
use App\Http\Requests\StoreTrabajador;
use JWTAuth;
use App\Http\Controllers\AuthController;
use Carbon\Carbon;

class TrabajadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
        
        $trabajadores = Trabajador::with('persona', 'area', 'rendimiento')
                                    ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)      
                                    ->get();
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
    public function store(StoreTrabajador $request, AuthController $auth)
    {
        $area = '';
        $rendimiento = '';

        if ($request->area_id != null) {
              $area = $request->area_id;
        }

        if ($request->rendimiento_id != null) {
              $rendimiento = $request->rendimiento_id;
        }

        try {

            $idPersona = Persona::insertGetId([
                'rut' => $request->rut,
                'nombre' => $request->nombre,
                'ciudad' => $request->ciudad,
                'direccion' => $request->direccion,
                'telefono' => $request->telefono,
                'email' => $request->email,
            ]);

            $idTrabajador = Trabajador::insertGetId([
                'persona_id' => $idPersona,
                'sueldo' => $request->sueldo,
                'fecha_ini' => Carbon::createFromDate(2012, 1, 1, 'America/Santiago'),
                'rendimiento_id' => $request->rendimiento_id,
                'area_id' => $area,
                'estado' => $rendimiento,
                'constructora_id' => $auth->getAuthenticatedUser()->constructora_id,
            ]);


            $trabajador = Trabajador::with('persona', 'area', 'rendimiento')
            ->where([
                ['id' , $idTrabajador]
            ])->first();

            
            return \Response::json($trabajador, 201)->header('Location' , 'http://localhost:8000/api/trabajadores');
            
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
