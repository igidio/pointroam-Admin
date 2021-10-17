<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class choferesController extends Controller
{
   
  	public function __construct() {
    	$this->middleware('auth');
  	}
  
  	public function listar() {
	   	$choferes = DB::table('choferes')->get();

      	return view('forms/choferes/listar', [
        	'choferes' => $choferes
      	]);
	}

	public function vista() {
		$choferes = DB::table('choferes')->get();

	   return view('forms/choferes/vista', [
		 'choferes' => $choferes
	   ]);
  }

    public function nuevo(Request $request) {
      $nombres = $request->input('nombres');
      $apellidop = $request->input('apellido_p');
      $apellidom = $request->input('apellido_m');
      $ci = $request->input('ci');
      $cid = $request->input('cid');
      $telefono = $request->input('telefono');
      $direccion = $request->input('direccion');
      $licencia = $request->input('licencia');
      $genero = $request->input('genero');
      $fnac = $request->input('fnac');
  
  
      $choferes = DB::table('choferes')->insert(array(
        'nombres' => $nombres,
        'apellido_p' => $apellidop,
        'apellido_m' => $apellidom,
        'ci' => $ci,
        'cid' => $cid,
        'telefono' => $telefono,
        'direccion' => $direccion,
        'licencia' => $licencia,
        'genero' => $genero,
        'fnac' => $fnac,
      ));
  
      return redirect()->action('choferesController@listar')->with('message', 'Chofer creado correctamente');;
    }

    public function editar(Request $request) {
      $id = $request->input('id');
      $nombres = $request->input('nombres');
      $apellidop = $request->input('apellido_p');
      $apellidom = $request->input('apellido_m');
      $ci = $request->input('ci');
      $cid = $request->input('cid');
      $telefono = $request->input('telefono');
      $direccion = $request->input('direccion');
      $licencia = $request->input('licencia');
      $genero = $request->input('genero');
      $fnac = $request->input('fnac');

      $choferes = DB::table('choferes')->where('id', $id)->update(array(
        'nombres' => $nombres,
        'apellido_p' => $apellidop,
        'apellido_m' => $apellidom,
        'ci' => $ci,
        'cid' => $cid,
        'telefono' => $telefono,
        'direccion' => $direccion,
        'licencia' => $licencia,
        'genero' => $genero,
        'fnac' => $fnac,
      ));

      return redirect()->action('choferesController@listar')->with('message', 'Chófer modificado correctamente');
    }

    public function eliminar(Request $request) {
      $id = $request->input('id');

      $destinos = DB::table('choferes')->where('id', $id)->delete();

      return redirect()->action('choferesController@listar')->with('message', 'Chófer eliminado correctamente');
    }
    
}
