  <?php

  $errorNombre= '';
  $errorEdad= '';
  $errorEmail= '';
  $errorGenero= '';

  //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
  if($_POST){


    $_POST['userName'] = trim($_POST['userName']);


    if(empty($_POST['userName'])){
      $errorNombre = 'Debe ingresar un nombre';
    }else if( strlen( $_POST['userName'] )< 2){
      $errorNombre = 'El nombre tiene que tener al menos dos letras';
    }

    if(!is_numeric($_POST['userAge'])){
      $errorEdad = 'Debe ingresar su edad';
    }
    //else if( !$_POST['userAge']> 110 || $_POST['userAge']> 110 )

    if( empty( $_POST['userMail']) ){
      $errorEmail = 'Debe ingresar el Correo';
    }else if ( !filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
      $errorEmail = 'El Correo es inválido';
    }

    if(!isset($_POST['userGenero'])){
      $errorGenero = 'Debe seleccionar un género';
    }

  }

  ?>
