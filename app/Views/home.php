<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>

<link rel="canonical" href="https://cursosprogramaciongratis.online/" />    
<meta name="description" content="Cursos de Programación Gratis Online con diplomado y certificado en el año 2022-2023, Ofertas, Promociones en cursosprogramaciongratis.online">

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"> -->

	<!-- <script src="https://code.jquery.com/jquery-3.6.3.min.js"></script> -->

	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script> -->

<style type="text/css">
	p {
		font-size: 18px;
	}
	.main-content .item img{
				display: block;
				width: 100%;
				height: auto;     
				margin-bottom: 20px;
				border-radius: 12px;       
			}

			.main-content {
				position: relative;
			}

			.custom-nav
			{
				position: absolute;
				top: 20%;
				left: 0;
				right: 0;
			}

			.owl-prev, .owl-next {
				position: absolute;
				height: 100px;
				color: inherit;
				background: none;
				border: none;
				z-index: 100;
			}

			i {
				font-size: 2.5rem;
				color: white;
			}


			.owl-prev {
				left: 0;
			}

			.owl-next {
				right: 0;
			}

	
</style>

<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>


<?php echo $this->include('inc/navbar') ?>

<div class="container">
	<br>
	<div class="row">
		<div class="col-sm-12">			

			<h1>Cursos de Programación Gratis Online</h1>

			<?php echo $this->include('inc/ads_top') ?>

			<p><b>Cursos de Programación Gratis Online</b> con diplomados y certificados en el año 2023, en este sitio web encontraras libros <b>PDF</b> (ebook digitales), <b>códigos fuentes</b> y <b>podcast</b></p>

			<h2>Cursos de programación con certificado</h2>

			<div class="col-sm-6 offset-3">

				<iframe width="560" height="315" src="https://www.youtube.com/embed/wKdxSSVeC84" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>

			</div>

			<br>

			<p>En nuestro programa formativo el estudiante podrá obtener un <b>certificado de programación</b> gratis por participar en cada curso de nuestra academia online ya sea en materias como php, java, python, javascript, .net, sql entre otros</p>

			<h2>Diplomados Online Gratis</h2>

			<p>Al concluir cualquiera de nuestros Másters el estudiante puede optar por el diplomado online <b>(fullstack developer web)</b>, nuestro máster se basa en estudiar un tema o nicho en profundidad algunos ejemplos son el Máster de PHP el cual incluye lo siguiente</p>

			<ul>
				<li>CodeIgniter 3 y 4</li>
				<li>Laravel 9 y 10</li>
				<li>Yii 1.1 y 2</li>
				<li>CakePHP 4</li>
				<li>Zend Framework (Laminas MVC)</li>
				<li>Symfony 5 y 6</li>
			</ul>

			<h2>Libros de Programación PDF</h2>

			<p>En nuestra academia contamos con un gran número de ebook digitales, para que el estudiante ponga a prueba sus conocimientos con un conjunto de preguntas y respuestas de selección simple</p>

			<h2>Códigos de Programación</h2>
			<p>Ademas cada curso he ebook cuenta con un proyecto base el cual es un código fuente de programación el cual se puede descargar, ademas que todo recurso en la academia se actualiza constantemente</p>

			<h2>Podcast de Programación</h2>

			<p>Recomendamos contenido de nuestros partners, así que los estudiantes tendrán a su alcance las ultimas tendencias sobre contenido educativo, motivacional y relajante, en Cursos de Programación Gratis Online tenemos mucho contenido para ti</p>

			<h2>¿Cómo funciona la academia en línea?</h2>
			<p>Al registrarse en la escuela web, obtendrá acceso a los nuevos cursos publicados con varios tipos de ejercicios.</p>
			<ul>
				<li>Cursos en formato de video</li>				   			
			</ul>

			<h2>¿Cual es el precio?</h2>
			<p>El precio de los cursos es <b>10$</b> por curso, con acceso al curso con contenido actual y nuevas actualizaciones</p>

			<h2>¿Cuáles son los métodos de pago?</h2>
			<p>Actualmente solo se aceptan pagos en el procesador de pagos paypal</p>


			<h2>¿Sistema de reembolso?</h2>
			<p>No se realizan reembolsos, al realizar la compra usted acepta el servicio que se le brindará</p>

			<br>
			<div class="row">

				<!-- <h2>Próximos Cursos:</h2> -->

		<!-- <div class="container-fluid"> -->

			<div class="col-md-8 offset-2">

					<h3 class="bg-info text-white text-center">Próximos Cursos:</h3>

				<div class="main-content">
				
					<div class="owl-carousel owl-theme">
						<div class="item">
							<img src="<?php echo base_url();?>/assets/img/curso_basededatos.png" alt="Curso base de datos profesional">
						</div>
						<div class="item">
							<img src="<?php echo base_url();?>/assets/img/curso_laravel10_google.png" alt="Curso Laravel 10 Extensiones Google Chrome">
						</div>
						<div class="item">
							<img src="<?php echo base_url();?>/assets/img/curso_autodesk.png" alt="Curso Autodesk API con Python">
						</div>
						<div class="item">
							<img src="<?php echo base_url();?>/assets/img/curso_cakephp_tienda.png" alt="Tiendas Online CakePHP 4">
						</div>						
					</div>
					<div class="owl-theme">
						<div class="owl-controls">
							<div class="custom-nav owl-nav"></div>
						</div>
					</div>	

					
				</div>

			</div>

			<!-- </div> -->

		</div>

		<br>


			<br>
			<h2>Cursos Disponibles:</h2>

			<a class="btn btn-danger" href="/pdfsymfonyseis">
				<span class="fas fa-download"></span>		
			Descargar Pensum</a>

			<a class="btn btn-danger" href="/pdfcodeignitercuatro">
				<span class="fas fa-download"></span>		
			Descargar Pensum</a>



			<div class="row">

				<?php echo $this->include('inc/ads_mid') ?>

				<?php foreach ($all_courses as $coursesb): ?>	
					<div class="col-sm-4">

						<div class="card">

							<img class="img-fluid" src="assets/img/curso_codeigniter4.png" alt="Curso CodeIgniter 4">

							<div class="card-header">

								<h3><?php echo $coursesb->name; ?></h3>

							</div>

							<div class="card-body">
								<br>					

								<h4>Disponible en Academia Online (Gratis)</h4>					

								<div class="row">

									<div class="col-6">
										<a href="/courses-free/<?php echo $coursesb->id_course; ?>" class="btn btn-info">Empezar el Curso</a>
									</div>

									<div class="col-6">

										<a class="btn btn-danger" href="/pdfsymfonyseis">
											<span class="fas fa-download"></span>		
										Descargar Pensum</a>

									</div>

								</div>	

							</div>

						</div>

					</div>

					<?php echo $this->include('inc/ads_down') ?>


			<!-- <div class="col-sm-4">

				<div class="card">

					<img class="img-fluid" src="assets/img/curso_symfony6.png" alt="Curso Symfony 6">

					<div class="card-header">				

						<h3>Symfony 6 De Basico a Intermedio</h3>

					</div>

					<div class="card-body">
						<br>					

						<h4>Academia Online</h4>					


						<a class="btn btn-primary" href="/register">
							<span class="fas fa-arrow-right"></span>		
						Empezar Hoy</a>

					</div>

				</div>

			</div> -->

		<?php endforeach ?>
	</div>



	<!-- end row -->
	<br>

	<!-- 	<div class="row">

			<div class="col-sm-4">

				<div class="card">

					<img class="img-fluid" src="assets/img/curso_symfony5" alt="Curso Symfony 5">

					<div class="card-header">

						<h3>Symfony 5 De Basico a Intermedio</h3>

					</div>

					<div class="card-body">
						<br>					

						<h4>Academia Online</h4>					

						<a class="btn btn-primary" href="/register">
							<span class="fas fa-arrow-right"></span>		
						Empezar Hoy</a>

					</div>

				</div>

			</div>

			<div class="col-sm-4">

				<div class="card">

					<img class="img-fluid" src="assets/img/curso_yii2.png" alt="Curso Yii 2">

					<div class="card-header">				

						<h3>Yii 2 De Basico a Intermedio</h3>

					</div>

					<div class="card-body">
						<br>					

						<h4>Academia Online</h4>					


						<a class="btn btn-primary" href="/register">
							<span class="fas fa-arrow-right"></span>		
						Empezar Hoy</a>

					</div>

				</div>

			</div>

		</div> -->

		<!-- end row -->


	</div>




		<!-- <div class="col-sm-4">				


		</div> -->

	</div>

<!-- <div class="row">
	<div class="col-sm-4">			

		<h1 class="text-center">Laravel Developer – Freelance Services</h1>
	</div>

</div> -->

<!-- Content Row -->
<div class="row">

	<!-- <div class="col-lg-12 text-center">

		<h4 class="bg-warning text-light" >

			<?php //if($this->session->flashdata('closeSession')): ?>

				<?php //echo $this->session->flashdata('closeSession'); ?>

			<?php //endif; ?>

		</h4>


	</div> -->




	<div class="col-lg-8 mb-4 offset-md-2">



		<!-- Illustrations -->
		<!-- <div class="card shadow mb-4"> -->
     <!--  <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Iniciar sesión</h6>
    </div> -->
    <br>

    <div class="card-body">
    	<div class="">          



    		<div class="container ">

    			<!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
    				<!-- <div class="card-body p-0"> -->
    					<!-- Nested Row within Card Body -->
    					<div class="row">
    						<!-- <div class="col-lg-5 d-none d-lg-block "></div> -->
    						<div class="col-lg-8 offset-md-2">
    							<!--  <div class="p-5 card"> -->

    								<!-- Trigger the modal with a button -->
    								<!--  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#modalFormLogin">Open Modal</button> -->                        

    								<!-- modal de registro -->

    								<div class="modal fade" id="modalFormLogin" role="dialog">
    									<div class="modal-dialog">
    										<div class="modal-content">
    											<div class="modal-header">
    												<!--  <button type="button" class="close" data-dismiss="modal"></button> -->
      <!--  <h4 class="modal-title">Agregar usuario</h4>
      	<br> -->
      	<h4 class="modal-title">Log In</h4>

      	<div class="row">

      		<div class="text-danger" id="msg_errors"></div>

      	</div>


      </div>
      <div class="modal-body">
      	<?php echo form_open('/logearse','id="logForm"') ?>


      	<input type="hidden" id="tokenN" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />



      	
      	<div class="form-group">
      		<input type="email" class="form-control form-control-user" name="email" id="email"  placeholder="Email" value="jonathancastro@opengiscrm.com">
      		<!-- <div class="text-danger"><?php //echo form_error('email');  ?></div> -->
      		<!-- <div class="text-danger" id="msg_email"></div> -->
      	</div>

      	<div class="form-group">
      		<input type="password" class="form-control form-control-user" name="password" id="password"  placeholder="Password" value="123">
      		<!-- <div class="text-danger"><?php //echo form_error('email');  ?></div> -->
      		<!-- <div class="text-danger" id="msg_password"></div> -->
      	</div>
      	

      	<a href="/register" title="">You do not have an account?</a>
      	<br>                            


      	<button type="submit" class="btn btn-primary btn-user btn-block">Send</button>

      	<?php echo form_close()  ?> 

      	<div class="modal-footer">
      		<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      	</div>

      </div>

  </div>

</div>

</div>


<!-- </div> -->
</div>
</div>
<!-- </div> -->
<!--    </div> -->
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
<!-- end ilustration -->
<!-- </div> -->



</div>
</div>


</div><!-- end container -->
<br>
<br>

<!-- <script type="text/javascript">
	$(document).ready(function() {


			$(".main-content .owl-carousel").owlCarousel({
				stagePadding: 50,
				center: true,  
				navigation : true,
				slideSpeed : 300,
				paginationSpeed : 400,
				items : 2, 
				itemsDesktop : false,
				itemsDesktopSmall : false,
				itemsTablet: false,
				itemsMobile : false,         
				autoplay: false,
				margin: 20,                         
				loop:true,
				dots: false,
				nav:false,
				navText: [
				'<i class="fa fa-angle-left" aria-hidden="true"></i>',
				'<i class="fa fa-angle-right" aria-hidden="true"></i>'
				],
				navContainer: '.main-content .custom-nav',                          
				responsive: {
					0: {
						items: 1                                        
					},
					600: {
						items: 2                                            
					},
					1000: {                     
						items: 2


					}
				},



			});

		});

	</script>			
	 -->


<?php echo $this->include('inc/footer') ?>



<?php echo $this->endSection() ?>