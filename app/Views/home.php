<?php echo $this->extend('layouts/app') ?>

<?php echo $this->section('meta') ?>

<link rel="canonical" href="https://programming-courses.laravel-developer.com/" />    
<meta name="description" content="Find programming courses in the online academy">

<?php echo $this->endSection() ?>


<?php echo $this->section('content') ?>


<?php echo $this->include('inc/navbar') ?>

<div class="container">
	<br>
	<div class="row">
		<div class="col-sm-12">			

			<h1>Programming Courses</h1>

			<p>Learn with online courses from scratch at the most economical price</p>

			<h2>How does the online academy work?</h2>
			<p>By registering in the web school, you will get access to new published courses with various types of exercises</p>
			<ul>
				<li>Courses in video format</li>				   			
			</ul>

			<h2>What's the price?</h2>
			<p>The price of the courses is <b>10$</b> per course, with access to the course with current content and new updates</p>

			<h2>What are the payment methods?</h2>
			<p>Currently only payments are accepted in the payment processor paypal</p>


			<h2>Refund system?</h2>
			<p>No refunds are made, by making the purchase you agree to the service that will be provided</p>


			<br>
		<h2>Available Courses:</h2>	

		<div class="row">

			<div class="col-sm-4">

				<div class="card">

					<img class="img-fluid" src="assets/img/course_codeigniter4.png" alt="Course CodeIgniter 4">

					<div class="card-header">

						<h3>CodeIgniter 4 from scratch course</h3>

					</div>

					<div class="card-body">
						<br>					

						<h4>Online Academy platform</h4>					

						<a class="btn btn-primary" href="/register">
							<span class="fas fa-arrow-right"></span>		
						Start today</a>

					</div>

				</div>

			</div>

			<div class="col-sm-4">

				<div class="card">

					<img class="img-fluid" src="assets/img/course_symfony6.png" alt="Course Symfony 6">

					<div class="card-header">				

						<h3>Symfony 6 from scratch course</h3>

					</div>

					<div class="card-body">
						<br>					

						<h4>Online Academy platform</h4>					


						<a class="btn btn-primary" href="/register">
							<span class="fas fa-arrow-right"></span>		
						Start today</a>

					</div>

				</div>

			</div>

		</div>

		<!-- end row -->


		</div>

		


		<div class="col-sm-4">				


		</div>

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


<?php echo $this->include('inc/footer') ?>


<?php echo $this->endSection() ?>