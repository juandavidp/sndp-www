<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Escenario'), ['action' => 'add']) ?></li>
    </ul>
</nav>
   <div class="box box-primary">
<div class="box-header">
                  <h3 class="box-title">Escenarios</h3>

     </div>
    <div class="box-body table-responsive no-padding">


                  <table class="table table-striped" >

        <tbody>
            <tr>
                <th><?= $this->Paginator->sort('idescenario') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('capacidad') ?></th>
                <th><?= $this->Paginator->sort('estado_escala') ?></th>
                <th><?= $this->Paginator->sort('departamento') ?></th>
                <th><?= $this->Paginator->sort('municipio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </tbody>
        <tbody>
            <?php foreach ($escenario as $escenarios): ?>
            <tr>
                <td><?= $this->Number->format($escenarios->idescenario) ?></td>
                <td><?= h($escenarios->nombre) ?></td>
                <td><?= $this->Number->format($escenarios->capacidad) ?></td>
                <td><?= $this->Number->format($escenarios->estado_escala) ?></td>
                <td><?= h($escenarios->departamento) ?></td>
                <td><?= h($escenarios->municipio) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $escenarios->idescenario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $escenarios->idescenario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $escenarios->idescenario], ['confirm' => __('Estas seguro que deseas elimar # {0}?', $escenarios->idescenario)]) ?>
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
