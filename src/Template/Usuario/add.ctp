<div class="box box-primary">
  <div class="box-header with-border">
    <h3 class="box-title">Crear Usuario</h3>
  </div><!-- /.box-header -->
  <!-- form start -->
  <form id="miform" method="post" accept-charset="utf-8" action="/usuario/add" >
    <div class="box-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Introduzca su nombre">
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Cedula</label>
        <input type="text" name="cedula" class="form-control" id="exampleInputEmail1" placeholder="Introduzca su cedula">
      </div>
      <!-- select -->
      <div class="form-group">
        <label>Tipo</label>
        <select name="tipo" class="form-control">
          <option value="admin_entidad">Administrador Entidad</option>
          <option value="admin">Admin</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Introduzca su password">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Confirmar Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Confirme su password">
      </div>
      <div class="form-group">

        <input type="submit" value="Crear">
      </div>


    </div><!-- /.box-body -->
