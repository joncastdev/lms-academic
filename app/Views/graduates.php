<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>

<!-- <script src="/assets/js/graduates.js"></script>  -->

<?php echo $this->renderString('<link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
	integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
	crossorigin=""/>') ?>

	<?php echo $this->endSection() ?>


	<?php echo $this->section('content') ?>



	<div class="container" >

		<br>

		<div class="">		



			<div class="col-md-12">

				<h1>Graduados de la Academia</h1>
				<h3>Encuentra el mejor talento para tu empresa</h3>
				<h4>Estudiantes de diferentes partes del mundo estan aprendiendo</h4>

				<div class="">

				<!-- <?php //if ($session->getFlashdata('create')): ?>

					<p class="alert alert-success"><?php //echo $session->getFlashdata('create') ?></p>
					
					<?php //endif ?> -->

				</div>


				<!-- 	<div class="col-8">   -->
					<!-- <div id="mapid" style="width: 100%;height: 480px;box-shadow: 5px 5px 5px #888;"></div> -->
					<!-- </div> -->
					<hr>



					<a href="/" class="btn btn-light">Back</a>

					<br>
					<br>			

					<?php if($users): ?>

						<div class="row">

							<div class="col-md-6">
								<div id="mapid" style="width: 100%;height: 480px;box-shadow: 5px 5px 5px #888;"></div>
							</div>

							<div class="col-md-6">

								<table class="table table-responsive table-striped" id="myTable">				
									<thead>
										<tr>
											<!-- <th>Imagen</th> -->
											<th>Nombre</th>
											<th>Apellido</th>
											<th>Pais</th>
											<th>LinkedIn</th>								
										</tr>
									</thead>
									<tbody>

										<?php
							// $data = array_merge($users,$certificates);

							// print_r($data);

							// $result = json_decode($data, true);

							// exit;
										?>

										<?php foreach ($users  as $user ): ?>

								<!-- <?php 

								$result //= json_decode($user, true);
								?> -->

								<!-- 	<td><?php //print_r($user); ?></td> -->


								<tr>
									<!-- 	<td><?php //echo $user->img; ?></td> -->
									<td><?php print_r($user->first_name); ?></td>
									<td><?php echo $user->last_name; ?></td> 

									<td><?php echo $user->country; ?></td> 

									<td><a href="https://www.linkedin.com/in/<?php echo $user->linkedin; ?>" rel="nofollow"  class="fab fa-linkedin btn btn-primary btn-lg" target="_blank"></a></td> 

									<!-- <td><?php //echo $certificate->name; ?></td>	 -->						
									<!-- <td><?php //echo date('d-m-Y',strtotime($certificate->created_at)) ?></td>	 -->					
									<td>

									</td>
								</tr>

							<?php endforeach ?>

						</tbody>
					</table>

				</div>

			</div>




		<?php endif; ?>


		<?php if($users == null): ?>

			<h2 class="bg-danger text-white">No Tenemos Graduados</h2>

		<?php endif; ?>		


	</div>
</div>
</div>
<!-- ------------------------------------------------------------- -->
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>				

</div>

</div>





</div>

</div>

</div>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>		

<!-- <script src="/assets/js/graduates.js"></script>  -->


<?php echo $this->include('inc/footer') ?>

<?php echo $this->renderString('<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
	integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
	crossorigin=""></script>') ?>

	<?php echo $this->renderString('<script src="/assets/js/map.js"></script>') ?>


	<?php echo $this->endSection() ?>