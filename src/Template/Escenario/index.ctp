<nav class="large-3 medium-4 columns" id="actions-sidebar">
</nav>
<div class="escenario index large-9 medium-8 columns content">

    <h3><?= __('Escenarios') ?></h3>

    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idescenario') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('actividad_deporte') ?></th>
                <th><?= $this->Paginator->sort('capacidad') ?></th>
                <th><?= $this->Paginator->sort('estado_escala') ?></th>
                <th><?= $this->Paginator->sort('entidad_idEntidad') ?></th>
                <th><?= $this->Paginator->sort('departamento') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($escenario as $escenario): ?>
            <tr>
                <td><?= $this->Number->format($escenario->idescenario) ?></td>
                <td><?= h($escenario->nombre) ?></td>
                <td><?= h($escenario->actividad_deporte) ?></td>
                <td><?= $this->Number->format($escenario->capacidad) ?></td>
                <td><?= h($escenario->estado_escala) ?></td>
                <td><?= $this->Number->format($escenario->entidad_idEntidad) ?></td>
                <td><?= h($escenario->departamento) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $escenario->idescenario]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $escenario->idescenario]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $escenario->idescenario], ['confirm' => __('Are you sure you want to delete # {0}?', $escenario->idescenario)]) ?>
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
