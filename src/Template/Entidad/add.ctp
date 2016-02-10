<div class="box box-primary">

    <div class="box-header with-border">
      <div id="msj-response"></div>
      <h3 class="box-title">Crear Entidad</h3>
    </div><!-- /.box-header -->
    <!-- form start -->
    <form id="miform" class="form-horizontal" method="post" accept-charset="utf-8" action="#" >

    <fieldset>

    <!-- Form Name -->


    <!-- Text input-->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Nombre</label>
     <div class="col-md-4">
     <input id="nombre" name="nombre" type="text" placeholder="ingrese nombre" class="form-control input-md" required>
     <?php /*echo $this->Form->input('nombre',['class' => 'form-control input-md','placeholder' => 'Ingrese nombre']);*/ ?>

     </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Tipo de entidad</label>
    <div class="col-md-4">
    <select id="tipo" name="tipo" class="form-control">
     <option value="departamental">Departamental</option>
     <option value="municipal-distrital">Municipal o distrital</option>
     <option value="club">Club</option>
     <option value="escuela">Escuela</option>
     <option value="instituto">Instituto</option>
    </select>
    </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="electbasic">Caracter economico</label>
    <div class="col-md-4">
    <select id="caracter" name="caracter" class="form-control">
     <option value="privada">Privada</option>
     <option value="publica">Publica</option>
     <option value="mixta">Mixta</option>
    </select>
    </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Dedicacion</label>
    <div class="col-md-4">
    <select id="dedicacion" name="dedicacion[]" class="form-control" multiple>

        <?php foreach ($dedicacion as $dedicaciones): ?>
           <option value="<?=  $dedicaciones->iddedicacion ?>"><?=  $dedicaciones->dedicacion ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Telefono</label>
     <div class="col-md-4">
     <input id="telefono" name="telefono" type="text" placeholder="numero telefonico" class="form-control input-md" required>

     </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Departamento</label>
    <div class="col-md-4">
    <select id="departamento" name="departamento" class="form-control input-md">
        	<option value="amazonas">Amazonas</option>
        	<option value="antioquia">Antioquia</option>
        	<option value="arauca">Arauca</option>
        	<option value="atlantico">Atl&aacute;ntico</option>
        	<option value="bolivar">Bolivar</option>
        	<option value="boyaca">Boyac&aacute;</option>
        	<option value="caldas">Caldas</option>
        	<option value="caqueta">Caquet&aacute;</option>
        	<option value="casanare">Casanare</option>
        	<option value="cauca">Cauca</option>
        	<option value="cesar">Cesar</option>
        	<option value="choco">Choc&oacute;</option>
        	<option value="cordoba">C&oacute;rdoba</option>
        	<option value="cundinamarca">Cundinamarca</option>
        	<option value="guainia">Guain&iacute;ia</option>
        	<option value="guaviare">Guaviare</option>
        	<option value="huila">Huila</option>
        	<option value="guajira">La Guajira</option>
        	<option value="magdalena">Magdalena</option>
        	<option value="meta">Meta</option>
        	<option value="narino">Nari&ntilde;o</option>
        	<option value="norte_santander">Norte de Santander</option>
        	<option value="putumayo">Putumayo</option>
        	<option value="quindio">Quind&iacute;io</option>
        	<option value="risaralda">Risaralda</option>
        	<option value="san_andres">San Andr&eacute;s y Providencia</option>
        	<option value="santander">Santander</option>
        	<option value="sucre">Sucre</option>
        	<option value="tolima">Tolima</option>
        	<option value="valle">Valle Del Cauca</option>
        	<option value="vaupes">Vaup&eacute;s</option>
        	<option value="vichada">Vichada</option>
        </select>

    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
      <label class="col-md-4 control-label">Municipio</label>
    <div class="col-md-4">
    <select id="municipio" name="municipio" class="form-control input-md">
    </select>

    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Dirección</label>
    <div class="col-md-4">
    <input id="direccion" name="direccion" type="text" placeholder="Dirección" class="form-control input-md" required>

    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Representante</label>
     <div class="col-md-4">

     <select id="representante" name="usuario_idusuario" class="form-control">

       <?php foreach ($usuario as $usuarios): ?>
          <option value="<?=  $usuarios->idusuario ?>"><?=  $usuarios->nombre ?></option>
       <?php endforeach; ?>
     </select>
     </div>
    </div>

    <input id="latitud" name="latitud"  type="hidden">
    <input id="longitud" name="longitud" type="hidden">

    <!-- mapa -->
    <div id="map"></div>

    <!-- Button (Double) -->
    <div class="form-group">
     <label class="col-md-4 control-label" for="button1id"></label>
     <div class="col-md-8">
       <input type="button" id="button1id" name="button1id" class="btn btn-primary" value="Aceptar">
       <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>
     </div>
    </div>

    </fieldset>

    </form>
</div><!-- /.box-body -->
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
            var marker = new google.maps.Marker({position:latlng,map:map,title:'title'});

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


<script type="text/javascript">
$( "#button1id" ).click(function() {
  $.post( "/entidad/add", $("#miform").serialize(),function( data ) {
      if (data.status=="success"){
        $("#msj-response").html("<div class='alert alert-success' role='alert'>"+data.message+"</div>");
      }
      else{
        $("#msj-response").html("<div class='alert alert-danger' role='alert'>"+data.message+"</div>");
      }
  },"json");
});
</script>

<script src="/js/departamentos_ciudades.js" charset="utf-8"></script>
