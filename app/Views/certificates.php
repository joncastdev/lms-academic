<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container">

	<br>

	<div class="row">		

		

		<div class="col-md-6 offset-3">

			<h1>Ingresar Nro de Certificado</h1>

			<div class="">

				<!-- <?php //if ($session->getFlashdata('create')): ?>

					<p class="alert alert-success"><?php //echo $session->getFlashdata('create') ?></p>
					
					<?php //endif ?> -->

				</div>


				<?php echo $this->include('errors/form/errors'); ?>



				<a href="/" class="btn btn-light">Back</a>

				<br>
				<br>			

				<?php echo form_open('number','method=get'); ?>
<!-- 
				<input type="text" name="certificate" placeholder="ejem: jonathan" class="form-control">			

				<button type="submit" class="btn btn-info">Send</button> -->

				<div class="input-group">
					<input type="text" name="certificate" class="form-control" placeholder="Ejemplo Nro: 1">
					<div class="input-group-append">
						<button class="btn btn-danger" type="submit">
							<i class="fa fa-search"></i>
						</button>
					</div>
				</div>


				<?php echo form_close(); ?>

			</div>

		</div>

	</div>


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



	<?php echo $this->include('inc/footer') ?>


	<?php echo $this->endSection() ?>