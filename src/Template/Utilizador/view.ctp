<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Utilizador'), ['action' => 'edit', $utilizador->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Utilizador'), ['action' => 'delete', $utilizador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilizador->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Utilizador'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Utilizador'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="utilizador view large-10 medium-9 columns">
    <h2><?= h($utilizador->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($utilizador->nome) ?></p>
            <h6 class="subheader"><?= __('Password') ?></h6>
            <p><?= h($utilizador->password) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($utilizador->id) ?></p>
            <h6 class="subheader"><?= __('Contacto') ?></h6>
            <p><?= $this->Number->format($utilizador->contacto) ?></p>
        </div>
    </div>
</div>
