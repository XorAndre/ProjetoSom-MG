<div id="page-wrapper">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->create($banner,['type' => 'file']) ?>                    
                    <div class="form-group">
                        <label for="thumb-perfil">SELECIONE A FOTO DE PROPAGANDA</label>
                        <?= $this->Form->control('name',['class' => 'form-control1','type' => 'file','label' => false]); ?>
                    </div>                    
                    <div class="form-group">
                        <?= $this->Form->control('valor',['class' => 'form-control1','label' => false, 'placeholder' => 'Valor cobrado']); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('place_id',['options' => $places,'class' => 'form-control1','label' => false, 'placeholder' => 'Login']); ?>
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