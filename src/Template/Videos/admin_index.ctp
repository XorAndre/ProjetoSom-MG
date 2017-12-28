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
                            <th>Texto</th>
                            <th>Vídeo</th>
                            <th>Ações</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($videos as $video): ?>
                            <tr class="gradeX">
                                <td><?= h($video->title) ?></td>
                                <td><?= $video->text ?></td>
                                <td class="center"><iframe width="200" height="200" src="https://www.youtube.com/embed/<?= $video->url ?>" frameborder="0" gesture="media" allow="encrypted-media" allowfullscreen></iframe></td>
                                <td class="center">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $video->id],['class' => 'btn btn-success',]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $video->id],['class' => 'btn btn-info']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $video->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $video->nome)]) ?>
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

</tbody>
</table>