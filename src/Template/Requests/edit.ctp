<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $request->request_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $request->request_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Requests'), ['controller' => 'Requests', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Request'), ['controller' => 'Requests', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="requests form large-9 medium-8 columns content">
    <?= $this->Form->create($request) ?>
    <fieldset>
        <legend><?= __('Edit Request') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('phone');
            echo $this->Form->input('email');
            echo $this->Form->input('notes');
            echo $this->Form->input('status');
            echo $this->Form->input('mdy_ts');
            echo $this->Form->input('mdy_usr');
            echo $this->Form->input('crt_ts');
            echo $this->Form->input('crt_usr');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
