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

				<p>Activa tu cuenta con el email de verificación para acceder a los cursos</p>
				<br>
				<br>
				<br>
				<br>

			</div>
		<?php endif; ?>


		<?php if($session->get('id_statu') == 1): ?>
			<div class="card-body">

				<div class="container">

					<p class="bg-info text-white">Gracias, su pago está siendo revisado.</p>


				</div>
			</div>
		<?php endif; ?>


		<?php echo $this->include('user/inc/footer') ?>


		<?php echo $this->endSection() ?>
