

<div class="box box-primary">

    <div class="box-header with-border">
      <div id="msj-response"></div>
      <h3 class="box-title">Editar Escenario</h3>


    </div><!-- /.box-header -->
<form class="form-horizontal" id="miform" method="post" accept-charset="utf-8" action=<?php "/escenario/edit/".$escenario->idescenario ?>>



    <fieldset>




    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Nombre</label>
        <div class="col-md-4">
            <input id="nombre" name="nombre" type="text" placeholder="ingrese nombre" class="form-control input-md" value="<?= $escenario->nombre?>" required>
        </div>
    </div>


    <!-- <option value=""><?= $escenario->tipo?></option> -->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Tipo de Escenario</label>
        <div class="col-md-4">
        <select id="dedicacion_iddedicacion" name="dedicacion_iddedicacion" class="form-control">
            <?php foreach ($dedicacion as $dedicacions): ?>
                <option value="<?= $escenario->dedicacion_iddedicacion?>"><?=  $dedicacions->dedicacion?></option>
            <?php endforeach; ?>
                <?php foreach ($dedicaciones as $dedicaciones): ?>
                <option value="<?= $dedicaciones->iddedicacion?>"><?=  $dedicaciones->dedicacion?></option>
            <?php endforeach; ?>
        </select>
        </div>
    </div>


    <!-- Text input-->
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Actividad Deporte </label>
        <div class="col-md-4">
        <select id="deporte_iddeporte" name="deporte_iddeporte" disabled=false class="form-control">
            <?php foreach ($deporte_actividad as $deporte_actividades): ?>
                <option value="<?= $escenario->actividad_deporte?>"><?=  $deporte_actividades->nombre?></option>
            <?php endforeach; ?>
     </select>
        </div>
    </div>


    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="electbasic">Capacidad Publico</label>
        <div class="col-md-2">
            <input type="number" id="capacidad_publico" name="capacidad_publico" min="1" onKeyUp="sumarCapacidad()" class="form-control" value="<?= $escenario->capacidad_publico?>">
        </div>
    </div>

    <div class="form-group">
        <label class="col-md-4 control-label" for="electbasic">Capacidad Deportistas</label>
        <div class="col-md-2">
            <input type="number" id="capacidad_deportistas" name="capacidad_deportistas" min="1" onKeyUp="sumarCapacidad()" class="form-control" value="<?= $escenario->capacidad_deportistas?>">
        </div>
    </div>

   <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="electbasic">Capacidad Total</label>
        <div class="col-md-2">
                <input type="number" id="capacidad" name="capacidad" min="1" class="form-control" value="<?= $escenario->capacidad?>">
        </div>
    </div>



    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Estado</label>
        <div class="col-md-2">
            <input id="estado_escala" name="estado_escala" type="number" min="1" max="10" class="form-control" value="<?= $escenario->estado_escala?>" >
        </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">ObservaciOn</label>
        <div class="col-md-4">
            <input id="estado_comentario" name="estado_comentario" type="text" placeholder="ingrese observación del estado" class="form-control input-md" value="<?= $escenario->estado_comentario?>" required>
        </div>
    </div>
    
     <div class="form-group">
    <label class="col-md-4 control-label" for="textinput">Departamento</label>
    <div class="col-md-4">
    <select id="departamento" name="departamento" class="form-control input-md">
            
            <option><?=$escenario->departamento?></option>
            <option></option>
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
         <option><?= $escenario->municipio?></option>
    </select>
    </div>
    </div>
    
    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Dirección</label>
        <div class="col-md-4">
             <input id="direccion" name="direccion" type="text" placeholder="Dirección" class="form-control input-md" value="<?= $escenario->direccion?>" required>
        </div>
    </div>

<!--geolocalización -- >


<input id="latitud" name="latitud"  type="hidden" value="<?= $escenario->latitud?>"  >
<input id="longitud" name="longitud" type="hidden" value="<?= $escenario->longitud?>" >



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
 <input id="id" type="hidden" name="id" value="<?= $escenario->idescenario?>">

 </div>
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
 var myLatLong = {lat:<?= $escenario->latitud?>, lng:<?= $escenario->longitud?>};

map = new google.maps.Map(document.getElementById('map'), {
 zoom: 15,
 center : myLatLong
});

 var marker = new google.maps.Marker({position:myLatLong,map:map,title:'<?= $escenario->nombre?>
'});

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
$( "#dedicacion_iddedicacion" ).on('change', function() {
            seleccionado=$("#dedicacion_iddedicacion").val();
            $.ajax({  type: "POST",
                url:'/escenario/filtro',
                data: "seleccion ="+seleccionado,
                dataType: 'json',
                success: function( data ){
                document.getElementById("deporte_iddeporte").disabled = false;
                $("#deporte_iddeporte").html("");
                for (var i = 0; i<data.length; i++) {
                    $("#deporte_iddeporte").append('<option value="' + data[i].x.iddeporte + '">' + data[i].x.nombre + '</option>');
                };
                }
            });
        });

        $( "#button1id" ).click(function() {
          $.post( "/escenario/edit/"+$("#id").val(), $("#miform").serialize(),function( data ) {
              if (data.status=="success"){
                $("#msj-response").html("<div class='alert alert-success' role='alert'>"+data.message+"</div>");
              }
              else{
                $("#msj-response").html("<div class='alert alert-danger' role='alert'>"+data.message+"</div>");
              }
          },"json");
        });
</script>
<script type="text/javascript" src="/js/departamentos_ciudades.js" charset="utf-8"></script>
