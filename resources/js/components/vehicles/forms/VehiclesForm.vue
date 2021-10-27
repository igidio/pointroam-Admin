<template>
  	<div>
		<div class="modal-body">

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'Placa'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="datos.placa">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'Marca'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="datos.marca">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'Modelo'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="datos.modelo">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<InputText :text="'Capacidad de carga en kg.'" :isRequired="true"/>
						<input type="text" class="form-control" v-model="datos.capacidad_carga">
					</div>    
				</div>
				<div class="col-6">
					<div class="form-group">
						<InputText :text="'Capacidad de gasolina en litros'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="datos.capacidad_gasolina">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'No. de ruedas'" :isRequired="true"/>
						<input type="text" class="form-control" v-on:keypress="numeros($event)" v-model.trim="datos.n_ruedas">
					</div>    
				</div>
			</div>		

		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" @click="submit_form" data-bs-dismiss="modal" :disabled="habilitado">Crear elemento</button>
		</div>
	</div>
</template>

<script>
import formMixins from '../../../mixins/formMixins.js'
import InputText from '../../_template/sub/InputText.vue'

export default {
	mixins: [formMixins],
	components: {
		InputText
	},
	props: {
		datos: Object,
		functionProp: {type: Function} 
	},
	methods: {
		submit_form(){
			this.$emit('functionProp')
		}
	},
    computed: {
		habilitado(){
			if(
				this.datos.placa.trim() != "" &&
				this.datos.marca.trim() != "" &&
				this.datos.modelo.trim() != "" &&
				this.datos.capacidad_carga != null &&
				this.datos.capacidad_gasolina != null &&
				this.datos.n_ruedas != null
			){ return false; } else {
				return true; }			
		}		
	}
}
</script>