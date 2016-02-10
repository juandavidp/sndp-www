<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Registro Deportivo'), ['action' => 'edit', $registroDeportivo->idregistro_deportivo]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Registro Deportivo'), ['action' => 'delete', $registroDeportivo->idregistro_deportivo], ['confirm' => __('Are you sure you want to delete # {0}?', $registroDeportivo->idregistro_deportivo)]) ?> </li>
        <li><?= $this->Html->link(__('List Registro Deportivo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Registro Deportivo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="registroDeportivo view large-9 medium-8 columns content">
    <h3><?= h($registroDeportivo->idregistro_deportivo) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Reconocimiento') ?></th>
            <td><?= h($registroDeportivo->reconocimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Info') ?></th>
            <td><?= h($registroDeportivo->info) ?></td>
        </tr>
        <tr>
            <th><?= __('Idregistro Deportivo') ?></th>
            <td><?= $this->Number->format($registroDeportivo->idregistro_deportivo) ?></td>
        </tr>
        <tr>
            <th><?= __('Marca') ?></th>
            <td><?= $this->Number->format($registroDeportivo->marca) ?></td>
        </tr>
        <tr>
            <th><?= __('Deportista Iddeportista') ?></th>
            <td><?= $this->Number->format($registroDeportivo->deportista_iddeportista) ?></td>
        </tr>
    </table>
</div>
