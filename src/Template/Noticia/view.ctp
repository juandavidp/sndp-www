<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Noticium'), ['action' => 'edit', $noticium->idNoticia]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Noticium'), ['action' => 'delete', $noticium->idNoticia], ['confirm' => __('Are you sure you want to delete # {0}?', $noticium->idNoticia)]) ?> </li>
        <li><?= $this->Html->link(__('List Noticia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Noticium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="noticia view large-9 medium-8 columns content">
    <h3><?= h($noticium->idNoticia) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Titulo') ?></th>
            <td><?= h($noticium->titulo) ?></td>
        </tr>
        <tr>
            <th><?= __('Foto') ?></th>
            <td><?= h($noticium->foto) ?></td>
        </tr>
        <tr>
            <th><?= __('Texto Noticia') ?></th>
            <td><?= h($noticium->texto_noticia) ?></td>
        </tr>
        <tr>
            <th><?= __('IdNoticia') ?></th>
            <td><?= $this->Number->format($noticium->idNoticia) ?></td>
        </tr>
        <tr>
            <th><?= __('Entidad IdEntidad') ?></th>
            <td><?= $this->Number->format($noticium->entidad_idEntidad) ?></td>
        </tr>
        <tr>
            <th><?= __('Fecha') ?></th>
            <td><?= h($noticium->fecha) ?></tr>
        </tr>
    </table>

    <?php echo $this->Html->image('fotos_noticias/'.$noticium->foto, ['alt' => 'CakePHP', 'heigth' => '500', 'width' => '500', ]);?>
</div>
