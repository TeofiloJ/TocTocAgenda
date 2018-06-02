
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

<div class="row">
	<div class="col-md-8">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
				
				<form class="form-inline">
					<input class="form-control mr-sm-2" type="text" /> 
					<button class="btn btn-primary my-2 my-sm-0" type="submit">
						Search
					</button>
				</form>							
		</nav>
		<table class="table table-striped table-sm">
			<thead>
				<tr>
					<th>
						#
					</th>
					<th>
						Product
					</th>
					<th>
						Payment Taken
					</th>
					<th>
						Status
					</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>
						1
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						01/04/2012
					</td>
					<td>
						Default
					</td>
				</tr>
				<tr class="table-active">
					<td>
						1
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						01/04/2012
					</td>
					<td>
						Approved
					</td>
				</tr>
				<tr class="table-success">
					<td>
						2
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						02/04/2012
					</td>
					<td>
						Declined
					</td>
				</tr>
				<tr class="table-warning">
					<td>
						3
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						03/04/2012
					</td>
					<td>
						Pending
					</td>
				</tr>
				<tr class="table-danger">
					<td>
						4
					</td>
					<td>
						TB - Monthly
					</td>
					<td>
						04/04/2012
					</td>
					<td>
						Call in to confirm
					</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="col-md-4">
		<h6>
			Annonce Mise en avant
		</h6>
		<div class="row">
			<div class="col-md-4">
				<div class="card">
					<img class="card-img-top" alt="Bootstrap Thumbnail First" src="https://www.layoutit.com/img/people-q-c-600-200-1.jpg" />
					<div class="card-block">
						<h5 class="card-title">
							Card title
						</h5>
						<p class="card-text">
							Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
						</p>
						<p>
							<a class="btn btn-primary" href="#">Action</a> <a class="btn" href="#">Action</a>
						</p>
					</div>
				</div>
			</div>						
		</div>
	</div>
</div>