<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<?= csrf_meta() ?>

	<title><?php echo $tittle; ?></title>

	<link rel="icon" type="image/x-icon" href="/assets/img/Laravel-Developer-Icon.png" />

	<!-- <link rel="shortcut icon" type="image/png" href="/favicon.ico"/> -->


	<link href="/assets/css/modified.css" rel="stylesheet" type="text/css">


	<script src="/theme/vendor/jquery/jquery.min.js"></script>


	<!-- <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script> -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script> -->
	<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script> -->


	<!-- me funciono con estas cdn el sweet alert -->
<!-- 	<script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.js"></script> -->

	<!-- <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>    -->


	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/6.11.0/sweetalert2.css"/>
 -->


	<!-- Custom fonts for this template-->
	<link href="/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="/theme/css/sb-admin-2.css" rel="stylesheet">



	<!--  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/> -->

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<script type="text/javascript">

	let BASE_URL = "<?php echo base_url(); ?>";

</script>



</head>

<body id="page-top">

	<!-- Page Wrapper -->
	<div id="wrapper">

		<?php echo $this->include('admin/inc/sidebar') ?>


		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			<!-- <?php //echo $this->include('inc/navbar') ?> -->


			<!-- <div class="container"> -->

				<!-- Main Content -->
				<div id="content">

					<?php echo $this->renderSection('content') ?>

					<!-- </div> -->

					<!-- <?php //echo $this->include('inc/footer') ?> -->


					<!-- Begin Page Content -->
					<div class="container-fluid">


						<!-- Scroll to Top Button-->
						<a class="scroll-to-top rounded" href="#page-top">
							<i class="fas fa-angle-up"></i>
						</a>

						<!-- Logout Modal-->
						<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
										<button class="close" type="button" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">×</span>
										</button>
									</div>
									<div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
									<div class="modal-footer">
										<button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
										<a class="btn btn-primary" href="login.html">Logout</a>
									</div>
								</div>
							</div>
						</div>


					</div>


					<!-- End of Main Content -->
				</div>




				<!-- End of Content Wrapper -->
			</div>

			<!-- End of Page Wrapper -->
		</div>





		<script src="/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Core plugin JavaScript-->
		<script src="/theme/vendor/jquery-easing/jquery.easing.min.js"></script>

		<!-- Custom scripts for all pages-->
		<script src="/theme/js/sb-admin-2.min.js"></script>

		<!-- tags -->
		<!-- <script src="<?php //echo base_url();?>assets/js/jquery-ui.min.js"></script> -->

		<!-- <script src="/assets/js/leads-table.js"></script> -->

		<!-- <script src="/assets/js/users-table.js"></script> -->


		<!-- Page level plugins -->
		<!-- <script src="/theme/vendor/datatables/jquery.dataTables.min.js"></script> -->
		<!-- <script src="/theme/vendor/datatables/dataTables.bootstrap4.min.js"></script> -->

		<!-- <script src="/assets/js/main.js"></script> -->

		<!-- <script src="/assets/js/chart.js"></script>  --> 

		<!-- <script src="/assets/js/map.js"></script>  -->

		<!-- <?php //echo $this->renderString('<script src="/assets/js/map.js"></script> ') ?> -->


	</body>
	</html>