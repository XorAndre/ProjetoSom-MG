<div class="col-md-12">
	<div class="span vermelho col-md-4">
		<h2>ÚLTIMAS COBERTURAS</h2>
	</div>
</div>
<?php if (!empty($resultadoGaleria)): ?>
<div class="col-md-12">
	<?php foreach ($resultadoGaleria as $key => $value): ?>
	<figure class="snip1585">
		<?= $this->Html->image($value['Image']['path']. '/thumbnail-'. $value['Image']['name'], ['alt' => $value['title']]) ?>
		<figcaption>
			<h3><?= $value['title'] ?> <span><?= $value['text'] ?></span></h3>
		</figcaption>
		<?= $this->Html->link('',['controller' => 'Galleries', 'action' => 'view', $value['id']]) ?>
	</figure><!--/fim-view-box-->
	<?php endforeach ?>
</div>
<?php else: ?>
	Nao temos ultimas galerias
<?php endif ?>