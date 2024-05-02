<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login - Colegio</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
	<link rel="icon" href="logo.png">
</head>

<br /><br />
<div class="text-center text-light">
	Copyright &copy; 2024 CODELOGY All rights reserved.
</div>

</div>
</div>
<section class="reseñahistorica d-flex flex-wrap">
	<div class="container">
		<div class="row">
			<div class="col-12 col-md-7 mb-4">
				<div class="ventajas">
					<div class="">
						<img src="logo.png" width="180px">
					</div>
					<ul>✅ Acceso personalizado a recursos educativos</ul>
					<ul>✅ Participa en eventos exclusivos para miembros</ul>
					<ul>✅ Conexión con una red de +20,000 egresados exitosos</ul>
					<ul> ✅ Recibe actualizaciones y noticias relevantes</ul>
					<ul> ✅ Explora todos los programas académicos disponibles</ul>

				</div>

			</div>
			<div id="res" class="col-12 col-md-5">
				<div id="inicio-sesion" class="card bg-transparent">
					<div class="card-body">

						<body class="body-login">
							<div class="black-fill"><br /> <br />
								<div class="d-flex justify-content-center align-items-center flex-column">
									<form class="login" method="post" action="req/login.php">

										<h3>INICIAR SESION</h3>
										<?php if (isset($_GET['error'])) { ?>
											<div class="alert alert-danger" role="alert">
												<?= $_GET['error'] ?>
											</div>
										<?php } ?>
										<div class="mb-3">
											<label class="form-label"></label>
											<i class="fas fa-user"></i>
											<input placeholder="ingrese su usuario" type="text" class="form-control"
												name="uname">
										</div>

										<div class="mb-3">
											<label class="form-label"></label>
											<i class="fas fa-lock"></i>
											<input placeholder=" ingrese su contraseña" type="password"
												class="form-control" name="pass">
										</div>

										<div class="mb-3">
											<label class="form-label">Iniciar sesión como</label>
											<select class="form-control" name="role">
												<option value="1">Administrado</option>
												<option value="2">Profesor</option>
												<option value="3">Estudiante</option>
												<option value="4">Activar Office</option>
											</select>
										</div>
										<button class="buton" type="submit" style="--clr:#39FF14">
											<span>Ingresar</span>
											<i></i></button></a>

										<a href="index.php" class="text-decoration-none">Menu Principal</a>
										
									</form>
								</div>
							</div>
					</div>
			</div>
		</div>

</section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>