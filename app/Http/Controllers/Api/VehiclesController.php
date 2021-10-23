<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vehicle;

class VehiclesController extends Controller
{
    public function index(){
        //return VehicleResource::collection(resource: Vehicle)
        return Vehicle::all();
    }
    /*public function store(VehiclesRequest $request){
        $vehicle = Vehicle::create($request->validated());
        return new VehicleResource( resource: $vehicle );
    }*/
}
