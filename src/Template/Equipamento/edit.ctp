<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $equipamento->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $equipamento->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Equipamento'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="equipamento form large-10 medium-9 columns">
    <?= $this->Form->create($equipamento); ?>
    <fieldset>
        <legend><?= __('Edit Equipamento') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('potencia');
            echo $this->Form->input('horas');
            echo $this->Form->input('quantidade');
            echo $this->Form->input('consumo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>