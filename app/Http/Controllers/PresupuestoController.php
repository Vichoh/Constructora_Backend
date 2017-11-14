<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Presupuesto;
use App\Obra;
use App\Estado;
use JWTAuth;
use App\Http\Controllers\AuthController;

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

            Presupuesto::create($request->all());
            return \Response::json(['data' => $request->all()], 201)->header('Location' , 'http://localhost:8000/api/presupuestos');
            
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
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function presupuestoObra($obra)
    {
      $presupuestos = Presupuesto::where('obra_id', $obra); 
      return \Response::json($presupuestos, 200); 
  }
}
