<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Clicks'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clicks'), ['controller' => 'Clicks', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Click'), ['controller' => 'Clicks', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="clicks form large-9 medium-8 columns content">
    <?= $this->Form->create($click) ?>
    <fieldset>
        <legend><?= __('Add Click') ?></legend>
        <?php
            echo $this->Form->input('id');
            echo $this->Form->input('page');
            echo $this->Form->input('ip');
            echo $this->Form->input('crt_ts');
            echo $this->Form->input('crt_usr');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
