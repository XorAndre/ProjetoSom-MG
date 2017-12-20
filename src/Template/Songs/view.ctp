<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Song $song
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Song'), ['action' => 'edit', $song->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Song'), ['action' => 'delete', $song->id], ['confirm' => __('Are you sure you want to delete # {0}?', $song->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Songs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Song'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Albums'), ['controller' => 'Albums', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Album'), ['controller' => 'Albums', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="songs view large-9 medium-8 columns content">
    <h3><?= h($song->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($song->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Path') ?></th>
            <td><?= h($song->path) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Album') ?></th>
            <td><?= $song->has('album') ? $this->Html->link($song->album->id, ['controller' => 'Albums', 'action' => 'view', $song->album->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($song->id) ?></td>
        </tr>
    </table>
</div>
