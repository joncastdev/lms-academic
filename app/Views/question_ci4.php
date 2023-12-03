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

			<!-- 	<?php //echo //$this->include('errors/form/errors'); ?> -->

			<?php echo form_open('question'); ?>

			<p class="bg-white text-dark">1)<?php print_r($questions[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question1" value="<?php print_r($amswer[0]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[0]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question1" value="<?php print_r($amswer[1]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[1]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question1" value="<?php print_r($amswer[2]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[2]->amswer)  ?> </label>

			
			<br>

			<p class="bg-white text-dark">2)<?php print_r($questions2[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question2" value="<?php print_r($amswer[3]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[3]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question1" value="<?php print_r($amswer[4]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[4]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question1" value="<?php print_r($amswer[5]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[5]->amswer)  ?> </label>

			
			<br>


			<p class="bg-white text-dark">3)<?php print_r($questions3[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question3" value="<?php print_r($amswer[6]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[6]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question3" value="<?php print_r($amswer[7]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[7]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question3" value="<?php print_r($amswer[8]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[8]->amswer)  ?> </label>

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