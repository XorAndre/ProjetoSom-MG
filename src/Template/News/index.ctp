<div id="page-wrapper">
    <div class="graphs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container demo">
                      <table class="datatable table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Título</th>
                            <th>Data</th>
                            <th>Descrição</th>
                            <th>Foto</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($news as $news): ?>
                          <tr class="gradeX">
                            <td><td><?= h($news->title) ?></td></td>
                            <td>xx/xx/xxxx</td>
                            <td>Win 95+</td>
                            <td class="center"><?= $news->has('image') ? $this->Html->link($news->image->name, ['controller' => 'Images', 'action' => 'view', $news->image->id]) : '' ?></td>
                            <td class="center">
                                <?= $this->Html->link(__('VIZUALIZAR'), ['action' => 'view', $news->id]) ?>
                                <?= $this->Html->link(__('EDITAR'), ['action' => 'edit', $news->id]) ?>
                                <?= $this->Form->postLink(__('DELETAR'), ['action' => 'delete', $news->id], ['confirm' => __('Are you sure you want to delete # {0}?', $news->id)]) ?>
                            </td>
                          </tr>    
                                    <?php endforeach; ?>                     
                        </tbody>                        
                      </table>
                    </div><!--/.container.demo -->
                </div>                
            </div>
        </div><!--/container-->
    </div>
</div>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\News[]|\Cake\Collection\CollectionInterface $news
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New News'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Images'), ['controller' => 'Images', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Image'), ['controller' => 'Images', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="news index large-9 medium-8 columns content">
    <h3><?= __('News') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>

            <tr>
                <td><?= $this->Number->format($news->id) ?></td>
                <td><?= h($news->title) ?></td>
                <td><?= $news->has('image') ? $this->Html->link($news->image->name, ['controller' => 'Images', 'action' => 'view', $news->image->id]) : '' ?></td>

            </tr>

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
