<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SNDP</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="/dashboard/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/dashboard/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="/dashboard/dist/css/custom.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
         folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="/dashboard/dist/css/skins/_all-skins.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery 2.1.4 -->
    <script src="/dashboard/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="/dashboard/bootstrap/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="/dashboard/plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="/dashboard/dist/js/app.min.js"></script>
    <!-- Sparkline -->
    <script src="/dashboard/plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="/dashboard/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="/dashboard/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- SlimScroll 1.3.0 -->
    <script src="/dashboard/plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- ChartJS 1.0.1 -->
    <script src="/dashboard/plugins/chartjs/Chart.min.js"></script>
    <!-- AdminLTE /dashboard demo (This is only for demo purposes) -->
    <script src="/dashboard/dist/js/pages//dashboard2.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="/dashboard/dist/js/demo.js"></script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <?php
       $this->Flash->render('auth');
      if(@$_SESSION['Auth']['User']['cedula']!=""){
    ?>
    <div class="wrapper">

      <header class="main-header">

        <!-- Logo -->
        <a href="index.html" class="logo">
          <!-- mini logo for sidebar mini 50x50 pixels -->
          <span class="logo-mini"><b>A</b>LT</span>
          <!-- logo for regular state and mobile devices -->
          <span class="logo-lg"><img src="/dashboard/dist/img/logo.png" alt="Sistema nacional de deporte"><b>SNDP</b></span>
        </a>

        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
          </a>
          <!-- Navbar Right Menu -->
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

            <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="/dashboard/dist/img/user.jpg" class="user-image" alt="User Image">
                  <span class="hidden-xs">Administrador</span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="/dashboard/dist/img/user.jpg" class="img-circle" alt="User Image">
                    <p>
                      Admin - Administrador
                    </p>
                  </li>


                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="#" class="btn btn-default btn-flat">Configuración</a>
                    </div>
                    <div class="pull-right">
                      <?= $this->Html->link(__('Cerrar Sesión'), ['class'=>'btn btn-default btn-flat','controller' => 'usuario','action' => 'logout']) ?>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </div>

        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="/dashboard/dist/img/user.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p>Alexander Pierce</p>
              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>

          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="header">ENTIDAD <?= strtoupper($_SESSION['entidad']) ?></li>
            <?php if(@$_SESSION['Auth']['User']['tipo']=="admin"){?>
                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-user"></i> <span>Usuario</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li>
                        <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Crear Usuario', ['controller' => 'usuario','action' => 'add'],['escape'=>false]) ?>
                      </li>
                      <li class="active"><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Listar Usuario', ['controller' => 'usuario','action' => 'index'],['escape'=>false]) ?></li>
                    </ul>
                  </li>

                  <li class="treeview">
                    <a href="#">
                      <i class="fa fa-building"></i> <span>Entidad</span> <i class="fa fa-angle-left pull-right"></i>
                    </a>
                    <ul class="treeview-menu">
                      <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Crear Entidad', ['controller' => 'entidad','action' => 'add'],['escape'=>false])?></li>
                      <li class="active"><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Listar Entidad', ['controller' => 'entidad','action' => 'index'],['escape'=>false]) ?></li>
                    </ul>
                  </li>
            <?php
              }
              elseif(@$_SESSION['Auth']['User']['tipo']=="admin_entidad"){
             ?>
            <li class="treeview">
              <a href="#">
                <i class="fa fa-futbol-o"></i> <span>Deporte</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/crear_deporte.html"><i class="fa fa-circle-o"></i>Crear</a></li>
                <li class="active"><a href="pages/deportes.html"><i class="fa fa-circle-o"></i>Listar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-male"></i> <span>Deportistas</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/crear_deportista.html"><i class="fa fa-circle-o"></i>Crear</a></li>
                <li class="active"><a href="pages/deportistas.html"><i class="fa fa-circle-o"></i>Listar</a></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-newspaper-o"></i> <span>Noticias</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li>
                  <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Crear Noticia', ['controller' => 'noticia','action' => 'add'],['escape'=>false]) ?>
                  </li>
                <li class="active">
                  <?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Listar Noticias', ['controller' => 'noticia','action' => 'index'],['escape'=>false]) ?>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-globe"></i> <span>Escenarios</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Crear Escenario', ['controller' => 'escenario','action' => 'add'],['escape'=>false]) ?></li>
                <li class="active"><?= $this->Html->link($this->Html->tag('i', '', ['class' => 'fa fa-circle-o text-aqua']).'Listar Escenarios', ['controller' => 'escenario','action' => 'index'],['escape'=>false]) ?></li>
              </ul>
            </li>

            <li class="treeview">
              <a href="#">
                <i class="fa fa-bar-chart-o"></i> <span>Estadisticas</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="pages/estadisticas.html"><i class="fa fa-circle-o"></i>Ver</a></li>

              </ul>
            </li>

            <?php } ?>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">


        </section>
        <?php
          }
        ?>
        <!-- Main content -->
        <section class="content">
          <!-- Info boxes -->
          <div class="row">
            <div class="col-md-12">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </div>
          </div><!-- /.row -->



        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->





    </div><!-- ./wrapper -->



  </body>
</html>
