<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class estadisticasController extends Controller
{
  public function __construct() {
    $this->middleware('auth');
  }
  
  public function getInfo() {
      //$personal = DB::table('personal')->get();

      return view('charts/main', [
        //'personal' => $personal
      ]);
    }
}
