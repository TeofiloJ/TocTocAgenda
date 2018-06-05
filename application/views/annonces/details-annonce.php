
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">

<link rel="stylesheet" href="<?php echo base_url()?>assets/css/normalize.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/font-awesome.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/fontello.css">
<link href="<?php echo base_url()?>assets/fonts/icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/fonts/icon-7-stroke/css/helper.css" rel="stylesheet">
<link href="<?php echo base_url()?>assets/css/animate.css" rel="stylesheet" media="screen">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-select.min.css"> 
<link rel="stylesheet" href="<?php echo base_url()?>bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/icheck.min_all.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/price-range.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.carousel.css">  
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/owl.transitions.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/lightslider.min.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/style.css">
<link rel="stylesheet" href="<?php echo base_url()?>assets/css/responsive.css">

<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->
<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Annonces</a>
					</li>
					<li class="breadcrumb-item active">
						Détail de l'annonce
					</li>
				</ol>
</nav>
<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title"><?php echo $annonce[0]->nom ?> </h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header -->

<!-- property area -->
<div class="content-area single-property" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   

        <div class="clearfix padding-top-40" >

            <div class="col-md-8 single-property-content prp-style-1 ">
                <div class="row">
                    <div class="light-slide-item">            
                        <div class="clearfix">
                            <div class="favorite-and-print">
                                <a class="add-to-fav" href="#login-modal" data-toggle="modal">
                                    <i class="fa fa-star-o"></i>
                                </a>
                                <a class="printer-icon " href="javascript:window.print()">
                                    <i class="fa fa-print"></i> 
                                </a>
                            </div> 

                            <ul id="image-gallery" class="gallery list-unstyled cS-hidden">
                                <li data-thumb="<?php echo base_url()?>assets/img/property-1/property1.jpg"> 
                                    <img src="<?php echo base_url()?>assets/img/property-1/property1.jpg" />
                                </li>
                                <li data-thumb="<?php echo base_url()?>assets/img/property-1/property2.jpg"> 
                                    <img src="<?php echo base_url()?>assets/img/property-1/property3.jpg" />
                                </li>
                                <li data-thumb="<?php echo base_url()?>assets/img/property-1/property3.jpg"> 
                                    <img src="<?php echo base_url()?>assets/img/property-1/property3.jpg" />
                                </li>
                                <li data-thumb="<?php echo base_url()?>assets/img/property-1/property4.jpg"> 
                                    <img src="<?php echo base_url()?>assets/img/property-1/property4.jpg" />
                                </li>                                         
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="single-property-wrapper">
                    <div class="single-property-header">                                          
                        <h1 class="property-title pull-left"><?php echo $annonce[0]->nom ?></h1>
                        <span class="property-price pull-right"><?php echo $annonce[0]->prix ?>€</span>
                    </div>

                    <div class="property-meta entry-meta clearfix ">   

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-tag">                                        
                                <img src="<?php echo base_url()?>assets/img/icon/sale-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Status</span>
                                <span class="property-info-value"><?php echo $annonce[0]->typeAnnonce ?></span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info icon-area">
                                <img src="<?php echo base_url()?>assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Surface</span>
                                <span class="property-info-value"><?php echo $annonce[0]->surface ?><b class="property-info-unit">m²</b></span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="<?php echo base_url()?>assets/img/icon/bed-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Chambres</span>
                                <span class="property-info-value">1</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-bed">
                                <img src="<?php echo base_url()?>assets/img/icon/cars-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Garage</span>
                                <span class="property-info-value">0</span>
                            </span>
                        </div>

                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="<?php echo base_url()?>assets/img/icon/room-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Pièces</span>
                                <span class="property-info-value">2</span>
                            </span>
                        </div>
                        
                        <div class="col-xs-6 col-sm-3 col-md-3 p-b-15">
                            <span class="property-info-icon icon-garage">
                                <img src="<?php echo base_url()?>assets/img/icon/shawer-orange.png">
                            </span>
                            <span class="property-info-entry">
                                <span class="property-info-label">Salle de bain</span>
                                <span class="property-info-value">1</span>
                            </span>
                        </div>


                    </div>
                    <!-- .property-meta -->

                    <div class="section">
                        <h4 class="s-property-title">Description</h4>
                        <div class="s-property-content">
                            <p><?php echo $annonce[0]->description ?></p>
                        </div>
                    </div>
                    <!-- End description area  -->

                    <div class="section additional-details">

                        <h4 class="s-property-title">Détail supplémntaire</h4>

                        <ul class="additional-details-list clearfix">
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Exposition</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $annonce[0]->exposition ?></span>
                            </li>

                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Etage</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $annonce[0]->etage ?></span>
                            </li>
                            <li>
                                <span class="col-xs-6 col-sm-4 col-md-4 add-d-title">Chauffage</span>
                                <span class="col-xs-6 col-sm-8 col-md-8 add-d-entry"><?php echo $annonce[0]->chauffage ?></span>
                            </li>

                        </ul>
                    </div>  
                    <!-- End additional-details area  -->

                    <div class="section property-features">      

                        <h4 class="s-property-title">Autre</h4>                            
                        <ul>
                            <li><a href="">machines à laver au rez de chaussé</a></li>   
                            <li><a href="">Garage à vélos</a></li>
                        </ul>

                    </div>
                    <!-- End features area  -->
                    
                </div>
            </div>


            <div class="col-md-4 p0">
                <aside class="sidebar sidebar-property blog-asside-right">
                    <div class="dealer-widget">
                        <div class="dealer-content">
                            <div class="inner-wrapper">

                                <div class="item"><img src="<?php echo base_url()?>assets/img/book.jpg" alt="Mirror Edge"></div> 

                            </div>
                        </div>
                    </div>

                    <div class="panel panel-default sidebar-menu similar-property-wdg wow fadeInRight animated">
                        <div class="panel-heading">
                            <h3 class="panel-title">Biens similaires</h3>
                        </div>
                        <div class="panel-body recent-property-widget">
                                    <ul>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="<?php echo base_url()?>assets/img/demo/small-property-2.jpg"></a>
                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Studio centre ville </a></h6>
                                                <span class="property-price">375€</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3  col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="<?php echo base_url()?>assets/img/demo/small-property-1.jpg"></a>

                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">T1 sur l'île </a></h6>
                                                <span class="property-price">480€</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="<?php echo base_url()?>assets/img/demo/small-property-3.jpg"></a>

                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Loft quatier beaulieu </a></h6>
                                                <span class="property-price">189000€</span>
                                            </div>
                                        </li>

                                        <li>
                                            <div class="col-md-3 col-sm-3 col-xs-3 blg-thumb p0">
                                                <a href="single.html"><img src="<?php echo base_url()?>assets/img/demo/small-property-2.jpg"></a>

                                            </div>
                                            <div class="col-md-8 col-sm-8 col-xs-8 blg-entry">
                                                <h6> <a href="single.html">Studio </a></h6>
                                                <span class="property-price">375€</span>
                                            </div>
                                        </li>

                                    </ul>
                                </div>
                    </div>                          
                    </aside>
            </div>
        </div>

    </div>
</div>

<script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery-1.10.2.min.js"></script>
<script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url()?>assets/js/bootstrap-hover-dropdown.js"></script>
<script src="<?php echo base_url()?>assets/js/easypiechart.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.easypiechart.min.js"></script>
<script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/js/wow.js"></script>
<script src="<?php echo base_url()?>assets/js/icheck.min.js"></script>
<script src="<?php echo base_url()?>assets/js/price-range.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/lightslider.min.js"></script>
<script src="<?php echo base_url()?>assets/js/main.js"></script>

<script>
    $(document).ready(function () {

        $('#image-gallery').lightSlider({
            gallery: true,
            item: 1,
            thumbItem: 9,
            slideMargin: 0,
            speed: 500,
            auto: true,
            loop: true,
            onSliderLoad: function () {
                $('#image-gallery').removeClass('cS-hidden');
            }
        });
    });
</script>
