<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class camionesController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function listar() {
    $camiones = DB::table('camiones')->get();

    return view('forms/camiones/listar', [
      'camiones' => $camiones
    ]);
  }

  public function nuevo(Request $request) {
    $placa = $request->input('placa');
    $marca = $request->input('marca');
    $modelo = $request->input('modelo');
    $capacidad_carga = $request->input('capacidad_carga');
    $capacidad_gasolina = $request->input('capacidad_gasolina');
    $n_ruedas = $request->input('n_ruedas');

    $camiones = DB::table('camiones')->insert(array(
      'placa' => $placa,
      'marca' => $marca,
      'modelo' => $modelo,
      'capacidad_carga' => $capacidad_carga,
      'capacidad_gasolina' => $capacidad_gasolina,
      'n_ruedas' => $n_ruedas,
    ));

    return redirect()->action('camionesController@listar')->with('message', 'Vehículo creado correctamente');
  }

  public function editar(Request $request) {
    $id = $request->input('id');
    $placa = $request->input('placa');
    $marca = $request->input('marca');
    $modelo = $request->input('modelo');
    $capacidad_carga = $request->input('capacidad_carga');
    $capacidad_gasolina = $request->input('capacidad_gasolina');
    $n_ruedas = $request->input('n_ruedas');

    $camiones = DB::table('camiones')->where('id', $id)->update(array(
      'placa' => $placa,
      'marca' => $marca,
      'modelo' => $modelo,
      'capacidad_carga' => $capacidad_carga,
      'capacidad_gasolina' => $capacidad_gasolina,
      'n_ruedas' => $n_ruedas,
    ));

    return redirect()->action('camionesController@listar')->with('message', 'Vehículo modificado correctamente');
  }

  public function eliminar(Request $request) {
    $id = $request->input('id');

    $destinos = DB::table('camiones')->where('id', $id)->delete();

    return redirect()->action('camionesController@listar')->with('message', 'Vehículo eliminado correctamente');
  }
}
