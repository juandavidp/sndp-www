<nav class="large-1 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Entidad'), ['action' => 'edit', $entidad->idEntidad]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Entidad'), ['action' => 'delete', $entidad->idEntidad], ['confirm' => __('Are you sure you want to delete # {0}?', $entidad->idEntidad)]) ?> </li>
        <li><?= $this->Html->link(__('List Entidad'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Entidad'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="entidad view large-9 medium-8 columns content">
    <h3><?= h($entidad->idEntidad) ?></h3>
    <table class="table table-striped">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($entidad->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= h($entidad->tipo) ?></td>
        </tr>
        <tr>
            <th><?= __('Caracter') ?></th>
            <td><?= h($entidad->caracter) ?></td>
        </tr>
        <tr>
            <th><?= __('Dedicacion') ?></th>
            <td><?= h($entidad->dedicacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= h($entidad->departamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Municipio') ?></th>
            <td><?= h($entidad->municipio) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($entidad->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitud') ?></th>
            <td><?= h($entidad->longitud) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitud') ?></th>
            <td><?= h($entidad->latitud) ?></td>
        </tr>
        <tr>
            <th><?= __('IdEntidad') ?></th>
            <td><?= $this->Number->format($entidad->idEntidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Telefono') ?></th>
            <td><?= $this->Number->format($entidad->telefono) ?></td>
        </tr>
        <tr>
            <th><?= __('Usuario Idusuario') ?></th>
            <td><?= $this->Number->format($entidad->usuario_idusuario) ?></td>
        </tr>
    </table>
</div>
