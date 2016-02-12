    <div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Crear Deportista</h3>
  </div> 
   </div>
  
  <form id="miform1" method="post" accept-charset="utf-8" action="/deportista/add" >
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduzca el nombre">
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1">Documento de identidad</label>
        <input type="text" name="docidentidad" class="form-control" id="docidentidad" placeholder="Introduzca su cedula">
      </div>
      
    
      <div class="form-group">
      <label>Fecha de nacimiento</label>  
       <input type="date" name="fecha_nacimiento" min="1950-01-01" max="2000-12-31"><br>
       </div>
      
      
      <div class="form-group">
        <label for="exampleInputEmail1">Lugar de nacimiento</label>
        <input type="text" name="lugar_nacimiento" class="form-control" id="lugar_nacimiento" placeholder="Introduzca su lugar de nacimiento">
      </div>
     
     <div class="form-group">
        <label for="selectbasic">Categoria deportista</label>
        <select id="categoria" name="categoria" class="form-control">
          <option value="juvenil">Juvenil</option>
          <option value="junior">Junior</option>
          <option value="señior">Señior</option>
        </select>
      </div>
      
       <div class="form-group">
        <label for="exampleInputEmail1">Ranking nacional</label>
        <input type="text" name="ranking_nacional" class="form-control" id="ranking_nacional" placeholder="Introduzca el ranking">
      </div>
      
       <div class="form-group">
        <label for="exampleInputEmail1">Ranking internacional</label>
        <input type="text" name="ranking_internacional" class="form-control" id="ranking_internacional" placeholder="Introduzca el ranking">
      </div>
      
      <div class="form-group">
        <label for="selectbasic">Asociación deportista</label>
        <select id="tipo_asociacion" name="tipo_asociacion" class="form-control">
          <option value="con pase">Con pase</option>
          <option value="asocidado mensual">Asociado mensual</option>
          <option value="asocidado anual">Asociado anual</option>
        </select>
      </div>
      
      <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Deporte que practica</label>
    <select id="deporte_iddeporte" name="deporte_iddeporte" class="form-control" multiple>

        <?php foreach ($deportes as $deporte): ?>
           <option value="<?=  $deporte->iddeporte ?>"><?=  $deporte->nombre ?></option>
        <?php endforeach; ?>
      </select>
    </div>
      
      <div class="form-group">

        <input type="submit" value="Crear">
      </div>


    </div>
  
  
  
  
