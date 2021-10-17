<a href="{{action('pedidosController@crear')}}" class="btn btn-primary btn-block">Realizar nuevo pedido</a>

<?php $pedidos = DB::table('pedidos')->orderBy('id', 'desc')->get(); ?>

<div class="card">
  @foreach($pedidos as $pedido)
  @switch($pedido->estado)
    @case("Pendiente")        
        @php
        $color = "primary";        
        @endphp
        @break
    @case("Activo")
        @php
        $color = "success";        
        @endphp
        @break
    @case("Inactivo")
        @php
        $color = "danger"; 
        @endphp
        @break
    @case("Realizado")
        @php
        $color = "warning";        
        @endphp
        @break
    @default
        Default case...
    @endswitch
    @if($pedido->estado != "success" || $pedido->estado != "warning")
    @include('cliente/m_eliminar')
    @include('cliente/m_mod')  
    @endif


  <div class="card bg-{{$color}} mb-3">
      <div class="card-header text-white">
        {{$pedido->encabezado}}
        @if(!($pedido->estado == "success") || !($pedido->estado == "warning"))
        <button type="button" class="close" aria-label="Close" style="color: white;" data-toggle="modal" data-target="#eliminar{{$pedido->id}}">
          <span aria-hidden="true">×</span>
        </button>
        @endif
      </div>
      <div class="card-body text-white">
        <h6 class="card-title"><b>Descripción</b></h6>
        <p class="card-text">{{$pedido->descripcion}}</p>
        <?php $cli = DB::table('clientes')->where('id', '=', $pedido->id_cliente)->first(); ?>
      </div>
    <div class="card-footer">
      <div class="row">
        <div class="col-4">
          <small class="text-white">{{$pedido->created_at}}</small><br>          
        </div>
				<div class="col-8">
					<div class="text-right">
        @if(!($pedido->estado == "Activo") || !($pedido->estado == "Realizado"))
						<button class="btn btn-outline-light btn-sm" data-toggle="modal" data-target="#mod{{$pedido->id}}">Modificar información</button>
        @endif
        @if(!($pedido->estado == "Activo") || !($pedido->estado == "Realizado"))
						<a type="submit" class="btn btn-outline-light btn-sm" href="{{route('visualizar_coordenadas', ['id' => $pedido->id])}}">Visualizar / modificar ubicación</a>
        @else
            <a type="submit" class="btn btn-outline-light btn-sm" href="{{route('visualizar_coordenadas', ['id' => $pedido->id])}}">Visualizar ubicación</a>
        @endif
					</div>
				</div>
			</div>
      <div class="row">
        <div class="col-12">
          <small class="text-white">Pedido realizado por:</small>
          <small class="text-white"><b>{{$cli->nombres}} {{$cli->apellido_p}} {{$cli->apellido_m}}<b></small><br>
        </div>
      </div>

    </div>
  </div>
@endforeach