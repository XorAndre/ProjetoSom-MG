<div id="page-wrapper">
    <div class="graphs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container demo">
                      <table class="datatable table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Valor</th>
                            <th>Lugar</th>
                            <th>Imagem</th>
                            <th>Ações</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($banners as $banner): ?>
                            <tr class="gradeX">
                                <td>R$<?= h($banner->valor) ?></td>
                                <td><?= $banner->place->name ?></td>
                                <td class="center"><?= $this->Html->image($auxarr[$i++]) ?></td>
                                <td class="center">
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $banner->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $banner->nome)]) ?>
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