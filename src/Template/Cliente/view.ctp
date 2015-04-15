<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cliente'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cliente view large-10 medium-9 columns">
    <h2><?= h($cliente->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cliente->id) ?></p>
            <h6 class="subheader"><?= __('Utilizador') ?></h6>
            <p><?= $this->Number->format($cliente->utilizador) ?></p>
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $this->Number->format($cliente->empresa) ?></p>
        </div>
    </div>
</div>
