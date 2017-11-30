<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection as Collection;
use App\Presupuesto;
use App\Obra;
use App\Estado;
use JWTAuth;
use App\Http\Controllers\AuthController;
use Carbon\Carbon;

class PresupuestoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
        $presupuestos = Presupuesto::select('presupuestos.*')
        ->with('obra', 'forma_pago', 'estado')
        ->join('obras' , 'presupuestos.obra_id' , '=', 'obras.id')
        ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
        ->get();
        return \Response::json($presupuestos, 200); 
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

            $id = Presupuesto::insertGetId([
                'vigencia' => $request->vigencia,
                'descripcion' => $request->descripcion,
                'fecha_envio' => Carbon::createFromDate(2012, 1, 1, 'America/Santiago'),
                'periodo_control' => $request->periodo_control,
                'obra_id' => $request->obra_id,
                'forma_pago_id' => $request->forma_pago_id,
                'estado_id' => $request->estado_id,
            ]);

            $presupuestos = Presupuesto::with('obra', 'forma_pago', 'estado')
            ->where('id', $id)
            ->first();

            return \Response::json($presupuestos, 201)->header('Location' , 'http://localhost:8000/api/presupuestos');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Presupuesto' .$e);
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


            $presupuesto = Presupuesto::select('presupuestos.*')
            ->with('obra', 'forma_pago', 'estado')
           // ->join('obras' , 'presupuestos.obra_id' , '=', 'obras.id')
           // ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
            ->where('id', $id)
            ->first(); 

            if (!isset($presupuesto)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro el presupuesto con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($presupuesto, 200);

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
    public function update(Request $request, $id)
    {
        try{

            $presupuesto = Presupuesto::find($id);

            if (isset($presupuesto)) {

                $presupuesto->update($request->all());
                return \Response::json($presupuesto, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el presupuesto'], 404);

            }
        
        }catch(\Exception $e){

            \Log::info('Error al actualizar el presupuesto'. $e);
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
            $presupuesto = Presupuesto::find($id);
            if (!isset($presupuesto)) {
                return \Response::json(['Presupuesto no existe'],404); 
            }
            $presupuesto->delete();
            return \Response::json('Presupuesto Eliminado',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }


    public function presupuestoObra($obra)
    {
      $presupuestos = Presupuesto::where('obra_id', $obra)->with('obra', 'forma_pago', 'estado')->get(); 
      return \Response::json($presupuesto, 200); 
  }



    public function exportPresupuestoExcel ($presupuesto_id) {


      \Excel::create('Presupuesto', function($excel) use ($presupuesto_id) { 

            $excel->sheet('presupuesto ', function($sheet) use ($presupuesto_id) {

                  $presupuesto = Presupuesto::select('presupuestos.*')
                    ->with('obra', 'forma_pago', 'estado')
                   // ->join('obras' , 'presupuestos.obra_id' , '=', 'obras.id')
                   // ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
                    ->where('id', $presupuesto_id)
                    ->first(); 


                $sheet->row(1, [ null, null , null,  'OBRA']);
                $sheet->row(3, [ null, null ,  'Obra: ', $presupuesto->obra->nombre, null, 'Fecha: ', $presupuesto->obra->fecha]);
                $sheet->row(4, [null, null, 'Ubicacion: ', $presupuesto->obra->direccion]);
                $sheet->row(5, [null, null, 'Cliente: ', $presupuesto->obra->cliente->empresa->razon_social, null, 'Fono: ', $presupuesto->obra->cliente->empresa->telefono]);
                $sheet->row(7, [null, null, null , 'PRESUPUESTO']);
                $sheet->row(9, [null, null, 'Codigo: ', $presupuesto->codigo, null, 'Vigencia: ', $presupuesto->vigencia]);
                $sheet->row(10, [null, null, 'Descripción: ', $presupuesto->descripcion]);
                $sheet->row(11, [null, null, 'Periodo Control: ', $presupuesto->periodo_control, null, 'Fecha de envio: ', $presupuesto->fecha_envio]);
               

            });

        })->export('xls');
    }


    public function exportPresupuestoPDF ($presupuesto_id) {


      \Excel::create('Presupuesto', function($excel) use ($presupuesto_id) { 

            $excel->sheet('presupuesto ', function($sheet) use ($presupuesto_id) {

                  $presupuesto = Presupuesto::select('presupuestos.*')
                    ->with('obra', 'forma_pago', 'estado')
                   // ->join('obras' , 'presupuestos.obra_id' , '=', 'obras.id')
                   // ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
                    ->where('id', $presupuesto_id)
                    ->first(); 


                $sheet->row(1, [ null, null , null,  'OBRA']);
                $sheet->row(3, [ null, null ,  'Obra: ', $presupuesto->obra->nombre, null, 'Fecha: ', $presupuesto->obra->fecha]);
                $sheet->row(4, [null, null, 'Ubicacion: ', $presupuesto->obra->direccion]);
                $sheet->row(5, [null, null, 'Cliente: ', $presupuesto->obra->cliente->empresa->razon_social, null, 'Fono: ', $presupuesto->obra->cliente->empresa->telefono]);
                $sheet->row(7, [null, null, null , 'PRESUPUESTO']);
                $sheet->row(9, [null, null, 'Codigo: ', $presupuesto->codigo, null, 'Vigencia: ', $presupuesto->vigencia]);
                $sheet->row(10, [null, null, 'Descripción: ', $presupuesto->descripcion]);
                $sheet->row(11, [null, null, 'Periodo Control: ', $presupuesto->periodo_control, null, 'Fecha de envio: ', $presupuesto->fecha_envio]);
               

            });

        })->export('pdf');
    }
    
}
