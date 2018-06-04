      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
      <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
      <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />  
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  

   
        <div class="container box">   
           <div class="table-responsive">  
                <br />  
                <button type="button" id="add_button" data-toggle="modal" data-target="#userModal" class="btn btn-info btn-lg">Add</button>  
                <br /><br />  
                <table id="user_data" class="table table-bordered table-striped">  
                     <thead>  
                          <tr>  
                               <th width="20%">Aperçu</th>  
                               <th width="15%">Type de bien</th>  
                               <th width="10%">Prix</th>
                               <th width="35%">Nom</th>  
                               <th width="10%">Editer</th>  
                               <th width="10%">Supprimer</th>  
                          </tr>  
                     </thead>  
                </table>  
           </div>  
      </div>  

 <div id="userModal" class="modal fade">  
      <div class="modal-dialog">  
           <form method="post" id="user_form">  
                <div class="modal-content">  
                     <div class="modal-header">  
                          <button type="button" class="close" data-dismiss="modal">&times;</button>  
                          <h4 class="modal-title">Ajouter une annonce</h4>  
                     </div>  
                     <div class="modal-body">  
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
                                                </div>  
                     <div class="modal-footer">  
                          <input type="hidden" name="user_id" id="user_id" />  
                          <input type="submit" name="action" id="action" class="btn btn-success" value="Add" />  
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                     </div>  
                </div>  
           </form>  
      </div>  
 </div>  
 <script type="text/javascript" language="javascript" >  
 $(document).ready(function(){  
      $('#add_button').click(function(){  
           $('#user_form')[0].reset();  
           $('.modal-title').text("Ajouter une annonce");  
           $('#action').val("Add");  
           $('#user_uploaded_image').html('');  
      })  
      var dataTable = $('#user_data').DataTable({  
           "processing":true,  
           "serverSide":true,  
           "order":[],  
           "ajax":{  
                url:"<?php echo base_url() . 'annonces/fetch_user'; ?>",  
                type:"POST"  
           },  
           "columnDefs":[  
                {  
                     "targets":[0, 3, 4],  
                     "orderable":false,  
                },  
           ],  
      });  
      $(document).on('submit', '#user_form', function(event){  
           event.preventDefault();  
           var firstName = $('#first_name').val();  
           var lastName = $('#last_name').val();  
           var extension = $('#user_image').val().split('.').pop().toLowerCase();  
           if(extension != '')  
           {  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert("Invalid Image File");  
                     $('#user_image').val('');  
                     return false;  
                }  
           }       
           if(firstName != '' && lastName != '')  
           {  
                $.ajax({  
                     url:"<?php echo base_url() . 'crud/user_action'?>",  
                     method:'POST',  
                     data:new FormData(this),  
                     contentType:false,  
                     processData:false,  
                     success:function(data)  
                     {  
                          alert(data);  
                          $('#user_form')[0].reset();  
                          $('#userModal').modal('hide');  
                          dataTable.ajax.reload();  
                     }  
                });  
           }  
           else  
           {  
                alert("Bother Fields are Required");  
           }  
      });  
      $(document).on('click', '.update', function(){  
           var user_id = $(this).attr("id");  
           $.ajax({  
                url:"<?php echo base_url(); ?>crud/fetch_single_user",  
                method:"POST",  
                data:{user_id:user_id},  
                dataType:"json",  
                success:function(data)  
                {  
                     $('#userModal').modal('show');  
                     $('#first_name').val(data.first_name);  
                     $('#last_name').val(data.last_name);  
                     $('.modal-title').text("Edit User");  
                     $('#user_id').val(user_id);  
                     $('#user_uploaded_image').html(data.user_image);  
                     $('#action').val("Edit");  
                }  
           })  
      });  
 });  
 </script>  