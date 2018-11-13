<?php
class Validacion{
  private $errorNombre= '';
  private $errorPhone= '';
  private $errorEmail= '';
  private $errorPassword= '';
  private $errorGenero= '';
  private $targetForm= '';

    public function validarRegistro($datos) //:bool
    {
      $this->targetForm = "registrarUsuario.php";

      //SANITIZACIÓN DE LAS VARIABLES INPUT FORM//
      if($datos){

        $datos['userName'] = trim($datos['userName']);

        if(empty($datos['userName'])){
          $this->errorNombre = 'Debe ingresar un nombre';
        }else if( strlen( $datos['userName'] )< 2){
          $this->errorNombre = 'El nombre tiene que tener al menos dos letras';
        }
        if(!empty($datos['userPhone']) && !is_Numeric($datos['userPhone']) ){
          $this->errorPhone = 'Debe ingresar un número de teléfono';
        }else if( strlen($datos['userPhone']) < 8){
          $this->errorPhone = 'Ingrese un número de teléfono válido';
        }
        if( empty( $datos['userPass']) ){
          $this->errorPassword = 'Debe ingresar una contraseña';
        }else if( strlen( $datos['userPass'] )< 8){
          $this->errorPassword = 'La contraseña debe tener al menos 8 caracteres';
        }else if ($datos['userPass'] != $datos['userPassCheck']) {
          $this->errorPassword = 'No coinciden las contraseñas ingresadas';
        }

        if( empty( $datos['userMail']) ){
          $this->errorEmail = 'Debe ingresar el correo';
        }else if ( !filter_var( $datos['userMail'] , FILTER_VALIDATE_EMAIL )) {
          $this->errorEmail = 'El correo es inválido';
        }

        if(!isset($datos['userGender'])){
          $this->errorGenero = 'Debe seleccionar un género';
        }

    // var_dump($datos);
    // die;

        if($this->errorNombre==="" && $this->errorEmail==="" && $this->errorGenero==="" && $this->errorPassword===""){
          return true;
        }else{
          return false;
        }
      }//note empty data
    }//end fun

    public function validarLogueo($datos)
      {
          if($datos){
            if( empty( $datos['userMail']) ){
              $this->errorEmail = 'Debe ingresar el Correo';
            }else if ( !filter_var( $datos['userMail'] , FILTER_VALIDATE_EMAIL )) {
              $this->errorEmail = 'El correo es inválido';
            }
          }
          if($this->errorMail === ""){
            return false;
          }else{
            return true;
          }
      }

    public function getErrorNombre(){
      $this->errorNombre;
    }
    public function getErrorPhone(){
      $this->errorPhone;
    }
    public function getErrorEmail(){
      $this->errorEmail;
    }
    public function getErrorPassword(){
      $this->errorPassword;
    }
    public function getErrorGenero(){
      $this->errorGenero;
    }


  }
