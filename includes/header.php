<?php
  include("session.php");
?>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light red-space">
    <div class="container-fluid nav-bar">
      <!--Logo-->
      <a class="navbar-brand pe-lg-5 mb-3" href="Inicio.php">
        <img src="img/logo.png" alt="" /></a>

      <!--Menu Hamburguesa-->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <!--Menu-->
      <div class="collapse navbar-collapse align-menu" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="nav-link active text-white" aria-current="page" href="Inicio.php">Inicio</a>
          </li>
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="nav-link text-white" href="Inicio.php#carrusel">Top recetas</a>
          </li>
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="nav-link text-white" href="MisRecetas.php"> Mis recetas</a>
          </li>
          <!--
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="navbar-brand nav-link text-white" href="Sesion.php">
              <img src="img/Login.png" alt="" width="38" height="38" class="d-inline-block">
              <span class="nav-bar text-white">Login</span>
            </a>
          </li>
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="navbar-brand nav-link text-white" href="Registro.php">
              <img src="img/Regis.png" alt="" width="38" height="38" class="d-inline-block">
              <span class="nav-bar text-white">Registrarse</span>
            </a>
          </li>
          -->
          <li class="nav-item ps-lg-4 pe-lg-5 nav-link">
            <a class="navbar-brand nav-link text-white btn" onclick=
              <?php
                if($_SESSION['login_user'] == 'Admin' || $_SESSION['login_user'] == 'admin') {
                ?>
                  href="Admin.php"
                <?php
                }   
              ?>
            >
              <img src="img/Admin.png" alt="" width="38" height="38" class="d-inline-block">
              <span class="nav-bar text-white">Admin</span>
            </a>
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
          

          <!--Menu Hamburguesa, despliega el menu-->
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li>
              <hr class="dropdown-divider" />
            </li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </ul>
      </div>
    </div>
  </nav>