<template>
  <div>
		<div class="modal-body">

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="placa" class="control-label mb-1">Placa <b style="color: red;">*</b></label>
					<input id="placa" name="placa" type="text" class="form-control" v-model.trim="datos.placa">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="marca" class="control-label mb-1">Marca <b style="color: red;">*</b></label>
					<input id="marca" name="marca" type="text" class="form-control" v-model.trim="datos.marca">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="modelo" class="control-label mb-1">Modelo <b style="color: red;">*</b></label>
					<input id="modelo" name="modelo" type="text" class="form-control" v-model.trim="datos.modelo">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-6">
				<div class="form-group">
					<label for="capacidad_carga" class="control-label mb-1">Capacidad de carga en kg. <b style="color: red;">*</b></label>
					<input id="capacidad_carga" name="capacidad_carga" type="text" class="form-control" v-model="datos.capacidad_carga">
				</div>    
			</div>

			<div class="col-6">
				<div class="form-group">
					<label for="capacidad_gasolina" class="control-label mb-1">Capacidad de gasolina en litros <b style="color: red;">*</b></label>
					<input id="capacidad_gasolina" name="capacidad_gasolina" type="text" class="form-control" v-model.trim="datos.capacidad_gasolina">
				</div>    
			</div>
		</div>

		<div class="row">
			<div class="col-12">
				<div class="form-group">
					<label for="n_ruedas" class="control-label mb-1">No. de ruedas <b style="color: red;">*</b></label>
					<input id="n_ruedas" name="n_ruedas" type="text" class="form-control" v-model.trim="datos.n_ruedas">
				</div>    
			</div>
		</div>		

	</div>

		<div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="submit" class="btn btn-primary" id='crear' :disabled="habilitado">Crear elemento</button>
        </div>

	</div>
</template>

<script>
export default {
	props: {
		datos: Object
	},
    computed: {
		habilitado(){
			if(
				this.datos.placa.trim() != "" &&
				this.datos.marca.trim() != "" &&
				this.datos.modelo.trim() != "" &&
				this.datos.capacidad_carga != "" &&
				this.datos.capacidad_gasolina != "" &&
				this.datos.n_ruedas != ""
			){
				return false;
			} else {
				return true;
			}
			
		}
	}
}
</script>