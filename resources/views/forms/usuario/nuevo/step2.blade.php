@extends('layouts.app')

@section('content')

<div id="wizard_verticle" class="form_wizard wizard_verticle">
   <ul class="list-unstyled wizard_steps anchor">
      <li>
         <a class="selected">
         <span class="step_no">1</span>
         </a>
      </li>
      <li>
         <a class="disabled">
         <span class="step_no">2</span>
         </a>
      </li>
      <li>
         <a class="disabled">
         <span class="step_no">3</span>
         </a>
      </li>
      <li>
         <a class="disabled">
         <span class="step_no">4</span>
         </a>
      </li>
   </ul>
   <div class="stepContainer">
      <div id="step-11" class="content" style="height: 510px;">
         <h2 class="StepTitle">Paso 1: Introduzca sus datos personales para crear su usuario</h2>
         <form class="form-horizontal form-label-left">
            @include("forms.usuario.form_personal")'
         </form>
      </div>
   </div>
   <div class="actionBar">
      <a href="#" class="buttonPrevious btn btn-secondary">Cancelar</a>
      <a href="#" class="buttonNext btn btn-primary">Siguiente</a>
   </div>
</div>
@endsection
