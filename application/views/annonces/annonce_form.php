<form action="" method="POST" class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Votre annonce</legend>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="typeAnnonce">Type d'annonce</label>
  <div class="col-md-2">
    <select id="typeAnnonce" name="typeAnnonce" class="form-control">
      <option value="Location">Location</option>
      <option value="Vente">Vente</option>
    </select>
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="typeDeBien">Type de bien</label>
  <div class="col-md-4">
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
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nom">Nom de l'annonce</label>  
  <div class="col-md-4">
  <input id="nom" name="nom" placeholder="T1 25m² proche du centre ville" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="prix">Prix (€)</label>  
  <div class="col-md-2">
  <input id="prix" name="prix" placeholder="125000" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="charges">Charges (€)</label>  
  <div class="col-md-2">
  <input id="charges" name="charges" placeholder="25" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="description">description</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="description" name="description"></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="surface">Surface (m²)</label>  
  <div class="col-md-2">
  <input id="surface" name="surface" placeholder="25" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="exposition">Exposition</label>
  <div class="col-md-2">
    <select id="exposition" name="exposition" class="form-control">
      <option value="Nord">Nord</option>
      <option value="Sud">Sud</option>
      <option value="Ouest">Ouest</option>
      <option value="Est">Est</option>
    </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="etage">Etage</label>  
  <div class="col-md-1">
  <input id="etage" name="etage" placeholder="2" class="form-control input-md" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="chauffage">Chauffage</label>
  <div class="col-md-2">
    <select id="chauffage" name="chauffage" class="form-control">
      <option value="Electrique">Electrique</option>
      <option value="Gaz">Gaz</option>
      <option value="Autre">Autre</option>
    </select>
  </div>
</div>

<!-- File Button --> 
<div class="form-group">
  <label class="col-md-4 control-label" for="photo">Photo</label>
  <div class="col-md-4">
    <input id="photo" name="photo" class="input-file" type="file">
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="validate"></label>
  <div class="col-md-4">
    <button id="validate" name="validate" class="btn btn-success">Valider</button>
  </div>
</div>

</fieldset>
</form>
