<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Deportista'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="deportista index large-9 medium-8 columns content">
    <h3><?= __('Deportista') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('iddeportista') ?></th>
                <th><?= $this->Paginator->sort('nombre') ?></th>
                <th><?= $this->Paginator->sort('docidentidad') ?></th>
                <th><?= $this->Paginator->sort('fecha_nacimiento') ?></th>
                <th><?= $this->Paginator->sort('lugar_nacimiento') ?></th>
                <th><?= $this->Paginator->sort('categoria') ?></th>
                <th><?= $this->Paginator->sort('ranking_nacional') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($deportista as $deportista): ?>
            <tr>
                <td><?= $this->Number->format($deportista->iddeportista) ?></td>
                <td><?= h($deportista->nombre) ?></td>
                <td><?= h($deportista->docidentidad) ?></td>
                <td><?= h($deportista->fecha_nacimiento) ?></td>
                <td><?= h($deportista->lugar_nacimiento) ?></td>
                <td><?= h($deportista->categoria) ?></td>
                <td><?= $this->Number->format($deportista->ranking_nacional) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deportista->iddeportista]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deportista->iddeportista]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deportista->iddeportista], ['confirm' => __('Are you sure you want to delete # {0}?', $deportista->iddeportista)]) ?>
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
