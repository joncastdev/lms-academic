<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container" >

	<br>

	<div class="">		



		<div class="col-md-12">

			<h1>Examen Certificacion Symfony 6 y 7</h1>

			<p>Test de seleccion simple 10 con preguntas, puntua entre los mejores para recibir el certificado gratuito de participacion</p>

			 	<?php echo $this->include('errors/form/errors'); ?> 

			<?php echo form_open('evaluationsym'); ?>

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

			<p class="bg-white text-dark">4)<?php print_r($questions4[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question4" value="<?php print_r($amswer[9]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[9]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question4" value="<?php print_r($amswer[10]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[10]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question4" value="<?php print_r($amswer[11]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[11]->amswer)  ?> </label>

			<br>

			<p class="bg-white text-dark">5)<?php print_r($questions5[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question5" value="<?php print_r($amswer[12]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[12]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question5" value="<?php print_r($amswer[13]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[13]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question5" value="<?php print_r($amswer[14]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[14]->amswer)  ?> </label>

			<br>

			<p class="bg-white text-dark">6)<?php print_r($questions6[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question6" value="<?php print_r($amswer[15]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[15]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question6" value="<?php print_r($amswer[16]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[16]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question6" value="<?php print_r($amswer[17]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[17]->amswer)  ?> </label>

			<br>

			<p class="bg-white text-dark">7)<?php print_r($questions7[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question7" value="<?php print_r($amswer[18]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[18]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question7" value="<?php print_r($amswer[19]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[19]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question7" value="<?php print_r($amswer[20]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[20]->amswer)  ?> </label>

			<br>

			<p class="bg-white text-dark">8)<?php print_r($questions8[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question8" value="<?php print_r($amswer[21]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[21]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question8" value="<?php print_r($amswer[22]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[22]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question8" value="<?php print_r($amswer[23]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[23]->amswer)  ?> </label>

			<br>

			<p class="bg-white text-dark">9)<?php print_r($questions9[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question9" value="<?php print_r($amswer[24]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[24]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question9" value="<?php print_r($amswer[25]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[25]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question9" value="<?php print_r($amswer[26]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[26]->amswer)  ?> </label>

			<br>


			<p class="bg-white text-dark">10)<?php print_r($questions10[0]->question)  ?></p>
			<input type="checkbox" id="vehicle1" name="question10" value="<?php print_r($amswer[27]->id_amswer)  ?></p>">
			<label for="vehicle1"><?php print_r($amswer[27]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question10" value="<?php print_r($amswer[28]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[28]->amswer)  ?> </label>
			<br>
			<input type="checkbox" id="vehicle1" name="question10" value="<?php print_r($amswer[29]->id_amswer)  ?></p>">
			<label for="vehicle1"> <?php print_r($amswer[29]->amswer)  ?> </label>

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