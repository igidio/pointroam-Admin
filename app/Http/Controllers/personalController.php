<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//Acá definimos la base de datos
use App\Personal;

class personalController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }

  public function listar() {
    $personal = Personal::all();
    return view('forms/personal/listar', [ 'personal' => $personal ]);
    //$personal = DB::table('personal')->get();
  }

  public function nuevo(Request $request) {
    $personal = new Personal();
    $personal->nombres    = $request->input('nombres');
    $personal->apellido_p = $request->input('apellido_p');
    $personal->apellido_m = $request->input('apellido_m');
    $personal->ci         = $request->input('ci');
    $personal->cid        = $request->input('cid');
    $personal->genero     = $request->input('genero');
    $personal->fnac       = $request->input('fnac');
    $personal->telefono   = $request->input('telefono');
    $personal->direccion  = $request->input('direccion');
    $personal->id_cargo   = $request->input('id_cargo');
    $personal->save();

    /*$destinos = DB::table('personal')->insert(array(
      'nombres' => $nombres,
      'apellido_p' => $apellidop,
      'apellido_m' => $apellidom,
      'ci' => $ci,
      'cid' => $cid,
      'genero' => $genero,
      'fnac' => $fnac,
      'telefono' => $telefono,
      'direccion' => $direccion,
      'id_cargo' => $id_cargo,
    ));*/

    return redirect()->action('personalController@listar')->with('message', 'Miembro del personal creado correctamente');
  }

  public function editar(Request $request) {
    $id = $request->input('id');
    $nombres = $request->input('nombres');
    $apellidop = $request->input('apellido_p');
    $apellidom = $request->input('apellido_m');
    $ci = $request->input('ci');
    $cid = $request->input('cid');
    $genero = $request->input('genero');
    $fnac = $request->input('fnac');
    $telefono = $request->input('telefono');
    $direccion = $request->input('direccion');
    $id_cargo = $request->input('id_cargo'); 

    $destinos = DB::table('personal')->where('id', $id)->update(array(
      'nombres' => $nombres,
      'apellido_p' => $apellidop,
      'apellido_m' => $apellidom,
      'ci' => $ci,
      'cid' => $cid,
      'genero' => $genero,
      'fnac' => $fnac,
      'telefono' => $telefono,
      'direccion' => $direccion,
      'id_cargo' => $id_cargo,
    ));

    return redirect()->action('personalController@listar')->with('message', 'Miembro del personal modificado correctamente');
  }

  public function eliminar(Request $request) {
    $id = $request->input('id');

    $destinos = DB::table('personal')->where('id', $id)->delete();

    return redirect()->action('personalController@listar')->with('message', 'Miembro del personal eliminado correctamente');
  }

  // Crear usuario
  public function step1_c(){
    return view('forms.usuario.nuevo.step1');
  }
  public function step2_c(){
    return view('forms.usuario.nuevo.step2');
  }
  public function step3_c(){
    return view('forms.usuario.nuevo.step3');
  }
  public function step4_c(){
    return view('forms.usuario.nuevo.step4');
  }

  // Vincular usuario
  public function step1_v(){
    return view('forms.usuario.asociar.step1');
  }
  public function step2_v(){
    return view('forms.usuario.asociar.step2');
  }
  public function step3_v(){
    return view('forms.usuario.asociar.step3');
  }
  public function step4_v(){
    return view('forms.usuario.asociar.step4');
  }


  public function verificarUsuario(Request $request){
    $usuario = \Auth::user();
    $usuarios = DB::table('users')->get();

    $nombre = $usuario->nombreUsuario;
    $password = $usuario->password;

    $pass = Hash::check($request->input('passw'), $password);

    if ( ($pass == $password) && ($nombre == $request->input('usuario')) ) {
      if ($request->input('cerrar') == 'on') {
        session(['cerrar_v' => 'cerrar']);
      } else {
        session(['cerrar_v' => 'no_cerrar']);
      }
      
        session(['paso' => '2']);
        return view('personal.vincular', [
          'paso_v' => session('paso')
        ]);
      }

      elseif ( ($nombre == $request->input('usuario')) && ($pass != $password) ) {
        return redirect()->action('personalController@vincularPersonal')->with('message', 'La contraseña no es correcta');
      }
      else if ( ($nombre != $request->input('usuario')) && ($pass != $password) ) {
        return redirect()->action('personalController@vincularPersonal')->with('message', 'Información incorrecta');
      } else {
          return redirect()->action('personalController@vincularPersonal')->with('message', 'Información incorrecta');
      }
    
      foreach ($usuarios as $usu) {
        if ( ($usu->nombreUsuario == $request->input('usuario')) && ($usu->nombreUsuario != $nombre) ) {
        return redirect()->action('personalController@vincularPersonal')->with('message', 'El usuario debe ser el mismo que inició esta sesión');
        }
      }

    return view('forms.usuario.asociar.step4');
  }

}