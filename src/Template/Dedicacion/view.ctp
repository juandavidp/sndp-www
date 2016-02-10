<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Dedicacion'), ['action' => 'edit', $dedicacion->iddedicacion]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Dedicacion'), ['action' => 'delete', $dedicacion->iddedicacion], ['confirm' => __('Are you sure you want to delete # {0}?', $dedicacion->iddedicacion)]) ?> </li>
        <li><?= $this->Html->link(__('List Dedicacion'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Dedicacion'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="dedicacion view large-9 medium-8 columns content">
    <h3><?= h($dedicacion->iddedicacion) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Dedicacion') ?></th>
            <td><?= h($dedicacion->dedicacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Iddedicacion') ?></th>
            <td><?= $this->Number->format($dedicacion->iddedicacion) ?></td>
        </tr>
    </table>
</div>
