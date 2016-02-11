 <div class="box box-primary">
    <div class="box-header with-border">
    <h3 class="box-title">Editar deportista</h3>
  </div> 

    <form id="miform" method="post" accept-charset="utf-8" action=<?php "/deportista/edit/".$deportista->iddeportista ?> >
  
  <fieldset>
  
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control input-md" id="nombre" placeholder="Introduzca el nombre" value="<?= $deportista->nombre ?>" required>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Documento de identidad</label>
        <input type="text" name="docidentidad" class="form-control" id="docidentidad" placeholder="Introduzca su cedula" value="<?= $deportista->docidentidad ?>" required>
      </div>
      
      
      <div class="form-group">
        <label for="exampleInputEmail1">Lugar de nacimiento</label>
        <input type="text" name="lugar_nacimiento" class="form-control" id="lugar_nacimiento" placeholder="Introduzca su lugar de nacimiento" value="<?= $deportista->lugar_nacimiento ?>" required>
      </div>
     
     <div class="form-group">
        <label for="selectbasic">Categoria deportista</label>
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
      
       <div class="form-group">
        <label for="exampleInputEmail1">Ranking nacional</label>
        <input type="text" name="ranking_nacional" class="form-control" id="ranking_nacional" placeholder="Introduzca el ranking" value="<?= $deportista->ranking_nacional ?>" required>
      </div>
      
       <div class="form-group">
        <label for="exampleInputEmail1">Ranking internacional</label>
        <input type="text" name="ranking_internacional" class="form-control" id="ranking_internacional" placeholder="Introduzca el ranking" value="<?= $deportista->ranking_internacional ?>" required>
      </div>
      
      <div class="form-group">
        <label for="selectbasic">Asociación deportista</label>
        <select id="tipo_asociacion" name="tipo_asociacion" class="form-control">
          <option value="con pase">Con pase</option>
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
      
      <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Deporte</label>
    <select id="deporte_iddeporte" name="deporte_iddeporte" class="form-control" multiple>

        <?php foreach ($deportes as $deporte): ?>
          <?php if ($deporte->iddeporte==$deportista->deporte_iddeporte){ ?>
           <option value="<?=  $deporte->iddeporte ?> selected>"><?=  $deporte->nombre ?></option>
           <?php } 
           else {?><option value="<?=  $deporte->iddeporte ?>"><?=  $deporte->nombre ?></option>
        <?php} endforeach; ?>
      </select>
    </div>
      
     <div class="form-group">
 <label class="col-md-4 control-label" for="button1id"></label>
 <div class="col-md-8">
   <button id="button1id" name="button1id" class="btn btn-primary">Aceptar</button>
   <button id="button2id" name="button2id" class="btn btn-danger">Cancelar</button>

 </div>
</div>
  
</fieldset>
</form>




