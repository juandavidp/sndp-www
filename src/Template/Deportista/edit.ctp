<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $deportista->iddeportista],
                ['confirm' => __('Are you sure you want to delete # {0}?', $deportista->iddeportista)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Deportista'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deportista form large-9 medium-8 columns content">
    <?= $this->Form->create($deportista) ?>
    <fieldset>
        <legend><?= __('Edit Deportista') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('docidentidad');
            echo $this->Form->input('fecha_nacimiento');
            echo $this->Form->input('lugar_nacimiento');
            echo $this->Form->input('categoria');
            echo $this->Form->input('ranking_nacional');
            echo $this->Form->input('ranking_internacional');
            echo $this->Form->input('tipo_asociacion');
            echo $this->Form->input('entidad_idEntidad');
            echo $this->Form->input('deporte_iddeporte');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
