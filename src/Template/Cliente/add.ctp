<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cliente form large-10 medium-9 columns">
    <?= $this->Form->create($cliente); ?>
    <fieldset>
        <legend><?= __('Add Cliente') ?></legend>
        <?php
            echo $this->Form->input('utilizador');
            echo $this->Form->input('empresa');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
