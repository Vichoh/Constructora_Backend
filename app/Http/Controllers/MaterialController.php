<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Material;
use App\Rendimiento;
use App\Marca;
use JWTAuth;
use App\Http\Controllers\AuthController;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(AuthController $auth)
    {
     $materiales = Material::with('rendimiento', 'marca')
     ->where('constructora_id',$auth->getAuthenticatedUser()->constructora_id)
     ->get();
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
    public function store(Request $request, AuthController $auth)
    {
     try {

        $id = Material::insertGetId([
            'nombre' => $request->nombre,
            'valor' => $request->valor,
            'stock' => $request->stock,
            'descripcion' => $request->descripcion,
            'certificacion' => $request->certificacion,
            'observacion' => $request->observacion,
            'rendimiento_id' => $request->rendimiento_id,
            'marca_id' => $request->marca_id,
            'constructora_id' => $auth->getAuthenticatedUser()->constructora_id,
        ]);

        $material = Material::where([
            ['id', $id]
        ])->first();

        return \Response::json($material, 201)->header('Location' , 'http://localhost:8000/api/materiales');

    } catch (Exception $e) {

        \Log::info('Error al crear Material' .$e);
        return \Response::json(['created' => false ], 500);  
    }
}


    /**
     * Display the specified resource.
     *
     * @param  int 
     * @return \Illuminate\Http\Response
     */
    public function show($id, AuthController $auth)
    {
      try{
        $material = Material::with('rendimiento', 'marca')
        ->where([
            ['id' ,  $id],
            ['constructora_id',$auth->getAuthenticatedUser()->constructora_id]
        ])
        ->first(); 

        if (!isset($material)) {
            $datos = [
                'errors' => true,
                'msg' => 'No se encontro la material con ID = ' . $id,
            ];
            return \Response::json($datos, 404); 
        }

        return \Response::json($material, 200);

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
    public function update(Request $request, $id, AuthController $auth)
    {
        try{

            $material = Material::where([
                ['id' ,  $id],
                ['constructora_id',$auth->getAuthenticatedUser()->constructora_id]
            ])
            ->first(); 
            


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
    public function destroy($id, AuthController $auth)
    {

        try{
            $material = Material::where([
                ['id' ,  $id],
                ['constructora_id',$auth->getAuthenticatedUser()->constructora_id]
            ])
            ->first(); 
            if (!isset($material)) {
                return \Response::json(['material no existe'],404); 
            }
            $material->delete();
            return \Response::json('material Eliminada',200);
        }catch(\Exception $e){
            \Log::critical("Error: {$e->getCode()}, {$e->getLine()}, {$e->getMessage()}");
            return \Response::json(['Error'], 500); 
        }
    }
}
