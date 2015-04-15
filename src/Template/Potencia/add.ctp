<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Potencia'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="potencia form large-10 medium-9 columns">
    <?= $this->Form->create($potencium); ?>
    <fieldset>
        <legend><?= __('Add Potencium') ?></legend>
        <?php
            echo $this->Form->input('potencia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
