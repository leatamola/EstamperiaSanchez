<?php
include_once('Models/autoload.php');
//al validador le mando un array de datos, puede ser post get files EventConfig
//retorn true y llamo a autenticador  o base de datos para que haga la escritura
//if ect
// $validaRegisto = new Validacion();
// $validaRegisto->validarRegistro();
//include_once('Models/validacionRegistro.php');
   //var_dump($_POST);
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <!-- <link rel="stylesheet" href="css/bootstrap-css/css/bootstrap.css"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
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

	<!-- HEADER -->
  <?php include ('header.php'); ?>

	<!-- FORM -->
  <section class="registro container">
    <div class="container">
      <div class="row centrar-contenido">
        <div class="form-title col-12 col-lg 6">
          <h2> REGISTRARSE </h1>
          <h3> Tus mejores estampas, a un click </h2>
        </div>
      </div>

    </div>
    <div class="form-content container centrar-contenido">
      <?php
      // if($validaRegisto->errorNombre !=""){
      //   echo $validaRegisto->errorNombre;
      // }elseif($validaRegisto->errorPhone!="") {
      //   echo "<h5>";
      //   echo $validaRegisto->errorPhone;
      // }elseif($validaRegisto->errorEmail!="") {
      //   echo "<h5>";
      //   echo $validaRegisto->errorEmail;
      // }elseif ($validaRegisto->errorPassword!="") {
      //   echo "<h5>";
      //   echo $validaRegisto->errorPassword;
      // }elseif ($validaRegisto->errorGenero!="") {
      //   echo "<h5>";
      //   echo $validaRegisto->errorGenero;
      // }

      // if( isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK ){
      //   //echo 'voy a mover el archivo';
      //   $ext = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
      //   if( $ext == 'jpeg' ||  $ext == 'png' ){
      //     move_uploaded_file($_FILES['foto']['tmp_name'], 'imagenes/avatars/'.$_POST['userName'].'.'.$ext);
      //   }else{
      //     $errorFoto = 'El Formato es inválido';
      //   }
      // }

       ?>
      <div class="row justify-content">
        <div class="col-12 col-md-8 col-lg-6">
          <form class="row justify-content" id="contact-form" action="" method="post" enctype="multipart/form-data">

            <div class="form-group">
            <label class="etiqueta col-12 col-md-10 col-lg-10" for="nombreDelUsuario">Nombre:</label>
            <input  type="text" id="nombreDelUsuario" placeholder="Ingrese su nombre" name="userName"
               value = <?php echo $_POST['userName']??'';?>>
             <div class="invalid-feedback"></div>
            </div>
            <br><br>

            <div class="form-group">
            <label class="etiqueta col-12  col-md-10 col-lg-10">Teléfono:</label>
            <input class="col-12 col-md-10 col-lg-10" type="tel" id="phone" placeholder="Ingrese su teléfono" name="userPhone" value=<?php echo $_POST['userPhone']??'';?>>
            <div class="invalid-feedback"></div>
            </div>
            <br><br>

            <div class="form-group">
            <label class="etiqueta col-12 col-md-10 col-lg-10">Email:</label>
            <input class="col-12 col-md-10 col-lg-10" type="text" id="email" name="userMail" placeholder="example@example.com" value=<?php echo $_POST['userMail']??'';?>>
            <div class="invalid-feedback"></div>
            </div>
            <br><br>


            <div class="form-group">
            <label class="etiqueta col-12 col-md-10 col-lg-10" for="">Contraseña:</label>
            <input class="col-12 col-md-10 col-lg-10" type="password" id="password" name="userPass" maxlength="20"  placeholder="********" value=<?php echo $_POST['userPass']??'';?> >
            <div class="invalid-feedback"></div>
            </div>
            <br><br>

            <div class="form-group">
            <label class="etiqueta col-12 col-md-10 col-lg-10" for="">Repetir contraseña:</label>
            <input class="col-12 col-md-10 col-lg-10" type="password" id="rePassword" name="userPassCheck" maxlength="20" placeholder="********" value=<?php echo $_POST['userPassCheck']??'';?> >
            <div class="invalid-feedback"></div>
            </div>
            <br><br>

            <div class="form-group">
            <label class="etiqueta col-12 offset-md-1 col-md-2 col-lg-2">Género</label>
              <label class="col-6 col-md-4"><input type="radio" name="userGender" value="m"
                <?php
                if(!isset($_POST['userGender'])){
                  echo '';
                }else if ($_POST['userGender']==='m') {
                    echo 'checked';}?> > Masculino</label>
              <label  class="col-6 col-md-4"><input type="radio" name="userGender" value="f"
                <?php
                if(!isset($_POST['userGender'])){
                  echo '';
                }else if ($_POST['userGender']==='f') {
                    echo 'checked';}?> > Femenino</label><label class="none col-0 col-md-1"></label>
              </div>

              <br><br>
              <label for="">
                Avatar:
                <input type="file" name="foto" value="">

              </label>


            <div class="col-12 centrar-contenido">
              <button class="nice-bottom"type="submit">Registrarse</button>
            </div>
          </form>
        </div>

      </div>
    </div>

  </section>
  	<?php include ('footer.php'); ?>
<script src="js/app.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
