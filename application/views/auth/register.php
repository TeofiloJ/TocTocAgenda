    <h1>S'enregistrer</h1>
    <form action="" method="POST" class="form-horizontal">
<fieldset>

<?php if (isset($_SESSION['success'])){ ?>
    <div class="allert alert-success"> <?php echo $_SESSION['success']; ?></div>
<?php
}?>

<!-- Form Name 
<legend>Form Name</legend>
-->
<!-- Text input-->
<div class="form-group">
    <label class="col-md-4 control-label" for="prenom">Prénom</label>  
    <div class="col-md-4">
        <input id="prenom" name="prenom" placeholder="John" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="nom">Nom</label>  
    <div class="col-md-4">
        <input id="nom" name="nom" placeholder="Smith" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="mail">Mail</label>  
    <div class="col-md-4">
        <input id="mail" name="mail" placeholder="Mail" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Text input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="telephone">telephone</label>  
    <div class="col-md-2">
        <input id="telephone" name="telephone" placeholder="01 02 03 04 05" class="form-control input-md" required="" type="text">
        
    </div>
    </div>

    <!-- Select Basic -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="statut">Statut</label>
    <div class="col-md-2">
        <select id="statut" name="statut" class="form-control">
            <option value="Particulier">Particulier</option>
            <option value="EI">EI</option>
            <option value="EURL">EURL</option>
            <option value="SARL">SARL</option>
            <option value="SE">SE</option>
            <option value="SAS">SAS</option>
            <option value="SNC">SNC</option>
            <option value="SCOP">SCOP</option>
        </select>
    </div>
    </div>

    <!-- Password input-->
    <div class="form-group">
        <label class="col-md-4 control-label" for="mdp">Mot de passe</label>
    <div class="col-md-4">
        <input id="mdp" name="mdp" placeholder="********" class="form-control input-md" required="" type="password">
        
    </div>
    </div>

    <!-- Button -->
    <div class="form-group">
        <label class="col-md-4 control-label" for="register"></label>
        <div class="col-md-4">
            <button id="register" name="register" class="btn btn-primary">S'enregistrer</button>
        </div>
    </div>

    </fieldset>
    </form>
</div>