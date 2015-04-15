<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Potencium'), ['action' => 'edit', $potencium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Potencium'), ['action' => 'delete', $potencium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $potencium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Potencia'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Potencium'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="potencia view large-10 medium-9 columns">
    <h2><?= h($potencium->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($potencium->id) ?></p>
            <h6 class="subheader"><?= __('Potencia') ?></h6>
            <p><?= $this->Number->format($potencium->potencia) ?></p>
        </div>
    </div>
</div>
