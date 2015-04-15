<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Visitum'), ['action' => 'edit', $visitum->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Visitum'), ['action' => 'delete', $visitum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitum->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Visita'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Visitum'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="visita view large-10 medium-9 columns">
    <h2><?= h($visitum->id) ?></h2>
    <div class="row">
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($visitum->id) ?></p>
            <h6 class="subheader"><?= __('Empresa') ?></h6>
            <p><?= $this->Number->format($visitum->empresa) ?></p>
            <h6 class="subheader"><?= __('Profissional') ?></h6>
            <p><?= $this->Number->format($visitum->profissional) ?></p>
            <h6 class="subheader"><?= __('Equipamento') ?></h6>
            <p><?= $this->Number->format($visitum->equipamento) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Data') ?></h6>
            <p><?= h($visitum->data) ?></p>
        </div>
    </div>
</div>
