<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleriesImage $galleriesImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Galleries Images'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Galleries'), ['controller' => 'Galleries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gallery'), ['controller' => 'Galleries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galleriesImages form large-9 medium-8 columns content">
    <?= $this->Form->create($galleriesImage) ?>
    <fieldset>
        <legend><?= __('Add Galleries Image') ?></legend>
        <?php
            echo $this->Form->control('gallery_id', ['options' => $galleries]);
            echo $this->Form->control('image_id', ['options' => $images]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
