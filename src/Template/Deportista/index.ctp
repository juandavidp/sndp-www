    <nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Deportista'), ['action' => 'add']) ?></li>
    </ul>
   </nav>
     
     
      <div class="box box-primary">
                <div class="box-header">
                  <h3 class="box-title">Deportistas</h3>

     </div>
    <div class="box-body table-responsive no-padding">


                  <table class="table table-hover" >

        
        <tbody><tr>
                      <th>ID</th>
                      <th>NOMBRE</th>
                      <th>CEDULA</th>
                      <th>FECHA NACIMIENTO</th>
                      <th>LUGAR NACIMIENTO</th>
                      <th>CATEGORIA</th>
                      <th>ASOCIACIÓN</th>
                      <th>RANKING NACIONAL </th>
                      <th>RANKING INTERNACIONAL</th>
                      <th>ACCIÓN</th>
                    </tr>
            <?php foreach ($deportista as $deportista): ?>
            <tr>
                <td><?= $this->Number->format($deportista->iddeportista) ?></td>
                <td><?= h($deportista->nombre) ?></td>
                <td><?= h($deportista->docidentidad) ?></td>
                <td><?= h($deportista->fecha_nacimiento) ?></td>
                <td><?= h($deportista->lugar_nacimiento) ?></td>
                <td><?= h($deportista->categoria) ?></td>
                <td><?= h($deportista->tipo_asociacion) ?></td>
                <td><?= $this->Number->format($deportista->ranking_nacional) ?></td>
                <td><?= $this->Number->format($deportista->ranking_internacional) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deportista->iddeportista]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deportista->iddeportista]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deportista->iddeportista], ['confirm' => __('Are you sure you want to delete # {0}?', $deportista->iddeportista)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
