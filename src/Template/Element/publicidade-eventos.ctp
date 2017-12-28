<div class="col-md-4">
	<div class="span vermelho">
		<h2>PUBLICIDADES</h2>
	</div>
	<?php 
	$aux = true;
	if (!empty($publicidadelateral)): ?>
		
	<div id="myCarousellateral" class="carousel slide" data-ride="carousel">
	  <!-- Indicators --> 
	  <div class="carousel-inner">
	  <?php foreach ($publicidadelateral as $key => $value): ?>
	  <!-- Wrapper for slides -->
	    <div class="item <?= ($aux)? 'active' : '' ; ?>">
	    	<?php $aux = false; ?>
	    	<?= $this->Html->image($value, ['alt' => 'Publicidade']) ?>
	    </div>
	  <?php endforeach ?>

	  </div>							 
	</div>
	<?php else: ?>
		<h2>Entre em contato para anunciar aqui.</h2>
	<?php endif ?>
</div>