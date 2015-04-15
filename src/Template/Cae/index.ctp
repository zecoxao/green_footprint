<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Cae'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="cae index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('descricao') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($cae as $cae): ?>
        <tr>
            <td><?= $this->Number->format($cae->id) ?></td>
            <td><?= h($cae->descricao) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $cae->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $cae->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $cae->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cae->id)]) ?>
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
