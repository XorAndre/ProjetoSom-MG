<section class="container">
	<article class="row">
		<?php if (!empty($videos)): ?>
			<div class="col-md-12">
				<?php foreach ($videos as $key => $value): ?>
					<figure class="snip1237">
						<div class="image">
							<?= $this->Html->image($im[$key]['path']. '/thumbnail-'. $im[$key]['name']) ?>
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