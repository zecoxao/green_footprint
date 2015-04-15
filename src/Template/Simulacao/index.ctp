<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Simulacao'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="simulacao index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('empresa') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('consumo_total') ?></th>
            <th><?= $this->Paginator->sort('equipamento') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($simulacao as $simulacao): ?>
        <tr>
            <td><?= $this->Number->format($simulacao->id) ?></td>
            <td><?= $this->Number->format($simulacao->empresa) ?></td>
            <td><?= h($simulacao->data) ?></td>
            <td><?= $this->Number->format($simulacao->consumo_total) ?></td>
            <td><?= $this->Number->format($simulacao->equipamento) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $simulacao->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $simulacao->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $simulacao->id], ['confirm' => __('Are you sure you want to delete # {0}?', $simulacao->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
