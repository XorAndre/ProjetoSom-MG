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
                            <th>E-mail</th>                           
                            <th>Assunto</th>
                            <th>Ações</th>
                          </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        <?php foreach ($contacts as $contact): ?>
                            <tr class="gradeX">
                                <td><?= h($contact->nome) ?></td>
                                <td><?= $contact->email ?></td>
                                <td><?= h($contact->assunto) ?></td>
                                <td class="center">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $contact->id],['class' => 'btn btn-success',]) ?>
                                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $contact->id], ['class' => 'btn btn-danger','confirm' => __('Tem certeza que deseja deletar {0}?', $contact->nome)]) ?>
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