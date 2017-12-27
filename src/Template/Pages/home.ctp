			<section class="container">
				<article class="row">
					<?= $this->element('proximos-eventos') ?>
					<?= $this->element('publicidade-eventos') ?>
				</article>
			</section><!--/box-um-->
			<section class="container">
				<article class="row">
					<?= $this->element('publicidade-som') ?>
					<?= $this->element('arena-som') ?>
				</article>
			</section><!--/box-dois-->
			<section class="container">
				<article class="row">
					<?= $this->element('coberturas', ['resultadoGaleria' => $resultadoGaleria]) ?>
				</article>
			</section><!--/Box-três-->
			<section class="container">
				<?= $this->element('noticias', ['resultNew' => $resultNew]) ?>
			</section><!--/Box-quatro-->
			<section class="container">
				<?= $this->element('destaque', ['resultadoFocuses' => $resultadoFocuses]) ?>
			</section>
			<section class="container">
				<?= $this->element('redesocial') ?>
			</section>