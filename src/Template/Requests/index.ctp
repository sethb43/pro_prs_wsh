<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requests index large-9 medium-8 columns content">
    <h3><?= __('Requests') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('phone') ?></th>
                <th><?= $this->Paginator->sort('email') ?></th>
                <th><?= $this->Paginator->sort('notes') ?></th>
                <th><?= $this->Paginator->sort('status') ?></th>
                <th><?= $this->Paginator->sort('mdy_ts') ?></th>
                <th><?= $this->Paginator->sort('mdy_usr') ?></th>
                <th><?= $this->Paginator->sort('crt_ts') ?></th>
                <th><?= $this->Paginator->sort('crt_usr') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($requests as $request): ?>
            <tr>
                <td><?= h($request->id) ?></td>
                <td><?= h($request->phone) ?></td>
                <td><?= h($request->email) ?></td>
                <td><?= h($request->notes) ?></td>
                <td><?= h($request->status) ?></td>
                <td><?= h($request->mdy_ts) ?></td>
                <td><?= h($request->mdy_usr) ?></td>
                <td><?= h($request->crt_ts) ?></td>
                <td><?= h($request->crt_usr) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $request->request_id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $request->request_id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $request->request_id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->request_id)]) ?>
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
