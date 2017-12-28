			<nav class="navbar navbar-inverse">
			    <div class="container-fluid">
			        <div class="navbar-header">
			        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			            <span class="sr-only">Toggle navigation</span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			            <span class="icon-bar"></span>
			        </button>
			        <a class="navbar-brand" href="#"></a>
			        </div>
			        <div id="navbar" class="navbar-collapse collapse">
			        <ul class="nav navbar-nav">
			            <li class="active">
			            	<?= $this->Html->link('HOME', ['controller' => '/', 'action' => '/']) ?>
			            </li>
			            <li><a href="#">ARENA SOM-MG</a></li>
			            <li><a href="#">AGENDA</a></li>
			            <li><?= $this->Html->link('COBERTURAS', ['controller' => 'galleries', 'action' => 'index']) ?></li>
			            <li><a href="#">MÚSICAS</a></li>
			            <li><a href="#">VÍDEOS</a></li>
			            <li><a href="#">MATÉRIAS</a></li>
			            <li><a href="#">RANKING</a></li>
			            <li><?= $this->Html->link('CONTATO', ['controller' => 'contacts', 'action' => 'add']) ?></li>
			            <li><a href="?pagina=nossa-historia">CONHEÇA NOSSA HISTÓRIA</a></li>
			        </ul>                   
			        </div><!--/.nav-collapse -->
			    </div><!--/.container-fluid -->
			</nav><!--/Menu-->