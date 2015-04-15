<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Empresa'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="empresa index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('localidade') ?></th>
            <th><?= $this->Paginator->sort('cae') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($empresa as $empresa): ?>
        <tr>
            <td><?= $this->Number->format($empresa->id) ?></td>
            <td><?= h($empresa->nome) ?></td>
            <td><?= h($empresa->localidade) ?></td>
            <td><?= $this->Number->format($empresa->cae) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $empresa->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $empresa->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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
