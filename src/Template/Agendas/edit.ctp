<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Agenda $agenda
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $agenda->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $agenda->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Agendas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="agendas form large-9 medium-8 columns content">
    <?= $this->Form->create($agenda) ?>
    <fieldset>
        <legend><?= __('Edit Agenda') ?></legend>
        <?php
            echo $this->Form->control('title');
            echo $this->Form->control('text');
            echo $this->Form->control('date');
            echo $this->Form->control('image_id', ['options' => $images]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
