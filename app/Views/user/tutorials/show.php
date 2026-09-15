<!-- <?php //echo $this->extend('layouts/app_user') ?> -->

<?php echo $this->extend('layouts/app_user') ?>


<?php echo $this->section('content') ?>

<!-- <?php //echo $this->include('user/inc/navbar') ?> -->

<?php echo $this->include('user/inc/navbar') ?>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">


		<?php if($session->get('id_statu') == 2): ?>
			<div class="card-body">

				<h1>Activa tu cuenta</h1>

			</div>
		<?php endif; ?>
		

		<!-- <?php //if($session->get('is_buyer') == 1 && $session->get('id_statu') == 1 ): ?> -->
		<?php if($tutorials_pensum): ?>
			<div class="card-body">

				<h1 class="bg-success text-white">Clases del Curso</h1>

				<br>

				<div class="container">

					<a href="/tutorials" class="btn btn-info">Back</a>
					<br>

					<div class="col-md-6 offset-2">	

						<?php foreach ($tutorials_pensum as $tutorials): ?>	

							<h2>Introducción a <?php echo $tutorials->name; ?></h2>
							<hr>				
							
								

								<iframe width="560" height="315" src="<?php echo $tutorials->tutorial; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
								<br>


							<?php endforeach ?>

						</div>

					</div>

				</div>
			<?php endif; ?>


		</div>
	</div>


	<?php echo $this->include('user/inc/footer') ?>


	<?php echo $this->endSection() ?>
