<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Usuario'), ['action' => 'edit', $usuario->idusuario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Usuario'), ['action' => 'delete', $usuario->idusuario], ['confirm' => __('Are you sure you want to delete # {0}?', $usuario->idusuario)]) ?> </li>
        <li><?= $this->Html->link(__('List Usuario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Usuario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="usuario view large-9 medium-8 columns content">
    <h3><?= h($usuario->idusuario) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($usuario->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($usuario->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($usuario->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Idusuario') ?></th>
            <td><?= $this->Number->format($usuario->idusuario) ?></td>
        </tr>
        <tr>
            <th><?= __('Cedula') ?></th>
            <td><?= $this->Number->format($usuario->cedula) ?></td>
        </tr>
    </table>
</div>
