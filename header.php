<header>
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
    <a class="navbar-brand" href="index.php"><img src="imagenes/logo.png" width="120px" class="d-inline-block align-top" alt="logo"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse text-center" id="navbarNavDropdown">
        <ul class="navbar-nav mr-auto ml-auto">
          <li class="navbar-brand">
              <a class="nav-link" href="#">HOME<span class="sr-only"></span></a>
            </li>
            <li class="navbar-brand">
              <a class="nav-link" href="#">FAQS</a>
            </li>
            <li class="navbar-brand dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">PRODUCTOS</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Remeras</a>
                <a class="dropdown-item" href="#">Camperas</a>
                <a class="dropdown-item" href="#">Pantalones</a>
            </div>
          </li>
          <li class="navbar-brand">
            <a class="nav-link" href="#">LOGIN</a>
          </li>
          <li class="navbar-brand">
              <a class="nav-link" href="#">REGISTER</a>
          </li>
          <li class="navbar-brand carrito">
             <a class="nav-link" href="#"><img src="imagenes/carrito2.png" style="width: 30px"></a>
          </li>
      </ul>
        <form class="form-inline my-2 my-lg-0 mr-auto ml-auto">
          <input class="form-control mr-sm-2" type="Buscar" placeholder="Search" aria-label="Buscar">
          <button class="btn btn-danger mr-auto ml-auto" type="submit">Buscar</button>
        </form>
      </div>
  </nav>

  <div id="carouselExampleIndicators" class="carousel slide fotos" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="imagenes/BlancoFront.png" alt="foto 1">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagenes/BlancoFront.png" alt="foto 2">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="imagenes/BlancoFront.png" alt="foto 3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>

</header>
