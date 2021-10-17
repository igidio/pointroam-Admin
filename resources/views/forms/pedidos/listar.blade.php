@extends('layouts.app')

@section('content')

<div class="breadcrumbs">
  <div class="breadcrumbs-inner">
    <div class="row m-0">
      <div class="col-sm-4">
        <div class="page-header float-left">
          <div class="page-title">
            <h1>Vecinos</h1>
          </div>
        </div>
      </div>
      <div class="col-sm-8">
        <div class="page-header float-right">
          <div class="page-title">
            <ol class="breadcrumb text-right">
              <li><a href="http://digicorp.test/home">Inicio</a></li>
              <li class="active">Vecinos</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>

<select class="js-example-basic-multiple" name="state">
  <option value="AL">Alabama</option>
    ...
  <option value="WY">Wyoming</option>
</select>

<script>$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});</script>


@if(session('message'))
	<div class="alert alert-warning alert-dismissible" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
</button><i class="fas fa-info-circle"></i> {{session('message')}}</div>
@endif


<a href="#" class="btn btn-primary btn-block"  data-toggle="modal" data-target="#crear">Agregar nuevo pedido</a>
@include('forms.pedidos.m_crear')







<div class="x_content">
	<div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

		<div class="panel">
			<a class="panel-heading collapsed" role="tab" id="headingOne" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
				<h4 class="panel-title"><b>Encabezado (con destino a Destino)</b></h4>
			</a>
			<div id="collapseOne" class="panel-collapse in collapse" role="tabpanel" aria-labelledby="headingOne" style="">
				<div class="panel-body">

					<div class="card">
						<div class="card-body">
							<p class="card-text">Descripción</p>
							<p class="text-muted">- Enviado por <b>nombre cliente</b> hace <b>tiempo</b></p>
							<div class="actionBar">
								<a href="#" class="buttonNext btn btn-success">Archivar</a>
								<a href="#" class="buttonPrevious btn btn-primary">Programar viaje</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="panel">
			<a class="panel-heading collapsed" role="tab" id="headingTwo" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
				<h4 class="panel-title"><b>Encabezado (con destino a Destino)</b></h4>
			</a>
			<div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo" style="">
				<div class="panel-body">

					<div class="card">
						<div class="card-body">
							<p class="card-text">Descripción</p>
							<p class="text-muted">- Enviado por <b>nombre cliente</b> hace <b>tiempo</b></p>
							<div class="actionBar">
								<a href="#" class="buttonNext btn btn-success">Archivar</a>
								<a href="#" class="buttonPrevious btn btn-primary">Programar viaje</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>

		<div class="panel">
			<a class="panel-heading collapsed" role="tab" id="headingThree" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
				<h4 class="panel-title"><b>Encabezado (con destino a Destino)</b></h4>
			</a>
			<div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree" style="">
				<div class="panel-body">

					<div class="card">
						<div class="card-body">
							<p class="card-text">Descripción</p>
							<p class="text-muted">- Enviado por <b>nombre cliente</b> hace <b>tiempo</b></p>
							<div class="actionBar">
								<a href="#" class="buttonNext btn btn-success">Archivar</a>
								<a href="#" class="buttonPrevious btn btn-primary">Programar viaje</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>




@endsection
