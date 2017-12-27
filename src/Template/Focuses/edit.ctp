<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Focus $focus
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $focus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $focus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Focuses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Categories'), ['controller' => 'Categories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Category'), ['controller' => 'Categories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="focuses form large-9 medium-8 columns content">
    <?= $this->Form->create($focus) ?>
    <fieldset>
        <legend><?= __('Edit Focus') ?></legend>
        <?php
            echo $this->Form->control('nome');
            echo $this->Form->control('data');
            echo $this->Form->control('category_id', ['options' => $categories]);
            echo $this->Form->control('detalhes');
            echo $this->Form->control('image_id', ['options' => $images]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
