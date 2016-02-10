<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Entidad'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="entidad index large-9 medium-8 columns content">
    <h3><?= __('Entidad') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idEntidad') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('tipo') ?></th>
                <th><?= $this->Paginator->sort('caracter') ?></th>
                <th><?= $this->Paginator->sort('telefono') ?></th>
                <th><?= $this->Paginator->sort('departamento') ?></th>
                <th><?= $this->Paginator->sort('municipio') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($entidad as $entidad): ?>
            <tr>
                <td><?= $this->Number->format($entidad->idEntidad) ?></td>
                <td><?= h($entidad->nombre) ?></td>
                <td><?= h($entidad->tipo) ?></td>
                <td><?= h($entidad->caracter) ?></td>
                <td><?= $this->Number->format($entidad->telefono) ?></td>
                <td><?= h($entidad->departamento) ?></td>
                <td><?= h($entidad->municipio) ?></td>
                <td class="actions">
                    
                    <?= $this->Html->link(__('View'), ['action' => 'view', $entidad->idEntidad]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $entidad->idEntidad]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $entidad->idEntidad], ['confirm' => __('Are you sure you want to delete # {0}?', $entidad->idEntidad)]) ?>
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
