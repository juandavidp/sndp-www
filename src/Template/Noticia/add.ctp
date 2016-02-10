<form class="form-horizontal" method="post" accept-charset="utf-8" action="/noticia/add" enctype="multipart/form-data">
<fieldset>

<!-- Form Name -->

<legend>Crear Noticia</legend>


<!-- Text input-->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Titulo</label>
 <div class="col-md-4">
 <input id="titulo" name="titulo" type="text" placeholder="Ingrese titulo" class="form-control input-md" required>
 <?php /*echo $this->Form->input('nombre',['class' => 'form-control input-md','placeholder' => 'Ingrese nombre']);*/ ?>

 </div>
</div>


<!-- date-->
<div class="form-group">
 <label class="col-md-4 control-label" for="date">Fecha</label>
 <div class="col-md-4">
 <input id="datepicker" type="date" name="fecha" type="date"  class="form-control input-md" required>

 </div>
</div>


<!-- file-->
<div class="form-group">
 <label class="col-md-4 control-label" for="foto">Foto</label>
 <div class="col-md-4">
 <input type="file" name="foto" class="input-file" required>

 </div>
</div>


<!-- Textarea -->
 <div class="form-group">
   <label class="col-md-4 control-label" for="news">Noticia</label>
   <div class="col-md-4">
     <textarea class="form-control" placeholder="news" id="texto_noticia" name="texto_noticia"></textarea>
   </div>
 </div>



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


<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
<script>
$(function() {
  $("#datepicker").datepicker({ dateFormat: 'yy-mm-dd' })
  $( "#datepicker" ).datepicker();
});
</script>
