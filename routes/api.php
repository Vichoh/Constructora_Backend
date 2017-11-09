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

Route::post('/login', 'AuthController@userAuth');

Route::group(['middleware' => 'jwt.auth'], function () {
	
	Route::apiResource('areas', 'AreaController');
	Route::apiResource('clientes', 'ClienteController');
	Route::apiResource('empresas', 'EmpresaController');
	Route::apiResource('formaPago', 'Forma_PagoController');
	Route::apiResource('item', 'ItemController');
	Route::apiResource('maquinarias', 'MaquinariaController');
	Route::apiResource('maquinariaObra', 'Maquinaria_ObraController');
	Route::apiResource('Material', 'MaterialController');
	Route::apiResource('materialObra', 'Material_ObraController');
	Route::apiResource('obras', 'ObraController');
	Route::apiResource('partida', 'PartidaController');
	Route::apiResource('persona', 'PersonaController');
	Route::apiResource('presupuesto', 'PresupuestoController');
	Route::apiResource('proveedor', 'ProveedorController');
	Route::apiResource('rendimiento', 'RendimientoController');
	Route::apiResource('tipoObra', 'Tipo_ObraController');
	Route::apiResource('trabajadores', 'TrabajadorController');
	Route::apiResource('trabajadorObra', 'Trabajador_ObraController');
	Route::apiResource('ubicacion', 'UbicacionController');
	Route::apiResource('usuario', 'UsuarioController');
	Route::apiResource('vendedor', 'VendedorController');
	Route::apiResource('marcas', 'MarcaController');

});