<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Deportista'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="deportista form large-9 medium-8 columns content">
    <?= $this->Form->create($deportista) ?>
    <fieldset>
        <legend><?= __('Add Deportista') ?></legend>
        <?php
            echo $this->Form->input('nombre');
            echo $this->Form->input('docidentidad');
            echo $this->Form->input('fecha_nacimiento');
            echo $this->Form->input('lugar_nacimiento');
            echo $this->Form->input('categoria');
            echo $this->Form->input('ranking_nacional');
            echo $this->Form->input('ranking_internacional');
            echo $this->Form->input('tipo_asociacion');
         ?>
         
    <div class="form-group">
    <label class="col-md-4 control-label" for="selectbasic">Deporte</label>
    <div class="col-md-4">
    <select id="deporte_iddeporte" name="deporte_iddeporte" class="form-control" multiple>

        <?php foreach ($deportes as $deporte): ?>
           <option value="<?=  $deporte->iddeporte ?>"><?=  $deporte->nombre ?></option>
        <?php endforeach; ?>
      </select>
    </div>

     
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
