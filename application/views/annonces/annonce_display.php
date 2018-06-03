<nav>
				<ol class="breadcrumb">
					<li class="breadcrumb-item">
						<a href="#">Home</a>
					</li>
					<li class="breadcrumb-item">
						<a href="#">Annonces</a>
					</li>
					<li class="breadcrumb-item active">
						Détail de l'annonce
					</li>
				</ol>
			</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-6">
					<h3><?php echo $annonce[0]->nom ?></h3>
								<script src="<?php echo base_url()?>assets/js/ism-2.2.min.js"></script>
					<div class='container'>

					<div class="ism-slider" data-play_type="loop" data-radio_type="thumbnail" id="my-slider">
					<ol>
						<li>
						<img src="<?php echo base_url()?>assets/img/test1.jpg">
						</li>
						<li>
						<img src="<?php echo base_url()?>assets/img/test1.jpg">
						</li>
						<li>
						<img src="<?php echo base_url()?>assets/img/test1.jpg">
						</li>
					</ol>
					</div></div>
					
<div class="tg-wrap"><table class="tg">
  <tr>
    <th class="tg-us36">Critère</th>
    <th class="tg-yw4l">Valeur</th>
  </tr>
  <tr>
    <td class="tg-b7b8">Type d'annonce</td>
    <td class="tg-b7b8"><?php echo $annonce[0]->typeAnnonce ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Type de bien</td>
    <td class="tg-yw4l"><?php echo $annonce[0]->typeDeBien ?></td>
  </tr>
  <tr>
    <td class="tg-b7b8">Nom</td>
    <td class="tg-b7b8"><?php echo $annonce[0]->nom ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Prix (€)</td>
    <td class="tg-yw4l"><?php echo $annonce[0]->prix ?></td>
  </tr>
  <tr>
    <td class="tg-b7b8">Charges (€)</td>
    <td class="tg-b7b8"><?php echo $annonce[0]->charges ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Description</td>
    <td class="tg-yw4l"><?php echo $annonce[0]->description ?></td>
  </tr>
  <tr>
    <td class="tg-b7b8">Surface (m²)</td>
    <td class="tg-b7b8"><?php echo $annonce[0]->surface ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Exposition</td>
    <td class="tg-yw4l"><?php echo $annonce[0]->exposition ?></td>
  </tr>
  <tr>
    <td class="tg-b7b8">Etage</td>
    <td class="tg-b7b8"><?php echo $annonce[0]->etage ?></td>
  </tr>
  <tr>
    <td class="tg-yw4l">Chauffage</td>
    <td class="tg-yw4l"><?php echo $annonce[0]->chauffage ?></td>
  </tr>
</table></div>
				</div>
				<div class="col-md-6">

					<link rel="stylesheet" href="<?php echo base_url() ?>assets/calendar/fullcalendar.min.css" />
					<script src="<?php echo base_url() ?>assets/calendar/lib/moment.min.js"></script>
					<script src="<?php echo base_url() ?>assets/calendar/fullcalendar.min.js"></script>
					<script src="<?php echo base_url() ?>assets/calendar/gcal.js"></script>

					<div id="calendar">

					</div>

					<script type="text/javascript">
							$(document).ready(function() {
								$('#calendar').fullCalendar({
									eventSources: [
										{
											color: '#18b9e6',   
											textColor: '#000000',
											events: [
												{
								title: 'Event 1',
								start: '2018-06-01'
							},
							{
								title: 'Event 2',
								start: '2018-06-07'
							}
											]
										}
									]
								});
							});
					</script>
				</div>
			</div>
			<h4>
				Annonces à proximités
			</h4>
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
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Second" src="https://www.layoutit.com/img/city-q-c-600-200-1.jpg" />
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
				<div class="col-md-4">
					<div class="card">
						<img class="card-img-top" alt="Bootstrap Thumbnail Third" src="https://www.layoutit.com/img/sports-q-c-600-200-1.jpg" />
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
</div>