<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Profissional'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="profissional form large-10 medium-9 columns">
    <?= $this->Form->create($profissional); ?>
    <fieldset>
        <legend><?= __('Add Profissional') ?></legend>
        <?php
            echo $this->Form->input('utilizador');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
