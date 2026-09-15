<?php echo $this->extend('layouts/app_admin') ?>


<?php echo $this->section('content') ?>

<?php echo $this->include('admin/inc/navbar') ?>


<!-- Content Row -->
<div class="row">

	<div class="col-lg-12 text-center">
    <br>
    <br>

    <h4 class="bg-danger text-light" >

      <div id="user_delete"></div>

    </h4>

    <h4 class="bg-info text-light" >

      <div id="user_update"></div>

   </h4>



   <h4 class="bg-warning text-light" >

			<!-- <?php //if($this->session->flashdata('emailNoRegister')): ?>

				<?php //echo $this->session->flashdata('emailNoRegister'); ?>

			<?php //endif; ?>
		-->
	</h4>

	<h4 class="bg-success text-light" >

			<!-- <?php //if($this->session->flashdata('promo')): ?>

				<?php //echo $this->session->flashdata('promo'); ?>

				<?php //endif; ?> -->

			</h4>

		</div>



		<div class="col-lg-12 mb-4">

			<!-- Illustrations -->
			<!-- <div class="card shadow mb-4"> -->
      <!-- <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary text-center">Usuarios</h6>
      </div> -->
      <br>

      <div class="card-body">
        <!-- <div class="text-center">
        -->
        




        <!-- <div class="container "> -->

        	<!-- <div class="card o-hidden border-0 shadow-lg my-5"> -->
        		<!-- <div class="card-body p-0"> -->
        			<!-- Nested Row within Card Body -->
        			<!-- <div class="row"> -->
        				<!-- <div class="col-lg-5 d-none d-lg-block "></div> -->
        				<div class="col-lg-12">
        					<!-- <div class="p-5"> -->

        						<!-- clase que centra -->
        						<!-- <div class="p-5"> -->

        							<!-- <?php //if(count($data)): ?> -->

        							<div>

        							    

        								<!-- <a id="pdf" onclick="pdfLeads()"><span class="btn btn-danger  btn-md">PDF</span></a> -->

        								<!-- <a id="excel" onclick="excelLeads()"><span class="btn btn-warning  btn-md">XLS</span></a> -->

        							</div> 

                      <a href="users/promo" class="btn btn-info">Promo Users</a>
                      <br>
                      <a href="users/promo/guest" class="btn btn-secondary">Promo Guest</a>                    

        							<!--   <table id="users"class="table table-responsive table-hover table-borderless " > -->

        								<table id="users" class="table table-responsive table-striped">     

        									<thead class="thead-dark">
        										<tr>

        											<th>Img</th>        									
        											<!-- <th>Company</th> -->                         
        											<th>Email</th>
        											<th>Status Verified</th>
        											<th>Status Buyer</th>
        											<th>Status 0</th>                          
        											<th>Status 1</th>
        											<th>Delete</th>
        											<!-- <th></th> -->





                              <!-- <th>Img</th>
                              <th>id_user</th>
                              <th>F name</th>
                              <th>L name</th>                         
                              <th>Email</th>
                              <th>Country</th>
                              <th>State</th>
                              <th>Role</th> -->
                           <!--  <th>Creado</th>
                           	<th>Actualizado</th> -->
                            <!-- <th>View</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          -->

                        </tr>
                      </thead>                     

                       <!--  <tbody>

                       </tbody> -->

                     </table>

                     <!-- <?php //endif; ?>   -->  

               <!--   <br>
                 <br>
                 <br>   -->         



                 <!--  end centra -->
                 <!-- </div> -->

               </div>

               <!--  end row -->
               <!--  </div> -->

               <!-- </div> -->
               <!--    </div> -->

               <!-- end container -->
               <!--  </div> -->


               <br>
               <br>
               <br>


               <!-- </div> -->

             </div>

             <!--  end shadow -->
    <!--  </div>  
    -->


  </div>
</div>



<?php echo $this->include('admin/inc/footer') ?>

<?php echo $this->renderString('<script src="/theme/vendor/datatables/jquery.dataTables.min.js"></script>') ?>

<?php echo $this->renderString('<script src="/assets/js/users-table.js"></script>') ?>


<?php echo $this->endSection() ?>