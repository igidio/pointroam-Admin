<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pedidosController extends Controller
{
    public function listar() {
        $pedidos = DB::table('pedidos')->get();

        return view('forms/pedidos/listar', [
            'pedidos' => $pedidos
        ]);
    }

    public function crear() {        
        return view('cliente/crear_pedido');
    }

    public function verrr() {
        return view('chofer/ubicaciones1');
    }

    public function visualizar_coord($id, Request $request) {
        $pedidos = DB::table('pedidos')->where('id', '=', $id)->first();

        if ($pedidos->id_cliente != auth()->user()->id_cliente){
            return redirect()->route('home')->with('message', 'No tiene permiso para ver esto');   
        } else {
            if ($pedidos->estado == "Activo" || $pedidos->estado == "Realizado" ){
                $editable = false;
            } else {
                $editable = true;
            }
            return view('cliente/visualizar_pedido', [
                'pedidos' => $pedidos,
                'latitud' => $pedidos->latitud,
                'longitud' => $pedidos->longitud,
                'editable' => $editable
            ]);
        }
    }

    public function setPedido(Request $request) {        
        $latitud = $request->input('latitud');
		$longitud = $request->input('longitud');
		$encabezado = $request->input('titulo');
        $descripcion = $request->input('descripcion');
        $id = $request->input('id');
        
        $personal = DB::table('pedidos')->insert(array(
			'latitud' => $latitud,
			'longitud' => $longitud,
			'encabezado' => $encabezado,
            'descripcion' => $descripcion,
            'id_cliente' => $id,
            'estado' => 'Pendiente',
            "created_at" => date('Y-m-d H:i:s'),
			"updated_at" => date('Y-m-d H:i:s')
        ));
        
        return redirect()->route('home')->with('message', 'Pedido definido correctamente');
    }

    public function setCoordenadas(Request $request) {
        $latitud = $request->input('latitud');
		$longitud = $request->input('longitud');
        $id = $request->input('id');
        
        $personal = DB::table('pedidos')->where('id', $id)->update(array(
			'latitud' => $latitud,
			'longitud' => $longitud,
			"updated_at" => date('Y-m-d H:i:s')
        ));	        
        return redirect()->route('home')->with('message', 'Ubicación de pedido reestablecido correctamente');
    }

    public function realizar(Request $request) {
        $ubicacion = $request->input('ubicacion');
        
        $personal = DB::table('pedidos')->where('id', $ubicacion)->update(array(
			'estado' => 'Realizado',
			"updated_at" => date('Y-m-d H:i:s')
        ));	        
        return redirect()->route('home')->with('message', 'Tramo marcado como completado correctamente');
    }

    public function modPedido(Request $request){
        $encabezado = $request->input('titulo');
        $descripcion = $request->input('descripcion');
        $id = $request->input('id');

        $personal = DB::table('pedidos')->where('id', $id)->update(array(
			'encabezado' => $encabezado,
            'descripcion' => $descripcion,
			"updated_at" => date('Y-m-d H:i:s')
        ));
        return redirect()->route('home')->with('message', 'Datos de pedido modificados correctamente');
    }

    public function eliminarPedido(Request $request){
        $id = $request->input('id');

        $personal = DB::table('pedidos')->where('id', $id)->delete();
        return redirect()->route('home')->with('message', 'Pedido eliminado correctamente');
    }
}
