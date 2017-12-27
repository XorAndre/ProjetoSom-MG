				  <div class="container">
				    <div class="row">
				      <div class="col-md-4 col-sm-4 col-xs-12 footerleft ">
				        <div class="logofooter">
				        <img src="img/logo_sommg.png" alt="Logo-footer-SomMG" class="logo" title="Logo-SomMG">
				        </div>
				        <p><i class="fa fa-phone"></i>Telefone: (31) 88418027</p>
				        <p><i class="fa fa-envelope"></i> E-mail : diretoria@sommg.com.br</p>
				        
				      </div>
				      <div class="col-md-4 col-sm-4 col-xs-12 paddingtop-bottom">
				        <h6 class="heading7">CATEGORIAS</h6>
				        <ul class="footer-ul">
				          <li><a href="#"> COBERTURAS</a></li>
				          <li><a href="#"> MÚSICAS</a></li>
				          <li><a href="#"> NOTÍCIAS</a></li>
				          <li><a href="#"> RANKING</a></li>          
				          <li><a href="#"> DÚVIDAS FREQUENTES</a></li>         
				        </ul>
				      </div>
				      <div class="col-md-4 col-sm-4 col-xs-12 paddingtop-bottom">
				        <h6 class="heading7">ÚLTIMAS POSTAGENS</h6>
				        <?php foreach ($ultimasnoticias as $key => $value): ?>
				        <div class="post">
				          <p><?= $value['title'] ?><span><?= $this->Time->format($value['data'], "d 'de' LLL 'de' yyyy")?></span></p>          
				        </div>
				        <?php endforeach ?>
				      </div>      
				    </div>
				  </div>