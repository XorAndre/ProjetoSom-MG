<section class="container">
                    <article class="row">
                        <div class="col-md-12">
                            <?= $this->Form->create($contact, ['class' => 'form-horizontal red']) ?>  
                                <fieldset>                          
                                <!-- Form Name -->
                                <legend>Contato</legend>                            
                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="txtinputnome">Nome</label>  
                                  <div class="col-md-8">
                                    <?= $this->Form->control('nome',['class' => 'form-control input-md','label' => false, 'placeholder' => 'Escreva seu nome completo']); ?>
                                  <span class="help-block">help</span>  
                                  </div>
                                </div>                          
                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="txtinputemail">Email</label>  
                                  <div class="col-md-8">
                                  <?= $this->Form->control('email',['class' => 'form-control input-md','label' => false, 'placeholder' => 'Escreva seu email']); ?>
                                  <span class="help-block">help</span>  
                                  </div>
                                </div>                          
                                <!-- Text input-->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="txtinputassunto">Assunto</label>  
                                  <div class="col-md-8">
                                 <?= $this->Form->control('assunto',['class' => 'form-control input-md','label' => false, 'placeholder' => 'Escreva do que se trata']); ?>
                                  <span class="help-block">help</span>  
                                  </div>
                                </div>                          
                                <!-- Textarea -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="txtinputarea">Mensagem</label>
                                  <div class="col-md-8"> 
                                   <?= $this->Form->control('mensagem',['class' => 'form-control input-md','label' => false, 'placeholder' => 'Escreva sua opinião, crítica ou sugestão para o site', 'type' => 'textarea']); ?>                    
                                  </div>
                                </div>                          
                                <!-- Button -->
                                <div class="form-group">
                                  <label class="col-md-4 control-label" for="btnenviar"></label>
                                  <div class="col-md-8">
                                    <button id="btnenviar" name="btnenviar" class="btn btn-primary btn-lg">Enviar</button>
                                  </div>
                                </div>                          
                                </fieldset>
                            </form>
                        </div>
                    </article>
                </section><!--/box-um-->