

<div class="box box-primary">
        <div class="text-center">
              <h1><?= h($escenario->nombre) ?></h1>
        </div>

        <div class="form-group">
            <div class="col-md-2">
            <h3><span class="label label-info">Tipo</span></h3>
            </div>
            <div class="col-md-3">
            <?php foreach ($dedicacion as $dedicacions): ?>                
            <h3><?= h($dedicacions->dedicacion) ?></h3>            
            <?php endforeach; ?>
            </div>
            <div class="col-md-3">
            <h3><span class="label label-info">Actividad</span></h3>
            </div>
            <div class="col-md-3">
            <?php foreach ($deporte_actividad as $deporte_actividades): ?>                
            <h3><?= h($deporte_actividades->nombre) ?></h3>
            <?php endforeach; ?>
            </div>
        </div>


    <div class="row">
        <div class="col-md-8">
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <h3 class="panel-title">Capacidad del Escenario</h3>
                    </div>
                    <div class="panel-body">
                            <label class="col-sm-1 control-label" for="textinput">Publico:</label>
                            <div class="col-md-1"><?= h($escenario->capacidad_publico) ?></div>
                            <label class="col-md-2 control-label" for="textinput">Deportistas:</label>
                            <div class="col-md-1"><?= h($escenario->capacidad_deportistas) ?></div>
                            <label class="col-md-1 control-label" for="textinput">Total:</label>
                            <div class="col-md-1"><?= h($escenario->capacidad) ?></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <h3 class="panel-title">Estado del Escenario</h3>
                    </div>
                    <div class="panel-body">
                            <label class="col-sm-2 control-label" for="textinput">Observación:</label>
                            <div class="col-md-3"><?= h($escenario->estado_comentario) ?></div>
                            <label class="col-md-2 control-label" for="textinput">Calificación:</label>
                            <div class="col-md-1"><?= h($escenario->estado_escala) ?></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <h3 class="panel-title">Ubicación del escenario</h3>
                    </div>
                    <div class="panel-body">
                            <label class="col-sm-2 control-label" for="textinput">Departamento:</label>
                            <div class="col-md-2"><?= h($escenario->departamento) ?></div>
                            <label class="col-md-1 control-label" for="textinput">Ciudad:</label>
                            <div class="col-md-2"><?= h($escenario->municipio) ?></div>
                            <label class="col-md-2 control-label" for="textinput">Dirección:</label>
                            <div class="col-md-3"><?= h($escenario->direccion) ?></div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading">
                    <h3 class="panel-title">Entidad Responsable</h3>
                    </div>
                    <div class="panel-body">
                    <?php foreach ($entidad as $entidades): ?>                
                         <h3><?= h($entidades->nombre) ?></h3>            
                    <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>

                       <!-- mapa -->
        <div class="col-md-4" id="map2"></div>
    </div>
</div>

<script type="text/javascript">
    var map;
    function initMap() {
        var myLatLong = {lat:<?= $escenario->latitud?>, lng:<?= $escenario->longitud?>};   
        map = new google.maps.Map(document.getElementById('map2'), {
            zoom: 15,
            center : myLatLong
            });
        var marker = new google.maps.Marker({position:myLatLong,map:map,title:'<?= $escenario->nombre?>'});  
    }
</script>

<script async defer
    src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAhbxs63blYtEmX7yY0h9KtBnao0_EsUQo&callback=initMap">
</script>