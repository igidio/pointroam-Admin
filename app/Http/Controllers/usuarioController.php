<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;

class usuarioController extends Controller
{
  public function __construct() {
	$this->middleware('auth');
  }

  public function getInfo() {
	if (!empty(auth()->user()->id_personal)){
		$usuario = DB::table('personal')->where('id', auth()->user()->id_personal)->first();
		$cargos = DB::table('cargos')->where('id', $usuario->id_cargo)->first();
		
		$nombres = $usuario->nombres;
		$apellido_p = $usuario->apellido_p;
		$apellido_m = $usuario->apellido_m;
		$cargo = $cargos->nombre;
		$direccion = $usuario->direccion;
		$telefono = $usuario->telefono;
		$genero = $usuario->genero;
		$ci = $usuario->ci;
		$cid = $usuario->cid;
		$fnac = $usuario->fnac;

		return view('usuario/info', [
			'nombres' => $nombres,
			'apellido_p' => $apellido_p,
			'apellido_m' => $apellido_m,
		  	'usuario' => $usuario,
		  	'cargo' => $cargo,
		  	'direccion' => $direccion,
		  	'telefono' => $telefono,
		  	'genero' => $genero,
		  	'ci' => $ci,
		  	'cid' => $cid,
		  	'fnac' => $fnac
		]);
	
	} else if (!empty(auth()->user()->id_cliente)){
		$usuario = DB::table('clientes')->where('id', auth()->user()->id_cliente)->first();
		$cargo = 'Cliente';

		$nombres = $usuario->nombres;
		$apellido_p = $usuario->apellido_p;
		$apellido_m = $usuario->apellido_m;
		$direccion = $usuario->direccion;
		$telefono = $usuario->telefono;
		$genero = $usuario->genero;
		$ci = $usuario->ci;
		$cid = $usuario->cid;
		$fnac = $usuario->fnac;

		return view('usuario/info', [
			'nombres' => $nombres,
			'apellido_p' => $apellido_p,
			'apellido_m' => $apellido_m,
		  	'usuario' => $usuario,
		  	'cargo' => $cargo,
		  	'direccion' => $direccion,
		  	'telefono' => $telefono,
		  	'genero' => $genero,
		  	'ci' => $ci,
		  	'cid' => $cid,
			'fnac' => $fnac
		]);
	} else if (!empty(auth()->user()->id_chofer)){
		$usuario = DB::table('choferes')->where('id', auth()->user()->id_chofer)->first();
		$cargo = 'Chófer';

		$nombres = $usuario->nombres;
		$apellido_p = $usuario->apellido_p;
		$apellido_m = $usuario->apellido_m;
		$direccion = $usuario->direccion;
		$telefono = $usuario->telefono;
		$genero = $usuario->genero;
		$ci = $usuario->ci;
		$cid = $usuario->cid;
		$fnac = $usuario->fnac;
		$licencia = $usuario->licencia;

		return view('usuario/info', [
			'nombres' => $nombres,
			'apellido_p' => $apellido_p,
			'apellido_m' => $apellido_m,
		  	'usuario' => $usuario,
		  	'cargo' => $cargo,
		  	'direccion' => $direccion,
		  	'telefono' => $telefono,
		  	'genero' => $genero,
		  	'ci' => $ci,
		  	'cid' => $cid,
			'fnac' => $fnac,
			'licencia' => $licencia
		]);
	}
}

public function modificar_infopersonal(Request $request){
	//Conseguir usuario identificado
	if (!empty(auth()->user()->id_personal)){		
		$usuario = \Auth::user();
		$id = $usuario->id_personal;
		$nombres = $request->input('nombre');
		$apellido_p = $request->input('apellido_p');
		$apellido_m = $request->input('apellido_m');
		$direccion = $request->input('direccion');
		$telefono = $request->input('ntelefono');
		$genero = $request->input('genero');
		$ci = $request->input('ci');
		$cid = $request->input('cid');
		$fnac = $request->input('fnac');

		$personal = DB::table('personal')->where('id', $id)->update(array(
			//Recoger datos del formulario
			'nombres' => $nombres,
			'apellido_p' => $apellido_p,
			'apellido_m' => $apellido_m,
			'direccion' => $direccion,
			'genero' => $genero,
			'fnac' => $fnac,
			'ci' => $ci,
			'cid' => $cid,
			'telefono' => $telefono,
			"updated_at" => date('Y-m-d H:i:s')
		));
		$usuario_mod = DB::table('users')->where('id', \Auth::user()->id)->update(array(
			'email' => $request->input('correo')
		));
	} else if (!empty(auth()->user()->id_cliente)) {
		$usuario = \Auth::user();
		$id = $usuario->id_cliente;
		
		$nombres = $request->input('nombre');
		$apellido_p = $request->input('apellido_p');
		$apellido_m = $request->input('apellido_m');
		$direccion = $request->input('direccion');
		$telefono = $request->input('ntelefono');
		$genero = $request->input('genero');
		$ci = $request->input('ci');
		$cid = $request->input('cid');
		$fnac = $request->input('fnac');
		
		$personal = DB::table('clientes')->where('id', $id)->update(array(
			//Recoger datos del formulario
			'nombres' => $nombres,
			'apellido_p' => $apellido_p,
			'apellido_m' => $apellido_m,
			'direccion' => $direccion,
			'genero' => $genero,
			'fnac' => $fnac,
			'ci' => $ci,
			'cid' => $cid,
			'telefono' => $telefono,
			"updated_at" => date('Y-m-d H:i:s')
		));	
		$usuario_mod = DB::table('users')->where('id', \Auth::user()->id)->update(array(
			'email' => $request->input('correo')
		));
	} else if (!empty(auth()->user()->id_chofer)){
		$usuario = \Auth::user();
		$id = $usuario->id_chofer;
		
		$nombres = $request->input('nombre');
		$apellido_p = $request->input('apellido_p');
		$apellido_m = $request->input('apellido_m');
		$direccion = $request->input('direccion');
		$telefono = $request->input('ntelefono');
		$genero = $request->input('genero');
		$ci = $request->input('ci');
		$cid = $request->input('cid');
		$fnac = $request->input('fnac');
		$licencia = $request->input('licencia');
		
		$personal = DB::table('choferes')->where('id', $id)->update(array(
			//Recoger datos del formulario
			'nombres' => $nombres,
			'apellido_p' => $apellido_p,
			'apellido_m' => $apellido_m,
			'direccion' => $direccion,
			'genero' => $genero,
			'fnac' => $fnac,
			'ci' => $ci,
			'cid' => $cid,
			'telefono' => $telefono,
			'licencia' => $licencia,
			"updated_at" => date('Y-m-d H:i:s')
		));
	
		$usuario_mod = DB::table('users')->where('id', \Auth::user()->id)->update(array(
			'email' => $request->input('correo')
		));
	}
	return redirect()->route('getUsuario')->with(['message'=>'Información del usuario modificado correctamente']);
  }

  public function modificar_password(Request $request){
	$usuario = \Auth::user();
	$id = $usuario->id;

	$usuario_mod = DB::table('users')->where('id', $id)
	->update(array(
	  'password' =>  Hash::make($request->input('password1')),
	  'updated_at' => date('Y-m-d H:i:s')
	));

	return redirect()->route('getUsuario')->with(['message'=>'Contraseña modificada correctamente']);
  }

  	public function modificar_username(Request $request){
		$usuario = \Auth::user();
		$id = $usuario->id;
 
		$users = DB::table('users')->get();
 
		foreach ($users as $user) {
	  		if ($request->input('nombre_us') == $user->username) {
				return redirect()->route('getUsuario')->with(['message'=>'Nombre de usuario no valido, ya hay un usuario con el nombre']);
	  		}
		}
 
		$usuario_mod = DB::table('users')->where('id', $id)->update(array(
	  		'username' => $request->input('nombre_us')
		));
 
		return redirect()->route('getUsuario')->with(['message'=>'Nombre de usuario modificado correctamente' . $request->input('nombre_us')]);
   	}

   	public function actualizarimagen(Request $request){
		$usuario = \Auth::user();
		$id = $usuario->id;

		//Subir imagen
		$image_path = $request->file('foto');
		
		if($image_path) {
	  		//Poner nombre único
	  		$image_path_name = time().$image_path->getClientOriginalName();

			//Guardar en la carpeta storage
	  		Storage::disk('users')->put($image_path_name, File::get($image_path));
		}
	
		$imagen = DB::table('users')->where('id', $id)->update(array(
	  		'imagen' =>  $image_path_name
		));

		return redirect()->route('getUsuario')->with(['message'=>'Imagen del usuario actualizado correctamente']);
	}
	   
	public function getImage($filename) {
		$file = Storage::disk('users')->get($filename);
		return new Response($file, 200);
	}

}
