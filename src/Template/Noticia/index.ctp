<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Noticium'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="noticia index large-9 medium-8 columns content">
    <h3><?= __('Noticia') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('idNoticia') ?></th>
                <th><?= $this->Paginator->sort('titulo') ?></th>
                <th><?= $this->Paginator->sort('fecha') ?></th>
                <th><?= $this->Paginator->sort('foto') ?></th>
                <th><?= $this->Paginator->sort('texto_noticia') ?></th>
                <th><?= $this->Paginator->sort('entidad_idEntidad') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($noticia as $noticium): ?>
            <tr>
                <td><?= $this->Number->format($noticium->idNoticia) ?></td>
                <td><?= h($noticium->titulo) ?></td>
                <td><?= h($noticium->fecha) ?></td>
                <td><?= h($noticium->foto) ?></td>
                <td><?= h($noticium->texto_noticia) ?></td>
                <td><?= $this->Number->format($noticium->entidad_idEntidad) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $noticium->idNoticia]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $noticium->idNoticia]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $noticium->idNoticia], ['confirm' => __('Are you sure you want to delete # {0}?', $noticium->idNoticia)]) ?>
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
