<?php
session_start();
if (!empty($_SESSION['active'])){
  header('Location:administrador/');

}else if (!empty($_SESSION['activeP'])) {
  header('Location:profesor/');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="css/estilos.css"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>

  <div class="container-login ">
    <div class="row">
         <div class=" col-6">
        <h1 class="text-sm text-white"> . [CODELOGY]</h1>
        <img src="imagenes/img-loguin.jpg" alt="" width="800px">
      </div>
      <div class="col-6">
        <div class="wrap-login">

          <span class="login-form-title">¡Bienvenido!</span>

          <ul class="nav nav-tabs">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane"
                type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Administrador</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane"
                type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Profesor</button>
            </li>

          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab"
              tabindex="0">
              <form action="" onsubmit="return validar()">
                <div class="wrap-input100">
                  <input class="input100" type="text" id="usuario" name="usuario" placeholder="Usuario">
                  <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100">
                  <input class="input100" type="password" id="pass" name="password" placeholder="Password">
                  <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                  <div class="wrap-login-form-btn">
                    <div class="login-form-bgbtn"></div>
                    <div id="messageUsuario"></div>
                    <button id="LoginUsuario" type="button" name="submit" class="login-form-btn">Iniciar
                      Sesión</button>
                    

                  </div>
                </div>
            </div>
            </form>
            <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              <form action="" onsubmit="return validar()">
                <div class="wrap-input100">
                  <input class="input100" type="text" id="usuarioProfesor" name="usuarioProfesor" placeholder="Usuario">
                  <span class="focus-efecto"></span>
                </div>

                <div class="wrap-input100">
                  <input class="input100" type="password" id="passProfesor" name="passProfesor" placeholder="Password">
                  <span class="focus-efecto"></span>
                </div>

                <div class="container-login-form-btn">
                  <div class="wrap-login-form-btn">
                    <div class="login-form-bgbtn"></div>    
                       <div id="messageProfesor"></div>
                    <button id="LoginProfesor" type="button" name="submit" class="login-form-btn">Iniciar
                      Sesión</button>
             
                  </div>
                </div>
              </form>
            </div>

          </div>



        </div>
      </div>
    </div>
  </div>
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <script src="js/login.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="codigo.js"></script>
</body>

</html>
</body>

</html>