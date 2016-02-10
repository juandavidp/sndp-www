<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deportista'), ['action' => 'edit', $deportista->iddeportista]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deportista'), ['action' => 'delete', $deportista->iddeportista], ['confirm' => __('Are you sure you want to delete # {0}?', $deportista->iddeportista)]) ?> </li>
        <li><?= $this->Html->link(__('List Deportista'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deportista'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deportista view large-9 medium-8 columns content">
    <h3><?= h($deportista->iddeportista) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($deportista->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Docidentidad') ?></th>
            <td><?= h($deportista->docidentidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar Nacimiento') ?></th>
            <td><?= h($deportista->lugar_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= h($deportista->categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Asociacion') ?></th>
            <td><?= h($deportista->tipo_asociacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Iddeportista') ?></th>
            <td><?= $this->Number->format($deportista->iddeportista) ?></td>
        </tr>
        <tr>
            <th><?= __('Ranking Nacional') ?></th>
            <td><?= $this->Number->format($deportista->ranking_nacional) ?></td>
        </tr>
        <tr>
            <th><?= __('Ranking Internacional') ?></th>
            <td><?= $this->Number->format($deportista->ranking_internacional) ?></td>
        </tr>
        <tr>
            <th><?= __('Entidad IdEntidad') ?></th>
            <td><?= $this->Number->format($deportista->entidad_idEntidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Deporte Iddeporte') ?></th>
            <td><?= $this->Number->format($deportista->deporte_iddeporte) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($deportista->fecha_nacimiento) ?></tr>
        </tr>
    </table>
</div>
