<template>
    <div>
        
        <div class="row match-height">
            <div class="col-md-3 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form</h4>
                    </div>
                        <div class="card-body">
                            <div class="justify-content-md-center row">
                                <div class=" col-8">
                                    <img src="template/images/faces/3.jpg" class="img-fluid float-center rounded-circle" alt="...">
                                    <h5 class="my-2 text-center">@asdsadasd</h5>
                                </div>

                            </div>

                            <div>
                                <p>Hola</p>
                            </div>

                    <div class="border-top"></div>
                        <h5 class="font-16 my-3">Información de contacto</h5>
                            <ul class="list-unstyled mb-0">
                                <li class="mb-2"><i class="fas fa-home mr-2"></i><b>Dirección: </b>Agregar dirección</li>
                                <li class="mb-2"><i class="fas fa-fw fa-envelope mr-2"></i><b>Correo: </b>Auth::user()->email</li>
                                <li class="mb-0"><i class="fas fa-fw fa-phone mr-2"></i><b>Teléfono: </b>personal->telefono</li>
                            </ul>


                    </div>
                    

                </div>
            </div>
            <div class="col-md-9 col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Form with Icons</h4>
                    </div>
                    <div class="card-content">
                        <div class="card-body">
                            <form class="form form-horizontal">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>Name</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="text" class="form-control" placeholder="Name" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-person"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Email</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="email" class="form-control" placeholder="Email" id="first-name-icon">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-envelope"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Mobile</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="number" class="form-control" placeholder="Mobile">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-phone"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <label>Password</label>
                                        </div>
                                        <div class="col-md-8">
                                            <div class="form-group has-icon-left">
                                                <div class="position-relative">
                                                    <input type="password" class="form-control" placeholder="Password">
                                                    <div class="form-control-icon">
                                                        <i class="bi bi-lock"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-8 offset-md-4">
                                            <div class="form-check">
                                                <div class="checkbox">
                                                    <input type="checkbox" id="checkbox2" class="form-check-input" checked="">
                                                    <label for="checkbox2">Remember Me</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">Submit</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    </div>
</template>

<script>
export default {
    
}
</script>