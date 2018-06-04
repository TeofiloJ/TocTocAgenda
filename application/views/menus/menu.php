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
                    <a class="navbar-brand" href="<?php echo base_url()?>home"><img src="assets/img/logo.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse yamm" id="navigation">
                    <ul class="main-nav nav navbar-nav navbar-right">
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url()?>annonces/search">Rechercher</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.1s"><a class="" href="<?php echo base_url()?>annonces/create">Déposer une annonce</a></li>
                        <li class="dropdown ymm-sw " data-wow-delay="0.1s">
                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo base_url()?>home/contact">Contact</a></li>
                        <li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo base_url()?>auth/login">A propos</a></li><li class="wow fadeInDown" data-wow-delay="0.4s"><a href="<?php echo base_url()?>home/about">Login</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <!-- End of nav bar -->