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
                            <th>Função</th>
                            <th>E-mail</th>                           
                            <th>Foto</th>
                            <th>Ações</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($users as $user): ?>
                            <tr class="gradeX">
                                <td><?= h($user->nome) ?></td>
                                <td><?= $user->group->title ?></td>
                                <td><?= h($user->email) ?></td>
                                <td class="center"><?= $this->Html->image($im[$i]['path'] . '/thumbnail-' . $im[$i++]['name']) ?></td>
                                <td class="center">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class' => 'btn btn-success',]) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class' => 'btn btn-info']) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $user->nome)]) ?>
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