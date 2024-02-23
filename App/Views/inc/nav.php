<nav
      class="navbar sticky-top navbar-expand-lg navbar-bg-color d-lg-flex justify-content-lg-between rounded-4 rounded-top-0 nav-shadow"
    >
      <div class="container">
        <a class="navbar-brand" href="#">
<!-- no se ve el logo.svg -->  
        <img src="./Views/img/logo.svg" alt="Veterinaria San Antón"/></a>
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse row" id="navbarNavDropdown">
          <ul
            class="navbar-nav mb-2 mb-lg-0 align-items-center justify-content-lg-evenly col-lg-9"
          >
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Servicios</a>
            </li>

      <?php
            if (isset($_SESSION['user'])) {
            echo '<li class="nav-item">
              <a class="nav-link" href="#">Turnos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Historial<br />Médico</a>
            </li>';

            }

      ?>
            <li class="nav-item">
              <a class="nav-link" href="#">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Sobre<br />nosotros</a>
            </li>
          </ul>
  
  <?php
          if (!isset($_SESSION['user'])) {
          echo 
          '<div class="registro row col-lg-3 mx-auto">
            <a href="./pagina-login/login.php" 
            class="btn btn1-bg-color rounded-pill col-12 col-lg-5 p-2 me-lg-1 mb-2 mb-lg-0">Ingresa</a>
            <a href="" class="btn btn2-bg-color rounded-pill p-2 col-12 col-lg-6">Registrate</a>
            
            </div>';//Modifdique en la linea 53 el col-lg del boton registrarte porque 
            //no se veia todo, habria que ver que queden iguales y les puse el p-2 asi quedan completas
            
        } else {
                echo 'Usuario no registrado ';
        }

          ?>
          
        </div>
      </div>
    </nav>