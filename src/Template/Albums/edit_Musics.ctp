<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->create($album) ?>          
                <?php $i=0; ?>
                <label for="thumb-perfil">Qual o nome das musicas?</label>
                <?php foreach ($album_songs['songs'] as $key => $value): ?>
                        <?= $this->Form->control('Song.'.$i.'.id', ['class' => 'form-control1', 'type' => 'hidden','label' => false, 'value' => $value['id']]); ?>
                    <div class="form-group">
                        <?= $this->Form->control('Song.'.$i++.'.name',['class' => 'form-control1', 'placeholder' => 'TITULO','label' => false, 'value' => $value['name']]); ?>
                    </div>
                     <div class="form-group">
                <?php endforeach ?>          
                        <?= $this->Form->button(__('CONFIRMAR'), ['class' => "btn btn-success"]) ?>
                     </div>
                     <div class="form-group">
                        <input type="reset" class="btn btn-primary" value="CANCELAR">
                     </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>    
</div>