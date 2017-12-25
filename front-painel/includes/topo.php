<div class="header-section">

                    <!--toggle button start-->
                    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
                    <!--toggle button end-->

                    <!--notification menu start -->
                    <div class="header-section">

                    <!--toggle button start-->
                    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
                    <!--toggle button end-->

                    <!--notification menu start -->
                    <div class="menu-right">
                        <div class="user-panel-top">
                            <div class="profile_details_left">
                                <ul class="nofitications-dropdown">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-envelope"></i><span class="badge">3</span></a>

                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Você possuí mensagens</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img"><img src="images/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li class="odd">
                                                <a href="#">
                                                    <div class="user_img"><img src="images/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img"><img src="images/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">Confira todas as mensagens</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="login_box" id="loginContainer">
                                        <div class="search-box">
                                            <div id="sb-search" class="sb-search">
                                                <form>
                                                    <input class="sb-search-input" placeholder="PESQUISE AQUI" type="search" id="search">
                                                    <input class="sb-search-submit" type="submit" value="">
                                                    <span class="sb-icon-search"> </span>
                                                </form>
                                            </div>
                                        </div>                                       
                                        <!-- //search-scripts -->
                                    </li>
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-bell"></i><span class="badge blue">3</span></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="notification_header">
                                                    <h3>Você pos´suí notificações</h3>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img"><img src="images/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet</p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li class="odd">
                                                <a href="#">
                                                    <div class="user_img"><img src="images/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="user_img"><img src="images/1.png" alt=""></div>
                                                    <div class="notification_desc">
                                                        <p>Lorem ipsum dolor sit amet </p>
                                                        <p><span>1 hour ago</span></p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </a>
                                            </li>
                                            <li>
                                                <div class="notification_bottom">
                                                    <a href="#">Veja todas as notificações</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>                                    
                                    <div class="clearfix"></div>
                                </ul>
                            </div>
                            <div class="profile_details">
                                <ul>
                                    <li class="dropdown profile_details_drop">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                            <div class="profile_img">
                                                <span style="background:url(perfil/perfil.jpg) no-repeat center"> </span>
                                                <div class="user-name">
                                                    <p><?= $this->request->session()->read("Auth.User.nome") ?>
                                                        <?php if ($this->request->session()->read("Auth.User.group_id") == 1): ?>
                                                        <span>Administrator</span></p>
                                                        <?php endif ?>
                                                </div>
                                                <i class="lnr lnr-chevron-down"></i>
                                                <i class="lnr lnr-chevron-up"></i>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                        <ul class="dropdown-menu drp-mnu">
                                            <li> <a href="#"><i class="fa fa-cog"></i> Configurações</a> </li>
                                            <li> <a href="#"><i class="fa fa-user"></i>Perfil</a> </li>
                                            <li> <a href="sign-up.html"><i class="fa fa-sign-out"></i> Sair</a> </li>
                                        </ul>
                                    </li>
                                    <div class="clearfix"> </div>
                                </ul>
                            </div>
                            <div class="social_icons">
                                <div class="col-md-4 social_icons-left">
                                    <a href="#" class="yui"><i class="fa fa-facebook i1"></i><span>300<sup>+</sup> Likes</span></a>
                                </div>
                                <div class="col-md-4 social_icons-left pinterest">
                                    <a href="#"><i class="fa fa-google-plus i1"></i><span>500<sup>+</sup> Shares</span></a>
                                </div>
                                <div class="col-md-4 social_icons-left twi">
                                    <a href="#"><i class="fa fa-twitter i1"></i><span>500<sup>+</sup> Tweets</span></a>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <!--notification menu end -->
                </div>
                    <!--notification menu end -->
                </div>
