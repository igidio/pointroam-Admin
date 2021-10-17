@extends('layouts.app')
@section('content')

@section('title', 'Personal')
@section('titulo', 'Personal')
@section('ventana_t', 'Lista de miembros del personal')

<button type="button" class="btn btn-primary btn-w btn-block" data-toggle="modal" data-target=".bs-example-modal-sm"><i class="fas fa-plus-circle"></i> Crear miembro del personal</button>
@include("forms.personal.m_crear")

<table id="datatable" class="table table-striped table-bordered" style="width:100%">
  <thead>
    <tr>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>CI</th>
      <th>Teléfono</th>
      <th>Dirección</th>
      <th>Fecha de creación</th>
      <th>Cargo</th>
      <th>Acceso al sistema</th>
      <th>Editar/Eliminar</th>
    </tr>
  </thead>

  <tbody>
  @foreach($personal as $per)
    <tr>
      <td>{{$per->nombres}}</td>
      <td>{{$per->apellido_p}} {{$per->apellido_m}}</td>
      <td>{{$per->ci}}</td>
      <td>{{$per->telefono}}</td>
      <td>{{$per->direccion}}</td>
      <?php $cargo_u = DB::table('cargos')->where('id', '=', $per->id_cargo)->first() ?>
      <td>{{$per->created_at}}</td>
      <td>{{$cargo_u->nombre}}</td>
      <td>
        <i class="fas fa-check-circle" style="color: green; font-size: 20px;"></i>
        <i class="fas fa-minus-circle" style="color: grey; font-size: 20px;"></i>
        <button type="button" class="btn btn-round btn-success">Conceder</button>
      </td>
      <td>
        <button type="button" class="btn btn-warning" data-toggle="modal" data-target=".bs-example-modal-sm_e_{{$per->id}}"><i class="fas fa-edit"></i></button>
        <button type="button" class="btn btn-danger" data-toggle="modal" data-target=".bs-example-modal-sm_d_{{$per->id}}"><i class="fas fa-times"></i></button>
      </td>
      @include("forms.personal.m_modificar")
      @include("forms.personal.m_eliminar")
    </tr>
  @endforeach
  </tbody>
</table>
@endsection