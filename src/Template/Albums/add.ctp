<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Albums'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="albums form large-9 medium-8 columns content">
    <?= $this->Form->create($album) ?>
    <fieldset>
        <legend><?= __('Add Album') ?></legend>
        <?php
            echo $this->Form->control('data');
            echo $this->Form->control('nome');
            echo $this->Form->control('songs._ids', ['options' => $songs]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
