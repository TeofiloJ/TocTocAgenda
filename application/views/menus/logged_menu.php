<div class="menu">
  <a class="lien" href="<?php echo base_url()?>home" class="logo"><img src="<?php echo base_url()?>assets/img/logo.png"></img></a>
  <div class ="sousmenu">
    <div class="menu-center">
      <a class="lien" href="<?php echo base_url()?>annonces/search">Rechercher</a>
      <a class="lien" href="<?php echo base_url()?>annonces/create">Déposer une annonce</a>
      <ul class="nav navbar-nav">
                                    <li class="dropdown"><a class="lien" href="#" class="dropdown-toggle" data-toggle="dropdown">Gestion
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                            <a class="lien" href="<?php echo base_url()?>annonces/adsList">Mes annonces</a>
                                            
                                            </li>
                                            <li><a class="lien" href="<?php echo base_url()?>annonces/create">Mes rendez-vous</a></li>
                                        </ul>
                                    </li>
                                </ul>
      
    </div>
    <div class="menu-right">
      <a class="lien" href="<?php echo base_url()?>home/contact">Contact</a>
      <a class="lien" href="<?php echo base_url()?>home/about">A propos</a>
      <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/navbar.css" />
      <ul class="nav navbar-nav navbar-right">
                                    <li class="dropdown"><a class="lien" href="#" class="dropdown-toggle" data-toggle="dropdown">Compte
                                        <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <img src="http://placehold.it/120x120"
                                                                alt="Alternate Text" class="img-responsive" />
                                                            <p class="text-center small">
                                                                <a href="#">supprimer le profil</a></p>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <span><?php echo $_SESSION['prenom'] ?></span>
                                                            <p class="text-muted small">
                                                            <?php echo $_SESSION['mail'] ?></p>
                                                            <div class="divider">
                                                            </div>
                                                            <a href="<?php echo base_url() ?>users" class="btn btn-primary btn-sm active">Mon profil</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="navbar-footer">
                                                    <div class="navbar-footer-content">
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                
                                                            </div>
                                                            <div class="col-md-6">
                                                                <a href="<?php echo base_url() ?>auth/logout" class="btn btn-default btn-sm pull-right">Sign Out</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
    </div>
  </div>
</div> 









