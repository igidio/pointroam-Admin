@extends('layouts.app')

@section('content')

<!--<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-analytics.js"></script>
<script>
    // Your web app's Firebase configuration
    // For Firebase JS SDK v7.20.0 and later, measurementId is optional
    var firebaseConfig = {
        apiKey: "AIzaSyCUGcLoe2ra1cWQKXtOjibSNJ4Dlb22eaI",
        authDomain: "temp-hum-b537a.firebaseapp.com",
        databaseURL: "https://temp-hum-b537a.firebaseio.com",
        projectId: "temp-hum-b537a",
        storageBucket: "temp-hum-b537a.appspot.com",
        messagingSenderId: "128932816509",
        appId: "1:128932816509:web:1bd530a1c4429833867314",
		measurementId: "G-70N4BP1B53"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    firebase.analytics();
</script>

<script id='MainScript'>
    var firebaseConfig = {
        apiKey: "AIzaSyCUGcLoe2ra1cWQKXtOjibSNJ4Dlb22eaI",
        authDomain: "temp-hum-b537a.firebaseapp.com",
        databaseURL: "https://temp-hum-b537a.firebaseio.com",
        projectId: "temp-hum-b537a",
        storageBucket: "temp-hum-b537a.appspot.com",
        messagingSenderId: "128932816509",
        appId: "1:128932816509:web:1bd530a1c4429833867314",
        measurementId: "G-70N4BP1B53"
    };
    // Initialize Firebase
    firebase.initializeApp(firebaseConfig);
    function Ready(){
    }
</script>-->

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaDcE_KFlkhqBOoKXfiDhoka59nVx5Ws"></script>
<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<style type="text/css">
    #map {
    width: 100%;
    height: 480px;
    }
</style>

<div class="card">
	<form action="{{ action('pedidosController@setPedido')}}" method="POST" autocomplete="off">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{auth()->user()->id_cliente}}">
  		<div class="card-header">Realizar pedido</div>
		<div class="card-body">

			<div class="row">
				<div class="col-8">
					<p>Escoja la ubicación en donde se realizará la entrega de su pedido</p>
					<div id="map"></div>
				</div>
				<div class="col-4">
					<div class="form-group">
						<label for="titulo">Título:</label>
						<input name="titulo" type="text" id="titulo" class="form-control">
					</div>
					<div class="form-group">
						<label for="titulo">Descripción:</label>
						<textarea name="descripcion" class="form-control" rows="3" placeholder="La descripción va aquí" style="margin-top: 0px; margin-bottom: 0px; min-height: 106px; max-height: 220px;"></textarea>
					</div>

					<div id="ocultado" style="display: none;">
						<div class="row">
							<button id="confirmPosition">Confirm Position</button>
							<br>
							<p>On idle position: <span id="onIdlePositionView"></span></p>
							<p>On click position: <span id="onClickPositionView"></span></p>
							<button type="button" class="btn btn-secondary btn-sm" id="volver">Volver a punto de La Paz</button>
						</div> 
					
						<div class="row">
							<div class="col-12 form-group">
								<label class="control-label">Latitud</label>
								<input type="text" class="form-control" id="latitud" name="latitud"  placeholder="Latitud">
							</div>
							<div class="col-12 form-group">
								<label for="latitud" class="control-label">Longitud</label>
								<input type="text" class="form-control" id="longitud" name="longitud"  placeholder="Longitud">
							</div>
						</div>
					</div>

					
				</div>       
			</div>
		</div>
		</div>
  		<div class="card-footer">
			<div class="row">
				<div class="col-12">
					<p class="text-right">
						<a class="btn btn-space btn-secondary" href="{{route('home')}}">Cancelar</a>
						<button type="submit" class="btn btn-space btn-primary">Crear pedido</button>
					</p>
				</div>
			</div>
  		</div>
	</form> 
</div>

  <!--<script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-app.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-auth.js"></script>
  <script src="https://www.gstatic.com/firebasejs/8.1.1/firebase-database.js"></script> -->

<script>
    // Get element references
    var confirmBtn = document.getElementById('confirmPosition');
    var onClickPositionView = document.getElementById('onClickPositionView');
    var onIdlePositionView = document.getElementById('onIdlePositionView');

    // Initialize locationPicker plugin
    var lp = new locationPicker('map', {
        setCurrentPosition: true, // You can omit this, defaults to true
    }, {
        @if (!empty($latitud) or !empty($logitud)) center: { lat: {{$latitud}}, lng: {{$longitud}} }, @else center: { lat: -16.515027183352103, lng: -68.13747150754229 }, @endif
        zoom: 15 // You can set any google map options here, zoom defaults to 15
    });

    // Listen to button onclick event
    confirmBtn.onclick = function () {
        // Get current location and show it in HTML
        var location = lp.getMarkerPosition();
        onClickPositionView.innerHTML = 'Coordenadas del indicador: ' + location.lat + ',' + location.lng;
        Ready();
        firebase.database().ref('datos/').set({
            Latitud: location.lat,
            Longitud: location.lng,
        });
    };

    volver.onclick = function () {
        lp.map.setCenter({lat: -16.505912, lng: -68.132821});
    };

    // Listen to map idle event, listening to idle event more accurate than listening to ondrag event
    google.maps.event.addListener(lp.map, 'idle', function (event) {
        // Get current location and show it in HTML
        var location = lp.getMarkerPosition();
        onIdlePositionView.innerHTML = 'Coordenadas escogidas: ' + location.lat + ',' + location.lng;      
        
        var x = document.getElementById("latitud");
        x.value = location.lat;
        var y = document.getElementById("longitud");
        y.value = location.lng;
    });

    
</script>
























































@endsection