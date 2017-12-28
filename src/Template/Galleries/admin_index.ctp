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
                            <?php $i = 0 ?>
                        <?php foreach ($galleries as $gallery): ?>
                          <tr class="gradeX">
                            <td><?= $gallery->title ?></td>
                            <td><?= $gallery->data ?></td>
                            <td><?= $gallery->text ?></td>
                            <td class="center"><?= $this->Html->image($im[$i]['path'] . '/thumbnail-' . $im[$i++]['name']) ?></td>
                                <td class="center">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $gallery->id],['class' => 'btn btn-success',]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gallery->id],['class' => 'btn btn-info']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gallery->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $gallery->title)]) ?>
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
