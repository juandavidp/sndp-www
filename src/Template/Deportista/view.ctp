        <div class="text-center">
              <h1><?= h($deportista->nombre) ?></h1>
        </div>
        

        
         <div class="row">
        
         <div class="col-sm-12">
                <div class="panel panel-info">
                    <div class="panel-heading text-center">
                    <h3 class="panel-title">Informacion deportista</h3>
                    </div>
                    <div class="panel-body">
                        <table class="table table-hover" >
                            <tbody>
                                <tr>
                                  <th>Doc Id</th>
                                  <th>Lugar Nacimiento</th>
                                  <th>Fecha Nacimiento</th>
                                  <th>Deporte</th>
                                  <th>Categoria</th>
                                  <th>TIpo de AsociaciOn</th>
                                  <th>Ranking Nacional</th>
                                  <th>Ranking Internacional</th>
                                </tr>
                                <tr>
                                    <td><?= $this->Number->format($deportista->docidentidad) ?></td>
                                    <td><?= h($deportista->lugar_nacimiento) ?></td>
                                    <td><?= h($deportista->fecha_nacimiento) ?></td>
                                    <td><?= h($deportista->deporte_iddeporte) ?></td>
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
                    <div class="panel-heading text-center">
                    <h3 class="panel-title">Registro DEportivo</h3>
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
  



