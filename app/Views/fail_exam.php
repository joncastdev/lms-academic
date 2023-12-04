<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container">

	<br>

	<div class="row">		

		

		<div class="col-md-6 offset-3">

			<h1>Test Reprobado</h1>
			
			<p class="bg-success text-white">Has reprobado el test, te encuentras por debajo del 30% mejor, sigue intentado o explora algunos de nuestros cursos</p>

			<a href="/register" class="btn btn-light">Empezar Hoy</a>	

			

		</div>

	</div>

</div>



<?php echo $this->include('inc/footer') ?>


<?php echo $this->endSection() ?>