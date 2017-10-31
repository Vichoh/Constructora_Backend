<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', 'AuthController@userAuth');

Route::group(['middleware' => 'jwt.auth'], function () {
	
	Route::apiResource('area', 'AreaController');
	Route::apiResource('cliente', 'ClienteController');
	Route::apiResource('empresa', 'EmpresaController');
	Route::apiResource('formaPago', 'Forma_PagoController');
	Route::apiResource('item', 'ItemController');
	Route::apiResource('maquinaria', 'MaquinariaController');
	Route::apiResource('maquinariaObra', 'Maquinaria_ObraController');
	Route::apiResource('Material', 'MaterialController');
	Route::apiResource('materialObra', 'Material_ObraController');
	Route::apiResource('obra', 'ObraController');
	Route::apiResource('partida', 'PartidaController');
	Route::apiResource('persona', 'PersonaController');
	Route::apiResource('presupuesto', 'PresupuestoController');
	Route::apiResource('proveedor', 'ProveedorController');
	Route::apiResource('rendimiento', 'RendimientoController');
	Route::apiResource('tipoObra', 'Tipo_ObraController');
	Route::apiResource('trabajador', 'TrabajadorController');
	Route::apiResource('trabajadorObra', 'Trabajador_ObraController');
	Route::apiResource('ubicacion', 'UbicacionController');
	Route::apiResource('usuario', 'UsuarioController');
	Route::apiResource('vendedor', 'VendedorController');

});