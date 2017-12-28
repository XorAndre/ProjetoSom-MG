<div class="col-md-7">
	<div class="span vermelho col-md-4">
		<h2>PUBLICIDADES</h2>
	</div>
	<?php if (!empty($publicidadetopo)): ?>
	<div id="myCarouselTopo" class="carousel slide" data-ride="carouselTopo">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<?php 
				$aux = true;
				foreach ($publicidadetopo as $key => $value): ?>		
					<li data-target="#myCarousel2" data-slide-to="<?= $key ?>" class="<?= ($aux)? 'active' : ''; ?>"></li>
					<?php $aux = false; ?>
			<?php endforeach ?>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<?php 
				$aux = true;
				foreach ($publicidadetopo as $key => $value): ?>
					<div class="item <?= ($aux)? 'active' : ''; ?>">
						<?php $aux = false; ?>
	    				<?= $this->Html->image($value, ['alt' => 'Publicidade']) ?>
					</div>
			<?php endforeach ?>
		</div>
		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarouselTopo" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarouselTopo" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<?php else: ?>
		<h2>Entre em contato para anunciar aqui.</h2>
	<?php endif ?>
</div>