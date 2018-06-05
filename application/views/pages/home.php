<nav>
    <ol class="breadcrumb">
        <li class="breadcrumb-item active">
            Home
        </li>
    </ol>
</nav>

<?php if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
<?php
}?>        
        

        <!-- Body content -->

        <div class="slider-area">
            <div class="slider">
                <div id="bg-slider" class="owl-carousel owl-theme">

                    <div class="item"><img src="assets/img/slide1/slider-image-1.jpg" alt="Mirror Edge"></div> 
                    <div class="item"><img src="assets/img/slide1/slider-image-2.jpg" alt="The Last of us"></div> 
                    <div class="item"><img src="assets/img/slide1/slider-image-4.jpg" alt="GTA V"></div>   

                </div>
            </div>
            <div class="container slider-content">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1 col-sm-12">
                        <h2>TocTocAgenda</h2>
                        <div class="search-form wow pulse" data-wow-delay="0.8s">

                            <form action="<?php echo base_url()?>annonces/search" method="POST" class=" form-inline">
                                <button class="btn  toggle-btn" type="button"><i class="fa fa-bars"></i></button>

                                 <!-- Select Basic -->
                                <div class="form-group">
                                        <label for="typeAnnonce">Type d'annonce</label>
                                        <select id="typeAnnonce" name="typeAnnonce" class="form-control">
                                        <option value=""></option>
                                            <option value="Location">Location</option>
                                            <option value="Vente">Vente</option>
                                        </select>
                                    </div>
                                    
                                    <!-- Select Basic -->
                                    <div class="form-group">
                                        <label cfor="typeDeBien">Type de bien</label>
                                        <select id="typeDeBien" name="typeDeBien" class="form-control">
                                            <option value=""></option>
                                            <option value="Maison">Maison</option>
                                            <option value="Appartement">Appartement</option>
                                            <option value="Terrain">Terrain</option>
                                            <option value="Parking / Box">Parking / Box</option>
                                            <option value="Loft">Loft</option>
                                            <option value="Hôtel particulier">Hôtel particulier</option>
                                            <option value="Château">Château</option>
                                            <option value="Bâtiment">Bâtiment</option>
                                            <option value="Immeuble">Immeuble</option>
                                            <option value="Boutique">Boutique</option>
                                            <option value="Local commercial">Local commercial</option>
                                            <option value="Bureau">Bureau</option>
                                            <option value="Autre">Autre</option>
                                        </select>
                                    </div>
                                    
                    
                                    
                               
                                <button class="btn search-btn" id="validate" name="validate" value="validate" type="submit"><i class="fa fa-search"></i></button>

                                <div style="display: none;" class="search-toggle">

                                                   <!-- Select Basic -->

      
      <!-- Text input-->
      <div class="form-group">
        <label  for="charges">Charges (€)</label>  
        <input id="charges" name="charges" placeholder="25" class="form-control input-md" type="text">
          
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label  for="surface">Surface (m²)</label>  
        <input id="surface" name="surface" placeholder="25" class="form-control input-md"  type="text">
          
      </div>
      
      <!-- Select Basic -->
      <div class="form-group">
        <label  for="exposition">Exposition</label>
          <select id="exposition" name="exposition" class="form-control">
          <option value=""></option>
            <option value="Nord">Nord</option>
            <option value="Sud">Sud</option>
            <option value="Ouest">Ouest</option>
            <option value="Est">Est</option>
          </select>
      </div>
      
      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="etage">Etage</label>  
        <input id="etage" name="etage" placeholder="2" class="form-control input-md" type="text">
          
      </div>
      
      <!-- Select Basic -->
      <div class="form-group">
        <label  for="chauffage">Chauffage</label>
          <select id="chauffage" name="chauffage" class="form-control">
          <option value=""></option>
            <option value="Electrique">Electrique</option>
            <option value="Gaz">Gaz</option>
            <option value="Autre">Autre</option>
          </select>
      </div>

                                </div>                     

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- property area -->
        <div class="content-area recent-property" style="padding-bottom: 60px; background-color: rgb(252, 252, 252);">
            <div class="container">   
                <div class="row">
                    <div class="col-md-12  padding-top-40 properties-page">
                        <div class="col-md-12 "> 
                            <div class="col-xs-10 page-subheader sorting pl0">

                                <ul class="sort-by-list">
                                    <li class="active">
                                        <a href="javascript:void(0);" class="order_by_date" data-orderby="property_date" data-order="ASC">
                                            Property Date <i class="fa fa-sort-amount-asc"></i>					
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0);" class="order_by_price" data-orderby="property_price" data-order="DESC">
                                            Property Price <i class="fa fa-sort-numeric-desc"></i>						
                                        </a>
                                    </li>
                                </ul><!--/ .sort-by-list-->

                                <div class="items-per-page">
                                    <label for="items_per_page"><b>Property per page :</b></label>
                                    <div class="sel">
                                        <select id="items_per_page" name="per_page">
                                            <option value="3">3</option>
                                            <option value="6">6</option>
                                            <option value="9">9</option>
                                            <option selected="selected" value="12">12</option>
                                            <option value="15">15</option>
                                            <option value="30">30</option>
                                            <option value="45">45</option>
                                            <option value="60">60</option>
                                        </select>
                                    </div><!--/ .sel-->
                                </div><!--/ .items-per-page-->
                            </div>

                            <div class="col-xs-2 layout-switcher">
                                <a class="layout-list" href="javascript:void(0);"> <i class="fa fa-th-list"></i>  </a>
                                <a class="layout-grid active" href="javascript:void(0);"> <i class="fa fa-th"></i> </a>                          
                            </div><!--/ .layout-switcher-->
                        </div>

                        <div class="col-md-12 "> 
                            <div id="list-type" class="proerty-th">
                            <?php
      $output ='';
      if($annonces->num_rows() > 0)
        {
            foreach($annonces->result() as $row)
            {
                $output .= '
                <div class="col-sm-6 col-md-4 p0">
                <div class="box-two proerty-item">
                    <div class="item-thumb">
                        <a href='.base_url().'annonces/display/'.$row->idAnnonce.' ><img src="'. base_url().'assets/img/demo/property-3.jpg"></a>
                    </div>
                    <div class="item-entry overflow">
                        <h5><a href="'.base_url().'annonces/display/'.$row->idAnnonce.'"> '.$row->nom.' </a></h5>
                        <div class="dot-hr"></div>
                        <span class="pull-left"><b> Surface :</b> '.$row->surface.' </span>
                        <span class="proerty-price pull-right"> '.$row->prix.'€</span>
                        <p style="display: none;">'.$row->description.'</p>
                        <div class="property-icon">
                            <img src="'.base_url().'assets/img/icon/bed.png">|
                            <img src="'.base_url().'assets/img/icon/shawer.png">|
                            <img src="'.base_url().'assets/img/icon/cars.png">  
            
                            <div class="dealer-action pull-right">                                        
                                <a href="'.base_url().'annonces/display/'.$row->idAnnonce.'" class="button">Voir</a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                ';                
            }
            echo $output;
          }else{
             echo "no result";
          }

          
?>

                              </div>
                        </div>
                       
                    </div>  
                </div>
            </div>
        </div>

          <script src="<?php echo base_url()?>assets/js/modernizr-2.6.2.min.js"></script>

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

        <script src="<?php echo base_url()?>assets/js/main.js"></script>
       