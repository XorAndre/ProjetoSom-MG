<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Place $place
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $place->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Places'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="places form large-9 medium-8 columns content">
    <?= $this->Form->create($place) ?>
    <fieldset>
        <legend><?= __('Edit Place') ?></legend>
        <?php
            echo $this->Form->control('name');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
