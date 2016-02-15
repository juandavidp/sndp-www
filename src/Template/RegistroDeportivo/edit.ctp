

<div class="box box-primary">
   
  <div class="box-header with-border">
    <div id="msj-response"></div>
    <h3 class="box-title">Editar Deportista</h3>
  </div> 
  
  <form id="miform1" class="form-horizontal" method="post" accept-charset="utf-8" action=<?php "/registroDeportivo/edit/".$registroDeportivo->idregistro_deportivo ?> >
      
      <div class="form-group">
        <label  class="col-md-4 control-label" for="textinput">Reconocimiento</label>
        <div class="col-md-4">
        <input type="text" name="reconocimiento" class="form-control" id="reconocimiento" placeholder="Introduzca  el reconocimiento" value="<?= $registroDeportivo->reconocimiento?>" required>
        </div>
      </div>
      
      <div class="form-group">
        <label class="col-md-4 control-label" for="textinput">Marca</label>
        <div class="col-md-4">
        <input type="number" name="marca" class="form-control" id="marca" placeholder="ingrese la marca" value="<?= $registroDeportivo->marca?>" required>
        </div>
      </div>
      
    
      
     <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Información</label>
     <div class="col-md-4">
     <textarea  name="info" id="info "rows="10" cols="40" placeholder="ingrese aqui sus comentarios"> <?=  $registroDeportivo->info?></textarea>
     

     </div>
    </div>
      
      <center>
      <div class="form-group">
        <input type="submit" value="Crear">
      </div>
       </center>


    
  </form>
  
    </div>
  
