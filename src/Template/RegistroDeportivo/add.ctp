<div class="box box-primary">

    <div class="box-header with-border">
      <div id="msj-response"></div>
      <h3 class="box-title">Crear Registro Deportivo</h3>
    </div><!-- /.box-header -->
    
     <form id="miform" class="form-horizontal" method="post" accept-charset="utf-8" action="registroDeportivio/add" >

      <fieldset>
     
     <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Reconicimiento</label>
     <div class="col-md-4">
     <input id="reconocimiento" name="reconocimiento" type="text" placeholder="trofeo o posición " class="form-control input-md" required>
     

     </div>
    </div>
    
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Marca</label>
     <div class="col-md-4">
     <input id="marca" name="marca" type="number" step="0.1" placeholder="ingrese la marca del deportista " class="form-control input-md" required>
     

     </div>
    </div>
    
    <input id="deportista_iddeportista" name="deportista_iddeportista"  type="hidden" value="<?= $iddeportista?>">
    
    <div class="form-group">
     <label class="col-md-4 control-label" for="textinput">Información</label>
     <div class="col-md-4">
     <textarea  name="info" id="info "rows="10" cols="40" placeholder="ingrese aqui sus comentarios "></textarea>
     

     </div>
    </div>
     
      </fieldset>
      
  <center>
  <div class="form-group">
   <input type="submit" value="Guardar">
  </div>
   </center>
       
    </form>
    
  
</div><!-- /.box primary-->

  