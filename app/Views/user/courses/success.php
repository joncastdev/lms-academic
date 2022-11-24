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

			</div>
		<?php endif; ?>


		<?php if($session->get('id_statu') == 1): ?>
		<div class="card-body">
			
			<div class="container">

				<p class="bg-info text-white">Thank you, your payment is being reviewed</p>
				

			</div>
		</div>
	<?php endif; ?>


	<?php echo $this->include('user/inc/footer') ?>


	<?php echo $this->endSection() ?>
