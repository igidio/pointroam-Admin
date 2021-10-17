@extends('layouts.app')
@section('content')

@section('title', 'Destinos')
@section('titulo', 'Destinos')
@section('ventana_t', 'Lista de destinos registrados')

@if(empty(Auth::user()->username))
  {{'No estas logeado'}}
@else
  {{'Estás logeado'}}
@endif

<button type="button" class="btn btn-primary btn-w btn-block" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-plus-circle"></i> Crear nuevo destino</button>
@include("forms.destinos.m_crear")

<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Nombre del destino</th>
      <th>Coordenada</th>
      <th>Dirección</th>
      <th>Provincia</th>
      <th>Departamento</th>
      <th>Fecha de creación</th>
      <th>Editar/Eliminar</th>
    </tr>
  </thead>

  <tbody>
  @foreach($destinos as $destino)
    <tr>
      <td>{{$destino->nombre}}</td>
      <td> @if ($destino->c_latitud && $destino->c_longitud) {{$destino->c_latitud}} {{$destino->c_longitud}} <a href="{{ action('destinosController@coordenadas', ['id' => $destino->id]) }}">(Cambiar)</a> @else <a href="{{ action('destinosController@coordenadas', ['id' => $destino->id]) }}">(Definir)</a> @endif </td>
      <td>{{$destino->direccion}}</td>
      <?php $provincia_u = DB::table('provincias')->where('id', '=', $destino->provincia)->first() ?>
      <td>{{$provincia_u->nombre}}</td>
      <td>{{$destino->departamento}}</td>
      <td>{{$destino->created_at}}</td>
      <td>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm_e_{{$destino->id}}"><i class="fas fa-edit"></i></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm_d_{{$destino->id}}"><i class="fas fa-times"></i></button>
      </td>
      @include("forms.destinos.m_modificar")
      @include("forms.destinos.m_eliminar")
    </tr>
  @endforeach
  </tbody>
</table>
@endsection