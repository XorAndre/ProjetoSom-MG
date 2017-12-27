<article class="row">
	<div class="col-md-12">
		<div class="span vermelho col-md-4">
			<h2>NOTÍCIAS / LANÇAMENTOS DAS FÁBRICAS</h2>
		</div>							
	</div>
	<?php if (!empty($resultNew)): ?>
	<div class="col-md-12">
		<?php foreach ($resultNew as $key => $value): ?>
		<figure class="snip1237">
			<div class="image">
				<?= $this->Html->image($value['Image']['path']. '/thumbnail-'. $value['Image']['name']) ?>
				<i class="ion-ios-clock-outline"></i>
				<div class="date"><span class="day"><?= $this->Time->format($value['data'], 'd')?></span><span class="month"><?= $this->Time->format($value['data'], 'LLL')?></span></div>
			</div>
			<figcaption>
				<h3><?= $value['title'] ?></h3>
				<p>	
					<?php if (strlen($value['title']) > 500) {
						$value['title'] = substr($value['title'],0, 500). ' ...';
					} ?>
					<?= $value['title'] ?>
				</p>
				<?= $this->Html->link('CONFIRA', ['controller' => 'news', 'action' => 'view', $value['id']], ['class' => 'read-more']) ?>
			</figcaption>
		</figure><!--/card-noticia-->
		<?php endforeach ?>
	</div>
<?php else: ?>
	Nao temos ultimas galerias
<?php endif ?>
</article>