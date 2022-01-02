<!DOCTYPE html>
<html lang="es">

<head>
	<!-- Required meta tags always come first -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Login</title>
	<link rel="shortcut icon" href="<?php echo base_url("resources/img/favicon/elim.png") ?>">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url("resources/css/bootstrap.min.css") ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?php echo base_url("resources/css/mdb.min.css")?>" rel="stylesheet">
	<!-- 	Archivo de estilos -->
	<link href="<?php echo base_url("resources/css/Login/Login.css")?>" rel="stylesheet">
</head>

<body>
	<!--Main Navigation-->
	<header>
		<!--Intro Section-->
		<section class="view intro-2">
			<div class="mask rgba-stylish-strong h-100 d-flex justify-content-center align-items-center">
				<div class="container">
					<div class="row">
						<div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">

							<!--Form with header-->
							<div class="card wow fadeIn" data-wow-delay="0.3s">
								<div class="card-body">
									<form action="<?= base_url()?>Login/Login" method="POST" id="frm_login">
										<!--Header-->
										<div class="form-header blue-gradient">
											<h3><i class="fa fa-user mt-2 mb-2"></i> Log in:</h3>
										</div>

										<!--Body-->
										<div class="md-form">
											<i class="fa fa-user prefix white-text"></i>
											<input type="text" id="orangeForm-name" class="form-control" name="per_nombre">
											
											<label for="orangeForm-name">Usuario</label>
										</div>


										<div class="md-form">
											<i class="fa fa-lock prefix white-text"></i>
											<input type="password" id="orangeForm-pass" autocomplete="on" class="form-control" name="per_password">
											<label for="orangeForm-pass">Contraseña</label>
										</div>

										<div class="text-center">
											<button class="btn blue-gradient btn-lg">Iniciar sesion</button>
											<hr>
											<div class="texto">
												
											</div>
											<div class="inline-ul text-center d-flex justify-content-center">
												<a class="p-2 m-2 fa-lg tw-ic"><i
														class="fa fa-twitter white-text"></i></a>
												<a class="p-2 m-2 fa-lg li-ic"><i class="fa fa-linkedin white-text">
													</i></a>
												<a class="p-2 m-2 fa-lg ins-ic"><i class="fa fa-instagram white-text">
													</i></a>
											</div>
										</div>
									</form>


								</div>
							</div>
							<!--/Form with header-->

						</div>
					</div>
				</div>
			</div>
		</section>

	</header>
	<!--Main Navigation-->
	<!--  SCRIPTS  -->
	<!-- JQuery -->
	<script src="<?php echo base_url("resources/js/jquery-3.2.1.min.js")?>"></script>
	<!-- Bootstrap tooltips -->
	<script src="<?php echo base_url("resources/js/popper.min.js")?>"></script>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url("resources/js/bootstrap.min.js")?>"></script>
	<!-- MDB core JavaScript -->
	<script src="<?php echo base_url("resources/js/mdb.min.js")?>"></script>
	<!-- SwettAlert2 -->
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<!-- Login.js funcionalidad de login -->
	<script src="<?php echo base_url("resources/js/Log-in/Login.js")?>"></script>
	<script>
		var xd = '<?= base_url() ?>';
	</script>
	<script>
		new WOW().init();
	</script>
</body>

</html>
