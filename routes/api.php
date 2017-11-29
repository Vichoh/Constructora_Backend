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
Route::get('Presupuesto/exportExcel/{presupuesto_id}', 'PresupuestoController@exportPresupuestoExcel');
Route::get('Presupuesto/exportPDF/{presupuesto_id}', 'PresupuestoController@exportPresupuestoPDF');

Route::group(array('prefix' => 'v1' ,'middleware' => ['jwt.auth']), function () {
	
	Route::apiResource('areas', 'AreaController');
	Route::apiResource('clientes', 'ClienteController');
	Route::apiResource('empresas', 'EmpresaController');
	Route::apiResource('formasPago', 'Forma_PagoController');
	Route::apiResource('items', 'ItemController');
	Route::apiResource('maquinarias', 'MaquinariaController');
	Route::apiResource('maquinariasObra', 'Maquinaria_ObraController');
	Route::apiResource('materiales', 'MaterialController');
	Route::apiResource('materialesObra', 'Material_ObraController');
	Route::apiResource('obras', 'ObraController');
	Route::apiResource('partidas', 'PartidaController');
	Route::apiResource('personas', 'PersonaController');
	Route::apiResource('presupuestos', 'PresupuestoController');
	Route::apiResource('proveedores', 'ProveedorController');
	Route::apiResource('rendimientos', 'RendimientoController');
	Route::apiResource('tiposObra', 'Tipo_ObraController');
	Route::apiResource('trabajadores', 'TrabajadorController');
	Route::apiResource('trabajadoresObra', 'Trabajador_ObraController');
	Route::apiResource('ubicaciones', 'UbicacionController');
	Route::apiResource('usuarios', 'UsuarioController');
	Route::apiResource('vendedores', 'VendedorController');
	Route::apiResource('marcas', 'MarcaController');
	Route::apiResource('estados', 'EstadoController');
	Route::apiResource('modelos', 'ModeloController');

	Route::get('obras/{obra}/presupuestos' , 'PresupuestoController@presupuestoObra');

});