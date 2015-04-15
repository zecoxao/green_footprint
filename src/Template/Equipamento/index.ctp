<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Equipamento'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="equipamento index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('potencia') ?></th>
            <th><?= $this->Paginator->sort('horas') ?></th>
            <th><?= $this->Paginator->sort('quantidade') ?></th>
            <th><?= $this->Paginator->sort('consumo') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($equipamento as $equipamento): ?>
        <tr>
            <td><?= $this->Number->format($equipamento->id) ?></td>
            <td><?= h($equipamento->nome) ?></td>
            <td><?= $this->Number->format($equipamento->potencia) ?></td>
            <td><?= $this->Number->format($equipamento->horas) ?></td>
            <td><?= $this->Number->format($equipamento->quantidade) ?></td>
            <td><?= $this->Number->format($equipamento->consumo) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $equipamento->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $equipamento->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $equipamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $equipamento->id)]) ?>
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
