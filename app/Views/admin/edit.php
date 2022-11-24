<?php echo $this->extend('layouts/app_admin') ?>


<?php echo $this->section('content') ?>

<?php echo $this->include('admin/inc/navbar') ?>



<div class="container">

	<h1 class="jumbotron">Editar usuario</h1>
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

		<?php echo form_open('','id="usersEdit"') ?>

		<input type="hidden" name="user_id" id="user_id" value="<?php echo $users->id_user ?>" >

		<input class="form-control" type="text" value="<?php echo $users->first_name; ?>" name="first_name" id="first_name">
		<br>

		<input class="form-control" type="text" value="<?php echo $users->last_name; ?>" name="last_name" id="last_name">
		<br>

		<!-- <input class="form-control" type="text" value="<?php //echo $users->email; ?>" name="email" id="email"> -->
		<br>
		

		<input type="hidden" name="_method" value="PUT" >

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