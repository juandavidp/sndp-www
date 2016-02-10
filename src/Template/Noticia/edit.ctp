
<?= $this->Form->create($noticium,['type' => 'file','class' => 'form-horizontal',]) ?>
<fieldset>

<!-- Form Name -->

<legend>Editar Noticia</legend>


<!-- Text input-->
<div class="form-group">
 <label class="col-md-4 control-label" for="textinput">Titulo</label>
 <div class="col-md-4">
 <input id="titulo" name="titulo" type="text" placeholder="Ingrese titulo" class="form-control input-md" value="<?= $noticium->titulo ?>" required>
 <?php /*echo $this->Form->input('nombre',['class' => 'form-control input-md','placeholder' => 'Ingrese nombre']);*/ ?>

 </div>
</div>


<!-- date-->
<div class="form-group">
 <label class="col-md-4 control-label" for="date">Fecha</label>
 <div class="col-md-4">
 <input id="datepicker" type="date" name="fecha" type="date"  class="form-control input-md" value="<?= $noticium->fecha ?>" required>

 </div>
</div>


<!-- file-->
<div class="form-group">
 <label class="col-md-4 control-label" for="foto">Foto</label>
 <div class="col-md-4">
 <input type="file" name="foto" class="input-file" >

 </div>
</div>


<!-- Textarea -->
 <div class="form-group">
   <label class="col-md-4 control-label" for="news">Noticia</label>
   <div class="col-md-4">
     <textarea class="form-control" placeholder="news" id="texto_noticia" name="texto_noticia" value="<?= $noticium->texto_noticia ?>"></textarea>
   </div>
 </div>

 <div class="form-group">
  <label class="col-md-4 control-label" for="textinput">Entidad Responsable</label>
     <div class="col-md-4">
     <select id="entidad_idEntidad" name="entidad_idEntidad" class="form-control">
         <option value="">--Selecciona Entidad Responsable del Mantenimiento--</option>
          <?php foreach ($entidad as $entidades): ?>
           <option value="<?=  $entidades->idEntidad ?>"><?=  $entidades->nombre ?></option>
         <?php endforeach; ?>
     </select>
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
