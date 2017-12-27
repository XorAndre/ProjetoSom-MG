<div id="page-wrapper">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->create($focus,['type' => 'file']) ?>                    
                    <div class="form-group">
                        <label for="thumb-perfil">SELECIONE A FOTO DE APRESENTAÇÃO</label>
                        <?= $this->Form->control('Image.name',['class' => 'form-control1','type' => 'file','label' => false]); ?>
                    </div>                    
                    <div class="form-group">
                        <?= $this->Form->control('nome',['class' => 'form-control1','label' => false, 'placeholder' => 'Nome']); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('detalhes',['class' => 'form-control1','label' => false, 'placeholder' => 'Detalhes']); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('category_id',['class' => 'form-control1','label' => false,['options' => $categories]]); ?>
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