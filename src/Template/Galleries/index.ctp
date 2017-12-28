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
			<ul class="pagination">
				<?php
				echo $this->Paginator->first(__('Primeiros', true), array('tag' => 'li', 'escape' => false), array('type' => "button", 'class' => "btn btn-default"));
				echo $this->Paginator->prev('&laquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&laquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
				echo $this->Paginator->numbers(array('separator' => '', 'tag' => 'li', 'currentLink' => true, 'currentClass' => 'active', 'currentTag' => 'a'));
				echo $this->Paginator->next('&raquo;', array('tag' => 'li', 'escape' => false), '<a href="#">&raquo;</a>', array('class' => 'prev disabled', 'tag' => 'li', 'escape' => false));
				echo $this->Paginator->last(__('Últimos', true), array('tag' => 'li', 'escape' => false), array('type' => "button", 'class' => "btn btn-default"));
				?>
			</ul>
		<?php else: ?>
			Nao temos ultimas galerias
		<?php endif ?>
	</article>
</section>