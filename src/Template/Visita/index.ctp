<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Visitum'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="visita index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('data') ?></th>
            <th><?= $this->Paginator->sort('empresa') ?></th>
            <th><?= $this->Paginator->sort('profissional') ?></th>
            <th><?= $this->Paginator->sort('equipamento') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($visita as $visitum): ?>
        <tr>
            <td><?= $this->Number->format($visitum->id) ?></td>
            <td><?= h($visitum->data) ?></td>
            <td><?= $this->Number->format($visitum->empresa) ?></td>
            <td><?= $this->Number->format($visitum->profissional) ?></td>
            <td><?= $this->Number->format($visitum->equipamento) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $visitum->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $visitum->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $visitum->id], ['confirm' => __('Are you sure you want to delete # {0}?', $visitum->id)]) ?>
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
