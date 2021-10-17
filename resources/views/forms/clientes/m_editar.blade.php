<!-- Modal para agregar Vecino -->
<div class="modal fade" id="editar{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Editar información de cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="" action="{{ action('clientesController@editar') }}" method="post" autocomplete="off">
            <div class="modal-body"> 
            <input type="hidden" name="id" value="{{$cliente->id}}">               
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="apellido_p" class="control-label mb-1">Apellido Paterno <b style="color: red;">*</b></label>
                                <input oninput="validarCaracteres('apellido_p', 20)" style="text-transform:capitalize" id="apellido_p{{$cliente->id}}" name="apellido_p" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->apellido_p}}" onkeypress="return soloLetras(event)" onkeyup="validar{{$cliente->id}}()">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="apellido_m" class="control-label mb-1">Apellido Materno <b style="color: red;">*</b></label>
                                <input oninput="validarCaracteres('apellido_m', 20)" onkeyup="validar{{$cliente->id}}()" style="text-transform:capitalize" id="apellido_m{{$cliente->id}}" name="apellido_m" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->apellido_m}}" onkeypress="return soloLetras(event)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nombres" class="control-label mb-1">Nombres <b style="color: red;">*</b></label>
                                <input oninput="validarCaracteres('nombres', 35)" onkeyup="validar{{$cliente->id}}()" style="text-transform:capitalize" id="nombres{{$cliente->id}}" name="nombres" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->nombres}}" onkeypress="return soloLetras(event)">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="ci" class="control-label mb-1">CI <b style="color: red;">*</b></label>
                                <div class="input-group">
                                <input oninput="validarCaracteres('ci', 10)" onkeyup="validar{{$cliente->id}}()" id="ci{{$cliente->id}}" name="ci" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->ci}}" onkeypress="return soloNumeros(event)">
                                    <span class="input-group-btn">
                                        <select class="custom-select" name="departamento" id="departamento{{$cliente->id}}">
                                            <option value="LP" <?php if ($cliente->ci == 'LP') { echo 'selected'; } ?> >LP</option>
                                            <option value="CB" <?php if ($cliente->ci == 'CB') { echo 'selected'; } ?> >CB</option>
                                            <option value="SC" <?php if ($cliente->ci == 'SC') { echo 'selected'; } ?> >SC</option>
                                            <option value="CH" <?php if ($cliente->ci == 'CH') { echo 'selected'; } ?> >CH</option>
                                            <option value="OR" <?php if ($cliente->ci == 'OR') { echo 'selected'; } ?> >OR</option>
                                            <option value="PT" <?php if ($cliente->ci == 'PT') { echo 'selected'; } ?> >PT</option>
                                            <option value="TJ" <?php if ($cliente->ci == 'TJ') { echo 'selected'; } ?> >TJ</option>
                                            <option value="BE" <?php if ($cliente->ci == 'BE') { echo 'selected'; } ?> >BE</option>
                                            <option value="PD" <?php if ($cliente->ci == 'PD') { echo 'selected'; } ?> >PD</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="fnac" class="control-label mb-1">Fecha de Nacimiento <b style="color: red;">*</b></label>
                                <div class="input-group">
                                    <input onchange="validar{{$cliente->id}}()" id="fnac{{$cliente->id}}" name="fnac" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->fnac}}" readonly style="background-color: #fff;">
                                    <div class="input-group-addon"><i class="far fa-calendar"></i></div>
                                </div>
                            </div>
                            <?php $yy = date('yy') - 18;?>

                            <script>
                            $('#fnac{{$cliente->id}}').datepicker({
                                format: "yyyy-mm-dd",
                                language: "es",
                                startDate: new Date('1900-01-01'),
                                endDate: new Date('<?php echo date($yy.'-m-d'); ?>'),
                                autoclose: true
                                });
                            </script>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="genero" class="control-label mb-1">Género</label> <b style="color: red;">*</b>
                                <select class="form-control" name="genero">
                                    <option value="Masculino" @if ($cliente->ci == 'Masculino') {{'selected'}} @endif>Masculino</option>
                                    <option value="Femenino" @if ($cliente->ci == 'Femenino') {{'selected'}} @endif>Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="direccion" class="control-label mb-1">Dirección</label> <b style="color: red;">*</b>
                                <input oninput="validarCaracteres('direccion', 70)" onkeyup="validar{{$cliente->id}}()" id="direccion{{$cliente->id}}" style="text-transform:capitalize" name="direccion" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->direccion}}">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ntelefono" class="control-label mb-1">Número telefónico</label>
                                <div class="input-group">
                                    <div class="input-group-addon">+591</div>
                                    <input oninput="validarCaracteres('ntelefono', 8)" id="ntelefono{{$cliente->id}}" name="ntelefono" type="text" class="form-control" aria-required="true" aria-invalid="false" value="{{$cliente->telefono}}"  onkeypress="return soloNumeros(event)" onkeyup="validar{{$cliente->id}}()">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="correo" class="control-label mb-1">Correo Electrónico</label>
                                <input oninput="validarCaracteres('correo', 40)" id="correo{{$cliente->id}}" value="{{$cliente->email}}" name="correo" type="email" class="form-control" placeholder="nombre@ejemplo.com" class="form-control email-inputmask" im-insert="true" onkeyup="validar{{$cliente->id}}()">
                            </div>
                        </div>
                    </div>
                    <span>(<b style="color: red;">*</b>) Datos obligatorios</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="crearsubmit{{$cliente->id}}" name="crearsubmit" disabled>Editar</button>
            </div>            
            </form>
        </div>
    </div>
</div>

<!-- FIN: Modal para agregar Vecino -->

<script type="text/javascript">
validar{{$cliente->id}}();
function validar{{$cliente->id}}() {
    if ((document.getElementById('apellido_p{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('apellido_m{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('nombres{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('ci{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('fnac{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('ntelefono{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('direccion{{$cliente->id}}').value.length > 0) &&
    (document.getElementById('correo{{$cliente->id}}').value.length > 0)
) {
    document.getElementById('crearsubmit{{$cliente->id}}').disabled = false;
    } else {
    document.getElementById('crearsubmit{{$cliente->id}}').disabled = true;
    }
}
</script>