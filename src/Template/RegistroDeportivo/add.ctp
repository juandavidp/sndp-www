<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Registro Deportivo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="registroDeportivo form large-9 medium-8 columns content">
    <?= $this->Form->create($registroDeportivo) ?>
    <fieldset>
        <legend><?= __('Add Registro Deportivo') ?></legend>
        <?php
            echo $this->Form->input('reconocimiento');
            echo $this->Form->input('marca');
            echo $this->Form->input('deportista_iddeportista');
            echo $this->Form->input('info');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
