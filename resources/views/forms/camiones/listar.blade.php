@extends('layouts.app')
@section('title', 'Vehículos')
@section('content')

@section('titulo', 'Vehículos')
@section('ventana_t', 'Lista de vehículos registrados')

<!-- Boton para crear elemento -->
<button type="button" class="btn btn-primary btn-w btn-block" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-plus-circle"></i> Crear datos de camión</button>
@include("forms.camiones.m_crear")

<!-- Tabla de informacion -->
<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Placa</th>
      <th>Marca</th>
      <th>Modelo</th>
      <th>Capacidad de Carga (En Kg.)</th>
      <th>Capacidad de Gasolina (En Lt.)</th>
      <th>Número de ruedas</th>
      <th>Fecha de creación</th>
      <th>Modificar/Eliminar</th>
    </tr>
  </thead>

  <tbody>
  @foreach($camiones as $camion)
    <tr>
      <td>{{$camion->placa}}</td>
      <td>{{$camion->marca}}</td>
      <td>{{$camion->modelo}}</td>
      <td>{{$camion->capacidad_carga}} kg.</td>
      <td>{{$camion->capacidad_gasolina}} litros</td>
      <td>{{$camion->n_ruedas}} ruedas</td>
      <td>{{$camion->created_at}}</td>

<!-- Boton para modificar elemento -->
<td>
  <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm_e_{{$camion->id}}"><i class="fas fa-edit"></i></button>
  <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm_d_{{$camion->id}}"><i class="fas fa-times"></i></button>
</td>
@include("forms.camiones.m_modificar")
@include("forms.camiones.m_eliminar")



    </tr>
  @endforeach
  </tbody>
</table>
@endsection