<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda[]|\Cake\Collection\CollectionInterface $agendas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Agenda'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendas index large-9 medium-8 columns content">
    <h3><?= __('Agendas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($agendas as $agenda): ?>
            <tr>
                <td><?= $this->Number->format($agenda->id) ?></td>
                <td><?= h($agenda->title) ?></td>
                <td><?= h($agenda->date) ?></td>
                <td><?= $agenda->has('image') ? $this->Html->link($agenda->image->name, ['controller' => 'Images', 'action' => 'view', $agenda->image->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $agenda->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $agenda->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $agenda->id], ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]) ?>
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
