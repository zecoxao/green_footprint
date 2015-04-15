<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $simulacao->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $simulacao->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Simulacao'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="simulacao form large-10 medium-9 columns">
    <?= $this->Form->create($simulacao); ?>
    <fieldset>
        <legend><?= __('Edit Simulacao') ?></legend>
        <?php
            echo $this->Form->input('empresa');
            echo $this->Form->input('data');
            echo $this->Form->input('consumo_total');
            echo $this->Form->input('equipamento');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>