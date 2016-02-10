<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Deportistum'), ['action' => 'add']) ?></li>
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
            <?php foreach ($deportista as $deportistum): ?>
            <tr>
                <td><?= $this->Number->format($deportistum->iddeportista) ?></td>
                <td><?= h($deportistum->nombre) ?></td>
                <td><?= h($deportistum->docidentidad) ?></td>
                <td><?= h($deportistum->fecha_nacimiento) ?></td>
                <td><?= h($deportistum->lugar_nacimiento) ?></td>
                <td><?= h($deportistum->categoria) ?></td>
                <td><?= $this->Number->format($deportistum->ranking_nacional) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $deportistum->iddeportista]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $deportistum->iddeportista]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $deportistum->iddeportista], ['confirm' => __('Are you sure you want to delete # {0}?', $deportistum->iddeportista)]) ?>
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
