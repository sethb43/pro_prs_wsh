<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Request'), ['action' => 'edit', $request->request_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Request'), ['action' => 'delete', $request->request_id], ['confirm' => __('Are you sure you want to delete # {0}?', $request->request_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="requests view large-9 medium-8 columns content">
    <h3><?= h($request->request_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($request->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Phone') ?></th>
            <td><?= h($request->phone) ?></td>
        </tr>
        <tr>
            <th><?= __('Email') ?></th>
            <td><?= h($request->email) ?></td>
        </tr>
        <tr>
            <th><?= __('Notes') ?></th>
            <td><?= h($request->notes) ?></td>
        </tr>
        <tr>
            <th><?= __('Status') ?></th>
            <td><?= h($request->status) ?></td>
        </tr>
        <tr>
            <th><?= __('Mdy Usr') ?></th>
            <td><?= h($request->mdy_usr) ?></td>
        </tr>
        <tr>
            <th><?= __('Crt Usr') ?></th>
            <td><?= h($request->crt_usr) ?></td>
        </tr>
        <tr>
            <th><?= __('Mdy Ts') ?></th>
            <td><?= h($request->mdy_ts) ?></td>
        </tr>
        <tr>
            <th><?= __('Crt Ts') ?></th>
            <td><?= h($request->crt_ts) ?></td>
        </tr>
    </table>
</div>
