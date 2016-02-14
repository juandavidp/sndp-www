<div class="box box-primary">
  <div class="box-header with-border">
    <div id="msj-response"></div>
    <h3 class="box-title">Crear Deportista</h3>
  </div> 
   
  
  <form id="miform1" class="form-horizontal" method="post" accept-charset="utf-8" action="/deportista/add" >
    
     
      <div class="form-group">
        <label  class="col-md-4 control-label" for="textinput">Nombre</label>
        <div class="col-md-4">
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduzca el nombre">
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Documento de identidad</label>
        <div class="col-md-4">
        <input type="text" name="docidentidad" class="form-control" id="docidentidad" placeholder="Introduzca su cedula">
        </div>
      </div>
      
    
      <div class="form-group">
      <label class="col-md-4 control-label" for="textinput">Fecha de nacimiento</label>  
       <div class="col-md-4">
       <input type="date" name="fecha_nacimiento"  step="1" min="1950-01-01" max="2000-12-31"><br>
       </div>
      </div>
      
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Lugar de nacimiento</label>
         <div class="col-md-4">
        <input type="text" name="lugar_nacimiento" class="form-control" id="lugar_nacimiento" placeholder="Introduzca su lugar de nacimiento">
         </div>
      </div>
     
     <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Categoria deportista</label>
         <div class="col-md-4">
        <select id="categoria" name="categoria" class="form-control">
          <option value="juvenil">Juvenil</option>
          <option value="junior">Junior</option>
          <option value="señior">Señior</option>
        </select>
         </div>
      </div>
      
       <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Ranking nacional</label>
         <div class="col-md-4">
        <input type="text" name="ranking_nacional" class="form-control" id="ranking_nacional" placeholder="Introduzca el ranking">
         </div>
      </div>
      
       <div class="form-group">
        <label class="col-md-4 control-label"  for="textinput">Ranking internacional</label>
        <div class="col-md-4">
        <input type="text" name="ranking_internacional" class="form-control" id="ranking_internacional" placeholder="Introduzca el ranking">
         </div>
      </div>
      
      <div class="form-group">
        <label  class="col-md-4 control-label"  for="selectbasic">Asociación deportista</label>
         <div class="col-md-4">
        <select id="tipo_asociacion" name="tipo_asociacion" class="form-control">
          <option value="con pase">Con pase</option>
          <option value="asocidado mensual">Asociado mensual</option>
          <option value="asocidado anual">Asociado anual</option>
        </select>
          </div>
      </div>
      
      
      <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Deporte que practica</label>
     <div class="col-md-4">
    <select id="deporte_iddeporte" name="deporte_iddeporte" class="form-control" multiple>

        <?php foreach ($deportes as $deporte): ?>
           <option value="<?=  $deporte->iddeporte ?>"><?=  $deporte->nombre ?></option>
        <?php endforeach; ?>
      </select>
       </div>
    </div>
    
     <fieldset>
      
       <center>
      <div class="form-group">
        <input type="submit" value="Crear">
      </div>
       </center>


    
  </form>
  
  
  
</div>