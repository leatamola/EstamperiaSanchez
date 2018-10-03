  <?php

  $errorNombre= '';
  $errorEmail= '';
  $errorPassword= '';
  $targetForm = "loguearUsuario.php";

  //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
  if($_POST){

    $_POST['userName'] = trim($_POST['userName']);

    if(empty($_POST['userName'])){
      $errorNombre = 'Debe ingresar un nombre';
    }else if( strlen( $_POST['userName'] )< 2){
      $errorNombre = 'El nombre tiene que tener al menos dos letras';
    }

    if( empty( $_POST['userPass']) ){
      $errorPassword = 'Debe ingresar una contraseña';
    }

    if( empty( $_POST['userMail']) ){
      $errorEmail = 'Debe ingresar el Correo';
    }else if ( !filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
      $errorEmail = 'El Correo es inválido';
    }

    if($errorNombre==="" && $errorEmail===""&& $errorPassword===""){
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
