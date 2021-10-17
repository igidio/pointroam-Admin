<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class clientesController extends Controller
{
    public function listar() {
        $clientes = DB::table('clientes')->get();

        return view('forms/clientes/listar', [
            'clientes' => $clientes
        ]);
    }

    public function crear(Request $request) {
        $nombres = $request->input('nombres');
        $apellidop = $request->input('apellido_p');
        $apellidom = $request->input('apellido_m');
        $ci = $request->input('ci');
        $cid = $request->input('departamento');
        $telefono = $request->input('ntelefono');
        $direccion = $request->input('direccion');
        $correo = $request->input('correo');
        $genero = $request->input('genero');
        $fnac = $request->input('fnac');
    
    
        $choferes = DB::table('clientes')->insert(array(
          'nombres' => $nombres,
          'apellido_p' => $apellidop,
          'apellido_m' => $apellidom,
          'ci' => $ci,
          'cid' => $cid,
          'telefono' => $telefono,
          'direccion' => $direccion,
          'email' => $correo,
          'genero' => $genero,
          'fnac' => $fnac,
        ));
    
        return redirect()->route('getClientes')->with('message', 'Cliente creado correctamente');
    }
  
    public function editar(Request $request) {
        $id = $request->input('id');
        $nombres = $request->input('nombres');
        $apellidop = $request->input('apellido_p');
        $apellidom = $request->input('apellido_m');
        $ci = $request->input('ci');
        $cid = $request->input('departamento');
        $telefono = $request->input('ntelefono');
        $direccion = $request->input('direccion');
        $correo = $request->input('correo');
        $genero = $request->input('genero');
        $fnac = $request->input('fnac');
  
        $clientes = DB::table('clientes')->where('id', $id)->update(array(
            'nombres' => $nombres,
            'apellido_p' => $apellidop,
            'apellido_m' => $apellidom,
            'ci' => $ci,
            'cid' => $cid,
            'telefono' => $telefono,
            'direccion' => $direccion,
            'email' => $correo,
            'genero' => $genero,
            'fnac' => $fnac,
        ));
  
        return redirect()->route('getClientes')->with('message', 'Cliente modificado correctamente');
    }
  
      public function eliminar(Request $request) {
        $id = $request->input('id');
  
        $destinos = DB::table('clientes')->where('id', $id)->delete();
  
        return redirect()->route('getClientes')->with('message', 'Cliente eliminado correctamente');
      }
}
