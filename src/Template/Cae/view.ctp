<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Cae'), ['action' => 'edit', $cae->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cae'), ['action' => 'delete', $cae->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cae->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Cae'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cae'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="cae view large-10 medium-9 columns">
    <h2><?= h($cae->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Descricao') ?></h6>
            <p><?= h($cae->descricao) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($cae->id) ?></p>
        </div>
    </div>
</div>
