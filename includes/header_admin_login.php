<?php
  include("session.php");
?>

<nav class="navbar navbar-expand-lg navbar-light red-space">
    <div class="container-fluid nav-bar">

      <!--Logo-->
      <a class="navbar-brand pe-lg-5 pb-3" href="Admin.php"> <img src="img/logo.png" alt=""></a>

      <!--Menu Hamburguesa-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!--Menu-->
      <div class="collapse navbar-collapse align-menu" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li class="nav-item ps-lg-5 pe-lg-5  nav-link">
            <a class="nav-link active text-white" aria-current="page" href="Inicio.php">Inicio</a>
          </li>
          <li class="nav-item ps-lg-5 pe-lg-5 nav-link">
            <a class="nav-link text-white" href="ListaClientes.php">Lista de Usuarios</a>
          </li>
          <li class="nav-item ps-lg-5 pe-lg-5 nav-link">
            <a class="nav-link text-white" href="AñadirReceta.php">Registrar Receta</a>
          </li>
          <li class="nav-item ps-lg-5 pe-lg-5 nav-link">
            <a class="nav-link text-white" href="ListaRecetas.php">Lista de Receta</a>
          </li>
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="navbar-brand nav-link text-white">
              <img src="img/Regis.png" alt="" width="38" height="38" class="d-inline-block">
              <span class="nav-bar text-white" href="#carrusel">Usuario: <?php echo $login_session; ?></span>
              </a>
          </li>
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="navbar-brand nav-link text-white" href="Sesion.php">
              <img src="img/Regis.png" alt="" width="38" height="38" class="d-inline-block">
              <span class="nav-bar text-white" href="logout.php">Logout</span>
            </a>
          </li>

          <!--Menu Hamurguesa, despliega el menu-->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider">
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>

        </ul>
      </div>
    </div>
  </nav>