<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Escenario'), ['action' => 'edit', $escenario->idescenario]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Escenario'), ['action' => 'delete', $escenario->idescenario], ['confirm' => __('Are you sure you want to delete # {0}?', $escenario->idescenario)]) ?> </li>
        <li><?= $this->Html->link(__('List Escenario'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Escenario'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="escenario view large-9 medium-8 columns content">
    <h3><?= h($escenario->idescenario) ?></h3>
    <table class="table table-striped">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($escenario->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Actividad Deporte') ?></th>
            <td><?= h($escenario->actividad_deporte) ?></td>
        </tr>
        <tr>
            <th><?= __('Estado Escala') ?></th>
            <td><?= h($escenario->estado_escala) ?></td>
        </tr>
        <tr>
            <th><?= __('Departamento') ?></th>
            <td><?= h($escenario->departamento) ?></td>
        </tr>
        <tr>
            <th><?= __('Municipio') ?></th>
            <td><?= h($escenario->municipio) ?></td>
        </tr>
        <tr>
            <th><?= __('Direccion') ?></th>
            <td><?= h($escenario->direccion) ?></td>
        </tr>
        <tr>
            <th><?= __('Longitud') ?></th>
            <td><?= h($escenario->longitud) ?></td>
        </tr>
        <tr>
            <th><?= __('Latitud') ?></th>
            <td><?= h($escenario->latitud) ?></td>
        </tr>
        <tr>
            <th><?= __('Capacidad Deportistas') ?></th>
            <td><?= h($escenario->capacidad_deportistas) ?></td>
        </tr>
        <tr>
            <th><?= __('Idescenario') ?></th>
            <td><?= $this->Number->format($escenario->idescenario) ?></td>
        </tr>
        <tr>
            <th><?= __('Capacidad') ?></th>
            <td><?= $this->Number->format($escenario->capacidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Entidad Responsable') ?></th>
            <td><?= h($escenario->entidad_idEntidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Capacidad Publico') ?></th>
            <td><?= $this->Number->format($escenario->capacidad_publico) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo') ?></th>
            <td><?= $this->Number->format($escenario->tipo) ?></td>
        </tr>

        <tr>
            <th><?= __('Estado') ?></th>
            <td><?= $this->Text->autoParagraph(h($escenario->estado)); ?></td>
        </tr>

    </table>
</div>
