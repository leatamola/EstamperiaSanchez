<?php
session_start();
class Autenticador
{
  private $validador;
  private $baseDeDatos;

  function __construct(){
    $this->baseDeDatos = new BaseDeDatos();
    $this->validador = new Validacion();
  }

  public function loguear($datos){
    if($this->validator->validarLogueo($datos)){
      $cunsultaUsuario = $this->BaseDeDatos->consultarUsuario($datos['userMail'], $datos['userPass']);
      if (empty($consultaUsuario)) {
        echo "Usuario no válido";
      }else {
        $_SESSION['email'] = $email;
      }
    }
  }

  public function registrar($datos){
    if($this->validador->validarRegistro($datos)){
      $this->baseDeDatos->agregarUsuario($datos);
      header('location:registrarUsuarioOK.php?us='.$datos['userName'].'&&g='.$datos['userGender'].'');

    }
  }
  public function getValidacion(){
    return $this->validador;
  }

}
