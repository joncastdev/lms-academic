<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>

<style type="text/css">
	
	.certificate {
		background-attachment: fixed;
		background-color: #222;
		background-size: cover!important;
		-webkit-background-size: cover!important;
		-moz-background-size: cover!important;
		background-attachment: fixed;
		background-position: center center!important;
		background-repeat: no-repeat!important;
		padding: 170px;
	}

	.certificate {			
		background: url(https://cdn.pixabay.com/photo/2018/05/13/18/59/frame-3397461_1280.jpg);
		background-attachment: scroll;
	}
</style>



<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>



<div class="container">

	<br>

	<div class="row">		

		

		<div class="col-md-12">

			<h1>Validar Nro de Certificado</h1>

			<div class="">

				<!-- <?php //if ($session->getFlashdata('create')): ?>

					<p class="alert alert-success"><?php //echo $session->getFlashdata('create') ?></p>
					
					<?php //endif ?> -->

				</div>			

				<a href="/certificates/exams" class="btn btn-light">Back</a>	


				<?php if($certificate_info): ?>
					<div class="card-body">


						<!-- <a class="btn btn-danger" href="/pdfnumberexam/<?php //echo $certificate_info[0]->id_certificateguest; ?>">
							<span class="fas fa-download"></span>		
						Descargar Pensum en formato PDF</a> -->	

						<a class="btn btn-primary" href="/register">
							<span class="fas fa-arrow-right"></span>		
						Empezar Hoy</a>			

						<br>

						<div class="container">					


							<br>

							<div class="certificate">	

								<h1 class="text-dark offset-2">Certificado de Aprobación</h1>
								<h2 class="text-dark offset-2">Test Online</h2>

								<h2 class="text-white offset-2">Usuario <?php echo $certificate_info[0]->first_name.' '.$certificate_info[0]->last_name; ?></h2>

								<h2 class="text-white offset-2">Test <?php echo $certificate_info[0]->name; ?></h2>

								<!-- <h2 class="text-white offset-2">Fecha <?php //echo $certificate_info[0]->created_at; ?></h2> -->

								<h2 class="text-white offset-2">Fecha <?php echo date('d-m-Y',strtotime($certificate_info[0]->created_at)) ?></h2>


								<h2 class="text-white offset-2">Certificado Nro # <?php echo $certificate_info[0]->id_certificateguest; ?></h2>

								<h4 class="text-dark text-center">www.cursosprogramaciongratis.online</h4>



							</div>

						</div>

					</div>
				<?php endif; ?>	

				<?php if($certificate_info == null): ?>

					<br>
					<br>
					<a class="btn btn-primary" href="/register">
						<span class="fas fa-arrow-right"></span>		
					Empezar Hoy</a>

					<br>
					<br>

					<h1 class="bg-danger text-white">404 no encontrado - Certificado Nro # <?php echo $certificate_get; ?></h1>

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

				<?php endif; ?>		



			</div>

		</div>

	</div>



	<?php echo $this->include('inc/footer') ?>


	<?php echo $this->endSection() ?>