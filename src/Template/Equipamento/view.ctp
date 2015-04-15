<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Equipamento'), ['action' => 'edit', $equipamento->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Equipamento'), ['action' => 'delete', $equipamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipamento->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Equipamento'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Equipamento'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="equipamento view large-10 medium-9 columns">
    <h2><?= h($equipamento->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Nome') ?></h6>
            <p><?= h($equipamento->nome) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($equipamento->id) ?></p>
            <h6 class="subheader"><?= __('Potencia') ?></h6>
            <p><?= $this->Number->format($equipamento->potencia) ?></p>
            <h6 class="subheader"><?= __('Horas') ?></h6>
            <p><?= $this->Number->format($equipamento->horas) ?></p>
            <h6 class="subheader"><?= __('Quantidade') ?></h6>
            <p><?= $this->Number->format($equipamento->quantidade) ?></p>
            <h6 class="subheader"><?= __('Consumo') ?></h6>
            <p><?= $this->Number->format($equipamento->consumo) ?></p>
        </div>
    </div>
</div>
