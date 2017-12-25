<div id="page-wrapper">
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <?= $this->Form->create($user,['type' => 'file']) ?>                    
                    <div class="form-group">
                        <label for="thumb-perfil">SELECIONE A FOTO DE PERFIL</label>
                        <?= $this->Form->control('Image.name',['class' => 'form-control1','type' => 'file','label' => false]); ?>
                    </div>                    
                    <div class="form-group">
                        <?= $this->Form->control('nome',['class' => 'form-control1','label' => false, 'placeholder' => 'Nome']); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('login',['class' => 'form-control1','label' => false, 'placeholder' => 'Login']); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('password',['class' => 'form-control1','label' => false, 'placeholder' => 'Senha']); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('group_id',['class' => 'form-control1','label' => false,['options' => $groups]]); ?>
                    </div> 
                    <div class="form-group">
                        <?= $this->Form->control('email',['class' => 'form-control1','label' => false, 'placeholder' => 'E-mail']); ?>
                    </div>
                     <div class="form-group">
                        <?= $this->Form->button(__('EDITAR'), ['class' => "btn btn-success"]) ?>
                     </div>
                     <div class="form-group">
                        <input type="reset" class="btn btn-primary" value="CANCELAR">
                     </div>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>    
</div>