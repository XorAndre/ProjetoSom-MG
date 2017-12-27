<section class="container">
    <article class="row">
        <div class="col-md-12">
            <?= $this->Html->image($news->Image->path . '/' . $news->Image->name, ['alt' => $news->text, 'class' => 'img-responsive'])  ?>
            <h2><?= h($news->title) ?></h2>
            <p><?= $this->Text->autoParagraph(h($news->text)); ?></p>
        </div>
    </article>
</section>
