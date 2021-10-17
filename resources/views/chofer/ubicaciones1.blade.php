<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>RUTA DE PEDIDOS</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        #map {
            width: 100%;
            height: 90%;
        }
  </style>
  </head>
  <body >
  <div id="map"></div>
<script>
function initMap() {     
    var directionsService = new google.maps.DirectionsService;
    var directionsDisplay = new google.maps.DirectionsRenderer;
    var waypts = [
        {location: {lat: -16.515065, lng: -68.137439}},
        <?php $pedidos = DB::table('pedidos')->orderBy('id')->where('estado', 'Pendiente')->get(); ?>
        @foreach ($pedidos as $pedido)
        {location: {lat: {{$pedido->latitud}}, lng: {{$pedido->longitud}}}, stopover: true},
        @endforeach
    ];        

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 6,
        center: { lat: waypts[0].location.lat, lng: waypts[0].location.lng }
    });    

    directionsDisplay.setMap(map);
    directionsService.route({
        origin: { lat: waypts[0].location.lat, lng: waypts[0].location.lng },//db waypoint start
        destination: { lat: waypts[waypts.length -1].location.lat, lng: waypts[waypts.length-1].location.lng  },//db waypoint end
        waypoints: waypts,
        travelMode: google.maps.TravelMode.DRIVING
    }, function (response, status) {
        if (status === google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Ha fallado la comunicació am el mapa a causa de: ' + status);
        }
    });

    navigator.geolocation.getCurrentPosition(
    function (position){
        coords =  {
        lng: position.coords.longitude,
        lat: position.coords.latitude
        };
        setMapa(coords);
    },function(error){console.log(error);}); 
    
}
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaDcE_KFlkhqBOoKXfiDhoka59nVx5Ws&callback=initMap"></script>
</body>
</html>