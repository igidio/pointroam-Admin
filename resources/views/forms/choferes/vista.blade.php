@extends('layouts.app')

@section('content')

<div class="x_content">
    <div class="col-md-12 col-sm-12  text-center">
        <ul class="pagination pagination-split">
            <li><a href="#">A</a></li>
            <li><a href="#">B</a></li>
            <li><a href="#">C</a></li>
            <li><a href="#">D</a></li>
            <li><a href="#">E</a></li>
            <li>...</li>
            <li><a href="#">W</a></li>
            <li><a href="#">X</a></li>
            <li><a href="#">Y</a></li>
            <li><a href="#">Z</a></li>
        </ul>
    </div>
    <div class="clearfix"></div>
    <div class="col-md-4 col-sm-4  profile_details">
        <div class="well profile_view">
            <div class="col-sm-12">
                <h4 class="brief"><i>Cargo</i></h4>
                <div class="left col-md-7 col-sm-7">
                    <h2>Nombre Apellido Paterno Apellido Materno</h2>
                    <p><strong>Conductor</strong></p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-building"></i> <strong>Dirección:</strong> Dirección</li>
                        <li><i class="fa fa-phone"></i> <strong>Teléfono:</strong> Teléfono</li>
                        <li><i class="fas fa-id-card"></i> <strong>CI:</strong> CI CID</li>
                        <li><i class="fas fa-address-card"></i> <strong>Licencia:</strong> Licencia</li>
                        <li><i class="fas fa-birthday-cake"></i> <strong>F. de Nacimiento:</strong> FNAC</li>
                        <li><i class="far fa-calendar-plus"></i> <strong>F. de Agregado:</strong> Fecha</li>
                    </ul>
                </div>
                <div class="right col-md-5 col-sm-5 text-center">
                    <img src="https://placekitten.com/500/500" alt="" class="img-circle img-fluid">
                </div>

                Estado: <span class="badge badge-primary">Libre</span><br>
                Estado: <span class="badge badge-warning">Próximo a viajar</span><br>
                Estado: <span class="badge badge-success">Vianjando</span>
            </div>
            <div class=" profile-bottom text-center">
                <div class=" col-sm-6 emphasis">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-user"></i><i class="fa fa-comments-o"></i></button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-user"> </i> View Profile</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4  profile_details">
        <div class="well profile_view">
            <div class="col-sm-12">
                <h4 class="brief"><i>Digital Strategist</i></h4>
                <div class="left col-md-7 col-sm-7">
                    <h2>Nicole Pearson</h2>
                    <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-building"></i> Address: </li>
                        <li><i class="fa fa-phone"></i> Phone #: </li>
                    </ul>
                </div>
                <div class="right col-md-5 col-sm-5 text-center">
                    <img src="https://placekitten.com/500/500" alt="" class="img-circle img-fluid">
                </div>
            </div>
            <div class=" profile-bottom text-center">
                <div class=" col-sm-6 emphasis">
                    <p class="ratings">
                        <a>4.0</a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star-o"></span></a>
                    </p>
                </div>
                <div class=" col-sm-6 emphasis">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-user"></i><i class="fa fa-comments-o"></i></button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-user"> </i> View Profile</button>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-4 col-sm-4  profile_details">
        <div class="well profile_view">
            <div class="col-sm-12">
                <h4 class="brief"><i>Digital Strategist</i></h4>
                <div class="left col-md-7 col-sm-7">
                    <h2>Nicole Pearson</h2>
                    <p><strong>About: </strong> Web Designer / UX / Graphic Artist / Coffee Lover </p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-building"></i> Address: </li>
                        <li><i class="fa fa-phone"></i> Phone #: </li>
                    </ul>
                </div>
                <div class="right col-md-5 col-sm-5 text-center">
                    <img src="https://placekitten.com/500/500" alt="" class="img-circle img-fluid">
                </div>
            </div>
            <div class=" profile-bottom text-center">
                <div class=" col-sm-6 emphasis">
                    <p class="ratings">
                        <a>4.0</a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star"></span></a>
                        <a href="#"><span class="fa fa-star-o"></span></a>
                    </p>
                </div>
                <div class=" col-sm-6 emphasis">
                    <button type="button" class="btn btn-success btn-sm"><i class="fa fa-user"></i><i class="fa fa-comments-o"></i></button>
                    <button type="button" class="btn btn-primary btn-sm"><i class="fa fa-user"> </i> View Profile</button>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection