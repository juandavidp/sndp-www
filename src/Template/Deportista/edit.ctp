 <div class="box box-primary">
    <div class="box-header with-border">
    <h3 class="box-title">Editar deportista</h3>
  </div> 
 

    <form id="form2" class="form-horizontal" method="post" accept-charset="utf-8" action=<?php "/deportista/edit/".$deportista->iddeportista ?> >

      
      <div class="form-group">
        <label class="col-md-4 control-label" for="text">Nombre</label>
        <div class="col-md-4">
        <input id="nombre" name="nombre" type="text" placeholder="Introduzca el nombre" class="form-control"  value="<?= $deportista->nombre ?>" required>
      </div>
     </div>
    
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="text">Documento de identidad</label>
          <div class="col-md-4">
        <input id="docidentidad" name="docidentidad" type="text"  placeholder="Introduzca su cedula" class="form-control"   value="<?= $deportista->docidentidad ?>" required>
      </div>
        </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="date">Lugar de nacimiento</label>
         <div class="col-md-4">
        <input id="lugar_nacimiento" name="lugar_nacimiento" type="text"  placeholder="Introduzca su lugar de nacimiento" class="form-control"   value="<?= $deportista->lugar_nacimiento ?>" required>
      </div>
       </div>
       
       <div class="form-group">
        <label class="col-md-4 control-label" for="date">Fecha nacimiento</label>
         <div class="col-md-4">
        <input id="fecha_nacimiento" name="fecha_nacimiento" type="date"   value="<?php echo date($deportista->fecha_nacimiento);?>" required>
      </div>
       </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Categoria deportista</label>
          <div class="col-md-4">
        <select id="categoria" name="categoria" class="form-control">
          <option value="juvenil">Juvenil</option>
          <option value="junior">Junior</option>
          <option value="señior">Señior</option>
           <?php
              $opciones=["Juvenil","Junior","Señior"];
              for ($i = 0; $i < 3; $i++) {
                if($deportista->categoria==strtolower($opciones[$i]))
               echo "<option value='".strtolower($opciones[$i])."'selected>$opciones[$i]</option>";
              else
              echo "<option value='".strtolower($opciones[$i])."'>$opciones[$i]</option>";
             }
            ?>
        </select>
          </div>
      </div>
      
     
      
       <div class="form-group">
        <label  class="col-md-4 control-label" for="exampleInputEmail1">Ranking nacional</label>
          <div class="col-md-4">
        <input id="ranking_nacional" name="ranking_nacional" type="text" placeholder="Introduzca el ranking" class="form-control"   value="<?= $deportista->ranking_nacional ?>" required>
      </div>
       </div>
      
       <div class="form-group">
        <label class="col-md-4 control-label" for="exampleInputEmail1">Ranking internacional</label>
          <div class="col-md-4">
        <input id="ranking_internacional" name="ranking_internacional" type="text" placeholder="Introduzca el ranking" class="form-control"   value="<?= $deportista->ranking_internacional ?>" required>
      </div>
       </div>
      
       <div class="form-group">
        <label class="col-md-4 control-label" for="selectbasic">Asociación deportista</label>
          <div class="col-md-4">
        <select id="tipo_asociacion" name="tipo_asociacion" class="form-control">
          <option value="con-pase">Con pase</option>
          <option value="asocidado mensual">Asociado mensual</option>
          <option value="asocidado anual">Asociado anual</option>
           <?php
              $opciones=["Con pase","Asociado mensual","Asociado anual"];
              for ($i = 0; $i < 3; $i++) {
                if($deportista->tipo_asociacion==strtolower($opciones[$i]))
               echo "<option value='".strtolower($opciones[$i])."'selected>$opciones[$i]</option>";
              else
              echo "<option value='".strtolower($opciones[$i])."'>$opciones[$i]</option>";
             }
            ?>
        </select>
      </div>
       </div>
      
       <div class="form-group">
        <label  class="col-md-4 control-label" for="selectbasic">Deporte que practica</label>
          <div class="col-md-4">
        <select id="deporte_iddeporte" name="deporte_iddeporte" class="form-control">
        
           <?php foreach ($deportes as $deporte): ?>
           <option value="<?=  $deporte->iddeporte ?>"><?=  $deporte->nombre ?></option>
        <?php endforeach; ?>
        </select>
      </div>
       </div>
      
       
      <center>
    <div class="form-group">

        <input type="submit" value="Guardar">
      </div>
       </center>



 </div> 
