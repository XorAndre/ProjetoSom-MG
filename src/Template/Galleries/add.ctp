<div id="page-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->create($gallery,['type' => 'file']) ?>                    
                    <div class="form-group">
                        <label for="thumb-perfil">SELECIONE A CAPA</label>
                        <?= $this->Form->control('capa',['class' => 'form-control1','type' => 'file','label' => false]); ?>
                    </div>                    
                    <div class="form-group">
                        <label for="thumb-perfil">SELECIONE AS FOTOS</label>
                        <?= $this->Form->control('fotos[]',['class' => 'form-control1','type' => 'file', 'multiple' => true,'label' => false]); ?>
                    </div>
                     <div class="form-group">
                        <?= $this->Form->button(__('CADASTRAR'), ['class' => "btn btn-success"]) ?>
                     </div>
                     <div class="form-group">
                        <input type="reset" class="btn btn-primary" value="CANCELAR">
                     </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>    
</div>