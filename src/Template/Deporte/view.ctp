<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deporte'), ['action' => 'edit', $deporte->iddeporte]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deporte'), ['action' => 'delete', $deporte->iddeporte], ['confirm' => __('Are you sure you want to delete # {0}?', $deporte->iddeporte)]) ?> </li>
        <li><?= $this->Html->link(__('List Deporte'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deporte'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deporte view large-9 medium-8 columns content">
    <h3><?= h($deporte->iddeporte) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($deporte->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Iddeporte') ?></th>
            <td><?= $this->Number->format($deporte->iddeporte) ?></td>
        </tr>
    </table>
</div>
