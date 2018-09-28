<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/reset.css">
  <link rel="stylesheet" href="css/bootstrap-css/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/header.css">
  <link rel="stylesheet" type="text/css" href="css/footer.css">

  <title> Log in-Estamperia Sanchez</title>

</head>
<body>

  <?php include('Models/validacionRegistro.php');
  ?>

  <div class="contenedor-principal">
    <p>
      <a href="index.html">
        <img id="logo" src="imagenes/logo.png" alt="logo Estamperias Sanchez">
      </a>
    </p>

    <h1 class="centrar">Registrate en Estamperia Sanchez</h1>



    <form action="registroUsuario.php" method="post">

      <label class="etiqueta" for="nombreDelUsuario">Nombre:</label>

        <input type="text" id="nombreDelUsuario" placeholder="Ingrese su nombre" required name="userName" value = <?php echo $_POST['userName']'';?> <span> *</span>
        <?php echo $errorNombre; ?>

      <br><br>

      <label class="etiqueta" for="nombreDelUsuario">Edad:</label>
        <input  id="nombreDelUsuario" type="number" name="userAge" value = <?php echo $_POST['userAge']'';?> min="18">
        <?php echo $errorEdad; ?>
      <br><br>

      <label class="etiqueta">Teléfono de contacto:</label>
      <input type="tel" placeholder="011-111-1111" name="userPhone" value = <?php echo $_POST['userPhone']'';?>>

      <br><br>

      <label class="etiqueta">Email:</label>

      <input type="text" required name="userMail" value = <?php echo $_POST['userMail']'';?>><span> *</span>
      <?php echo $errorEmail; ?>

      <br><br>

      <label class="etiqueta" for="">Sitio web:</label>
      <input type="text" required name="userSite" value = <?php echo $_POST['userSite']??'';?>>

      <br><br>

      <label class="etiqueta" for="">Contraseña</label>

      <input type="password" name="userPass" maxlength="8"> value = <?php echo $_POST['userPass']??'';?> <span> *</span>

      <br><br>

      <label class="etiqueta">Género</label>
        <label><input type="radio" name="userGender" value="m" <?php echo $_POST['userGender']==='m' ? 'checked':'';?> >Masculino</label>
        <label><input type="radio" name="userGender" value="f" <?php echo $_POST['userGender']==='f' ? 'checked':'';?> >Femenino</label>
        <?php echo $errorGenero; ?>

      <br><br>
      <div class="centrar">
        <button type="submit">Registrarse</button>
      </div>
    </form>
  </div>
</body>
</html>
