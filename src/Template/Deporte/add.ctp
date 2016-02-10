<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Deporte'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deporte form large-9 medium-8 columns content">
    <?= $this->Form->create($deporte) ?>
    <fieldset>
        <legend><?= __('Add Deporte') ?></legend>
        <?php
            echo $this->Form->input('nombre');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
