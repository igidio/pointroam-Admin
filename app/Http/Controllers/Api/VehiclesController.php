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

    /** 
     * Sotre a newly created resource in storage.
     * 
        * @param \Illuminate\Http\Request $request
        * @return \Illuminate\Http\Response 
    */
    public function store(Request $request){
        //alert("Funciona");
        Vehicle::create($request->all());
        //$vehicle = $request->all();
        //return new Vehicle( $vehicle );
        return (['message' => "Actualizado"]);
    }

    public function update(Request $request, Vehicle $vehicle){
        $vehicle->fill($request->post())->save();
        //$vehicle->update($request->validated())
    }

    public function destroy(Vehicle $vehicle){
        $vehicle->delete();
    }
}
