<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Visita'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="visita form large-10 medium-9 columns">
    <?= $this->Form->create($visitum); ?>
    <fieldset>
        <legend><?= __('Add Visitum') ?></legend>
        <?php
            echo $this->Form->input('data');
            echo $this->Form->input('empresa');
            echo $this->Form->input('profissional');
            echo $this->Form->input('equipamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
