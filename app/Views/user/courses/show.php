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

				<h1>Activate your account</h1>

			</div>
		<?php endif; ?>
		

		<!-- <?php //if($session->get('is_buyer') == 1 && $session->get('id_statu') == 1 ): ?> -->
		<?php if($courses_pensum): ?>
		<div class="card-body">

			<h1 class="bg-success text-white">Courses Class</h1>

			<br>

			<div class="container">

				<a href="/courses" class="btn btn-info">Back</a>
				<br>

				<div class="col-md-6 offset-2">	

					<?php foreach ($courses_pensum as $pensums): ?>	





							<h2><?php echo $pensums->pensum; ?></h2>
							<hr>

							<a href="/videos/<?php echo $pensums->id_pensum; ?>" class="btn btn-success">View</a>


							<?php endforeach ?>

						</div>

					</div>

				</div>
			<?php endif; ?>


		</div>
	</div>


	<?php echo $this->include('user/inc/footer') ?>


	<?php echo $this->endSection() ?>
