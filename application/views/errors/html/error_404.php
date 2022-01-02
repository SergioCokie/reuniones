<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Eror 404</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url("resources/css/bootstrap.min.css") ?>" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="<?php echo base_url("resources/css/mdb.min.css")?>" rel="stylesheet">

</head>

<style>

    html,
    body,
    header,
    .view {
      height: 100%;
    }

    @media (max-width: 740px) {
      html,
      body,
      header,
      .view {
        height: 815px;
      }
    }

    @media (min-width: 800px) and (max-width: 850px) {
      html,
      body,
      header,
      .view {
        height: 500px;
      }
    }

    .intro-2 {
        background-color: black;
    }
</style>

<body class="creative-lp">

    <!-- Navigation & Intro -->
    <header>

        <!--Intro Section-->
        <section class="view intro-2">
            <div class="mask rgba-gradient-1">
                <div class="container h-100 d-flex justify-content-center align-items-center">
                    <div class="row">
                        <div class="col-md-12 wow fadeIn mb-3">
                            <div class="card card-body rgba-white-slight text-center white-text">
                                <ul class="list-unstyled py-5 mx-lg-5">
                                    <li>
                                        <h1 class="display-1 mt-5 mx-5 mt-lg-0 mb-5 font-weight-bold white-text wow fadeIn" data-wow-delay="0.3s">
                                            <strong>Error 404</strong>
                                        </h1>
                                    </li>
                                    <li>
                                        <h4 class="white-text description mb-4 wow fadeIn" data-wow-delay="0.4s">Opps! Pagina no encontrada
                                        </h4>
                                        <p class="white-text description pb-5 wow fadeIn" data-wow-delay="0.4s"> La pagina que usted esta intentando ver no esta disponible, por porfavor intente mas tarde
                                            <a href="<?=base_url() ?>"
                                                class="font-weight-bold">Home</a>.
                                        </p>

                                        <!--Facebook-->
                                        <a class="p-2 m-2 fa-lg fb-ic">
                                            <i class="fa fa-facebook white-text"> </i>
                                        </a>
                                        <!--Twitter-->
                                        <a class="p-2 m-2 fa-lg tw-ic">
                                            <i class="fa fa-twitter white-text"> </i>
                                        </a>
                                        <!--Google +-->
                                        <a class="p-2 m-2 fa-lg gplus-ic">
                                            <i class="fa fa-google-plus white-text"> </i>
                                        </a>
                                        <!--Linkedin-->
                                        <a class="p-2 m-2 fa-lg li-ic">
                                            <i class="fa fa-linkedin white-text"> </i>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </header>
    <!-- Navigation & Intro -->

	<!--  SCRIPTS  -->
	<!-- JQuery -->
	<script src="<?php echo base_url("resources/js/jquery-3.2.1.min.js")?>"></script>
	<!-- Bootstrap tooltips -->
	<script src="<?php echo base_url("resources/js/popper.min.js")?>"></script>
	<!-- Bootstrap core JavaScript -->
	<script src="<?php echo base_url("resources/js/bootstrap.min.js")?>"></script>
	<!-- MDB core JavaScript -->
	<script src="<?php echo base_url("resources/js/mdb.min.js")?>"></script>

</body>

</html>