<?php
session_start();
if ($_SESSION) {
  header('location:index.php');
}
?>
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap-css/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">
  <link rel="stylesheet" type="text/css" href="css/registro.css">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <title> Registro - Estamperia Sanchez</title>

</head>
<body>

	<!-- VALIDATION FUTURE MODELS -->
  <?php include('autoload.php');

    $autenticador = new Autenticador();
    $validaLogueo = $autenticador->getValidacion();
    if($_POST){
       $autenticador->loguear($_POST);
    }

  ?>
	<!-- HEADER -->
  <?php include ('header.php'); ?>

	<!-- FORM -->
  <section style="margin-top:100px" class="registro container">
    <div class="container">
      <div class="row centrar-contenido">
        <div class="form-title col-12 col-lg 6">
          <h2> INGRESAR </h1>
          <h3> Más que una estampa, tu estilo</h2>
        </div>
      </div>

    </div>
    <div class="form-content container centrar-contenido">
      <div class="row justify-content">
        <div class="col-12 col-md-8 col-lg-6">

          <form class="row justify-content" action="" method="post">

            <?php
            // echo $autenticador->errorLogueo;
            ?>

            <label class="etiqueta col-12 col-md-10 col-lg-10">Email:</label>

            <input class="col-12 col-md-10 col-lg-10" type="text" name="userMail" placeholder="example@example.com"  value=<?php echo $_POST['userMail']??'';?>>
            <?php
            // echo $validaLogueo->getErrorEmail();
            ?>

            <br><br>


            <label class="etiqueta col-12 col-md-10 col-lg-10" for="">Contraseña:</label>

            <input class="col-12 col-md-10 col-lg-10" type="password" name="userPass" maxlength="20" placeholder="*******" value=<?php echo $_POST['userPass']??'';?> >



            <div class="col-12 centrar-contenido">
              <button class="nice-bottom"type="submit"> Iniciar sesión </button>
            </div>
          </form>
        </div>

      </div>
    </div>

  </section>
  	<?php include ('footer.php'); ?>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
