<div id="page-wrapper">
    <div class="graphs">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="container demo">
                      <table class="datatable table table-striped table-bordered">
                        <thead>
                          <tr>
                            <th>Nome</th>
                            <th>Categoria</th>
                            <th>Data</th>                           
                            <th>Foto</th>
                            <th>Ações</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($focuses as $focus): ?>
                            <tr class="gradeX">
                                <td><?= h($focus->nome) ?></td>
                                <td><?= $focus->category->title ?></td>
                                <td><?= $this->Time->format($focus->data, "d 'de' LLL 'de' yyyy")?></td>
                                <td class="center"><?= $this->Html->image($im[$i]['path'] . '/thumbnail-' . $im[$i++]['name']) ?></td>
                                <td class="center">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $focus->id],['class' => 'btn btn-success',]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $focus->id],['class' => 'btn btn-info']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $focus->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $focus->nome)]) ?>
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