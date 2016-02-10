<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Dedicacion'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="dedicacion form large-9 medium-8 columns content">
    <?= $this->Form->create($dedicacion) ?>
    <fieldset>
        <legend><?= __('Add Dedicacion') ?></legend>
        <?php
            echo $this->Form->input('dedicacion');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
