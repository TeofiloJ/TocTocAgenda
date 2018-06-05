
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>          
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Annonces</a>
					</li>
					<li class="breadcrumb-item active">
						Mes annonces
					</li>
				</ol>
</nav>
      
<?php if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
<?php
}?>



        <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Mes annonces</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area recent-property" style="background-color: #FFF;">
            <div class="container">   
                <div class="row">

                    <div class="col-md-9 pr-30 padding-top-40 properties-page user-properties">

                       <div class="section"> 
                            <div id="list-type" class="proerty-th-list">
                                <div class="col-md-4 p0">
                                    <div class="box-two proerty-item">
                                        <div class="item-thumb">
                                            <a href="property-1.html" ><img src="<?php echo base_url()?>assets/img/demo/property-3.jpg"></a>
                                        </div>
                                        <div class="item-entry overflow">
                                            <h5><a href="property-1.html"> Super nice villa </a></h5>
                                            <div class="dot-hr"></div>
                                            <span class="pull-left"><b> Area :</b> 120m </span>
                                            <span class="proerty-price pull-right"> $ 300,000</span>
                                            <p style="display: none;">Suspendisse ultricies Suspendisse ultricies Nulla quis dapibus nisl. Suspendisse ultricies commodo arcu nec pretium ...</p>
                                            <div class="property-icon">
                                                <img src="<?php echo base_url()?>assets/img/icon/bed.png">(5)|
                                                <img src="<?php echo base_url()?>assets/img/icon/shawer.png">(2)|
                                                <img src="<?php echo base_url()?>assets/img/icon/cars.png">(1)  

                                                <div class="dealer-action pull-right">                                        
                                                    <a href="submit-property.html" class="button">Edit </a>
                                                    <a href="#" class="button delete_user_car">Delete</a>
                                                    <a href="property-1.html" class="button">View</a>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>                
                            </div>
                        </div>
   

                </div>
            </div>
        </div>

        <script src="<?php echo base_url()?>assets/js/vendor/modernizr-2.6.2.min.js"></script>
        <script src="<?php echo base_url()?>assets/js//jquery-1.10.2.min.js"></script>
        <script src="<?php echo base_url()?>bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-select.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/bootstrap-hover-dropdown.js"></script>
        <script src="<?php echo base_url()?>assets/js/easypiechart.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.easypiechart.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/wow.js"></script>
        <script src="<?php echo base_url()?>assets/js/icheck.min.js"></script>

        <script src="<?php echo base_url()?>assets/js/price-range.js"></script> 
        <script src="<?php echo base_url()?>assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
        <script src="<?php echo base_url()?>assets/js/jquery.validate.min.js"></script>
        <script src="<?php echo base_url()?>assets/js/wizard.js"></script>

        <script src="<?php echo base_url()?>assets/js/main.js"></script>

   