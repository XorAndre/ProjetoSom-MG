<div class="left-side sticky-left-side">
    <div class="logo">
        <h1><a href="index.html">Painel<span>SomMG</span></a></h1>
    </div>
    <div class="logo-icon text-center">
        <a href="index.html"><i class="lnr lnr-home"></i> </a>
    </div>
    <div class="left-side-inner">
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li><a href="index.html"><i class="lnr lnr-power-switch"></i><span>INÍCIO</span></a></li>
            <li class="menu-list">

                <a href="#"><i class="lnr lnr-pencil"></i>
                <span>POSTAGENS</span></a>
                <ul class="sub-menu-list">
                    <li><?= $this->Html->link("NOTICIAS", ['controller' => 'news','action' => 'add']) ?></li>
                    <li><?= $this->Html->link("GALERIA DE FOTOS", ['controller' => 'galleries','action' => 'add']) ?></li>
                    <li><?= $this->Html->link("MUSICAS", ['controller' => 'albums','action' => 'add']) ?></li>
                   
                    <li><a href="">AGENDA</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="lnr lnr-envelope"></i> <span>PUBLICIDADES</span></a>
                <ul class="sub-menu-list">
                    <li><a href="">TOPO</a></li>
                    <li><a href="">LATERAL</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="#"><i class="lnr lnr-user"></i> <span>USUÁRIOS</span></a>
                <ul class="sub-menu-list">
                     <li><?= $this->Html->link("CADASTRAR", ['controller' => 'users','action' => 'add']) ?></li>
                </ul>
            </li>                        
            <li><a href="media.html"><i class="lnr lnr-select"></i> <span>SOM-MG RESPONDE</span></a></li>
            <li class="menu-list act"><a href="#"><i class="lnr lnr-book"></i><span>CONFIGURAÇÃO</span></a>
                <ul class="sub-menu-list">
                    <li><a href="">BACKUP</a> </li>
                    <li><a href="">SUPORTE DÚVIDAS</a></li>                                
                </ul>
            </li>
        </ul>
    </div>
</div>  