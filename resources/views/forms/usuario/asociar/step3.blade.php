@extends('layouts.app')

@section('content')

<div class="row">
   <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
      <div class="card">
         <h5 class="card-header">Ingrese sus datos</h5>
         <div class="card-body">
            <div id="wizard_verticle" class="form_wizard wizard_horizontal">
               <ul class="list-unstyled wizard_steps anchor">
                  <li>
                     <a class="done">
                     <span class="step_no">1</span>
                     </a>
                  </li>
                  <li>
                     <a class="done">
                     <span class="step_no">2</span>
                     </a>
                  </li>
               </ul>
                              
            </div>            
               Se finalizó con el proceso de crear nuevo usuario            
         </div>
         <div class="card-footer">
            <div class="row">
               <div class="col-6">
               </div>
               <div class="col-6">
                  <div class="float-right text-right">
                     <a href="http://digicorp.test/personal" class="btn btn-secondary">Cancelar</a>
                     <input type="submit" id="Confirmar" name="Confirmar" value="Confirmar" class="btn btn-primary" onkeypress="return evento(event)" disabled="">
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>           

<script type="text/javascript">
validarUsuarios();
function validarUsuarios() {
   if ((document.getElementById("usuario").value.length > 0) && (document.getElementById("passw").value.length > 0)) {
   document.getElementById("Confirmar").disabled = false;
   } else {
   document.getElementById("Confirmar").disabled = true;
   }
}
</script>
@endsection