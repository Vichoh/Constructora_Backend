<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Partida;
use JWTAuth;
use App\Http\Controllers\AuthController;

class PartidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
        $partidas = Partida::select('partidas.*')
        ->with('presupuesto')
        ->join('presupuestos', 'partidas.presupuesto_id' , '=', 'presupuestos.id')
        ->join('obras' , 'presupuestos.obra_id' , '=', 'obras.id')
        ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
        ->get();
        return \Response::json($partidas, 200); 
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

            Partida::create($request->all());
            return \Response::json(['data' => $request->all()], 201)->header('Location' , 'http://localhost:8000/api/partidas');
            
        } catch (Exception $e) {
            \Log::info('Error al crear Partida' .$e);
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
         try{

            $partida = Partida::find($id);

            if (isset($partida)) {

                $partida->update($request->all());
                return \Response::json($partida, 200);

            }else{

                return \Response::json(['error' => 'No se encontro el partida'], 404);

            }
        
        }catch(\Exception $e){

            \Log::info('Error al actualizar el partida'. $e);
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
            $partida = Partida::find($id);
            if (!isset($partida)) {
                return \Response::json(['Partida no existe'],404); 
            }
            $partida->delete();
            return \Response::json('Partida Eliminado',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }

    public function partidasPresupuesto ($presupuesto){
        $partidas = Partida::where('presupuesto_id', $presupuesto)->get();
        return \Response::json($partidas, 200); 
    }

    public function partidasObra ($obra){
        $partidas = Partida::where('presupuesto_id', $presupuesto)->get();
        return \Response::json($partidas, 200); 
    }
}
