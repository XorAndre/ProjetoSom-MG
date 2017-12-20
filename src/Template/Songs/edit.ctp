<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $song->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Songs'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Albums'), ['controller' => 'Albums', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Album'), ['controller' => 'Albums', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="songs form large-9 medium-8 columns content">
    <?= $this->Form->create($song) ?>
    <fieldset>
        <legend><?= __('Edit Song') ?></legend>
        <?php
            echo $this->Form->control('name');
            echo $this->Form->control('path');
            echo $this->Form->control('album_id', ['options' => $albums]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
