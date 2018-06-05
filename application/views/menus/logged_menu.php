<nav class="navbar navbar-default ">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?php echo base_url()?>home"><img src="<?php echo base_url()?>assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <div class="button navbar-right">
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url()?>annonces/search">Rechercher</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url()?>annonces/create">Déposer une annonce</a></li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Gestion <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="<?php echo base_url()?>annonces/list">Mes annonces</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>annonces/create">Mes rendez vous</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                            <a href="index.html" class="dropdown-toggle active" data-toggle="dropdown" data-hover="dropdown" data-delay="200">Compte <b class="caret"></b></a>
                            <ul class="dropdown-menu navbar-nav">
                                <li>
                                    <a href="<?php echo base_url()?>users">Mon profil</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url()?>auth/logout">Se déconnecter</a>
                                </li>
                            </ul>
                        </li>

                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo base_url()?>home/contact">Contact</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo base_url()?>home/about">A propos</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->