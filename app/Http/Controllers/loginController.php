<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
    public function registrar_chofer(Request $request) {
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
      $correo = $request->input('correo');

      $usuario = $request->input('username');
      $pass = $request->input('password');

      $existe = DB::table('users')->where('username', $usuario)->first();
      if (!empty($existe)) {
        return redirect()->action('HomeController@index')->with(['message', 'Ya existe un usuario con el mismo nombre']);
      }

      $existe2 = DB::table('users')->where('email', $correo)->first();
      if (!empty($existe2)) {
        return redirect()->action('HomeController@index')->with(['message', 'Ya existe un usuario con el mismo correo']);
      }
  
  
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
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s')
      ));

      $ultimoid = DB::table('choferes')->latest()->first()->id;

      $clientes = DB::table('users')->insert(array(
        'username' => $usuario,
        'password' => Hash::make($pass),
        'id_chofer' => $ultimoid,
        'email' => $correo,
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s'),
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s')
      ));
  
      return redirect()->action('HomeController@index')->with(['message', 'Usuario creado correctamente']);
    }

    public function registrar_cliente(Request $request) {
      $nombres = $request->input('nombres');
      $apellidop = $request->input('apellido_p');
      $apellidom = $request->input('apellido_m');
      $ci = $request->input('ci');
      $cid = $request->input('cid');
      $telefono = $request->input('telefono');
      $genero = $request->input('genero');
      $fnac = $request->input('fnac');
      $correo = $request->input('correo');
      $direccion = $request->input('direccion');

      $usuario = $request->input('username');
      $pass = $request->input('password');

      $existe = DB::table('users')->where('username', $usuario)->first();
      if (!empty($existe)) {
        return redirect()->action('HomeController@index')->with(['message', 'Ya existe un usuario con el mismo nombre']);
      }

      $existe2 = DB::table('users')->where('email', $correo)->first();
      if (!empty($existe2)) {
        return redirect()->action('HomeController@index')->with(['message', 'Ya existe un usuario con el mismo correo']);
      }
      
      $clientes = DB::table('clientes')->insert(array(
        'nombres' => $nombres,
        'apellido_p' => $apellidop,
        'apellido_m' => $apellidom,
        'ci' => $ci,
        'cid' => $cid,
        'telefono' => $telefono,
        'direccion' => $direccion,
        'genero' => $genero,
        'fnac' => $fnac,
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s')
      ));
      
      $ultimoid = DB::table('clientes')->latest()->first()->id;

      $users = DB::table('users')->insert(array(
        'username' => $usuario,
        'password' => Hash::make($pass),
        'id_cliente' => $ultimoid,
        'email' => $correo,
        "created_at" =>  date('Y-m-d H:i:s'),
        "updated_at" => date('Y-m-d H:i:s')
      ));
  
      return redirect()->action('HomeController@index')->with(['message', 'Usuario creado correctamente']);
    }
}
