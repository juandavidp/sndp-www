<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Dedicacion'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="dedicacion index large-9 medium-8 columns content">
    <h3><?= __('Dedicacion') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('iddedicacion') ?></th>
                <th><?= $this->Paginator->sort('dedicacion') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dedicacion as $dedicacion): ?>
            <tr>
                <td><?= $this->Number->format($dedicacion->iddedicacion) ?></td>
                <td><?= h($dedicacion->dedicacion) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $dedicacion->iddedicacion]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $dedicacion->iddedicacion]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $dedicacion->iddedicacion], ['confirm' => __('Are you sure you want to delete # {0}?', $dedicacion->iddedicacion)]) ?>
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
