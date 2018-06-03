
<nav>
	<ol class="breadcrumb">
		<li class="breadcrumb-item">
			<a href="<?php echo base_url()?>">Home</a>
		</li>
		<li class="breadcrumb-item">
			<a href="<?php echo base_url()?>annonces">Annonces</a>
		</li>
		<li class="breadcrumb-item active">
			Rechercher
		</li>
	</ol>
</nav>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<div class="row">
			<html>
 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
 
  <div class="container">
   <br />
   <br />
   <br />
   <div class="form-group">
    <div class="input-group">
     <span class="input-group-addon">Search</span>
     <input type="text" name="search_text" id="search_text" placeholder="Rechercher une annonce par critère" class="form-control" />
    </div>
   </div>
   <br />
   <div id="result"></div>
  </div>
  <div style="clear:both"></div>
  <br />
  <br />
  <br />
  <br />


<script>
$(document).ready(function(){

 load_data();

 function load_data(query)
 {
  $.ajax({
   url:"<?php echo base_url(); ?>search/fetch",
   method:"POST",
   data:{query:query},
   success:function(data){
    $('#result').html(data);
   }
  })
 }

 $('#search_text').keyup(function(){
  var search = $(this).val();
  if(search != '')
  {
   load_data(search);
  }
  else
  {
   load_data();
  }
 });
});
</script>


			</div>
		</div>
	</div>
</div>