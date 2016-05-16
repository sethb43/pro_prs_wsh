<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Click'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clicks index large-9 medium-8 columns content">
    <h3><?= __('Clicks') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('page') ?></th>
                <th><?= $this->Paginator->sort('ip') ?></th>
                <th><?= $this->Paginator->sort('crt_ts') ?></th>
                <th><?= $this->Paginator->sort('crt_usr') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clicks as $click): ?>
            <tr>
                <td><?= h($click->id) ?></td>
                <td><?= h($click->page) ?></td>
                <td><?= h($click->ip) ?></td>
                <td><?= h($click->crt_ts) ?></td>
                <td><?= h($click->crt_usr) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $click->click_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $click->click_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $click->click_id], ['confirm' => __('Are you sure you want to delete # {0}?', $click->click_id)]) ?>
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
