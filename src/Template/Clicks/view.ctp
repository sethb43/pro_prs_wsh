<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Click'), ['action' => 'edit', $click->click_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Click'), ['action' => 'delete', $click->click_id], ['confirm' => __('Are you sure you want to delete # {0}?', $click->click_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clicks'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Click'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clicks'), ['controller' => 'Clicks', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Click'), ['controller' => 'Clicks', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clicks view large-9 medium-8 columns content">
    <h3><?= h($click->click_id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Id') ?></th>
            <td><?= h($click->id) ?></td>
        </tr>
        <tr>
            <th><?= __('Page') ?></th>
            <td><?= h($click->page) ?></td>
        </tr>
        <tr>
            <th><?= __('Ip') ?></th>
            <td><?= h($click->ip) ?></td>
        </tr>
        <tr>
            <th><?= __('Crt Usr') ?></th>
            <td><?= h($click->crt_usr) ?></td>
        </tr>
        <tr>
            <th><?= __('Crt Ts') ?></th>
            <td><?= h($click->crt_ts) ?></td>
        </tr>
    </table>
</div>
