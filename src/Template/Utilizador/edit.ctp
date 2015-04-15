<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $utilizador->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $utilizador->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Utilizador'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="utilizador form large-10 medium-9 columns">
    <?= $this->Form->create($utilizador); ?>
    <fieldset>
        <legend><?= __('Edit Utilizador') ?></legend>
        <?php
            echo $this->Form->input('nome');
            echo $this->Form->input('password');
            echo $this->Form->input('contacto');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
