<?php
  require_once("C://xampp/htdocs/login/view/head/head.php");
?>

<div class="fondo_menu">
  <div class="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <?php if(empty($_SESSION['usuario'])): ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Productos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Precios</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Contactanos </a>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <a href="/login/view/home/login.php" class="boton">Inicia Session</a>
            <a href="/login/view/home/signup.php" class="boton">Registrate</a>
          </div>
          <?php else : ?>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Agregar informacion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Editar Perfil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Session de recursos</a>
              </li>
            </ul>
            <a href="/login/view/home/logout.php" class="boton">Cerrar Sesion</a>
          </div>
          <?php endif ?>
        </div>
    </nav>
  </div>
</div>

<div class="slider-container">
  <div class="slider position"></div>