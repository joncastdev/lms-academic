<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container">

	<br>

	<div class="row">		

		

		<div class="col-md-6 offset-3">

			<h1>Test Aprobado</h1>
			

			<p class="bg-success text-white">Has probado mas del 70% del test con Exito, te encuentras entre el 30% mejor</p>

			<a href="/certificates/exams" class="btn btn-light">Ir a certificados</a>	

			

		</div>

	</div>

</div>



<?php echo $this->include('inc/footer') ?>


<?php echo $this->endSection() ?>