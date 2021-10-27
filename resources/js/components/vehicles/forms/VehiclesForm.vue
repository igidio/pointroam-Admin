<template>
  	<div>
		<div class="modal-body">

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'Placa'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="formData.carID">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'Marca'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="formData.brand">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'Modelo'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="formData.model">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-6">
					<div class="form-group">
						<InputText :text="'Capacidad de carga en kg.'" :isRequired="true"/>
						<input type="text" class="form-control" v-model="formData.loadingCapacity">
					</div>    
				</div>
				<div class="col-6">
					<div class="form-group">
						<InputText :text="'Capacidad de gasolina en litros'" :isRequired="true"/>
						<input type="text" class="form-control" v-model.trim="formData.fuelCapacity">
					</div>    
				</div>
			</div>

			<div class="row">
				<div class="col-12">
					<div class="form-group">
						<InputText :text="'No. de ruedas'" :isRequired="true"/>
						<input type="text" class="form-control" v-on:keypress="numeros($event)" v-model.trim="formData.wheelNumber">
					</div>    
				</div>
			</div>		

		</div>

		<div class="modal-footer">
			<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
			<button type="submit" class="btn btn-primary" @click="submit_form" data-bs-dismiss="modal" :disabled="isValid">Crear elemento</button>
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
		formData: Object,
		functionProp: {type: Function} 
	},
	methods: {
		submit_form(){
			this.$emit('functionProp')
		}
	},
    computed: {
		isValid(){
			if(
				this.formData.carID.trim() != "" &&
				this.formData.brand.trim() != "" &&
				this.formData.model.trim() != "" &&
				this.formData.loadingCapacity != null &&
				this.formData.fuelCapacity != null &&
				this.formData.wheelNumber != null
			){ return false; } else {
				return true; }			
		}		
	}
}
</script>