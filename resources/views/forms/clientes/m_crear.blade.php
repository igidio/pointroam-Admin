<div class="modal fade" id="crear" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" style="display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediumModalLabel">Agregar nuevo cliente</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <form class="" action="{{ action('clientesController@crear') }}" method="post" autocomplete="off">
            <div class="modal-body">                
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="apellido_p" class="control-label mb-1">Apellido Paterno <b style="color: red;">*</b></label>
                                <input oninput="validarCaracteres('apellido_p', 20)" style="text-transform:capitalize" id="apellido_p" name="apellido_p" type="text" class="form-control" aria-required="true" aria-invalid="false" value=""  onkeypress="return soloLetras(event)" onkeyup="validarVecino()">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="apellido_m" class="control-label mb-1">Apellido Materno <b style="color: red;">*</b></label>
                                <input oninput="validarCaracteres('apellido_m', 20)" onkeyup="validarVecino()" style="text-transform:capitalize" id="apellido_m" name="apellido_m" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)" onkeyup="validarVecino()">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="nombres" class="control-label mb-1">Nombres <b style="color: red;">*</b></label>
                                <input oninput="validarCaracteres('nombres', 35)" onkeyup="validarVecino()" style="text-transform:capitalize" id="nombres" name="nombres" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloLetras(event)" onkeypress="return soloLetras(event)" onkeyup="validarInput()">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="ci" class="control-label mb-1">CI <b style="color: red;">*</b></label>
                                <div class="input-group">
                                <input oninput="validarCaracteres('ci', 10)" onkeyup="validarVecino()" id="ci" name="ci" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" onkeypress="return soloNumeros(event)">
                                    <span class="input-group-btn">
                                        <select class="custom-select" name="departamento" id="departamento">
                                            <option value="LP">LP</option>
                                            <option value="CB">CB</option>
                                            <option value="SC">SC</option>
                                            <option value="CH">CH</option>
                                            <option value="OR">OR</option>
                                            <option value="PT">PT</option>
                                            <option value="TJ">TJ</option>
                                            <option value="BE">BE</option>
                                            <option value="PD">PD</option>
                                        </select>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="fnac" class="control-label mb-1">Fecha de Nacimiento <b style="color: red;">*</b></label>
                                <div class="input-group">
                                    <input onchange="validarVecino()" id="fnac" name="fnac" type="text" class="form-control" aria-required="true" aria-invalid="false" value="" readonly style="background-color: #fff;">
                                    <div class="input-group-addon"><i class="far fa-calendar"></i></div>
                                </div>
                            </div>
                            <?php $yy = date('yy') - 18;?>

                            <script>
                            $('#fnac').datepicker({
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
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="direccion" class="control-label mb-1">Dirección</label> <b style="color: red;">*</b>
                                <input oninput="validarCaracteres('direccion', 70)" onkeyup="validarVecino()" id="direccion" style="text-transform:capitalize" name="direccion" type="text" class="form-control" aria-required="true" aria-invalid="false" value="">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="ntelefono" class="control-label mb-1">Número telefónico</label>
                                <div class="input-group">
                                    <div class="input-group-addon">+591</div>
                                    <input oninput="validarCaracteres('ntelefono', 8)" id="ntelefono" name="ntelefono" type="text" class="form-control" aria-required="true" aria-invalid="false" value=""  onkeypress="return soloNumeros(event)" onkeyup="validarVecino()">
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="correo" class="control-label mb-1">Correo Electrónico</label>
                                <input oninput="validarCaracteres('correo', 40)" id="correo" name="correo" type="email" class="form-control" value="" placeholder="nombre@ejemplo.com" class="form-control email-inputmask" im-insert="true" onkeyup="validarVecino()">
                            </div>
                        </div>
                    </div>
                    <span>(<b style="color: red;">*</b>) Datos obligatorios</span>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-primary" id="crearsubmit" name="crearsubmit" disabled>Agregar</button>
            </div>            
            </form>
        </div>
    </div>
</div>

<!-- FIN: Modal para agregar Vecino -->

<script type="text/javascript">
validarVecino();
function validarVecino() {
    if ((document.getElementById('apellido_p').value.length > 0) &&
    (document.getElementById('apellido_m').value.length > 0) &&
    (document.getElementById('nombres').value.length > 0) &&
    (document.getElementById('ci').value.length > 0) &&
    (document.getElementById('fnac').value.length > 0) &&
    (document.getElementById('ntelefono').value.length > 0) &&
    (document.getElementById('direccion').value.length > 0) &&
    (document.getElementById('correo').value.length > 0)
) {
    document.getElementById('crearsubmit').disabled = false;
    } else {
    document.getElementById('crearsubmit').disabled = true;
    }
}
</script>