<div class="col-md-8">
	<div class="span vermelho col-md-4">
		<h2>PRÓXIMOS EVENTOS</h2>
	</div>
	<?php if (false): ?>
		
	<div id="myCarouselEventos" class="carousel slide" data-ride="carouselEventos">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#myCarouselEventos" data-slide-to="0" class="active"></li>
			<li data-target="#myCarouselEventos" data-slide-to="1"></li>
			<li data-target="#myCarouselEventos" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="la.jpg" alt="Los Angeles">
			</div>

			<div class="item">
				<img src="chicago.jpg" alt="Chicago">
			</div>

			<div class="item">
				<img src="ny.jpg" alt="New York">
			</div>
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarouselEventos" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarouselEventos" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<?php else: ?>
		<div class="row">
			<br>
			<br>
			<br>
			<h2> Ainda não temos próximos eventos </h2>
		</div>
	<?php endif ?>
</div>