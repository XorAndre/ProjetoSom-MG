<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\GalleriesImage[]|\Cake\Collection\CollectionInterface $galleriesImages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Galleries Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Galleries'), ['controller' => 'Galleries', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gallery'), ['controller' => 'Galleries', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="galleriesImages index large-9 medium-8 columns content">
    <h3><?= __('Galleries Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gallery_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($galleriesImages as $galleriesImage): ?>
            <tr>
                <td><?= $this->Number->format($galleriesImage->id) ?></td>
                <td><?= $galleriesImage->has('gallery') ? $this->Html->link($galleriesImage->gallery->id, ['controller' => 'Galleries', 'action' => 'view', $galleriesImage->gallery->id]) : '' ?></td>
                <td><?= $galleriesImage->has('image') ? $this->Html->link($galleriesImage->image->name, ['controller' => 'Images', 'action' => 'view', $galleriesImage->image->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $galleriesImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $galleriesImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $galleriesImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $galleriesImage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
