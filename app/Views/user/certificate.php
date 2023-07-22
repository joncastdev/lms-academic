<!-- <?php //echo $this->extend('layouts/app_user') ?> -->

<?php echo $this->extend('layouts/app_user') ?>


<?php echo $this->section('content') ?>


<style>
  .c-dashboardInfo {
  margin-bottom: 15px;
}
.c-dashboardInfo .wrap {
  background: #ffffff;
  box-shadow: 2px 10px 20px rgba(0, 0, 0, 0.1);
  border-radius: 7px;
  text-align: center;
  position: relative;
  overflow: hidden;
  padding: 40px 25px 20px;
  height: 100%;
}
.c-dashboardInfo__title,
.c-dashboardInfo__subInfo {
  color: #6c6c6c;
  font-size: 1.18em;
}
.c-dashboardInfo span {
  display: block;
}
.c-dashboardInfo__count {
  font-weight: 600;
  font-size: 2.5em;
  line-height: 64px;
  color: #323c43;
}
.c-dashboardInfo .wrap:after {
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 10px;
  content: "";
}

.c-dashboardInfo:nth-child(1) .wrap:after {
  background: linear-gradient(82.59deg, #00c48c 0%, #00a173 100%);
}
.c-dashboardInfo:nth-child(2) .wrap:after {
  background: linear-gradient(81.67deg, #0084f4 0%, #1a4da2 100%);
}
.c-dashboardInfo:nth-child(3) .wrap:after {
  background: linear-gradient(69.83deg, #0084f4 0%, #00c48c 100%);
}
.c-dashboardInfo:nth-child(4) .wrap:after {
  background: linear-gradient(81.67deg, #ff647c 0%, #1f5dc5 100%);
}
.c-dashboardInfo__title svg {
  color: #d7d7d7;
  margin-left: 5px;
}
.MuiSvgIcon-root-19 {
  fill: currentColor;
  width: 1em;
  height: 1em;
  display: inline-block;
  font-size: 24px;
  transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
  user-select: none;
  flex-shrink: 0;
}
.c-dashboardInfo{
      width: 35%;
}
</style>

<!-- <?php //echo $this->include('user/inc/navbar') ?> -->

<?php echo $this->include('user/inc/navbar') ?>

<!-- Content Row -->
<div class="row">


	<div class="col-lg-12 mb-4">


		<div class="col-12">

			<h4 class="bg bg-success">

				<p class="text-white">
					Bienvenido: <?php echo $_SESSION['email']; ?>
					<br>
					Visitaste la academia en: <?php echo date('d-m-y'); ?>
				</p>

			</h4>

			<?php if($session->get('id_statu') == 2): ?>
				<div class="card-body">

					<h1>Activa tu cuenta</h1>

					<p>Activa tu cuenta con el email de verificación para acceder a los cursos</p>
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
			<?php endif; ?>


			<?php if($session->get('id_statu') == 1): ?>
				<div class="card-body">



					<div class="container">

						<h1>Tu cuenta está activada</h1>

						<p>Explora tus certificados</p>

						<!-- Main Wrapper -->

						<!--End Top Nav -->

						<!-- -------------------------------------------------- -->
						<div id="root">
							<div class="container pt-5">
								<div class="row align-items-stretch">

									
									

									<?php if($certificates): ?>

									

										

										<table class="table table-responsive table-striped" id="myTable">				
				<thead>
					<tr>
						<th>Nro #</th>
						<th>Curso</th>
						<th>Fecha</th>						
					</tr>
				</thead>
				<tbody>

					<?php foreach ($certificates  as $certificate ): ?>
						

						<tr>
							<td><?php echo $certificate->id_certificate; ?></td>
							<td><?php echo $certificate->name; ?></td>							
							<td><?php echo date('d-m-Y',strtotime($certificate->created_at)) ?></td>						
							<td>
								
							</td>
						</tr>

					<?php endforeach ?>

				</tbody>
			</table>
										
									
										

										<?php endif; ?>


									<?php if($certificates == null): ?>

									<h2 class="bg-danger text-white">No Tienes Certificados</h2>

										<?php endif; ?>		

										
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


				<?php endif; ?>


			</div>







		</div>
	</div>


	<?php echo $this->include('user/inc/footer') ?>


	<?php echo $this->endSection() ?>
