<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url()?>">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?php echo base_url()?>auth">Authentification</a>
		</li>
		<li class="breadcrumb-item active">
			Login
		</li>
	</ol>
</nav>
    
    <form action="" method="POST" class="form-horizontal">
<fieldset>

<?php if (isset($_SESSION['error'])){ ?>
    <div class="alert alert-info"> <?php echo $_SESSION['error']; ?></div>
<?php
}?>
<?php if (isset($_SESSION['failure'])){ ?>
    <div class="alert alert-danger"> <?php echo $_SESSION['failure']; ?></div>
<?php
}?>


    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="mail">Mail</label>  
    <div class="col-md-4">
        <input id="mail" name="mail" placeholder="Mail" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
    <div class="col-md-4">
        <input id="mdp" name="mdp" placeholder="********" class="form-control input-md" required="" type="password">
        <p class="help-block"><a href="<?php echo base_url()?>auth/register">Créer un compte</a></p>
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="login"></label>
        <div class="col-md-4">
            <button id="login" name="login" class="btn btn-primary">Se connecter</button>
        </div>
    </div>

    </fieldset>
    </form>
</div>