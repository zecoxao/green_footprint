<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Cae'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="cae form large-10 medium-9 columns">
    <?= $this->Form->create($cae); ?>
    <fieldset>
        <legend><?= __('Add Cae') ?></legend>
        <?php
            echo $this->Form->input('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>