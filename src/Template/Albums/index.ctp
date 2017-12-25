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
                            <th>Musicas</th>
                            <th>Ações</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($albums as $album): ?>
                          <tr class="gradeX">
                            <td><?= $album->nome ?></td>
                            <td><?= $album->data ?></td>
                            <td>
                                <?php foreach ($album['songs'] as $key => $value): ?>
                                    <?php echo $value['name'] . "," ?>
                                <?php endforeach ?>
                            </td>
                                <td class="center">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $album->id],['class' => 'btn btn-success',]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => '#'],['class' => 'btn btn-info']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $album->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $album->nome)]) ?>
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
