<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <title>Painel Admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="author" content="Web Creative Design">    
        <script type="application/x-javascript">
            addEventListener("load", function() {
                setTimeout(hideURLbar, 0);
            }, false);

            function hideURLbar() {
                window.scrollTo(0, 1);
            }
        </script>
            <?= $this->Html->meta('icon') ?>
            <?= $this->Html->css('bootstrap.min.css') ?>
            <?= $this->Html->css('style.css') ?>
            <?= $this->Html->css('font-awesome.css') ?>
            <?= $this->Html->css('icon-font.min.css') ?>
            <?= $this->Html->css('animate.css') ?>
            <link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
            <?= $this->fetch('meta') ?>
            <?= $this->fetch('css') ?>
            <?= $this->fetch('script') ?>
</head>
<body>
    <section>

        <?= $this->element('menulateral') ?>
         <div class="main-content main-content2 main-content2copy">
        <?= $this->element('header') ?>

        <div id="page-wrapper">
                    <div class="graphs">
                        <div class="container">
                            <?= $this->Flash->render() ?>
                            <div class="row">
                                <?= $this->fetch('content') ?>
                            </div>
                        </div><!--/container-->
                    </div>
                </div>
    </div>
        <?= $this->element('footer') ?>
    </section>
    <?= $this->Html->script("jquery-1.10.2.min.js") ?>
    <?= $this->Html->script("Chart.js") ?>
    <?= $this->Html->script("jquery.nicescroll.js") ?>
    <?= $this->Html->script("scripts.js") ?>
    <?= $this->Html->script("bootstrap.min.js") ?>
    <?= $this->Html->script("classie.js") ?>
    <?= $this->Html->script("uisearch.js") ?>
    <script>
        new UISearch(document.getElementById('sb-search'));
    </script>
    <?= $this->Html->script("wow.min.js") ?>
    <script>
         new WOW().init();
    </script>
</body>
</html>