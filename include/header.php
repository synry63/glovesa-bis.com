<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Displasac</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->
         <link rel="shortcut icon" type="image/x-icon" href="img/favicon/favicon2_icon.ico">
	   <!-- Google Fonts Loto -->
		<link href='https://fonts.googleapis.com/css?family=Lato:400,900,700,300' rel='stylesheet' type='text/css'>

		<!-- all css here -->
		<!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- nivo slider CSS
		============================================ -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css" type="text/css" />
		<link rel="stylesheet" href="lib/css/preview.css" type="text/css" media="screen" />
		<!-- meanmenu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
		<!-- owl.carousel css -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- font-awesome css -->
        <link rel="stylesheet" href="css/font-awesome.min.css">

        <!-- CDN JQUERY UI -->
        <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">-->
        <!-- jQuery UI -->
        <link rel="stylesheet" href="./css/jquery-ui.css">

        <!-- flexslider -->
        <link rel="stylesheet" href="css/flexslider.css">

		<!-- style css -->
		<link rel="stylesheet" href="style.css">
		<!-- responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
		<!-- modernizr css -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>

        <!-- Base MasterSlider style sheet -->
        <link rel="stylesheet" href="../lib/masterslider/style/masterslider.css" />

        <!-- Master Slider Skin -->
        <link href="../lib/masterslider/skins/black-2/style.css" rel='stylesheet' type='text/css'>

        <!-- MasterSlider Template Style -->
        <link href='../css/ms-layers-style.css' rel='stylesheet' type='text/css'>

        <!-- google font Lato -->
        <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900' rel='stylesheet' type='text/css'>

        <!-- jQuery -->
        <script src="../lib/masterslider/jquery.min.js"></script>
        <script src="../lib/masterslider/jquery.easing.min.js"></script>

        <!-- Master Slider -->
        <script src="../lib/masterslider/masterslider.min.js"></script>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    	<!-- Start Header Area -->
		<div class="home-header-area">
			<!-- Start Header Top -->
			<!--<div class="header-top">-->
				<!--<div class="container">-->
					<!--<div class="row">-->
						<!--<div class="col-md-6 col-sm-6 col-xs-12">-->
							<!--<div class="social-shear">-->
								<!--<ul>-->
									<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
									<!--<li><a href="#"><i class="fa fa-twitter"></i></a></li>-->
									<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
								<!--</ul>-->
							<!--</div>-->
						<!--</div>-->

					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
			<!-- End Header Top -->
			<!-- Start Header Middel -->
			<!--<div class="header-middel-area">-->
				<!--<div class="container">-->
					<!--<div class="row">-->
						<!--<div class="col-md-3 col-sm-12 col-xs-12">-->
							<!--<div class="logo">-->
								<!--<a href="index.html">-->
									<!--<img src="img/logo/logo_web.png" alt="Logo Globesa">-->
								<!--</a>-->
							<!--</div>-->
						<!--</div>-->
					<!--</div>-->
				<!--</div>-->
			<!--</div>-->
			<!-- End Header Middel -->
		</div>
   		 <!-- End Header Area -->

        <!-- Start Menu Area -->
		<div class="menu-area">
			<div class="container">
				<div class="row">
					<div class="col-md-12 hidden-sm hidden-xs">
						<div class="main-menu">
							<nav>
                                <div class="logo">
                                    <a href="index.php">
                                        <img src="img/logo/logo_desktop.png" alt="Logo Globesa">
                                        <!-- <img src="../img/logo-01.png" alt="Logo Globesa"> -->
                                    </a>
                                </div>
								<ul>
                                    <!-- <li>
                                        <div class="logo">
                                            <a href="index.php">
                                                <img src="img/logo/logo_desktop.png" alt="Logo Globesa">
                                                 <img src="../img/logo-01.png" alt="Logo Globesa">
                                            </a>
                                        </div>
                                    </li> -->
                                    <?php
                                    echo (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=="" || (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=="index.php" ))?'<li class="active"><a href="index.php">Nuestros productos</a>':'<li><a href="index.php">Nuestros productos</a>';
                                    ?>

										<!-- <div class="mega-menu">
											<span>
												<a class="mega-title" href="#">WOMEN CLOTH </a>
												<a href="shop.html">casual shirt</a>
												<a href="shop.html">rikke t-shirt</a>
												<a href="shop.html">mia top </a>
												<a href="shop.html">muscle tee </a>
											</span>
											<span>
												<a class="mega-title" href="#">MEN CLOTH </a>
												<a href="shop.html">casual shirt</a>
												<a href="shop.html">rikke t-shirt</a>
												<a href="shop.html">mia top </a>
												<a href="shop.html">muscle tee </a>
											</span>
											<span>
												<a class="mega-title" href="#">WOMEN JEWELRY </a>
												<a href="shop.html">necklace </a>
												<a href="shop.html">chunky short striped </a>
												<a href="shop.html">samhar cuff</a>
												<a href="shop.html">nail set </a>
											</span>
											<span>
												<a class="mega-title" href="#">MEN CLOTH </a>
												<a href="shop.html">casual shirt</a>
												<a href="shop.html">rikke t-shirt</a>
												<a href="shop.html">mia top </a>
												<a href="shop.html">muscle tee </a>
											</span>
										</div> -->
									</li>
                                    <?php
                                    echo (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=="proceso_trabajo.php")?'<li class="active"><a href="proceso_trabajo.php">Proceso de trabajo</a></li>':'<li><a href="proceso_trabajo.php">Proceso de trabajo</a></li>';
                                    ?>

                                    <?php
                                    echo (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=="sobre_nosotros.php") ? '<li class="active"><a href="sobre_nosotros.php">Sobre Nosotros</a></li>' : '<li><a href="sobre_nosotros.php">Sobre Nosotros</a></li>';
                                    ?>

                                    <?php
                                    echo (basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=="contactenos.php") ? '<li class="active"><a href="contactenos.php">Contáctenos</a></li>' : '<li><a href="contactenos.php">Contáctenos</a></li>';
                                    /*if(basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING'])=="contactenos.php") {
                                        echo '<li class="active"><a href="contactenos.php">Contactenos</a></li>';
                                    }else {
                                        echo '<li><a href="contactenos.php">Contactenos</a></li>';
                                    }*/
                                    ?>
								</ul>
							</nav>
						</div>
					</div>
				</div>
            </div>
		</div>
    	<!-- End Menu Area -->