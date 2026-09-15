<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>

<meta name="description" content="Test de Symfony 6, 7 con certificado, test de programación de php intermedio, examen free">



	<?php echo $this->endSection() ?>


	<?php echo $this->section('content') ?>



	<div class="container" >

		<br>

		<div class="">		



			<div class="col-md-12">

			<h1>Examen Certificacion Symfony 6 y 7</h1>

			<p>Test con una duracion aproximada de 15 minutos con preguntas y respuestas de seleccion simple, puntua entre el 30% mejor para recibir el certificado</p>

			<?php echo $this->include('errors/form/errors'); ?>

			<?php echo form_open('startsym'); ?>
			

			<input type="text" name="first_name" placeholder="ejem:jonathan" class="form-control">

			<br>


			<input type="text" name="last_name" placeholder="ejem:castro" class="form-control">

			<br>				

			<input type="email" name="email" placeholder="email@gmail.com" class="form-control">
			<!-- <div class="text-danger"><?php //echo form_error('email');  ?></div>  -->
			
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

<!-- <script src="/assets/js/graduates.js"></script>  -->


<?php echo $this->include('inc/footer') ?>




	<?php echo $this->endSection() ?>