<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class destinosController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function listar() {
    $destinos = DB::table('destinos')->get();

    return view('forms/destinos/listar', [
      'destinos' => $destinos
    ]);
  }
  
  // Nuevo elemento de destinos
  public function nuevo(Request $request) {
    $nombre = $request->input('nombre');
    $direccion = $request->input('direccion');
    $provincia = $request->input('provincia');
    $departamento = 'La Paz';


    $destinos = DB::table('destinos')->insert(array(
      'nombre' => $nombre,
      'direccion' => $direccion,
      'provincia' => $provincia,
      'departamento' => $departamento
    ));
  
    return redirect()->action('destinosController@listar')->with('message', 'Destino creado correctamente');
  }

  // Editar elemento de destinos
  public function editar(Request $request) {
    $id = $request->input('id');
    $nombre = $request->input('nombre');
    $direccion = $request->input('direccion');
    $provincia = $request->input('provincia');
    $departamento = 'La Paz';

    $destinos = DB::table('destinos')->where('id', $id)->update(array(
      'nombre' => $nombre,
      'direccion' => $direccion,
      'provincia' => $provincia,
      'departamento' => $departamento
    ));

    return redirect()->action('destinosController@listar')->with('message', 'Destino modificado correctamente');
  }

  //Eliminar elemento de destinos
  public function eliminar(Request $request) {
    $id = $request->input('id');

    $destinos = DB::table('destinos')->where('id', $id)->delete();

    return redirect()->action('destinosController@listar')->with('message', 'Destino eliminado correctamente');
  }

  //Ver coordenadas de destinos
  public function coordenadas($id) {
    $destinos = DB::table('destinos')->where('id', $id)->first();

    if (empty($destinos)) {
      return redirect()->action('destinosController@listar')->with('message', 'Error: destino no existe');
    }

    $latitud = $destinos->c_latitud;
    $longitud = $destinos->c_longitud;
    return view('forms/destinos/coordenadas', [
      'id' => $id,
      'latitud' => $latitud,
      'longitud' => $longitud
    ]);
  }

  //Definir coordenadas
  public function setCoordenadas(Request $request) {
    $id = $request->input('id');
    $latitud = $request->input('latitud');
    $longitud = $request->input('longitud');

    $destinos = DB::table('destinos')->where('id', $id)->update(array(
      'c_longitud' => $longitud,
      'c_latitud' => $latitud,
    ));

    return redirect()->action('destinosController@listar')->with('message', 'Coordenadas de destino establecidas correctamente');
  }

}
