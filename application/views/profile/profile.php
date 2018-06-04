<?php if (isset($_SESSION['success'])){ ?>
    <div class="alert alert-success"> <?php echo $_SESSION['success']; ?></div>
<?php
}?>

<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Utilisateurs</a>
					</li>
					<li class="breadcrumb-item active">
						Détail du profil
					</li>
				</ol>
</nav>

<div class="page-head"> 
    <div class="container">
        <div class="row">
            <div class="page-head-content">
                <h1 class="page-title">Bonjour : <span class="orange strong"><?php echo $_SESSION['prenom'] ?> <?php echo $_SESSION['nom'] ?></span></h1>               
            </div>
        </div>
    </div>
</div>
<!-- End page header --> 

<!-- property area -->
<div class="content-area user-profiel" style="background-color: #FCFCFC;">&nbsp;
    <div class="container">   
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1 profiel-container">

                <form action="" method="">
                    <div class="profiel-header">
                        <h3>
                            <b>MODIFIER</b> VOTRE PROFIL <br>
                        </h3>
                        <hr>
                    </div>

                    <div class="clear">
                        <div class="col-sm-3 col-sm-offset-1">
                            <div class="picture-container">
                                <div class="picture">
                                    <img src="assets/img/avatar.png" class="picture-src" id="wizardPicturePreview" title=""/>
                                    <input type="file" id="wizard-picture">
                                </div>
                                <h6>Choisissez une photo</h6>
                            </div>
                        </div>

                        <div class="col-sm-3 padding-top-25">

                            <div class="form-group">
                                <label>Prénom <small>(requis)</small></label>
                                <input name="prenom" type="text" class="form-control" value="<?php echo $_SESSION['prenom'] ?>" placeholder="Andrew...">
                            </div>
                            <div class="form-group">
                                <label>Last Name <small>(requis)</small></label>
                                <input name="nom" type="text" class="form-control" value="<?php echo $_SESSION['nom'] ?>" placeholder="Smith...">
                            </div> 
                            <div class="form-group">
                                <label>Email <small>(requis)</small></label>
                                <input name="mail" type="email" class="form-control" value="<?php echo $_SESSION['mail'] ?>" placeholder="andrew@email@email.com.com">
                            </div> 
                        </div>
                    </div>

                    <div class="clear">
                        <br>
                        <hr>
                        <br>
                        <div class="col-sm-5 col-sm-offset-1">
                            <div class="form-group">
                                <label>Facebook :</label>
                                <input name="Facebook" type="text" class="form-control" placeholder="https://facebook.com/user">
                            </div>
                            <div class="form-group">
                                <label>Twitter :</label>
                                <input name="Twitter" type="text" class="form-control" placeholder="https://Twitter.com/@user">
                            </div>
                            <div class="form-group">
                                <label>Website :</label>
                                <input name="website" type="text" class="form-control" placeholder="https://yoursite.com/">
                            </div>
                        </div>  

                        <div class="col-sm-5">
                            <div class="form-group">
                                <label>Public email :</label>
                                <input name="p-email" type="email" class="form-control" placeholder="p-email@rmail.com">
                            </div>
                            <div class="form-group">
                                <label>Phone :</label>
                                <input name="Phone" type="text" class="form-control" placeholder="+1 9090909090">
                            </div>
                        </div>

                    </div>
            
                    <div class="col-sm-5 col-sm-offset-1">
                        <br>
                        <input type='button' class='btn btn-finish btn-primary' name='validate' value='Valider' />
                    </div>
                    <br>
            </form>

        </div>
    </div><!-- end row -->

</div>
</div>




<script src="assets/js/vendor/modernizr-2.6.2.min.js"></script>
<script src="assets/js//jquery-1.10.2.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/bootstrap-select.min.js"></script>
<script src="assets/js/bootstrap-hover-dropdown.js"></script>
<script src="assets/js/easypiechart.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.js"></script>
<script src="assets/js/icheck.min.js"></script>

<script src="assets/js/price-range.js"></script> 
<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>
<script src="assets/js/jquery.validate.min.js"></script>
<script src="assets/js/wizard.js"></script>

<script src="assets/js/main.js"></script>
