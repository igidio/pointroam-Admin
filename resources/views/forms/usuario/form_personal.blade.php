<span class="section">Informacion personal</span>
    
<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="nombre">Nombres <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input oninput="validarCaracteres('nombre', 40)" onkeypress="return soloLetras(event)" type="text" id="nombre" name="nombre" required="required" class="form-control" autocomplete="off">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="apellidop">Apellido Paterno <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input oninput="validarCaracteres('apellidop', 20)" onkeypress="return soloLetras(event)" type="text" id="apellidop" name="apellidop" required="required" class="form-control" autocomplete="off">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="apellidom">Apellido Materno <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input oninput="validarCaracteres('apellidom', 20)" onkeypress="return soloLetras(event)" type="text" id="apellidom" name="apellidom" required="required" class="form-control" autocomplete="off">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="ci">CI <span class="required">*</span></label>
    <div class="col-md-5 col-sm-5">
        <input oninput="validarCaracteres('ci', 10)" onkeypress="return soloNumeros(event)" type="text" id="ci" name="ci" required="required" class="form-control" autocomplete="off">
    </div>
    <div class="col-md-1 col-sm-1">
        <select class="form-control" id="cid" name="cid" required="required">
            <option>--</option>
            <option value='LP'>LP</option>
            <option value='SC'>SC</option>
            <option value='CB'>CB</option>
            <option value='CH'>CH</option>
            <option value='OR'>OR</option>
            <option value='PT'>PT</option>
            <option value='TJ'>TJ</option>
            <option value='BE'>BE</option>
            <option value='PD'>PD</option>
        </select>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align" for="telefono">Telefono <span class="required">*</span></label>
    <div class="col-md-6 col-sm-6">
        <input oninput="validarCaracteres('telefono', 8)" onkeypress="return soloNumeros(event)" type="text" id="telefono" name="telefono" required="required" class="form-control">
    </div>
</div>

<div class="form-group row">
    <label for="direccion" class="col-form-label col-md-3 col-sm-3 label-align">Direccion</label>
    <div class="col-md-6 col-sm-6">
        <input oninput="validarCaracteres('direccion', 60)" id="direccion" class="form-control" type="text" name="direccion">
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Genero</label>
    <div class="col-md-6 col-sm-6">
        <div id="genero" class="btn-group" data-toggle="buttons">
            <p>
            <span>Hombre:</span>
            <div class="iradio_flat-green"><input type="radio" class="flat" name="genero" id="generoH" value="H" checked data-parsley-multiple="gender"></div>
            
            <span>  | Mujer:</span>
            <div class="iradio_flat-green"><input type="radio" class="flat" name="genero" id="generoF" value="M" data-parsley-multiple="gender"></div>
            </p>
        </div>
    </div>
</div>

<div class="form-group row">
    <label class="col-form-label col-md-3 col-sm-3 label-align">Fecha de Nacimiento<span class="required">*</span>
    </label>
    <div class="col-md-6 col-sm-6">
        <input onchange="validarVecino()" id="fnac" name="fnac" class="date-picker form-control" required="required" type="text">
        <span class="fa fa-calendar form-control-feedback right" aria-hidden="true"></span>
    </div>
    <script>
        $('#fnac').datepicker({
            format: "yyyy-mm-dd",
            language: "es",
            startDate: new Date('1900-01-01'),
            endDate: new Date('{{date("Y-m-d",strtotime(date("d-m-Y")."- 18 year"))}}'),
            autoclose: true
        });
    </script>
</div>