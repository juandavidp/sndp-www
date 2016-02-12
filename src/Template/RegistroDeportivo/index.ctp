<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Registro Deportivo'), ['action' => 'add']) ?></li>
    </ul>
</nav>


   
   
      <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Deportistas</h3>

     </div>
     
      <div class="box-body table-responsive no-padding">


                  <table class="table table-hover" >

        
        <tbody><tr>
            
                      <th>ID REGISTRO</th>
                      <th>NOMBRE DEPORTISTA</th>
                      <th>RECONOCIMIENTO</th>
                      <th>MARCA</th>
                      <th>INFO</th>
                     
                    </tr>
     
            <?php foreach ($registroDeportivo as $registroDeportivo): ?>
            <tr>
                <td><?= $this->Number->format($registroDeportivo->idregistro_deportivo) ?></td>
                <td><?= $this->Number->format($registroDeportivo->deportista_iddeportista) ?></td>
                <td><?= h($registroDeportivo->reconocimiento) ?></td>
                <td><?= $this->Number->format($registroDeportivo->marca) ?></td>
                <td><?= h($registroDeportivo->info) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $registroDeportivo->idregistro_deportivo]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $registroDeportivo->idregistro_deportivo]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $registroDeportivo->idregistro_deportivo], ['confirm' => __('Are you sure you want to delete # {0}?', $registroDeportivo->idregistro_deportivo)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
 </div>