<form class="form-horizontal" method="post" accept-charset="utf-8" action="/escenario/add" >



    <fieldset>

    <!-- Form Name -->

    <legend>Crear Escenario</legend>


    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nombre</label>
        <div class="col-md-4">
            <input id="nombre" name="nombre" type="text" placeholder="ingrese nombre" class="form-control input-md" required>
        </div>
    </div>

    <!-- DEBE TRAER DE LA BD LOS TIPO DE ESCENARIO-->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Tipo de Escenario</label>
        <div class="col-md-4">
            <select id="tipo" name="tipo" class="form-control">
            <option value="">--Selecciona un tipo de escenario--</option>
         <?php foreach ($dedicacion as $dedicaciones): ?>
                <option value="<?=  $dedicaciones->iddedicacion ?>"><?=  $dedicaciones->dedicacion ?></option>
            <?php endforeach; ?>
            </select>
        </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Actividad Deporte </label>
        <div class="col-md-4">
        <select id="actividad_deporte" name="actividad_deporte" onchange="filtrarActividades()" class="form-control">
            <option value="">--Selecciona una actividad--</option>
         <?php foreach ($deportes_por_dedicacion as $deportes_por_dedicaciones): ?>
                <option value="<?=  $deportes_por_dedicaciones->deporte_iddeporte ?>"><?=  $deportes_por_dedicaciones->deporte_iddeporte ?></option>
            <?php endforeach; ?>
     </select>
        </div>
    </div>


    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="electbasic">Capacidad Publico</label>
        <div class="col-md-2">
            <input type="number" id="capacidad_publico" name="capacidad_publico" min="1" onKeyUp="sumarCapacidad()" class="form-control">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="electbasic">Capacidad Deportistas</label>
        <div class="col-md-2">
            <input type="number" id="capacidad_deportistas" name="capacidad_deportistas" min="1" onKeyUp="sumarCapacidad()" class="form-control">
        </div>
    </div>

   <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="electbasic">Capacidad Total</label>
        <div class="col-md-2">
                <input type="number" id="capacidad" name="capacidad" class="form-control">
        </div>
    </div>


    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Estado</label>
        <div class="col-md-2">
            <input id="estado_escala" name="estado_escala" type="number" min="1" max="10" class="form-control">
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">ObservaciOn</label>
        <div class="col-md-4">
            <input id="estado_comentario" name="estado_comentario" type="text" placeholder="ingrese observación del estado" class="form-control input-md" required>
        </div>
    </div>


    <!-- Text input ENTIDAD TOMA POR DEFAULT la entidad relacionada con el usuario que esta ingresando la informaciOn-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Departamento</label>
    <div class="col-md-4">
    <input id="departamento" name="departamento" type="text" placeholder="Departamento" class="form-control input-md" required>

    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Municipio</label>
    <div class="col-md-4">
    <input id="municipio" name="municipio" type="text" placeholder="Municipio" class="form-control input-md" required>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Dirección</label>
        <div class="col-md-4">
             <input id="direccion" name="direccion" type="text" placeholder="Dirección" class="form-control input-md" required>
        </div>
    </div>


    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Entidad Responsable</label>
        <div class="col-md-4">
        <select id="entidad_idEntidad" name="entidad_idEntidad" class="form-control">
            <option value="">--Selecciona Entidad Responsable del Mantenimiento--</option>
             <?php foreach ($entidad as $entidades): ?>
              <option value="<?=  $entidades->idEntidad ?>"><?=  $entidades->nombre ?></option>
            <?php endforeach; ?>
        </select>
        </div>
    </div>




<!-- mapa -->
<div id="map"></div>
    <script type="text/javascript">

    function buscar_direccion(){

        var address = $('#departamento').val()+" "+$('#municipio').val()+" "+$('#direccion').val();
        // I create a new google maps object to handle the request and we pass the address to it
    var geoCoder = new google.maps.Geocoder(address)
        // a new object for the request I called "request" , you can put there other parameters to specify a better search (check google api doc for details) ,
        // on this example im going to add just the address
    var request = {address:address};
        // I make the request
    geoCoder.geocode(request, function(result, status){
                // as a result i get two parameters , result and status.
                // results is an  array tha contenis objects with the results founds for the search made it.
                // to simplify the example i take only the first result "result[0]" but you can use more that one if you want

                // So , using the first result I need to create a  latlng object to be pass later to the map
                var latlng = new google.maps.LatLng(result[0].geometry.location.lat(), result[0].geometry.location.lng());

                $('#latitud').val(result[0].geometry.location.lat());
                $('#longitud').val(result[0].geometry.location.lng());

        // some initial values to the map
        var myOptions = {
          zoom: 15,
          center: latlng,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        };

             // the map is created with all the information
               var map = new google.maps.Map(document.getElementById('map'),myOptions);

             // an extra step is need it to add the mark pointing to the place selected.
            var marker = new google.maps.Marker({position:latlng,map:map,title:'<?= $escenario->nombre?>'});

    })
  }


    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            center: {lat:3.435234, lng:-76.5292233},
            zoom: 13
        });

        $('input[name=direccion]').change(function() {
            buscar_direccion();
        });
    }
    </script>

    <script async defer
        src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAhbxs63blYtEmX7yY0h9KtBnao0_EsUQo&callback=initMap">
    </script>

    <script type="text/ecmascript">
    function sumarCapacidad(){
        var n1 = Number(document.getElementById("capacidad_publico").value);
        var n2 = Number(document.getElementById("capacidad_deportistas").value);
        var n3 = (parseInt (n1) + parseInt (n2));
        capacidad.value = (n3);
        }
    </script>

    <script type="text/javascript">

        function filtrarActividades(){
          alert (tipo.value);
        }

    </script>


<!-- Button (Double) -->
<div class="form-group">
 <label class="col-md-4 control-label" for="button1id"></label>
 <div class="col-md-8">
   <button id="button1id" name="button1id" class="btn btn-primary">Aceptar</button>
   <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>

 </div>
</div>

    </fieldset>
 </form>



<script type="text/javascript">
$( "#tipo" ).on('change', function() {
            seleccionado=$("#tipo").val();
            alert (seleccionado);
  $.ajax({  type: "POST",
            url:'/escenario/prueba',
            data: "seleccion ="+seleccionado,
            dataType: 'json',
            success: function( data ){

            }
        });
    });
</script>
