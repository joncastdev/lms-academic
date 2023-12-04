<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



	<?php echo $this->endSection() ?>


	<?php echo $this->section('content') ?>



	<div class="container" >

		<br>

		<div class="">		



			<div class="col-md-12">

			<h1>Examen Certificacion CodeIgniter 4</h1>

			<p>Test con una duracion de 15 minutos con preguntas y respuestas, puntua entre los mejores</p>

			<?php echo $this->include('errors/form/errors'); ?>

			<?php echo form_open('start'); ?>
			

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