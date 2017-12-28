			<section class="container">
				<article class="row">
<?php if (!empty($galleries)): ?>
<div class="col-md-12">
	<?php foreach ($galleries as $key => $value): ?>
	<figure class="snip1585">
		<?= $this->Html->image($im[$key]['path']. '/thumbnail-'. $im[$key]['name'], ['alt' => $value['title']]) ?>
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
</article>
</section>