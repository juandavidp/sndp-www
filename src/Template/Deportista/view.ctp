<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Deportistum'), ['action' => 'edit', $deportistum->iddeportista]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Deportistum'), ['action' => 'delete', $deportistum->iddeportista], ['confirm' => __('Are you sure you want to delete # {0}?', $deportistum->iddeportista)]) ?> </li>
        <li><?= $this->Html->link(__('List Deportista'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Deportistum'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="deportista view large-9 medium-8 columns content">
    <h3><?= h($deportistum->iddeportista) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Nombre') ?></th>
            <td><?= h($deportistum->nombre) ?></td>
        </tr>
        <tr>
            <th><?= __('Docidentidad') ?></th>
            <td><?= h($deportistum->docidentidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Lugar Nacimiento') ?></th>
            <td><?= h($deportistum->lugar_nacimiento) ?></td>
        </tr>
        <tr>
            <th><?= __('Categoria') ?></th>
            <td><?= h($deportistum->categoria) ?></td>
        </tr>
        <tr>
            <th><?= __('Tipo Asociacion') ?></th>
            <td><?= h($deportistum->tipo_asociacion) ?></td>
        </tr>
        <tr>
            <th><?= __('Iddeportista') ?></th>
            <td><?= $this->Number->format($deportistum->iddeportista) ?></td>
        </tr>
        <tr>
            <th><?= __('Ranking Nacional') ?></th>
            <td><?= $this->Number->format($deportistum->ranking_nacional) ?></td>
        </tr>
        <tr>
            <th><?= __('Ranking Internacional') ?></th>
            <td><?= $this->Number->format($deportistum->ranking_internacional) ?></td>
        </tr>
        <tr>
            <th><?= __('Entidad IdEntidad') ?></th>
            <td><?= $this->Number->format($deportistum->entidad_idEntidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Deporte Iddeporte') ?></th>
            <td><?= $this->Number->format($deportistum->deporte_iddeporte) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha Nacimiento') ?></th>
            <td><?= h($deportistum->fecha_nacimiento) ?></tr>
        </tr>
    </table>
</div>
