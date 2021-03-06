<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" width="160px" class="d-inline-block align-top" alt="logo"></a>
    <button class="navbar-toggler" id="hamburguer" margin-left="auto" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto ml-auto">
            <li class="navbar-brand">
              <a class="nav-link" href="faqs.php">¿PREGUNTAS?</a>
            </li>
            <li class="navbar-brand dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="remeras.php">Remeras</a>
                <a class="dropdown-item" href="producto.php">Camperas</a>
                <a class="dropdown-item" href="producto.php">Pantalones</a>
            </div>
          </li>
          <?php if ($_SESSION): ?>
            <li class="navbar-brand">
              <a class="nav-link" href="userHome.php">MI CUENTA</a>
            </li>
            <li class="navbar-brand carrito">
               <a class="nav-link" href="#"><img src="imagenes/carrito2.png" style="width: 30px"></a>
            </li>
            <?php else: ?>
              <li class="navbar-brand">
                <a class="nav-link" href="loguearUsuario.php">INGRESA</a>
              </li>
              <li class="navbar-brand">
                  <a class="nav-link" href="registrarUsuario.php">REGISTRATE</a>
              </li>
          <?php endif; ?>
      </ul>
        <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
          <input class="form-control mr-sm-2" type="Buscar" placeholder="Buscar..." aria-label="Buscar">
          <button class="btn btn-danger mr-auto ml-auto" type="submit">Buscar</button>
          <?php if ($_SESSION): ?>
            <li class="navbar-brand">
              <a class="nav-link" href="Models/logout.php">salir</a>
            </li>
          <?php endif; ?>
        </form>

      </div>
      <br><br>
  </nav>



</header>
