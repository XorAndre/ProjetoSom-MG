<section class="container">
    <article class="row">
        <div class="col-md-12">
            <?= $this->Html->image($focus->Image->path . '/' . $focus->Image->name, ['alt' => $focus->text, 'class' => 'img-responsive'])  ?>
            <h2><?= h($focus->nome) ?></h2>
            <p><?= $this->Text->autoParagraph(h($focus->detalhes)); ?></p>
        </div>
    </article>
</section>
