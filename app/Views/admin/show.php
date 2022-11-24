<?php echo $this->extend('layouts/app_admin') ?>


<?php echo $this->section('content') ?>

<?php echo $this->include('admin/inc/navbar') ?>


<div class="container">


	<h1 class="jumbotron">Ver User</h1>
	<hr>
	<br>
	<br>

	<div class="col-6 offset-3">

		<a class="btn btn-dark" href="<?php echo base_url('/users');?>" >Volver</a>

		<br>
		<br>

		<div class="card">

			<div class="card-body">

				<h5 class="text-center"><p class="text-info">FirstName:<?php echo $users->first_name; ?></p></h5>
				<h5 class="text-center"><p class="text-info">LastName:<?php echo $users->last_name; ?></p></h5>
				<h5 class="text-center"><p class="text-info">Email:<?php echo $users->email; ?></p></h5>

			</div>

		</div>


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