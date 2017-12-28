<section class="container">
    <article class="row">
        <div class="col-md-12">
            <?= $this->Html->image($gallery['capa']['path'] . '/' . $gallery['capa']['name'], ['alt' => $gallery->text, 'class' => 'img-responsive'])  ?>
            <h2><?= h($gallery->title) ?></h2>
            <p><?= $this->Text->autoParagraph(h($gallery->text)); ?></p>
            <h1>Outras imagens</h1>
            <?php foreach ($gallery['outrasimagens'] as $key => $value): ?>
                <?= $this->Html->image($value['path'] . '/' . $value['name'], ['alt' => $gallery->text, 'class' => 'img-responsive'])  ?>
            <?php endforeach ?>
        </div>
    </article>
</section>
