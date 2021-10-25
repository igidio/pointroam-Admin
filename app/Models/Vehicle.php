<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $table = "camiones";
    protected $fillable = ['placa','marca','modelo','capacidad_carga','capacidad_gasolina','n_ruedas'];
}
