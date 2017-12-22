<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Access $access
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Accesses'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="accesses form large-9 medium-8 columns content">
    <?= $this->Form->create($access) ?>
    <fieldset>
        <legend><?= __('Add Access') ?></legend>
        <?php
            echo $this->Form->control('controller');
            echo $this->Form->control('action');
            echo $this->Form->control('param');
            echo $this->Form->control('data');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
