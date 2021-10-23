<template>
  <div>
		<div class="modal-body">

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="placa" class="control-label mb-1">Placa <b style="color: red;">*</b></label>
					<input oninput="validarCaracteres('placa', 8)" id="placa" name="placa" type="text" class="form-control" onkeypress="return placaAuto(e)" onkeyup="validar()">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="marca" class="control-label mb-1">Marca <b style="color: red;">*</b></label>
					<input oninput="validarCaracteres('marca', 15)" id="marca" name="marca" type="text" class="form-control" onkeyup="validar()">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="modelo" class="control-label mb-1">Modelo <b style="color: red;">*</b></label>
					<input oninput="validarCaracteres('modelo', 15)" id="modelo" name="modelo" type="text" class="form-control" onkeyup="validar()">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="capacidad_carga" class="control-label mb-1">Capacidad de carga en kg. <b style="color: red;">*</b></label>
					<input oninput="validarCaracteres('capacidad_carga', 4)" id="capacidad_carga" name="capacidad_carga" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar()">
				</div>    
			</div>

			<div class="col-6">
				<div class="form-group">
					<label for="capacidad_gasolina" class="control-label mb-1">Capacidad de gasolina en litros <b style="color: red;">*</b></label>
					<input oninput="validarCaracteres('capacidad_gasolina', 4)" id="capacidad_gasolina" name="capacidad_gasolina" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar()">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="n_ruedas" class="control-label mb-1">No. de ruedas <b style="color: red;">*</b></label>
					<input oninput="validarCaracteres('n_ruedas', 2)" id="n_ruedas" name="n_ruedas" type="text" onkeypress="return soloNumeros(event)" class="form-control" onkeyup="validar()">
				</div>    
			</div>
		</div>		

	</div>

		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id='crear'>Crear elemento</button>
        </div>

	</div>
</template>

<script>
export default {
    
}
</script>