<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;
use App\Http\Resources\VehicleResource;
use App\Http\Requests\VehiclesRequest;

class VehiclesController extends Controller
{
    public function index(){
        //return Vehicle::all();
        return VehicleResource::collection(Vehicle::all());
    }

    /*public function store(Request $request){
        $vehicle = Vehicle::create($request->all());
        return new Vehicle( $vehicle );
    }*/
    public function store(VehiclesRequest $request){
        //alert("Funciona");
        alert("hola");
        $vehicle = $request->all();
        return new Vehicle( $vehicle );
    }
}
