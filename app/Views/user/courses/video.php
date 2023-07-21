<!-- <?php //echo $this->extend('layouts/app_user') ?> -->

<?php echo $this->extend('layouts/app_user') ?>


<?php echo $this->section('content') ?>

<!-- <?php //echo $this->include('user/inc/navbar') ?> -->

<?php echo $this->include('user/inc/navbar') ?>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">


		<?php if($session->get('id_statu') == 2): ?>
			<div class="card-body">

				<h1>Activa tu cuenta</h1>

			</div>
		<?php endif; ?>
		

		<!-- 	<?php //if($session->get('is_buyer') == 1 && $session->get('id_statu') == 1 ): ?> -->
		<?php if($courses_pensum): ?>
			<div class="card-body">

				<h1 class="bg-success text-white">Videos</h1>

				<br>

				<div class="container">
					

					<a href="/courses/<?php echo $courses_pensum[0]->id_course; ?>" class="btn btn-info">Back</a>
					<br>

					<div class="col-md-6 offset-2">

					<?php if($courses_pensum[0]->id_course == 1): ?>

							<!-- <a class="btn btn-primary" href="<?php //echo base_url('public/uploads/pensum/Proyectos/Codeigniter4/codeigniter4_proyecto1.zip'); ?>">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a> -->

							<a class="btn btn-primary" href="/proyecto/codeigniter">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a>	

						<?php endif; ?>

						<?php if($courses_pensum[0]->id_course == 2): ?>

								<a class="btn btn-primary" href="/proyecto/symfony">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a>

						<?php endif; ?>

						<?php if($courses_pensum[0]->id_course == 3): ?>

								<a class="btn btn-primary" href="/proyecto/sym">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a>

						<?php endif; ?>

						<?php if($courses_pensum[0]->id_course == 4): ?>

							<a class="btn btn-primary" href="/proyecto/yii">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a>

						<?php endif; ?>

						<?php if($courses_pensum[0]->id_course == 5): ?>

							<a class="btn btn-primary" href="/proyecto/laravel">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a>

						<?php endif; ?>

						<?php if($courses_pensum[0]->id_course == 6): ?>

							<a class="btn btn-primary" href="/proyecto/cake">
								<span class="fas fa-arrow-right"></span>	
								Descargar Proyecto
							</a>

						<?php endif; ?>
	

						<?php foreach ($courses_pensum as $pensums): ?>	





							<h2><?php echo $pensums->pensum; ?></h2>
							<hr>				
							<video width="600" height="340" controls>
								<source src="<?php echo base_url('/uploads/pensum').'/'.$pensums->name.'/'.$pensums->video; ?>" type="video/mp4">

								</video>
								<br>



							<?php endforeach ?>

							<?php $total = $pensums->id_pensum+1; ?>

							<a href="/videos/<?php echo $total; ?>" class="btn btn-success">Next</a>

						</div>

					</div>

				</div>
			<?php endif; ?>


		</div>
	</div>


	<?php echo $this->include('user/inc/footer') ?>


	<?php echo $this->endSection() ?>
