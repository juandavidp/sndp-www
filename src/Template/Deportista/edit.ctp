<div class="box box-primary">
  <div class="box-header with-border">
    <div id="msj-response"></div>
    <h3 class="box-title">Crear Deportista</h3>
  </div> 
   
  
  <form id="miform1" class="form-horizontal" method="post" accept-charset="utf-8" action="/deportista/add" >
    
     
      <div class="form-group">
        <label  class="col-md-4 control-label" for="textinput">Nombre</label>
        <div class="col-md-4">
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduzca el nombre" value="<?= $deportista->nombre?>" required>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Documento de identidad</label>
        <div class="col-md-4">
        <input type="text" name="docidentidad" class="form-control" id="docidentidad" placeholder="Introduzca su cedula" value="<?= $deportista->iddeportista?>" required>
        </div>
      </div>
      
      
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Lugar de nacimiento</label>
         <div class="col-md-4">
        <input type="text" name="lugar_nacimiento" class="form-control" id="lugar_nacimiento" placeholder="Introduzca su lugar de nacimiento" value="<?= $deportista->lugar_nacimiento?>" required>
         </div>
      </div>
     
     <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Categoria deportista</label>
         <div class="col-md-4">
        <select id="categoria" name="categoria" class="form-control">
         
        
          <option><?=  $deportista->categoria?></option>
         
          <option></option>
          <option value="juvenil">Juvenil</option>
          <option value="junior">Junior</option>
          <option value="señior">Señior</option>
          <option value="amateur">Amateur</option>
          <option value="profesional">Profesional</option>
          
        </select>
         </div>
      </div>
      
       <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Ranking nacional</label>
         <div class="col-md-4">
        <input type="text" name="ranking_nacional" class="form-control" id="ranking_nacional" placeholder="Introduzca el ranking" value="<?= $deportista->ranking_nacional?>" required>
         </div>
      </div>
      
       <div class="form-group">
        <label class="col-md-4 control-label"  for="textinput">Ranking internacional</label>
        <div class="col-md-4">
        <input type="text" name="ranking_internacional" class="form-control" id="ranking_internacional" placeholder="Introduzca el ranking" value="<?= $deportista->ranking_internacional?>" required>
         </div>
      </div>
      
      <div class="form-group">
        <label  class="col-md-4 control-label"  for="selectbasic">Asociación deportista</label>
         <div class="col-md-4">
        <select id="tipo_asociacion" name="tipo_asociacion" class="form-control">
         
          <option><?=  $deportista->tipo_asociacion?></option>
          <option></option>
          <option value="con pase">Con pase</option>
          <option value="asocidado mensual">Asociado mensual</option>
          <option value="asocidado anual">Asociado anual</option>
        </select>
          </div>
      </div>
      
      
      <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Deporte que practica</label>
     <div class="col-md-4">
    <select id="deporte_iddeporte" name="deporte_iddeporte" class="form-control" >
       
       
        <?php foreach ($deporte_actividad as $deporte_actividads): ?>
                <option value="<?= $deportista->deporte_iddeporte?>"><?=  $deporte_actividads->nombre?></option>
            <?php endforeach; ?>
            <option></option>
            <?php foreach ($deporte_actividades as $deporte_actividades): ?>
               <option value="<?= $deporte_actividades->iddeporte?>"><?=  $deporte_actividades->nombre?></option>
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


