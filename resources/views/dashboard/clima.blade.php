<?php
    $apiKey = "67742c3cf3d94e597036144a1714c554";
    $cityId = "3911925";
    $url = "http://api.openweathermap.org/data/2.5/forecast?id=".$cityId."&lang=es&units=metric&APPID=" . $apiKey;

    //LISTAR TEMPERATURAS
    $contents = file_get_contents($url);
    $clima = json_decode($contents, true);
    $contador = 1;
    $max = 0.00;
    $min = 100.00;
    $promedio_viento = 0;

    //LISTAR TEMPERATURA ACTUAL
    $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=es&units=metric&APPID=" . $apiKey;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);

    curl_close($ch);
    $data = json_decode($response);
    $currentTime = time();
?>


<div class="row">
    <div class="col-4">

        <div class="x_panel">
            <div class="x_title">
                <h2>Today's Weather</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                    <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="temperature"><b><?php echo date("l", $currentTime); ?></b>, <?php echo date("g:i a", $currentTime); ?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2 text-right">
                        <div class="weather-icon">
                            <span>
                                <canvas height="32" width="32" id="partly-cloudy-day"></canvas>
                            </span>
                        </div>
                    </div>
                    <div class="col-sm-10 text-right">
                        <div class="weather-text">
                            <h2><?php echo $data->name; ?>
                            <br><i><?php echo ucfirst($data->weather[0]->description); ?></i>
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <ul class="list-unstyled mb-0">
                            <li class="mb-0"><i class="fas fa-thermometer-three-quarters"></i> Temperatura: {{$data->main->temp}} °C</li>
                            <li class="mb-0"><i class="fas fa-tint"></i> Humedad: {{$data->main->humidity}}%</li>
                            <li class="mb-0"><i class="fas fa-wind"></i> Velocidad del viento: {{$data->wind->speed}} Km/h</li>
                        </ul>
                        <hr>
                    </div>
                </div>

<?php
foreach($clima['list'] as $data_I) {
    if(floatval($data_I['main']['temp']) > $max){
        $max=$data_I['main']['temp'];
    }
    if(floatval($data_I['main']['temp']) < $min){
        $min=$data_I['main']['temp'];
    }

    $promedio_viento = $promedio_viento + $data_I['wind']['speed'];

    if((($contador % 8) == 0)){
        $promedio_viento = $promedio_viento / 8;
        $fecha = date_create($data_I['dt_txt']);
        $fecha_format = date_format($fecha, "m/d");
?>

    <div class="row no-gutters">
        <div class="col-2">
            <span><i style="font-size: 30px;" class="{{ imagen_clima($data_I['weather']['0']['icon']) }}"></i></span>
        </div>
        <div class="col-10">
            <div class="row no-gutters">
                <div class="col-7">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-0"><i class="fas fa-calendar"></i> <b>{{$fecha_format}}</b> {{ ucfirst($data_I['weather']['0']['description'])}}</li>
                        <li class="mb-0"><i class="fas fa-wind"></i> <b>V. viento:</b> {{round($promedio_viento, 2)}} Km/h</li>
                    </ul>
                </div>
                <div class="col-5">
                    <ul class="list-unstyled mb-0">
                        <li class="mb-0"><i class="fas fa-temperature-high"></i><b>T.Máx:</b> {{$max}}°C</li>
                        <li class="mb-0"><i class="fas fa-temperature-low"></i><b>T.Min:</b> {{$min}}°C</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <hr>                                
<?php
$max = 0.00;
}
$contador++;
}
?>

            </div>
        </div>
    </div>
</div>



<?php
function imagen_clima($clima){
    switch ($clima) {
        case '01d':
            return "fas fa-sun";
            break;
        case '02d':
            return "fas fa-cloud-sun";
            break;
        case '03d':
            return "fas fa-cloud";
            break;
        case '04d':
            return "fas fa-cloud";
            break;
        case '09d':
            return "fas fa-cloud-showers-heavy";
            break;
        case '10d':
            return "fas fa-cloud-sun-rain";
            break;
        case '11d':
            return "fas fa-bolt";
            break;
        case '13d':
            return "fas fa-snowflake";
            break;
        case '50d':
            return "fas fa-water";
            break;
        case '01n':
            return "fas fa-moon";
            break;
        case '02n':
            return "fas fa-cloud-moon";
            break;
        case '03n':
            return "fas fa-cloud";
            break;
        case '04n':
            return "fas fa-cloud";
            break;
        case '09n':
            return "fas fa-cloud-showers-heavy";
            break;
        case '10n':
            return "fas fa-cloud-moon-rain";
            break;
        case '11n':
            return "fas fa-bolt";
            break;
        case '13n':
            return "fas fa-snowflake";
            break;
        case '50n':
            return "fas fa-water";
            break;
        default:
            break;
    }
}
?>