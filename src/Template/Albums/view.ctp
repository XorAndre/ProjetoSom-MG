<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Album $album
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Album'), ['action' => 'edit', $album->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Album'), ['action' => 'delete', $album->id], ['confirm' => __('Are you sure you want to delete # {0}?', $album->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Albums'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Album'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['controller' => 'Songs', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['controller' => 'Songs', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="albums view large-9 medium-8 columns content">
    <h3><?= h($album->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($album->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($album->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($album->data) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Songs') ?></h4>
        <?php if (!empty($album->songs)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Album Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($album->songs as $songs): ?>
            <tr>
                <td><?= h($songs->id) ?></td>
                <td><?= h($songs->name) ?></td>
                <td><?= h($songs->path) ?></td>
                <td><?= h($songs->album_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Songs', 'action' => 'view', $songs->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Songs', 'action' => 'edit', $songs->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Songs', 'action' => 'delete', $songs->id], ['confirm' => __('Are you sure you want to delete # {0}?', $songs->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
