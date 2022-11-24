<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container">

	<br>

	<div class="row">		

		

		<div class="col-md-6 offset-3">

			<h1>Recuperar Contraseña</h1>

			<div class="">

				<?php if ($session->getFlashdata('create')): ?>

					<p class="alert alert-success"><?php echo $session->getFlashdata('create') ?></p>
					
				<?php endif ?>
				
			</div>


		 	<?php echo $this->include('errors/form/errors'); ?>

			

			<a href="/" class="btn btn-light">Back</a>			

			<?php echo form_open('recoverpass'); ?>			

			<input type="email" name="email" placeholder="email@gmail.com" class="form-control">			
			<br>			

			<button type="submit" class="btn btn-info">Send</button>


			<?php echo form_close(); ?>

		</div>

	</div>

</div>



<?php echo $this->include('inc/footer') ?>


<?php echo $this->endSection() ?>