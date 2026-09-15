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
		<?php endif; ?>


		<!-- <?php //if($session->get('is_buyer') == 0 && $session->get('id_statu') == 1): ?> -->
		<!-- <?php //if($users_courses == null && $session->get('id_statu') == 1): ?> -->
		<?php if($session->get('id_statu') == 1): ?>
			<div class="card-body">

				<h1 class="bg-info text-white">Catalogo de Cursos Gratis</h1>
				<br>

				<div class="container">


					<?php foreach ($all_tutorials as $tutorial): ?>						


						<h2><?php echo $tutorial->name; ?></h2>
						<hr>					
						<br>

						<a href="/tutorials/show/<?php echo $tutorial->id_tutorial; ?>" class="btn btn-info">Ir al curso</a>

										



					<?php endforeach ?>

					

					

				</div>

			</div>


		<?php endif; ?>



		

	</div>
</div>


<?php echo $this->include('user/inc/footer') ?>


<?php echo $this->endSection() ?>
