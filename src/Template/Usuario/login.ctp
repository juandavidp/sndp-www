<div class="login-box">
   <p><img src="http://epiandes.uniandes.edu.co/wp-content/uploads/COLDEPORTES.jpg" width="350px" height="250px" alt="Bienvenidos" /></p>
   
    
    <div class="login-box-body">
     
      <?= $this->Flash->render('auth') ?>
      <?= $this->Form->create() ?>
        <div class="form-group has-feedback">
          <input type="cedula" name="cedula" class="form-control" placeholder="Cedula">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="passworgitd" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-2">
           
            </div>
          </div><!-- /.col -->
          <center>
          
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          
           </center> 
        </div>
      </form>

    
      

    </div><!-- /.login-box-body -->
  </div><!-- /.login-box -->
