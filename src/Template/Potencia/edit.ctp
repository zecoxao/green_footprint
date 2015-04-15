<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $potencium->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $potencium->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Potencia'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="potencia form large-10 medium-9 columns">
    <?= $this->Form->create($potencium); ?>
    <fieldset>
        <legend><?= __('Edit Potencium') ?></legend>
        <?php
            echo $this->Form->input('potencia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
