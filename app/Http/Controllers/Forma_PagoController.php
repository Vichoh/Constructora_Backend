<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Forma_Pago;

class Forma_PagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pagos = Forma_Pago::get();
        return \Response::json($pagos, 200);
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
            $id = Forma_Pago::insertGetId([
                'detalle' => $request->detalle,
            ]);
           
            $forma_pago = Forma_Pago::where([
                ['id', $id],
            ])->first();
            return \Response::json($forma_pago, 201)->header('Location' , 'http://localhost:8000/api/areas');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Formas de pago' .$e);
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
            $pago = Forma_Pago::find($id); 

            if (!isset($pago)) {
                $datos = [
                    'errors' => true,
                    'msg' => 'No se encontro la Formas de pago con ID = ' . $id,
                ];
                return \Response::json($datos, 404); 
            }

            return \Response::json($pago, 200);

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

        $pago = Forma_Pago::find($id);

        if (isset($pago)) {

            $pago->update($request->all());
            return \Response::json($pago, 200);

        }else{

            return \Response::json(['error' => 'No se encontro la forma de pago'], 404);

        }

    }catch(\Exception $e){

        \Log::info('Error al actualizar la forma de pago'. $e);
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
            $pago = Forma_Pago::find($id);
            if (!isset($pago)) {
                return \Response::json(['Forma de pago no existe'],404); 
            }
            $pago->delete();
            return \Response::json('Forma  de pago Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
