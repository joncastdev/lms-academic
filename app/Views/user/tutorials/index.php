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

					<h2>Introducción a GitHub</h2>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/JBa_rwN_A6I" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					<hr>

					<h2>Introducción a Laravel 10</h2>

					<iframe width="560" height="315" src="https://www.youtube.com/embed/v_xXYRyAeHg" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

					<hr>

					

				</div>

			</div>


		<?php endif; ?>



		

	</div>
</div>


<?php echo $this->include('user/inc/footer') ?>


<?php echo $this->endSection() ?>
