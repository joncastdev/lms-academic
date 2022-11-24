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

				<p>Activate your account with the verification email to access the courses</p>
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

				<h1 class="bg-info text-white">Available Courses</h1>
				<br>

				<div class="container">

					<?php foreach ($all_courses as $coursesb): ?>						


						<h2><?php echo $coursesb->name; ?></h2>
						<hr>
						<h2><?php echo $coursesb->price.'$'; ?></h2>
						<br>

						<a href="/checkout/<?php echo $coursesb->id_course; ?>" class="btn btn-info">Go to checkout</a>				



					<?php endforeach ?>

				</div>

			</div>


		<?php endif; ?>



		<!-- <?php //if($session->get('is_buyer') == 1 && $session->get('id_statu') == 1 ): ?> -->
		<?php if($users_courses): ?>
			<div class="card-body">

				<h1 class="bg-success text-white">My course list</h1>

				<br>

				<div class="container">

					<?php foreach ($users_courses as $courses): ?>						


						<h2><?php echo $courses->name; ?></h2>
						<hr>
						<br>					

						<a href="/courses/<?php echo $courses->id_course; ?>" class="btn btn-success">Start the classes</a>


					<?php endforeach ?>

				</div>

			</div>
		<?php endif; ?>

	</div>
</div>


<?php echo $this->include('user/inc/footer') ?>


<?php echo $this->endSection() ?>
