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
			<!-- <?php //if($users_courses->id_course != 1 || $users_courses->id_course != 2 ): ?> -->
			<div class="card-body">

				<h1 class="bg-success text-white">Checkout</h1>

				<!-- <h2><?php //print_r($users_courses); ?></h2> -->
				<br>

				<div class="container">


					<form class="form-horizontal" action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="POST">
						<input type='hidden' name='business' value='sb-dmymh19134302@business.example.com'>
						<input type='hidden' name='item_name' value='<?php echo 'Curso '.$course->name; ?>'>
						<input type='hidden' name='item_number' value="1">
						<input type='hidden' name='amount' value='<?php echo $course->price; ?>'>
						<input type='hidden' name='currency_code' value='USD'>
						<input type='hidden' name='notify_url' value='<?php echo base_url('notify'); ?>'>
						<!-- <input type='hidden' name='return' value='<?php //echo base_url('success'); ?>'> -->
						<input type='hidden' name='return' value='http://localhost:8080/success?id_course=<?php echo $course->id_course; ?>'> 
						<input type='hidden' name='cancel_return' value='<?php echo base_url('cancel'); ?>'>

						<input type="hidden" name="no_shipping" value="1">
						<!-- <input type='hidden' name='return' value='http://localhost:8080/success?id_course=<?php //echo $course->id_course; ?>&price=<?php //echo $course->price;?>'> -->						
						<!-- <input type="hidden" name="rm" value="2" >   -->
						<input type="hidden" name="cmd" value="_xclick">
						<input type="hidden" name="order" value="<?php echo $course->id_course; ?>">
						<br>
						<div class="form-group">
							<div class="col-sm-2">
								<input type="submit" class="btn btn-lg btn-block btn-danger" name="continue_payment" value="Pay Now">

							</div>

						</div>
					<?php endif; ?>						



				</div>
			</div>


			<?php echo $this->include('user/inc/footer') ?>


			<?php echo $this->endSection() ?>
