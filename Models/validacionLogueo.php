  <?php

  $errorEmail= '';
  $errorPassword= '';
  $targetForm = "loguearUsuario.php";

  //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
  if($_POST){


    if(empty( $_POST['userPass']) ){
      $errorPassword = 'Debe ingresar una contraseña';
    }

    if(empty( $_POST['userMail']) ){
      $errorEmail = 'Debe ingresar el Correo';
    }else if ( !filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
      $errorEmail = 'El Correo es inválido';
    }

    if($errorEmail===""&& $errorPassword===""){
      header('location:userHome.php?us='.$_POST['userName'].'');
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
