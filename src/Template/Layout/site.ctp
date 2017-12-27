<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<?php

	 ?>
	<!--CSS-->
	<?= $this->Html->css('bootstrap.css') ?>
	<?= $this->Html->css('style-site.css') ?>
	<?= $this->fetch('meta') ?>
	<?= $this->fetch('css') ?>
	<?= $this->fetch('script') ?>
	<!--SEO-->
	            <?= $this->Html->meta('icon') ?>
	<title>SomMG | Campeonato Brasileiro de som Automotivo</title>
	<meta name="description" content="Som-MG o melhor site de evento automotivo do Brasil">
	<meta name="robots" content="index, follow">
	<meta name="author" content="Web Creative Design">
</head>
<body>
	<section class="main">
		<?= $this->element('banner') ?>
		<?= $this->element('menu-site') ?>
		<main>
            <?= $this->fetch('content') ?>
		</main>
		<footer class="footer">
			<?= $this->element('footer-site') ?>
		</footer>
		<!--footer start from here-->
		<?= $this->element('copy') ?>


		<!--/Footer-->
	</section><!--/container-->
	<!--/scripts-->
	<?= $this->Html->script('jquery.min.js') ?>
	<?= $this->Html->script('bootstrap.min.js') ?>
	<?= $this->Html->script('http://lightwidget.com/widgets/lightwidget.js') ?>
	<?= $this->Html->script('main') ?>
</body>
</html>