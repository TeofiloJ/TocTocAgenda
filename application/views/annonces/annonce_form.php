<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Annonces</a>
					</li>
					<li class="breadcrumb-item active">
						Créer une annonce
					</li>
				</ol>
</nav>
          <div class="page-head"> 
            <div class="container">
                <div class="row">
                    <div class="page-head-content">
                        <h1 class="page-title">Créer votre annonce</h1>               
                    </div>
                </div>
            </div>
        </div>
        <!-- End page header -->

        <!-- property area -->
        <div class="content-area submit-property" style="background-color: #FCFCFC;">&nbsp;
            <div class="container">
                <div class="clearfix" > 
                    <div class="wizard-container"> 

                        <div class="wizard-card ct-wizard-orange" id="wizardProperty">
                            <form action="" method="POST">                        
                                
                                <ul>
                                    <li><a href="#step1" data-toggle="tab">Informations générales </a></li>
                                    <li><a href="#step2" data-toggle="tab">Détails </a></li>
                                    <li><a href="#step3" data-toggle="tab">Photos </a></li>
                                    <li><a href="#step4" data-toggle="tab">Validation </a></li>
                                </ul>

                                <div class="tab-content">

                                    <div class="tab-pane" id="step1">
                                        <div class="row p-b-15  ">
                                            <h4 class="info-text"> Commençons par les informations générales</h4>
                                            <div class="col-sm-4 col-sm-offset-1">
                                                <div class="picture-container">
                                                    <div class="picture">
                                                        <img src="<?php echo base_url()?>assets/img/default-property.jpg" class="picture-src" id="wizardPicturePreview" title=""/>
                                                        <input type="file" id="wizard-picture">
                                                    </div> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <label for="typeAnnonce">Type d'annonce</label>
                                                    <select id="typeAnnonce" name="typeAnnonce" class="form-control">
                                                        <option value="Location">Location</option>
                                                        <option value="Vente">Vente</option>
                                                    </select>
                                                </div>
                                                
                                                <!-- Select Basic -->
                                                <div class="form-group">
                                                    <labelfor="typeDeBien">Type de bien</label>
                                                    <select id="typeDeBien" name="typeDeBien" class="form-control">
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
                                                
                                                <!-- Text input-->
                                                <div class="form-group">
                                                    <label for="nom">Nom de l'annonce</label>  
                                                    <input id="nom" name="nom" placeholder="T1 25m² proche du centre ville" class="form-control input-md" required="" type="text">

                                                </div>

                                                <!-- Text input-->
                                                    <div class="form-group">
                                                            <label for="prix">Prix (€)</label>  
                                                            <input id="prix" name="prix" placeholder="125000" class="form-control input-md" required="" type="text">
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 1 -->

                                    <div class="tab-pane" id="step2">
                                        <h4 class="info-text"> A quel point votre bien est il magnifique ? </h4>
                                        <div class="row">
                                            <div class="col-sm-12"> 
                                                <div class="col-sm-12"> 
                                                    <div class="form-group">
                                                        <label>Description :</label>
                                                        <textarea name="description" class="form-control" ></textarea>
                                                    </div> 
                                                </div> 
                                            </div>

                                            <div class="col-sm-12">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <label>Ville :</label>
                                                        <select id="lunchBegins" class="selectpicker" data-live-search="true" data-live-search-style="begins" title="Select your city">
                                                            <option>Nantes</option>
                                                            <option>Carquefou</option>
                                                            <option>Orvault</option>
                                                            <option>Bouguenais</option>
                                                            <option>Rezé</option>
                                                            <option>Vertou</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                        <div class="form-group">
                                                            <label>Etat du bien  :</label>
                                                            <select id="basic" class="selectpicker show-tick form-control">
                                                                <option>Neuf</option>
                                                                <option>Rénové</option>
                                                                <option>Utilisé</option>
                                                                <option>A renover</option>
                                                                <option>Non adapté</option>  
    
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3">
                                                            <div class="form-group">
                                                                <label>Meublé  :</label>
                                                                <select id="basic" class="selectpicker show-tick form-control">
                                                                    <option>Non</option>
                                                                    <option>Oui</option>
        
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-3">
                                                                <div class="form-group">
                                                                    <label>Disponible à partir du  :</label>
                                                                    <select id="basic" class="selectpicker show-tick form-control">
                                                                        <option>Immédiatement</option>           
                                                                    </select>
                                                                </div>
                                                            </div>                                 
                                              

                                            </div>
                                            <div class="col-sm-12 padding-top-15">                                                   
                                                <div class="col-sm-2">
                                                        <div class="form-group">
                                                                <labelfor="surface">Surface (m²)</label>  
                                                                <input id="surface" name="surface" placeholder="25" class="form-control input-md" required="" type="text">
                                                              </div>
                                                </div>
                                                <div class="col-sm-3">

                                                    <!-- Select Basic -->
                                                    <div class="form-group">
                                                            <label  for="exposition">Exposition</label>
                                                            <select id="exposition" name="exposition" class="form-control">
                                                                <option value="Nord">Nord</option>
                                                                <option value="Sud">Sud</option>
                                                                <option value="Ouest">Ouest</option>
                                                                <option value="Est">Est</option>
                                                            </select>
                                                        </div>
                                                </div>
                                                <div class="col-sm-3">

                                                <!-- Text input-->
                                                <div class="form-group">
                                                        <label for="etage">Etage</label>  
                                                        <input id="etage" name="etage" placeholder="2" class="form-control input-md" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-2">

                                                        <!-- Select Basic -->
                                                        <div class="form-group">
                                                                <label  for="exposition">Chauffage</label>
                                                                <select id="chauffage" name="chauffage" class="form-control">
                                                                    <option value="Nord">Bois</option>
                                                                    <option value="Sud">Electrique</option>
                                                                    <option value="Ouest">Gaz</option>
                                                                    <option value="Est">Autre</option>
                                                                </select>
                                                            </div>
                                                    </div>
                                                    <div class="col-sm-2">

                                                        <!-- Text input-->
                                                        <div class="form-group">
                                                                <label for="charges">Charges (€)</label>  
                                                                <input id="charges" name="charges" placeholder="35" class="form-control input-md" type="text">
                                                            </div>
                                                        </div>

                                            </div>
                                            <div class="col-sm-12 padding-top-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Ascenceur
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Piscine
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Sortie de secours
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>                                                 
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Garage
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div> 
                                            <div class="col-sm-12 padding-bottom-15">
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Machine à laver
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Grenier
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Véranda
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-sm-3">
                                                    <div class="form-group">
                                                        <div class="checkbox">
                                                            <label>
                                                                <input type="checkbox"> Cave
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                    <!-- End step 2 -->

                                    <div class="tab-pane" id="step3">                                        
                                        <h4 class="info-text">Avez vous des photos ? </h4>
                                        <div class="row">  
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label for="property-images">Choisir une photo :</label>
                                                    <input class="form-control" type="file" id="property-images">
                                                    <p class="help-block">Selectionnez plusieurs photos de votre bien.</p>
                                                </div>
                                            </div>
                                      </div>
                                    </div>
                                    <!--  End step 3 -->


                                    <div class="tab-pane" id="step4">                                        
                                        <h4 class="info-text"> Terminer et valider </h4>
                                        <div class="row">  
                                            <div class="col-sm-12">
                                                <div class="">
                                                    <p>
                                                        <label><strong>Termes et conditions</strong></label>
                                                        En accedant ou utilisant TocTocAgenda, par exemple en postant votre annonce de propriété avec vos informations personnelles sur notre site Web, vous acceptez la collecte, l'utilisation et la divulgation de vos informations personnelles de manière légale.
                                                        </p>

                                                    <div class="checkbox">
                                                        <label>
                                                            <input type="checkbox" /> <strong>Accepter les termes et conditions.</strong>
                                                        </label>
                                                    </div> 

                                                </div> 
                                            </div>
                                        </div>
                                    </div>
                                    <!--  End step 4 -->

                                </div>

                                <div class="wizard-footer">
                                    <div class="pull-right">
                                        <input type='button' class='btn btn-next btn-primary' name='next' value='Suivant' />
                                        <input type='submit' class='btn btn-finish btn-primary ' id="validate" name='validate' value='Valider' />
                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default'  name='previous' value='Précédent' />
                                    </div>
                                    <div class="clearfix"></div>                                            
                                </div>	
                            </form>
                        </div>
                        <!-- End submit form -->
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
