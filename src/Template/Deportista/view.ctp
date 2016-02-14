      
        
         <div class="form-group">
            <div class="col-md-2">
            <h2><span class="label label-info">Deportista</span></h2>
            </div>
            <div class="col-md-8">
            <h2><?= h($deportista->nombre) ?></h2>
            </div>
        </div>
        
        
         <div class="row">
        
         <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading ">
                    <h3 class="panel-title">Información Personal</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover" >
                            <tbody>
                                <tr>
                                  <th>Doc Id</th>
                                  <th>Lugar Nacimiento</th>
                                  <th>Fecha Nacimiento</th>
                                 
                                </tr>
                                <tr>
                                    <td><?= $this->Number->format($deportista->docidentidad) ?></td>
                                    <td><?= h($deportista->lugar_nacimiento) ?></td>
                                    <td><?= h($deportista->fecha_nacimiento) ?></td>
                                    
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            
            
            <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading ">
                    <h3 class="panel-title">Informacion Deportista</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover" >
                            <tbody>
                                <tr>
                                  <th>Deporte </th>
                                  <th>Categoria</th>
                                  <th>TIpo de AsociaciOn</th>
                                  <th>Ranking Nacional</th>
                                  <th>Ranking Internacional</th>
                                </tr>
                                <tr>
                                    <td>  <?php foreach ($deporte_actividad as $deporte_actividades): ?>                
                                      <?= h($deporte_actividades->nombre) ?>            
                                      <?php endforeach; ?></td>
                                    <td><?= h($deportista->categoria) ?></td>
                                    <td><?= h($deportista->tipo_asociacion) ?></td>
                                    <td><?= $this->Number->format($deportista->ranking_nacional) ?></td>
                                    <td><?= $this->Number->format($deportista->ranking_internacional) ?></td>
                                </tr>
                              
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
 </div>
 
  
  
  
           <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading ">
                    <h3 class="panel-title">Registro Deportivo</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover" >
                            <tbody>
                                <tr>
                                  <th>RECONOCIMIENTO</th>
                                  <th>MARCA</th>
                                  <th>INFO</th>
                                </tr>
                         
                                <?php foreach ($registroDeportivo as $registroDeportivo): ?>
                                <tr>
                                    <td><?= h($registroDeportivo->reconocimiento) ?></td>
                                    <td><?= $this->Number->format($registroDeportivo->marca) ?></td>
                                    <td><?= h($registroDeportivo->info) ?></td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
  



