<div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-m">
    <div class="modal-content">

      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel2">Agregar camión</h4>        
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true"></span>
        </button>
      </div>
      
      <form action="{{ action('camionesController@nuevo')}}" method="post" autocomplete='off'>
        
        <form-vehicles/>
        
        
      </form>

    </div>
  </div>
</div>

<script type="text/javascript">
validar();
function validar() {
    if (
      (document.getElementById("placa").value.length > 0) &&
      (document.getElementById("marca").value.length > 0) &&
      (document.getElementById("modelo").value.length > 0) &&
      (document.getElementById("capacidad_carga").value.length > 0) &&
      (document.getElementById("capacidad_gasolina").value.length > 0) &&
      (document.getElementById("n_ruedas").value.length > 0)
    ) {
      document.getElementById("crear").disabled = false;
  } else {
    document.getElementById("crear").disabled = true;
  }
}
</script>