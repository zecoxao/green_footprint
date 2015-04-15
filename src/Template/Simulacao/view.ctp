<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Simulacao'), ['action' => 'edit', $simulacao->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Simulacao'), ['action' => 'delete', $simulacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $simulacao->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Simulacao'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Simulacao'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="simulacao view large-10 medium-9 columns">
    <h2><?= h($simulacao->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($simulacao->id) ?></p>
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $this->Number->format($simulacao->empresa) ?></p>
            <h6 class="subheader"><?= __('Consumo Total') ?></h6>
            <p><?= $this->Number->format($simulacao->consumo_total) ?></p>
            <h6 class="subheader"><?= __('Equipamento') ?></h6>
            <p><?= $this->Number->format($simulacao->equipamento) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($simulacao->data) ?></p>
        </div>
    </div>
</div>
