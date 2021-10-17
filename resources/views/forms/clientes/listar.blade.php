@extends('layouts.app')
@section('content')

@section('title', 'Clientes')
@section('titulo', 'Clientes')
@section('ventana_t', 'Lista de clientes registrados')

@if(session('message'))
    <div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
</button><i class="fas fa-info-circle"></i> {{session('message')}}</div>
@endif

<button type="button" class="btn btn-primary btn-w btn-block" data-toggle="modal" data-target="#crear"><i class="fas fa-plus-circle"></i> Agregar nuevo cliente</button>
@include("forms.clientes.m_crear")

<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Nombre del cliente</th>
      <th>CI</th>
      <th>Género</th>
      <th>Fecha de nacimiento</th>
      <th>Teléfono</th>
      <th>Dirección</th>
      <th>Fecha de creación</th>
      <th>Editar/Eliminar</th>
    </tr>
  </thead>

  <tbody>
  @foreach($clientes as $cliente)
    <tr>
      <td>{{$cliente->nombres}} {{$cliente->apellido_p}} {{$cliente->apellido_m}}</td>
      <td>{{$cliente->ci}} {{$cliente->cid}}</td>
      <td>{{$cliente->genero}}</td>
      <td>{{$cliente->fnac}}</td>
      <td>{{$cliente->telefono}}</td>
      <td>{{$cliente->direccion}}</td>
      <td>{{$cliente->created_at}}</td>
      <td>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#editar{{$cliente->id}}"><i class="fas fa-edit"></i></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#eliminar{{$cliente->id}}"><i class="fas fa-times"></i></button>
      </td>
      @include("forms.clientes.m_editar")
      @include("forms.clientes.m_eliminar")
    </tr>
  @endforeach
  </tbody>
</table>

@endsection
