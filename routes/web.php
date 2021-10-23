<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

//Camiones
Route::group(['prefix'=>'transporte/vehicles'], function(){
    Route::get('/', 'VehiclesController@listar')->name('listarCamiones');
    Route::post('/crear', 'VehiclesController@nuevo')->name('listarCamionesN');
    Route::post('/editar', 'VehiclesController@editar')->name('listarCamionesM');
    Route::post('/eliminar', 'VehiclesController@eliminar')->name('listarCamionesE');
});

//Chóferes
Route::group(['prefix'=>'transporte/choferes'], function(){
    Route::get('/', 'choferesController@listar')->name('listarChoferes');
    Route::post('/crear', 'choferesController@nuevo');
    Route::post('/editar', 'choferesController@editar');
    Route::post('/eliminar', 'choferesController@eliminar');

    Route::get('/vista', 'choferesController@vista')->name('vistaChoferes');
});

//Destino
Route::group(['prefix'=>'mapa/destino'], function(){
    Route::get('/', 'destinosController@listar')->name('listarDestinos');
    Route::post('/crear', 'destinosController@nuevo')->name('listarDestinosN');
    Route::post('/editar', 'destinosController@editar')->name('listarDestinosM');
    Route::post('/eliminar', 'destinosController@eliminar')->name('listarDestinosE');
    Route::get('/coordenadas/{id}', 'destinosController@coordenadas')->name('getCoordenadas');
    Route::post('/coordenadas_publicar', 'destinosController@setCoordenadas');
});

//Personal
Route::group(['prefix'=>'mapa/personal'], function(){
    Route::get('mapa/personal', 'personalController@listar')->name('listarPersonal');
    Route::post('mapa/personal/crear', 'personalController@nuevo')->name('listarPersonalN');
    Route::post('mapa/personal/editar', 'personalController@editar')->name('listarPersonalM');
    Route::post('mapa/personal/eliminar', 'personalController@eliminar')->name('listarPersonalE');
});

//Clientes
Route::group(['prefix'=>'clientes'], function(){
    Route::get('/', 'clientesController@listar')->name('getClientes');
    Route::post('/crear', 'clientesController@crear');
    Route::post('/editar', 'clientesController@editar');
    Route::post('/eliminar', 'clientesController@eliminar');
});

//Pedidos
Route::group(['prefix'=>'pedido'], function(){
    Route::get('/', 'pedidosController@listar')->name('getPedidos');
    Route::post('/crear', 'pedidosController@crear');
    Route::post('/editar', 'pedidosController@editar');
    Route::post('/eliminar', 'pedidosController@eliminar');
});

//Crear usuario desde cero
Route::group(['prefix'=>'usuario/crear/'], function(){
    Route::get('paso1', 'personalController@step1_c')->name('paso1c');
    Route::get('paso2', 'personalController@step2_c')->name('paso2c');
    Route::get('paso3', 'personalController@step3_c')->name('paso3c');
    Route::get('paso4', 'personalController@step4_c')->name('paso4c');
});
//Vincular usuario
Route::group(['prefix'=>'usuario/vincular/'], function(){
    Route::get('paso1', 'personalController@step1_v')->name('paso1v');
    Route::get('paso2', 'personalController@step2_v')->name('paso2v');
    Route::get('paso3', 'personalController@step3_v')->name('paso3v');
    Route::get('paso4', 'personalController@step4_v')->name('paso4v');
});

// Información del usuario
Route::get('usuario/', 'usuarioController@getInfo')->name('getUsuario');
Route::post('usuario/modificar_personal', 'usuarioController@modificar_infopersonal');
Route::post('usuario/modificar_password', 'usuarioController@modificar_password');
Route::post('usuario/modificar_username', 'usuarioController@modificar_username');
Route::post('usuario/actualizarimagen', 'usuarioController@actualizarimagen');

//Imagen
Route::get('/avatar/{filename}', 'usuarioController@getImage')->name('avatar');

// Datos estadísticos
Route::get('datos/', 'estadisticasController@getInfo')->name('getInfo');

//Registrar usuario
Route::post('regchofer', 'loginController@registrar_chofer');
Route::post('regcliente', 'loginController@registrar_cliente');

Route::get('generar_pedido', 'pedidosController@crear');
Route::get('visualizar_coord/{id}', 'pedidosController@visualizar_coord')->name('visualizar_coordenadas');
Route::post('pedidoSet', 'pedidosController@setPedido');
Route::post('pedidoCoord', 'pedidosController@setCoordenadas');
Route::post('modPedido', 'pedidosController@modPedido');
Route::post('eliminarPedido', 'pedidosController@eliminarPedido');
Route::get('verrr', 'pedidosController@verrr');
Route::post('realizar', 'pedidosController@realizar');