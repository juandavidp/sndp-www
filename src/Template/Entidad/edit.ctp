<form class="form-horizontal" method="post" accept-charset="utf-8" action=<?php "/entidad/edit/".$entidad->idEntidad ?> >
<fieldset>

<!-- Form Name -->

<legend>Editar Entidad</legend>

<!-- Text input-->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Nombre</label>
 <div class="col-md-4">
 <input id="nombre" name="nombre" type="text" placeholder="ingrese nombre" class="form-control input-md" value="<?= $entidad->nombre ?>" required>

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
 <?php
   $opciones=["Departamental","Municipal-Distrital","Club","Escuela","Instituto"];
   for ($i = 0; $i < 3; $i++) {
     if($entidad->tipo==strtolower($opciones[$i]))
     echo "<option value='".strtolower($opciones[$i])."'selected>$opciones[$i]</option>";
     else
     echo "<option value='".strtolower($opciones[$i])."'>$opciones[$i]</option>";
   }
  ?>
</select>
</div>
</div>

<!-- Select Basic -->
<div class="form-group">
<label class="col-md-4 control-label" for="electbasic">Caracter economico</label>
<div class="col-md-4">
<select id="caracter" name="caracter" class="form-control">
<?php
  $opciones=["Privada","Publica","Mixta"];
  for ($i = 0; $i < 3; $i++) {
    if($entidad->caracter==strtolower($opciones[$i]))
    echo "<option value='".strtolower($opciones[$i])."'selected>$opciones[$i]</option>";
    else
    echo "<option value='".strtolower($opciones[$i])."'>$opciones[$i]</option>";
  }
 ?>
</select>
</div>
</div>


<!-- Select Basic -->
<div class="form-group">
<label class="col-md-4 control-label" for="selectbasic">Dedicacion</label>
<div class="col-md-4">
<select id="dedicacion" name="dedicacion" class="form-control" multiple>
  <?php foreach ($dedicacion as $dedicaciones): ?>
     <option value="<?=  $dedicaciones->iddedicacion ?>"><?=  $dedicaciones->dedicacion ?></option>
  <?php endforeach; ?>
</select>
</select>
</div>
</div>

<!-- Text input-->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Telefono</label>
 <div class="col-md-4">
 <input id="telefono" name="telefono" type="text" placeholder="numero telefonico" class="form-control input-md" value="<?= $entidad->telefono ?>" required>

 </div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Departamento</label>
<div class="col-md-4">
<input id="departamento" name="departamento" type="text" placeholder="Departamento" class="form-control input-md" value="<?= $entidad->departamento ?>" required>

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Municipio</label>
<div class="col-md-4">
<input id="municipio" name="municipio" type="text" placeholder="Municipio" class="form-control input-md" value="<?= $entidad->municipio ?>" required>

</div>
</div>

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="textinput">Dirección</label>
<div class="col-md-4">
<input id="direccion" name="direccion" type="text" placeholder="Dirección" class="form-control input-md" value="<?= $entidad->direccion ?>" required>

</div>
</div>

<!-- Text input-->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Representante</label>
 <div class="col-md-4">

 <select id="representante" name="usuario_idusuario" class="form-control">

   <?php foreach ($usuario as $usuarios): ?> 
        <?php if ($usuarios->idusuario==$entidad->usuario_idusuario){ ?>
          <option value="<?=  $usuarios->idusuario ?> selected>"><?=  $usuarios->nombre ?></option>    
        <?php } 
        else {?><option value="<?=  $usuarios->idusuario ?>"><?=  $usuarios->nombre ?></option>
   <?php } endforeach; ?>
 </select>
 </div>
</div>

<input id="latitud" name="latitud"  type="hidden" value="<?= $entidad->latitud ?>">
<input id="longitud" name="longitud" type="hidden" value="<?= $entidad->longitud ?>">

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
            var marker = new google.maps.Marker({position:latlng,map:map,title:'title'});

    })
  }


var map;
function initMap() {
    var myLatLong = {lat:<?= $entidad->latitud?>, lng:<?= $entidad->longitud?>};
    
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 15,
    center : myLatLong
  });

    var marker = new google.maps.Marker({position:myLatLong,map:map,title:'<?= $entidad->nombre?>
'});  

$('input[name=direccion]').change(function() {
    buscar_direccion();
});

}

    </script>
    <script async defer
      src="https://maps.googleapis.com/maps/api/js?key= AIzaSyAhbxs63blYtEmX7yY0h9KtBnao0_EsUQo&callback=initMap">
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
