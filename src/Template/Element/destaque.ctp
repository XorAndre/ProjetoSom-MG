<article class="row">
	<div class="col-md-12">
		<div class="span vermelho col-md-4">
			<h2>DESTAQUE ARENA SOM-MG</h2>
		</div>
	</div>
	<?php if (!empty($resultadoFocuses)): ?>
	<?php foreach ($resultadoFocuses as $key => $value): ?>
					
	<div class="col-md-12">
		<figure class="snip1585">
			<?= $this->Html->image($value['Image']['path']. '/thumbnail-'. $value['Image']['name']) ?>
			<figcaption>
				<h3><?= $value['nome']?></h3>
			</figcaption>
			<?= $this->Html->link('',['controller' => 'focuses', 'action' => 'view', $value['id']]); ?>
		</figure><!--/fim-view-box-->
	</div>
	<?php endforeach ?>		
	<?php else: ?>
		Nao tem Destaques
	<?php endif ?>
</article>