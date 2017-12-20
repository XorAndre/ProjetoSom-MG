<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleriesImage $galleriesImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Galleries Image'), ['action' => 'edit', $galleriesImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Galleries Image'), ['action' => 'delete', $galleriesImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galleriesImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Galleries Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Galleries Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Galleries'), ['controller' => 'Galleries', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gallery'), ['controller' => 'Galleries', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="galleriesImages view large-9 medium-8 columns content">
    <h3><?= h($galleriesImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Gallery') ?></th>
            <td><?= $galleriesImage->has('gallery') ? $this->Html->link($galleriesImage->gallery->id, ['controller' => 'Galleries', 'action' => 'view', $galleriesImage->gallery->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $galleriesImage->has('image') ? $this->Html->link($galleriesImage->image->name, ['controller' => 'Images', 'action' => 'view', $galleriesImage->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($galleriesImage->id) ?></td>
        </tr>
    </table>
</div>
