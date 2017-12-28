<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Place $place
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Place'), ['action' => 'edit', $place->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Place'), ['action' => 'delete', $place->id], ['confirm' => __('Are you sure you want to delete # {0}?', $place->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Places'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Place'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Banners'), ['controller' => 'Banners', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Banner'), ['controller' => 'Banners', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="places view large-9 medium-8 columns content">
    <h3><?= h($place->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($place->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($place->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Banners') ?></h4>
        <?php if (!empty($place->banners)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Valor') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Place Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($place->banners as $banners): ?>
            <tr>
                <td><?= h($banners->id) ?></td>
                <td><?= h($banners->valor) ?></td>
                <td><?= h($banners->name) ?></td>
                <td><?= h($banners->data) ?></td>
                <td><?= h($banners->path) ?></td>
                <td><?= h($banners->place_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Banners', 'action' => 'view', $banners->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Banners', 'action' => 'edit', $banners->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Banners', 'action' => 'delete', $banners->id], ['confirm' => __('Are you sure you want to delete # {0}?', $banners->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
