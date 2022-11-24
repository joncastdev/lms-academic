<?php echo $this->extend('layouts/app_admin') ?>


<?php echo $this->section('content') ?>

<?php echo $this->include('admin/inc/navbar') ?>

<div class="container">

	<h1>Agregar user</h1>
	<hr>
	<br>
	<br>

	<div class="col-6 offset-3">

		<a class="btn btn-dark" href="<?php echo base_url('/users');?>" >Volver</a>

		<br>
		<br>

		<?php if(!empty($errors)) : ?>

			<!-- <?php //print_r($errors); ?> -->

			<?php foreach($errors as $error) : ?>

				<p class="alert-danger"><?php echo $error; ?></p>

			<?php endforeach ?>	


		<?php endif ?>	
		

		<?php echo form_open('/users') ?>

		<input type="hidden" class="txt_csrfname" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
		

		<input class="form-control" type="text" name="first_name">
		<br>

		<input class="form-control" type="text" name="last_name">
		<br>

		<input class="form-control" type="text" name="email">
		<br>
		
		<button class="btn btn-primary" type="submit">enviar</button>

		<?php echo form_close() ?>

	</div>

	<br>
	<br>

	<br>
	<br>

	<br>
	<br>

</div>

<?php echo $this->include('admin/inc/footer') ?>

<?php echo $this->endSection() ?>