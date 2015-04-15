<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Potencium'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="potencia index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('potencia') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($potencia as $potencium): ?>
        <tr>
            <td><?= $this->Number->format($potencium->id) ?></td>
            <td><?= $this->Number->format($potencium->potencia) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $potencium->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $potencium->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $potencium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $potencium->id)]) ?>
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
