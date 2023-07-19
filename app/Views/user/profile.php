<!-- <?php //echo $this->extend('layouts/app_user') ?> -->

<?php echo $this->extend('layouts/app_user') ?>


<?php echo $this->section('content') ?>




<!-- <?php //echo $this->include('user/inc/navbar') ?> -->

<?php echo $this->include('user/inc/navbar') ?>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">


		<div class="col-12">

			<h4 class="bg bg-success">

				<p class="text-white">
					Bienvenido: <?php echo $_SESSION['email']; ?>
					<br>
					Visitaste la academia en: <?php echo date('d-m-y'); ?>
				</p>

			</h4>

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

				</div>
			<?php endif; ?>


			<?php if($session->get('id_statu') == 1): ?>
				<div class="card-body">



					<div class="container">

						<h1>Tu cuenta está activada</h1>

						<h4>Cambiar Contraseña</h4>

						<div class="">

							<?php if ($session->getFlashdata('password_change')): ?>

								<p class="alert alert-success"><?php echo $session->getFlashdata('password_change') ?></p>

							<?php endif ?>

						</div>

						<!-- Main Wrapper -->

						<!--End Top Nav -->

						<!-- -------------------------------------------------- -->
						<div id="root">
							<div class="container pt-5">
								<div class="row align-items-stretch">

									<!-- <?php //if($profile): ?>

										<div class="col-lg-3 col-md-6">

											<h4>Nombre:<?php //print_r($profile[0]->first_name) ?></h4>
											<h4>Apellido:<?php //print_r($profile[0]->last_name) ?></h4>
											<h4>Email:<?php //print_r($profile[0]->email) ?></h4>

										</div>

									<?php //endif; ?>	
								-->

								<!-- <h5>Cambiar Contraseña</h5> -->

								<?php echo $this->include('errors/form/errors'); ?>

								<?php echo form_open('change'); ?>						

								<!-- <input type="password" name="password_old" placeholder="Contraseña actual" class="form-control">

								<br> -->

								<input type="password" name="password_new" placeholder="Nueva Contraseña" class="form-control">

								<br>

								<button type="submit" class="btn btn-info">Send</button>


								<?php echo form_close(); ?>







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


		<?php endif; ?>


	</div>







</div>
</div>


<?php echo $this->include('user/inc/footer') ?>


<?php echo $this->endSection() ?>
