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
		<link rel="icon" href="logoc.png">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	</head>


	<body>
		<nav class="body-home">
			<nav class="navbar navbar-expand-md bg-white fixed-top">
				<div class="container-fluid ">
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false"
						aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
						<a class="navbar-brand" href="pages/Index/index.php">
							<img class="imajen" src="imagenes/logocodelogy-c.jpeg" alt=""></a>
						<ul class="navbar-nav d-flex justify-content-center align-items-center">
							<li class="nav-item ">
								<a class="nav-link " aria-current="page" href="#Nosotros">Nosotros</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" aria-current="page" href="#Servicios">Servicios</a>
							</li>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="#contact">Contacto</a>
							<li class="nav-item">
								<a class="nav-link " aria-current="page" href="login.php">Login</a>
					</div>
				</div>
			</nav><br><br>


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

				<a class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
			<br>
			<hr>
			<br>
			<section id="Nosotros">
				<div class="text-center">
					<h1>NOSOTROS</h1>
				</div>
			</section>
			<div class="row justify-content-center">
				<div class="col-md-4">
					<div class="card1">
						<div class="head">
							<div class="circle"></div>
							<div class="img">
								<img src="imagenes/concepto-prueba-encuesta-educacion-linea-render-3d.jpg" alt="">
							</div>
						</div>

						<div class="description">
							<h4>Sobre Nosotros</h4>
							<h5>lancaster</h5>
							<p id="text-justify">El Colegio Lancaster es una institución con la excelencia educativa.
								Nuestra misión es proporcionar
								una educación de calidad.</p>
						</div>

						<div class="contact">
							<button class="buton" style="--clr:#0FF0FC">
								<span>Mas información</span>
								<i></i>
							</button>
						</div>
					</div>
				</div>

				<div class="col-md-4">
					<div class="card1">
						<div class="head">
							<div class="circle"></div>
							<div class="img">
								<img src="imagenes/profesor.jpg" alt="">
							</div>
						</div>

						<div class="description">
							<h4>personal</h4>
							<h5>lancastar</h5>
							<p>Nuestro equipo de profesionales comprometidos está aquí para apoyar a nuestros estudiantes en
								su viaje educativo.</p>
						</div>

						<div class="contact">
							<button class="buton" style="--clr:#0FF0FC">
								<span>Mas información</span>
								<i></i>
							</button>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card1">
						<div class="head">
							<div class="circle"></div>
							<div class="img">
								<img src="imagenes/convenios-estudiantiles.jpg" alt="">
							</div>
						</div>

						<div class="description">
							<h4>Nuestros Convenios</h4>
							<h5>24/11/2022</h5>
							<p>
								con prestigiosas universidades después de la graduación. Prepárate para trascender
								fronteras.
							</p>
						</div>

						<div class="contact">
							<button class="buton" style="--clr:#0FF0FC">
								<span>Mas información</span>
								<i></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			</div>
			<div class="instalaciones1">
				<h2>NUESTRAS INSTALACIONES</h2>
			</div>

			<div class="youtobe-card  card bg-dark text-white text-center py-2  ">
				<div class="row">
					<div class="video-you col-md-6 md-4 img-fluid">
						<iframe src="https://www.youtube.com/embed/FEdeiV8vK70" title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
							allowfullscreen></iframe>
					</div>
					<div class="info col-md-6 md-4 ">
						<h3 class="titulo-h3">"Conoce Nuestra Institución"</h3>
						<div class="fecha">7 de julio del 2020</div>
						<p class="descripcion">Bienvenidos a nuestro recorrido virtual por las instalaciones del colegio
							Lancaster. En
							este video, te llevaremos a través de un viaje por nuestro campus para que puedas conocer de
							cerca todo lo
							que ofrecemos a nuestros estudiantes y comunidad.</p>
						<a href=""><button class="buton" style="--clr:#FDC734">
								<span>Ver Mas </span>
								<i></i></button></a>
					</div>

				</div>
			</div>
			<br>
			<section id="Servicios">
				<div class="text-center">
					<h1>SERVICIOS</h1>
				</div>
			</section>
			<div class="tarjetas-1 card ">
				<div class="row ">
					<div class=" col-md-6 md-4">
						<img id="img-tarjetas" src="imagenes/niña-1.png" class="img-fluid " alt="...">
					</div>
					<div class=" col-md-6 md-4">
						<div class="preescolar-1   ">
							<div class="card-body">
								<h3 class="card-title text-center">Preescolar</h3>

								<p class="text-car text-justify ">Programa de educación temprana: Un enfoque especializado
									en estimulación
									temprana, promoviendo el desarrollo cognitivo,
									emocional y social de los niños pequeños.
									Ambientes de aprendizaje seguros y acogedores: Espacios diseñados para que los niños se
									sientan
									cómodos, motivados y
									dispuestos a explorar y descubrir el mundo que les rodea.
									Actividades lúdicas y creativas: Enseñanza a través de juegos, música, arte y
									actividades
									prácticas que fomentan el
									aprendizaje interactivo y el desarrollo de habilidades motoras y sociales.
									Enfoque en la alfabetización temprana y las habilidades básicas: Introducción a la
									lectura,
									escritura, matemáticas y
									otras habilidades fundamentales en un ambiente divertido y estimulante.</p>
								<p class="card-text"><small class="text-muted">Última actualización hace 3 semanas</small>
								</p>
								<div class="grupo-botones">
									<button class="buton" style="--clr:#FDC734">
										<span>Me Gusta</span>
										<i></i>
									</button>
									<button  class="buton"style="--clr:red">
										<span>No me gusta</span>
										<i></i>
									</button>
									<button  class="buton"style="--clr:#39FF14">
										<span>compartir</span>
										<i></i>
									</button>
									<img src="imagenes/libross.png" width="100px" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class=" tarjetas-1 card">
				<div class="row">
					<div class="col-md-6 md-4">
						<div class="card-body">
							<h3 class="card-title">Primaria</h3>
							<p class="card-text">Plan de estudios completo y equilibrado: Un programa académico sólido que
								abarca todas
								las áreas curriculares, como matemáticas, ciencias, estudios sociales, lenguaje y
								literatura, arte y
								educación física. Enfoque en el desarrollo de habilidades fundamentales: Fomento de
								habilidades de
								lectura, escritura, pensamiento crítico y resolución de problemas para sentar las bases del
								éxito
								académico futuro. Actividades extracurriculares: Opciones de actividades después de clases,
								como
								deportes, clubes, música, teatro o robótica, para que los estudiantes exploren sus intereses
								y talentos
								más allá del aula. Apoyo individualizado: Atención a las necesidades individuales de los
								estudiantes a
								través de tutores, maestros de apoyo o programas de refuerzo para garantizar un aprendizaje
								eficaz y el
								progreso académico de cada estudiante.</p>
							<p class="card-text"><small class="text-muted">Última actualización hace 3 semanas</small></p>
							<div class="grupo-botones">
								<button class="buton" style="--clr:#FDC734">
									<span>Me Gusta</span>
									<i></i>
								</button>
								<button class="buton" style="--clr:red">
									<span>No me gusta</span>
									<i></i>
								</button>
								<button class="buton" style="--clr:#39FF14">
									<span>compartir</span>
									<i></i>
								</button>
								<img src="imagenes/libross.png" width="100px" alt="">
							</div>
						</div>
					</div>
					<div class="col-md-6 md-4">
						<div class="card-body">
							<img id="img-tarjetas" src="imagenes/primaria.png" class="img-fluid rounded-start float-md-end"
								alt="...">
						</div>
					</div>
				</div>
			</div>
			<hr>
			<div class="tarjetas-1 card ">
				<div class="row ">
					<div class="col-md-6">
						<img id="img-tarjetas" src="imagenes/segundaria-1.png" class="img-fluid rounded-start" alt="...">
					</div>
					<div class="col-md-6 md-4">
						<div class="card-body">
							<h3 class="card-title">Secundaria</h3>
							<p class="card-text">Variedad de asignaturas y especializaciones: Una amplia gama de asignaturas
								y
								cursos que permiten a los estudiantes
								explorar diferentes áreas de interés y descubrir sus pasiones.
								Programas de orientación vocacional: Asesoramiento y apoyo en la elección de carreras y
								futuros
								estudios, proporcionando
								información sobre opciones universitarias, formación técnica y oportunidades profesionales.
								Participación en proyectos y competencias académicas: Participación en competencias, ferias
								científicas, proyectos de
								investigación y otras actividades que desafían a los estudiantes y fomentan el pensamiento
								crítico, la resolución de
								problemas y la colaboración.
								Programas de liderazgo y servicio comunitario: Oportunidades para desarrollar habilidades de
								liderazgo y participar en
								proyectos de servicio comunitario, fomentando el compromiso cívico y la responsabilidad
								social.
							</p>
							<p class="card-text"><small class="text-muted">Última actualización hace 3 semanas</small></p>
							<div class="grupo botones">
								<button class="buton" style="--clr:#FDC734">
									<span>Me Gusta</span>
									<i></i>
								</button>
								<button class="buton" style="--clr:red">
									<span>No me gusta</span>
									<i></i>
								</button>
								<button  class="buton" style="--clr:#39FF14">
									<span>compartir</span>
									<i></i>
								</button>
								<img src="imagenes/libross.png" width="100px" alt="">
							</div>

						</div>
					</div>
				</div>
			</div>
			</div>
			<hr>
			<div class="card bg-transparent">
				<div class="row g-0">
					<div class="col-md-6">
						<iframe
							src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d31861.546805975464!2d-76.56328693837779!3d3.4246581676115544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1scolegio%20de%20cali%20lan%20caster!5e0!3m2!1ses!2sco!4v1687530866452!5m2!1ses!2sco"
							width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"
							referrerpolicy="no-referrer-when-downgrade"></iframe>
					</div>
					<div class="col-md-6">
						<div class="card-body">
							<h5 class="card-title">SEDE PRINCIPAL:</h5>
							<p class="card-text">Ven y únete a nuestra comunidad educativa, donde el aprendizaje se
								convierte en
								una experiencia enriquecedora y
								divertida. ¡Esperamos verte pronto en nuestro colegio y compartir contigo todo lo que
								tenemos
								para ofrecer!.</p>
							<p>Direccion: Cra. 66a #1C-65, La Cascada </p>
							<p>Ciudad: Cali, Valle del Cauca</p>
							<p>Telefono: 23243960</p>
							<p class="card-text"><small class="text-muted">Última actualización hace 3 semanas</small></p>
						</div>
					</div>
				</div>
			</div>
			</div>


			<hr>

			</div><br>
			<hr>


			<section id="contact" class="form-label">
				<form method="post" action="req/contact.php">
					<h1>Contacto</h1>
					<p>¡Estamos encantados de ayudarte! Completa el formulario de contacto y nos pondremos en contacto
						contigo lo
						antes
						posible.</p>
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
						<label for="exampleInputEmail1" class="form-label">dirección de correo electrónico</label>
						<input type="email" class="form-control" id="exampleInputEmail1" name="email"
							aria-describedby="emailHelp">
						<div id="emailHelp" class="form-text">Nunca compartiremos tu dirección de correo electrónico con
							nadie más.</div>
					</div>
					<div class="mb-3">
						<label class="form-label">Nombre completo</label>
						<input type="text" name="full_name" class="form-control">
					</div>
					<div class="mb-3">
						<label class="form-label">Mensaje</label>
						<textarea class="form-control" name="message" rows="4"></textarea>
					</div>
					<button class="buton" type="submit" style="--clr:#39FF14">
						<span>Enviar</span>
						<i></i></button></a>
					</div>

				</form>
			</section>
			</div>
			</div>


			<!-- Remove the container if you want to extend the Footer to full width. -->
			<div class="container my-5">
				<!-- Footer -->
				<footer class="text-center text-lg-start text-white" style="background-color: #45526e">
					<!-- Grid container -->
					<div class="container p-4 pb-0">
						<!-- Section: Links -->
						<section class="">
							<!--Grid row-->
							<div class="row">
								<!-- Grid column -->
								<div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
									<h6 class="text-uppercase mb-4 font-weight-bold">
										CODELOGY
									</h6>
									<p>Educar es sembrar en el alma,
										El conocimiento es la clave,
										La educación es el arma más poderosa.</p>
								</div>
								<!-- Grid column -->

								<hr class="w-100 clearfix d-md-none" />

								<!-- Grid column -->
								<div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
									<h6 class="text-uppercase mb-4 font-weight-bold">NOSOTROS</h6>
									<p>
										<a class="text-white">MDBootstrap</a>
									</p>
									<p>
										<a class="text-white">MDWordPress</a>
									</p>
									<p>
										<a class="text-white">BrandFlow</a>
									</p>
									<p>
										<a class="text-white">Bootstrap Angular</a>
									</p>
								</div>
								<!-- Grid column -->

								<hr class="w-100 clearfix d-md-none" />

								<!-- Grid column -->
								<div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
									<h6 class="text-uppercase mb-4 font-weight-bold">
										SERVICIOS
									</h6>
									<p>
										<a class="text-white">Your Account</a>
									</p>
									<p>
										<a class="text-white">Become an Affiliate</a>
									</p>
									<p>
										<a class="text-white">Shipping Rates</a>
									</p>
									<p>
										<a class="text-white">Help</a>
									</p>
								</div>

								<!-- Grid column -->
								<hr class="w-100 clearfix d-md-none" />

								<!-- Grid column -->
								<div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
									<h6 class="text-uppercase mb-4 font-weight-bold">Contacto</h6>
									<p><i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
									<p><i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
									<p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
									<p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
								</div>
								<!-- Grid column -->
							</div>
							<!--Grid row-->
						</section>
						<!-- Section: Links -->

						<hr class="my-3">

						<!-- Section: Copyright -->
						<section class="p-3 pt-0">
							<div class="row d-flex align-items-center">
								<!-- Grid column -->
								<div class="col-md-7 col-lg-8 text-center text-md-start">
									<!-- Copyright -->
									<div class="p-3">
										© 2020 Copyright:
										<a class="text-white" href="https://mdbootstrap.com/">CODELOGY</a>
									</div>
									<!-- Copyright -->
								</div>
								<!-- Grid column -->

								<!-- Grid column -->
								<div class="col-md-5 col-lg-4 ml-lg-0 text-center text-md-end">
									<!-- Facebook -->
									<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
											class="fab fa-facebook-f"></i></a>

									<!-- Twitter -->
									<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
											class="fab fa-twitter"></i></a>

									<!-- Google -->
									<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
											class="fab fa-google"></i></a>


									<a class="btn btn-outline-light btn-floating m-1" class="text-white" role="button"><i
											class="fab fa-instagram"></i></a>
								</div>

							</div>
						</section>

					</div>

				</footer>
				<!-- Footer -->
			</div>
			<!-- End of .container -->



			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
	</body>

	</html>
<?php } else {
	header("Location: login.php");
	exit;
} ?>