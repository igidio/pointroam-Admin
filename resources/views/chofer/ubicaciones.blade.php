<!DOCTYPE html>
<html>
    <?php $pedidos = DB::table('pedidos')->orderBy('id')->get(); ?>
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
            height: 100%;
        }
  </style>
  </head>
  <body >
    <div id="map"></div>
    <script>
      var markers = [];
      var coords = {};
      var conductor;
      var yo = {
            url: "{{asset('images/point.png')}}"
        };
      initMap = function () 
      {
            navigator.geolocation.getCurrentPosition(
            function (position){
                coords =  {
                lng: position.coords.longitude,
                lat: position.coords.latitude
                };
                setMapa(coords);
            },function(error){console.log(error);});   

      }
      function setMapa (coords)
      {   
        var map = new google.maps.Map(document.getElementById('map'),
        {
          zoom: 15,
          center:new google.maps.LatLng(coords.lat,coords.lng)
        });
        conductor = new google.maps.Marker({
          map: map,
          draggable: true,
          icon: yo,
          animation: google.maps.Animation.DROP,
          position: new google.maps.LatLng(coords.lat,coords.lng),
        });
        var locations = [
            @foreach ($pedidos as $pedido)
            {title: '{{$pedido->encabezado}}', location: {lat: {{$pedido->latitud}}, lng: {{$pedido->longitud}} }},    
            @endforeach
            //{title: '<?php // echo $fila['nombre'];?>', location: {lat: <?php // echo $fila['latitud'];?>, lng: <?php // echo $fila['longitud'];?>}},
			{title: 'nombre', location: {lat: {{33}}, lng: {{13}} }},

        for(var i = 0; i < locations.length; i++){
        var position = locations[i].location;
        var title = locations[i].title;
        var marker = new google.maps.Marker({
            map: map,
            position: position,
            title: title,
            animation: google.maps.Animation.DROP,
            id: i
        });
        } 
      }
    </script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaDcE_KFlkhqBOoKXfiDhoka59nVx5Ws&callback=initMap"></script>
  </body>
</html>