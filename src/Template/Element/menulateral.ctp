<div class="left-side sticky-left-side">
    <div class="logo">
        <h1><a href="index.html">Painel<span>SomMG</span></a></h1>
    </div>
    <div class="logo-icon text-center">
        <a href="index.html"><i class="lnr lnr-home"></i> </a>
    </div>
    <div class="left-side-inner">
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li>
                <?= $this->Html->link("<i class=\"lnr lnr-power-switch\"></i> INÍCIO", ['controller' => '/','action' => '/'], ['escape' => false]) ?>
            <li class="menu-list">

                <a href="#"><i class="lnr lnr-pencil"></i>
                <span>NOVA POSTAGEM</span></a>
                <ul class="sub-menu-list">
                    <li><?= $this->Html->link("NOTICIAS", ['controller' => 'news','action' => 'add']) ?></li>
                    <li><?= $this->Html->link("GALERIA DE FOTOS", ['controller' => 'galleries','action' => 'add']) ?></li>
                    <li><?= $this->Html->link("DESTAQUES", ['controller' => 'focuses','action' => 'add']) ?></li>
                     <li><a href="#">MUSICAS</a></li>
                    <li><?= $this->Html->link("VÍDEOS", ['controller' => 'videos','action' => 'add']) ?></li>
                   
                    <li><a href="#">AGENDA</a></li>
                </ul>
            </li>
            <li class="menu-list">

                <a href="#"><i class="lnr lnr-list"></i>
                <span>LISTAGENS</span></a>
                <ul class="sub-menu-list">
                    <li><?= $this->Html->link("NOTICIAS", ['controller' => 'news','action' => 'adminIndex']) ?></li>
                    <li><?= $this->Html->link("GALERIA DE FOTOS", ['controller' => 'galleries','action' => 'adminIndex']) ?></li>
                    <li><?= $this->Html->link("DESTAQUES", ['controller' => 'focuses','action' => 'adminIndex']) ?></li>
                    <li><a href="#">MUSICAS</a></li>
                    <li><?= $this->Html->link("VÍDEOS", ['controller' => 'videos','action' => 'index']) ?></li>
                   
                    <li><a href="#">AGENDA</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>PUBLICIDADES</span></a>
                <ul class="sub-menu-list">
                    <li><?= $this->Html->link("LISTAR", ['controller' => 'banners','action' => 'index']) ?></li>
                    <li><?= $this->Html->link("ADICIONAR", ['controller' => 'banners','action' => 'add']) ?></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="lnr lnr-user"></i> <span>USUÁRIOS</span></a>
                <ul class="sub-menu-list">
                 <li><?= $this->Html->link("LISTAR", ['controller' => 'users','action' => 'index']) ?></li>
                 <li><?= $this->Html->link("CADASTRAR", ['controller' => 'users','action' => 'add']) ?></li>
                </ul>
            </li>                        
            <li>
                <?= $this->Html->link("<i class=\"lnr lnr-select\"></i> SOM-MG RESPONDE", ['controller' => 'contacts','action' => 'index'], ['escape' => false]) ?>
            <li class="menu-list"><a href="#"><i class="lnr lnr-book"></i><span>CONFIGURAÇÃO</span></a>
                <ul class="sub-menu-list">
                    <li><a href="">BACKUP</a> </li>
                    <li><a href="">SUPORTE DÚVIDAS</a></li>                                
                </ul>
            </li>
        </ul>
    </div>
</div>  