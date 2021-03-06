<?php
require "../datos/conexioncore.php";
session_start();
?>
<meta name="description" content="SysPOSw - Proyecto presentado por el TPS-89 2020">
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!-- Place favicon.png in the root directory -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
	<link href="https://fonts.googleapis.com/css?family=Expletus+Sans:700&display=swap" rel="stylesheet">

	<!-- Ionicons Font CSS-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- font awesome CSS-->
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<!-- Animate CSS-->
	<link rel="stylesheet" href="css/animate.css">
	<!-- UI CSS-->
	<link rel="stylesheet" href="css/jquery-ui.min.css">
	<!-- Chosen CSS-->
	<link rel="stylesheet" href="css/chosen.css">
	<!-- Meanmenu CSS-->
	<link rel="stylesheet" href="css/meanmenu.min.css">
	<!-- Fancybox CSS-->
	<link rel="stylesheet" href="css/jquery.fancybox.css">
	<!-- Normalize CSS-->
	<link rel="stylesheet" href="css/normalize.css">
	<!-- Nivo Slider CSS-->
	<link rel="stylesheet" href="css/nivo-slider.css">
	<!-- Owl Carousel CSS-->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<!-- EasyZoom CSS-->
	<link rel="stylesheet" href="css/easyzoom.css">
	<!-- Slick CSS-->
	<link rel="stylesheet" href="css/slick.css">
	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Default CSS -->
	<link rel="stylesheet" href="css/default.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/header.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
	</head>

	<body>

		<div class="wrapper">
			<!--Header Area Start-->
			<header>
				<div class="header-container" id="section-header">

					<!--Header Top Area Start-->
					<div class="header-top-area">
						<div class="container">
							<div class="row">
								<!--Header Top Left Area Start-->
								<div class="col-md-4 col-sm-4 col-xs-12">
									<div class="header-top-menu">
										<ul>
										</ul>
									</div>
								</div>
								<!--Header Top Left Area End-->
								<!--Header Top Right Area Start-->
								<div class="col-md-8 col-sm-8 col-xs-12 text-right">
									<div class="header-top-menu">
										<ul>
											<li class="support"><span>
													<?php
													if (isset($_SESSION['rol'])) {
														if ($_SESSION['rol'] == 1) {
															$correo = $_SESSION['usuario'];
															$sql1 = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
															$result1 = $conexion->query($sql1);
															if ($result1->num_rows > 0) {
																while ($fila1 = $result1->fetch_array(MYSQLI_ASSOC)) {
																	$id = $fila1['Id_usuario'];
																}
															}
															$sql2 = "SELECT * FROM administradores WHERE Usuario = '" . $id . "'";
															$result2 = $conexion->query($sql2);
															if ($result2->num_rows > 0) {
																while ($fila2 = $result2->fetch_array(MYSQLI_ASSOC)) {
																	$idper = $fila2['Persona'];
																}
															}
															$sql3 = "SELECT * FROM personas WHERE id_persona = '" . $idper . "'";
															$result3 = $conexion->query($sql3);
															if ($result3->num_rows > 0) {
																while ($fila3 = $result3->fetch_array(MYSQLI_ASSOC)) {
																	$nombre = $fila3['Nombre'];
																	$apellido = $fila3['Apellido'];
																}
															}
															echo "Administrador $nombre <strong>$apellido</strong> ";
														} elseif ($_SESSION['rol'] == 2) {
															$correo = $_SESSION['usuario'];
															$sql1 = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
															$result1 = $conexion->query($sql1);
															if ($result1->num_rows > 0) {
																while ($fila1 = $result1->fetch_array(MYSQLI_ASSOC)) {
																	$id = $fila1['Id_usuario'];
																}
															}
															$sql2 = "SELECT * FROM empleados WHERE Usuario = '" . $id . "'";
															$result2 = $conexion->query($sql2);
															if ($result2->num_rows > 0) {
																while ($fila2 = $result2->fetch_array(MYSQLI_ASSOC)) {
																	$idper = $fila2['Persona'];
																}
															}
															$sql3 = "SELECT * FROM personas WHERE id_persona = '" . $idper . "'";
															$result3 = $conexion->query($sql3);
															if ($result3->num_rows > 0) {
																while ($fila3 = $result3->fetch_array(MYSQLI_ASSOC)) {
																	$nombre = $fila3['Nombre'];
																	$apellido = $fila3['Apellido'];
																}
															}
															echo "Empleado $nombre <strong>$apellido</strong> ";
														} elseif ($_SESSION['rol'] == 3) {
															$correo = $_SESSION['usuario'];
															$sql1 = "SELECT * FROM usuarios WHERE email = '" . $correo . "'";
															$result1 = $conexion->query($sql1);
															if ($result1->num_rows > 0) {
																while ($fila1 = $result1->fetch_array(MYSQLI_ASSOC)) {
																	$id = $fila1['Id_usuario'];
																}
															}
															$sql2 = "SELECT * FROM clientes WHERE Usuario = '" . $id . "'";
															$result2 = $conexion->query($sql2);
															if ($result2->num_rows > 0) {
																while ($fila2 = $result2->fetch_array(MYSQLI_ASSOC)) {
																	$idper = $fila2['Persona'];
																}
															}
															$sql3 = "SELECT * FROM personas WHERE id_persona = '" . $idper . "'";
															$result3 = $conexion->query($sql3);
															if ($result3->num_rows > 0) {
																while ($fila3 = $result3->fetch_array(MYSQLI_ASSOC)) {
																	$nombre = $fila3['Nombre'];
																	$apellido = $fila3['Apellido'];
																}
															}
															echo "$nombre <strong>$apellido</strong> ";
														}
													} else {
														echo "Registrate y se parte de la mejor <strong>EXPERIENCIA</strong> de compras";
													}
													?>
												</span></li>
											<li class="account"><a href="../app/micuenta.php">Mi Cuenta<i class="fa fa-angle-down"></i></a>
												<ul class="ht-dropdown">
													<?php
													if (!isset($_SESSION['rol'])) {
													?>
														<li><a href="../app/login.php">Ingresar</a></li>

														<li><a href="../app/login.php">Registrate</a></li>
														<?php
													}
													if (isset($_SESSION['rol'])) {
														if ($_SESSION['rol'] == 3) {
														?>
															<li><a href="carrito.php">Mi Carrito</a></li>
														<?php } else {
															echo "<li><a href='../app/index.php'>Panel</a></li> ";
														}
														?>
														<li><a href='../app/salir.php'>salir</a></li>
													<?php } ?>
												</ul>
											</li>
										</ul>
									</div>
								</div>
								<!--Header Top Right Area End-->
							</div>
						</div>
					</div>
					<!--Header Top Area End-->


					<!--Header Middel Area Start-->
					<div class="header-middel-area">
						<div class="container">
							<div class="row">
								<!--Logo Start-->
								<div class="col-md-3 col-sm-3 col-xs-12">
									<div class="logo">
										<a href="index.php">
											<h1 class="brand">SysPOSw</h1>
										</a>
									</div>
								</div>
								<!--Logo End-->
								<!--Search Box Start-->
								<div class="col-md-6 col-sm-5 col-xs-12">

									<form action="/search" method="get" role="search" style="position: relative;" class="search-box-area">
										<div class="search-box">
											<input type="search" class="email" name="q" value="" placeholder="Busca en nuestra tienda..." aria-label="Busca en nuestra tienda..." autocomplete="off">
											<button type="submit"><i class="ion-ios-search-strong"></i></button>
										</div>
										<ul class="search-results home-two" style="position: absolute; left: 0px; top: 50px; display: none;"></ul>
									</form>

								</div>
								<!--Search Box End-->
								<!--Mini Cart Start-->
								<?php
								if (isset($_SESSION['rol'])) {
								?>
									<div class="col-md-3 col-sm-4 col-xs-12">
										<div class="mini-cart-area">
											<ul>
												<?php require('vars.php') ?>
												<?php echo "<li><a href='carrito.php'><i class='ion-android-cart'></i><span class='cart-add'>" . $numprod . "</span><span class='cart-total'>$" . number_format($total) . "<i class='fa fa-angle-down'></i></span></a>" ?>
											</ul>
										</div>
									</div>
								<?php } ?>
								<!--Mini Cart End-->
							</div>
						</div>
					</div>
					<!--Header Middel Area End-->

					<!--Header bottom Area Start-->
					<div class="header-bottom-area header-sticky hidden-sm hidden-xs">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<!--Logo Sticky Start-->
									<div class="logo-sticky">



										<a href="/">
											<h1 class="brand" style="font-size: 33px">SysPOSw</h1>
										</a>


									</div>
									<!--Logo Sticky End-->
									<!--Main Menu Area Start-->
									<div class="main-menu-area">
										<nav>
											<ul class="main-menu">

												<li class="active"><a href="index.php">Inicio</a></li>

												<li class=""><a href="#productos">Productos</a></li>

												<li class=""><a href="contacto.php">Contacto</a></li>

												<li class=""><a href="nosotros.php">Nosotros</a></li>

											</ul>
										</nav>
									</div>
									<!--Main Menu Area End-->
								</div>
							</div>
						</div>
					</div>
					<!--Header bottom Area End-->

					<!--Mobile Menu Area Start-->
					<div class="mobile-menu-area hidden-md hidden-lg">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<div class="mobile-menu">

										<nav style="display: block;">
											<ul>

												<li class="active"><a href="index.php">Inicio</a></li>

												<li class=""><a href="#productos">Productos</a></li>

												<li class=""><a href="contacto.php">Contacto</a></li>

												<li class=""><a href="#">Nosotros</a>
													<ul class="dropdown">
														<li><a href="#">¿Quienes somos?</a></li>
														<li><a href="#">Mision</a></li>
														<li><a href="#">Vision</a></li>
													</ul>
												</li>
											</ul>
										</nav>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--Mobile Menu Area End-->
				</div>
			</header>
			<!--Header Area End-->