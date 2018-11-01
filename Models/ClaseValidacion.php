<?php
class Validacion{
  public $errorNombre= '';
  public $errorPhone= '';
  public $errorEmail= '';
  public $errorPassword= '';
  public $errorGenero= '';
  public $targetForm= '';

    public function validarRegistro($datos)
    {
      $this->targetForm = "registrarUsuario.php";

      //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
      if($datos){

        $datos['userName'] = trim($_POST['userName']);

        if(empty($_POST['userName'])){
          $this->errorNombre = 'Debe ingresar un nombre';
        }else if( strlen( $_POST['userName'] )< 2){
          $this->errorNombre = 'El nombre tiene que tener al menos dos letras';
        }
        if(!empty($_POST['userPhone']) && !is_Numeric($_POST['userPhone']) ){
          $this->errorPhone = 'Debe ingresar un número de teléfono';
        }else if( strlen($_POST['userPhone']) < 8){
          $this->errorPhone = 'Ingrese un número de teléfono válido';
        }
        if( empty( $_POST['userPass']) ){
          $this->errorPassword = 'Debe ingresar una contraseña';
        }else if( strlen( $_POST['userPass'] )< 8){
          $this->errorPassword = 'La contraseña debe tener al menos 8 caracteres';
        }else if ($_POST['userPass'] != $_POST['userPassCheck']) {
          $this->errorPassword = 'No coinciden las contraseñas ingresadas';
        }

        if( empty( $_POST['userMail']) ){
          $this->errorEmail = 'Debe ingresar el Correo';
        }else if ( !filter_var( $_POST['userMail'] , FILTER_VALIDATE_EMAIL )) {
          $this->errorEmail = 'El Correo es inválido';
        }

        if(!isset($_POST['userGender'])){
          $this->errorGenero = 'Debe seleccionar un género';
        }

    // var_dump($_POST);
    // die;

        if($this->errorNombre==="" && $this->errorEmail==="" && $this->errorGenero==="" && $this->errorPassword===""){

          try{
            $sqlInsert = 'INSERT INTO usuarios (Nombre, Tel, Mail, Pass, sexo) VALUES ( :Nombre, :Tel, :Mail, :Pass, :sexo)';
            $ins = $conex->conex->prepare($sqlInsert);

            $ins->bindValue(':Nombre', $_POST['userName']);
            $ins->bindValue(':Tel', $_POST['userPhone']);
            $ins->bindValue(':Mail', $_POST['userMail']);
            $ins->bindValue(':Pass', $_POST['userPass']);
            $ins->bindValue(':sexo', $_POST['userGender']);

            $ins->execute();
            //var_dump($ins);
          // header('location:registrarUsuarioOK.php?us='.$_POST['userName'].'&&g='.$_POST['userGender'].'');
        }
          catch( PDOException $error ){
          // echo 'Error con la BD, contacta con el administrador del sistema';
            echo 'El error es:'. $error->getMessage();
          }


        }

      }
    }
  }
