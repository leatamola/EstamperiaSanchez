  <?php

  $errorNombre= '';
  $errorPhone= '';
  $errorEmail= '';
  $errorPassword= '';
  $errorGenero= '';
  $targetForm = "registrarUsuario.php";

  //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
  if($_POST){

    $_POST['userName'] = trim($_POST['userName']);

    if(empty($_POST['userName'])){
      $errorNombre = 'Debe ingresar un nombre';
    }else if( strlen( $_POST['userName'] )< 2){
      $errorNombre = 'El nombre tiene que tener al menos dos letras';
    }
    if(!empty($_POST['userPhone']) && !is_Numeric($_POST['userPhone']) ){
      $errorPhone = 'Debe ingresar un número de teléfono';
    }else if( strlen($_POST['userPhone']) < 8){
      $errorPhone = 'Ingrese un número de teléfono válido';
    }
    if( empty( $_POST['userPass']) ){
      $errorPassword = 'Debe ingresar una contraseña';
    }else if( strlen( $_POST['userPass'] )< 8){
      $errorPassword = 'La contraseña debe tener al menos 8 caracteres';
    }else if ($_POST['userPass'] != $_POST['userPassCheck']) {
      $errorPassword = 'No coinciden las contraseñas ingresadas';
    }

    if( empty( $_POST['userMail']) ){
      $errorEmail = 'Debe ingresar el Correo';
    }else if ( !filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
      $errorEmail = 'El Correo es inválido';
    }

    if(!isset($_POST['userGender'])){
      $errorGenero = 'Debe seleccionar un género';
    }




// var_dump($_POST);
// die;

    if($errorNombre==="" && $errorEmail==="" && $errorGenero==="" && $errorPassword===""){

      try{
        $sqlInsert = 'INSERT INTO usuarios (Nombre, Tel, Mail, Pass, sexo) VALUES ( :Nombre, :Tel, :Mail, :Pass, :sexo)';
        $ins = $conex->conex->prepare($sqlInsert);

        $ins->bindValue(':Nombre', $_POST['userName']);
        $ins->bindValue(':Tel', $_POST['userPhone']);
        $ins->bindValue(':Mail', $_POST['userMail']);
        $ins->bindValue(':Pass', $_POST['userPass']);
        $ins->bindValue(':sexo', $_POST['userGender']);

        $ins->execute();

        var_dump($ins);
      // header('location:registrarUsuarioOK.php?us='.$_POST['userName'].'&&g='.$_POST['userGender'].'');
    }
      catch( PDOException $error ){
      // echo 'Error con la BD, contacta con el administrador del sistema';
        echo 'El error es:'. $error->getMessage();
      }


    }

  //  $targetForm = "registrarUsuario.php";
  //agrego más variables por get: &

    //var_dump($_POST);
    //var_dump($errorEmail);
    //var_dump($errorGenero);
    //var_dump($errorNombre);
    //var_dump($targetForm);

  }

  ?>
