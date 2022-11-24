<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<?= csrf_meta() ?>

	<title><?php echo $tittle; ?></title>

	<link rel="icon" type="image/x-icon" href="/assets/img/Laravel-Developer-Icon.png" />

	<!-- <link rel="shortcut icon" type="image/png" href="/favicon.ico"/> -->

	<?php echo $this->renderSection('meta') ?>

	<meta name="author" content="Jonathan Castro">
	<meta name="copyright" content="opengiscrm.com" /> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- <script src="/node_modules/startbootstrap-sb-admin-2/vendor/jquery/jquery.min.js"></script> -->

<!-- 	<script src="/theme/vendor/jquery/jquery.min.js"></script> -->

	<!-- startbootstrap-sb-admin-2 -->

	<!-- <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">	 -->

	<!-- Custom fonts for this template-->
	<link href="/theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

	<!-- Custom styles for this template-->
	<link href="/theme/css/sb-admin-2.css" rel="stylesheet">

	<!-- <link href="/theme/css/sb-admin-2.css" rel="stylesheet"> -->


<!-- 	<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5714978672214634"
	crossorigin="anonymous"></script>   -->  

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


		<!-- Content Wrapper -->
		<div id="content-wrapper" class="d-flex flex-column">

			

			<!-- Main Content -->
			<div id="content">

				<?php echo $this->renderSection('content') ?>					


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


	<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- 	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-111771166-3"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-111771166-3');
	</script> -->


<!-- 	<script src="/theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

	<!-- Core plugin JavaScript-->
	<!-- <script src="/theme/vendor/jquery-easing/jquery.easing.min.js"></script> -->

	<!-- Custom scripts for all pages-->
	<!-- <script src="/theme/js/sb-admin-2.min.js"></script>	 -->	

	<!-- <script src="/assets/js/login.js"></script>  -->


</body>
</html>