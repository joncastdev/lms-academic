<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container">

	<br>

	<div class="row">		

		

		<div class="col-md-6 offset-3">

			<h1>Graduados</h1>

			<div class="">

				<!-- <?php //if ($session->getFlashdata('create')): ?>

					<p class="alert alert-success"><?php //echo $session->getFlashdata('create') ?></p>
					
					<?php //endif ?> -->

				</div>


				<?php echo $this->include('errors/form/errors'); ?>



				<a href="/" class="btn btn-light">Back</a>

				<br>
				<br>			

				<?php if($users): ?>

									

										

										<table class="table table-responsive table-striped" id="myTable">				
				<thead>
					<tr>
						<th>Imagen</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Cursos</th>
						<th>Red Social</th>								
					</tr>
				</thead>
				<tbody>

					<?php foreach ($users  as $user ): ?>
						

						<tr>
							<td><?php echo $user->img; ?></td>
							<td><?php echo $user->first_name; ?></td>
							<td><?php echo $user->last_name; ?></td>
							<td><?php echo $user->linkedin; ?></td>

							<!-- <td><?php //echo $certificate->name; ?></td>	 -->						
							<!-- <td><?php //echo date('d-m-Y',strtotime($certificate->created_at)) ?></td>	 -->					
							<td>
								
							</td>
						</tr>

					<?php endforeach ?>

				</tbody>
			</table>
										
									
										

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



	<?php echo $this->include('inc/footer') ?>


	<?php echo $this->endSection() ?>