<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqyBrY5iys4LxT5OuhFDT1ZVwgHLtu6-E"></script>-->

<script src="https://unpkg.com/location-picker/dist/location-picker.min.js"></script>
<style type="text/css">
    #map {
    width: 100%;
    height: 480px;
    }
</style>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">Pedidos realizados por ubicación</div>
            <div class="card-body">
                <div class="row">    
                    <div class="col-8">                        
                        <p>Lista de encargos para realizar en dos días.</p>
                        <div style="width: 100%"><iframe width="100%" height="600" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://transport.test/verrr"></iframe></div>
                    </div>
                    <div class="col-4">
                        <?php $pedidos = DB::table('pedidos')->orderBy('id')->where('estado', 'Pendiente')->get(); ?>

                        @if (count($pedidos) == 0)
                            No hay pedidos pendientes hasta ahora

                            <h4>'C' es la ubicación actual.</h4>
                        @else



                        @if (count($pedidos) < 1)
                        <p>Donde 'C' es la ubicación actual.</p>
                        @else
                        <p>Donde 'B' es la ubicación actual.</p>
                        @endif
                        <?php $letra = 'C'; 
                        $contar = count($pedidos);
                        ?>
                        <form action="{{action('pedidosController@realizar')}}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="seleccionar">Selecciona la ubicación en donde se realizará una acción</label>
                            <select name="ubicacion" id="ubicacion" class="form-control">
                                <option value="">-- Selecciona --</option>
                                <?php 
                                
                                $contador = 0;
                                foreach ($pedidos as $pedido){ ?>
                                    <option value="{{$pedido->id}}">
                                        {{$letra}} 
                                        @php $letra = chr(ord($letra)+1);                                     
                                        @endphp
                                        <?php 
                                        if ($contador == $contar){
                                            $letra = chr(ord($letra)+1);
                                        }
                                        ?>
                                        {{$pedido->encabezado}}
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                        <button type="submit">Completar tramo</button>
                        </form>




                        @endif

                        

                    </div>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnaDcE_KFlkhqBOoKXfiDhoka59nVx5Ws"></script>