<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Registro Deportivo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="registroDeportivo index large-9 medium-8 columns content">
    <h3><?= __('Registro Deportivo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idregistro_deportivo') ?></th>
                <th><?= $this->Paginator->sort('reconocimiento') ?></th>
                <th><?= $this->Paginator->sort('marca') ?></th>
                <th><?= $this->Paginator->sort('deportista_iddeportista') ?></th>
                <th><?= $this->Paginator->sort('info') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($registroDeportivo as $registroDeportivo): ?>
            <tr>
                <td><?= $this->Number->format($registroDeportivo->idregistro_deportivo) ?></td>
                <td><?= h($registroDeportivo->reconocimiento) ?></td>
                <td><?= $this->Number->format($registroDeportivo->marca) ?></td>
                <td><?= $this->Number->format($registroDeportivo->deportista_iddeportista) ?></td>
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
