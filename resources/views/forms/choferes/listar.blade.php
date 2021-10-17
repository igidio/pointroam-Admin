@extends('layouts.app')
@section('content')

@section('title', 'Choferes')
@section('titulo', 'Choferes')
@section('ventana_t', 'Lista de choferes registrados')

<!-- Boton para crear elemento -->
<button type="button" class="btn btn-primary btn-w btn-block" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-plus-circle"></i> Crear chófer</button>
@include("forms.choferes.m_crear")

<!-- Tabla de informacion -->
<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>CI</th>
      <th>Teléfono</th>
      <th>Dirección</th>
      <th>Licencia</th>
      <th>Fecha de creación</th>
      <th>Editar/Eliminar</th>
    </tr>
  </thead>

  <tbody>
  @foreach($choferes as $chofer)
    <tr>
      <td>{{$chofer->nombres}}</td>
      <td>{{$chofer->apellido_p}} {{$chofer->apellido_m}}</td>
      <td>{{$chofer->ci}} {{$chofer->cid}}</td>
      <td>{{$chofer->telefono}}</td>
      <td>{{$chofer->direccion}}</td>
      <td>{{$chofer->licencia}}</td>
      <td>{{$chofer->created_at}}</td>
    

      <td>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm_e_{{$chofer->id}}"><i class="fas fa-edit"></i></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm_d_{{$chofer->id}}"><i class="fas fa-times"></i></button>
      </td>
      @include("forms.choferes.m_modificar")
      @include("forms.choferes.m_eliminar")

</tr>
  @endforeach
  </tbody>
</table>
@endsection