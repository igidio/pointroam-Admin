<div class="modal fade" id="actualizarimagen" tabindex="-1" role="dialog" aria-labelledby="actualizarimage" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="mediumModalLabel">Actualizar foto</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
			</div>
			<form class="" action="{{action('usuarioController@actualizarimagen')}}" enctype='multipart/form-data' method="post">
  				{{ csrf_field() }}
				<div class="modal-body">
  					<div class="row">
  						<div class="col-6">
							<label for="foto">Seleccione una foto desde su dispositivo:</label><br>
							<input type="file" name="foto" value="foto" id="foto" class="form control">
  						</div>
  						<div class="col-6">
							<span>Vista previa de la imagen:</span>
							<br><br>
							<div id="preview" style="background-color: black; width: 200px; margin-left: auto; margin-right: auto; height: 200px; overflow: hidden; border-radius: 50%;">	  				
	  							<i class="fas fa-image" style="color: white; font-size: 150px; padding-top: 25px; padding-left: 25px;"></i>
							</div>
						</div>
  					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
					<button type="submit" class="btn btn-primary">Confirmar</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	document.getElementById("foto").onchange = function(e) {
	let reader = new FileReader();

	reader.onload = function(){
	let preview = document.getElementById('preview'),
		image = document.createElement('img');

	image.src = reader.result;

	preview.innerHTML = '';
	preview.append(image);
	};

	reader.readAsDataURL(e.target.files[0]);
	}
</script>