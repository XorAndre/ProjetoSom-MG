<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Agenda'), ['action' => 'edit', $agenda->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Agenda'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Agendas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Agenda'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="agendas view large-9 medium-8 columns content">
    <h3><?= h($agenda->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($agenda->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= $agenda->has('image') ? $this->Html->link($agenda->image->name, ['controller' => 'Images', 'action' => 'view', $agenda->image->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($agenda->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Date') ?></th>
            <td><?= h($agenda->date) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($agenda->text)); ?>
    </div>
</div>
