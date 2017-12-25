<div class="sign-in-form">
	<div class="sign-in-form-top">
		<p><span>Faça login no  Admin</span></p>
	</div>
	<div class="signin">
		<?= $this->Form->create() ?>
		<div class="log-input">
			<div class="log-input-left">
				<?= $this->Form->control('login', ['value' => "USUÁRIO", 'onfocus' => "this.value = '';", 'onblur' => "if (this.value == '') {this.value = 'Email address:';}", 'class' => 'user', 'label' => false]) ?>
			</div>
			<div class="clearfix"> </div>
		</div>
		<div class="log-input">
			<div class="log-input-left">
				<?= $this->Form->control('password', ['value' => "password", 'onfocus' => "this.value = '';", 'onblur' => "if (this.value == '') {this.value = 'Email address:';}", 'class' => 'user', 'label' => false]) ?>
			</div>
			<div class="clearfix"> </div>
		</div>
		<?= $this->Form->button(__('FAZER LOGIN'), ['class' => "btn btn-success"]) ?>
		<?= $this->Form->end() ?>
	</div>						
</div>