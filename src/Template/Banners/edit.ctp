<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Banner $banner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $banner->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $banner->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Banners'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Places'), ['controller' => 'Places', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Place'), ['controller' => 'Places', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="banners form large-9 medium-8 columns content">
    <?= $this->Form->create($banner) ?>
    <fieldset>
        <legend><?= __('Edit Banner') ?></legend>
        <?php
            echo $this->Form->control('valor');
            echo $this->Form->control('name');
            echo $this->Form->control('data');
            echo $this->Form->control('path');
            echo $this->Form->control('place_id', ['options' => $places]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
