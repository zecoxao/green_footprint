<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Empresa'), ['action' => 'edit', $empresa->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Empresa'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="empresa view large-10 medium-9 columns">
    <h2><?= h($empresa->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($empresa->nome) ?></p>
            <h6 class="subheader"><?= __('Localidade') ?></h6>
            <p><?= h($empresa->localidade) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($empresa->id) ?></p>
            <h6 class="subheader"><?= __('Cae') ?></h6>
            <p><?= $this->Number->format($empresa->cae) ?></p>
        </div>
    </div>
</div>
