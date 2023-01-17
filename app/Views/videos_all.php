<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>

<link rel="canonical" href="https://cursos-de-programacion.opengiscrm.com/" />    
<meta name="description" content="Encuentra cursos de programación en la academia online">

<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>


<?php echo $this->include('inc/navbar') ?>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">

		<?php echo $this->include('inc/ads_top') ?>


		
		

		<!-- 	<?php //if($session->get('is_buyer') == 1 && $session->get('id_statu') == 1 ): ?> -->
		<?php if($courses_pensum): ?>
			<div class="card-body">

				<h1 class="bg-success text-white">Videos</h1>

				<br>

				<div class="container">
					

					<a href="/courses-free/<?php echo $courses_pensum[0]->id_course; ?>" class="btn btn-info">Atras</a>
					<br>

					<div class="col-md-6 offset-2">	

					<?php echo $this->include('inc/ads_mid') ?>					

						
	

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

			<?php echo $this->include('inc/ads_down') ?>


		</div>
	</div>


	<?php echo $this->include('user/inc/footer') ?>


	<?php echo $this->endSection() ?>
