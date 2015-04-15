<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Utilizador'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="utilizador index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('nome') ?></th>
            <th><?= $this->Paginator->sort('password') ?></th>
            <th><?= $this->Paginator->sort('contacto') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($utilizador as $utilizador): ?>
        <tr>
            <td><?= $this->Number->format($utilizador->id) ?></td>
            <td><?= h($utilizador->nome) ?></td>
            <td><?= h($utilizador->password) ?></td>
            <td><?= $this->Number->format($utilizador->contacto) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $utilizador->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $utilizador->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $utilizador->id], ['confirm' => __('Are you sure you want to delete # {0}?', $utilizador->id)]) ?>
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
