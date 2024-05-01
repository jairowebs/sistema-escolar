<?php
include "DB_connection.php";
include "data/setting.php";
$setting = getSetting($conn);

if ($setting != 0) {

	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Welcome to <?= $setting['school_name'] ?></title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="icon" href="logo.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	</head>
	<nav class="navbar navbar-expand-md bg-white fixed-top">
		<div class="container-fluid ">
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
				aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
				<a class="navbar-brand" href="pages/Index/index.html">
					<img class="imajen" src="imagenes/logocodelogy-c.jpeg" alt=""></a>
				<ul class="navbar-nav d-flex justify-content-center align-items-center">
					<li class="nav-item ">
						<a class="nav-link " aria-current="page" href="index.php">inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="servicios.html">servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " aria-current="page" href="nosotros.html">nosotros</a>
					<li class="nav-item">
						<a class="nav-link " aria-current="page" href="login.php">login</a>
			</div>
		</div>
	</nav><br><br>

	<body class="body-home">
		<div class="black-fill"><br /> <br />
			<div class="container">
				<nav class="navbar navbar-expand-lg bg-light" id="homeNav">
					<div class="container-fluid">
						<a class="navbar-brand" href="#">
							<img src="logo.png" width="200">
						</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
							data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
							aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav me-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Home</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#about">About</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="#contact">Contact</a>
								</li>
							</ul>
							<ul class="navbar-nav me-right mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link" href="">Login</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<div class="hero ">
					<div class="md-3 mb-4">
						<img class="logo-col img-fluid" src="imagenes/icono.png" alt="">
					</div>
					<div class="md-6 mb-4">
						<div class="text-content">
							<h3 id="titulo1">"Preparando Líderes para un Futuro Brillante en Lancaster"</h3>
							<div class="lista">
								<i class="fas fa-check-circle"></i>
								49 Años enseñando
								<i class="fas fa-check-circle"></i>
								+20,000 Graduados
								<i class="fas fa-check-circle"></i>
								+19 Programas Académicos
							</div>
						</div>
					</div>

				</div>
				<div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
							aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
							aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
							aria-label="Slide 3"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active" data-bs-interval="10000">
							<img src="imagenes/baner colegio lancaster-1(1).png" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">

							</div>
						</div>
						<div class="carousel-item" data-bs-interval="2000">
							<img src="imagenes/baner colegio lancaster-3.png" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">

							</div>
						</div>
						<div class="carousel-item" data-bs-interval="3000">
							<img src="imagenes/baner colegio lancaster-2.png" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">

							</div>
						</div>
					</div>

					<a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</a>
					<a class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</a>
				</div>
				<br>
				<hr>
				<br>
				<section class="reseñahistorica d-flex flex-wrap">
					<div class="container">
						<div class="row">
							<div class="col-12 col-md-7 mb-4">
								<div class="ventajas">
									<h2> Ventajas </h2>
									<ul>✅ Acceso personalizado a recursos educativos</ul>
									<ul>✅ Participa en eventos exclusivos para miembros</ul>
									<ul>✅ Conexión con una red de +20,000 egresados exitosos</ul>
									<ul> ✅ Recibe actualizaciones y noticias relevantes</ul>
									<ul> ✅ Explora todos los programas académicos disponibles</ul>

								</div>


								<section id="contact" class="d-flex justify-content-center align-items-center flex-column">
									<form method="post" action="req/contact.php">
										<h3>Contact Us</h3>
										<?php if (isset($_GET['error'])) { ?>
											<div class="alert alert-danger" role="alert">
												<?= $_GET['error'] ?>
											</div>
										<?php } ?>
										<?php if (isset($_GET['success'])) { ?>
											<div class="alert alert-success" role="alert">
												<?= $_GET['success'] ?>
											</div>
										<?php } ?>
										<div class="mb-3">
											<label for="exampleInputEmail1" class="form-label">Email address</label>
											<input type="email" class="form-control" id="exampleInputEmail1" name="email"
												aria-describedby="emailHelp">
											<div id="emailHelp" class="form-text">We'll never share your email with anyone
												else.</div>
										</div>
										<div class="mb-3">
											<label class="form-label">Full Name</label>
											<input type="text" name="full_name" class="form-control">
										</div>
										<div class="mb-3">
											<label class="form-label">Message</label>
											<textarea class="form-control" name="message" rows="4"></textarea>
										</div>
										<button type="submit" class="btn btn-primary">Send</button>
									</form>
								</section>
								<div class="text-center text-light">
									Copyright &copy; <?= $setting['current_year'] ?> 	<?= $setting['school_name'] ?>. All
									rights reserved.
								</div>

							</div>
						</div>
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	</body>

	</html>
<?php } else {
	header("Location: login.php");
	exit;
} ?>