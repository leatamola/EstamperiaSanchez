<?php
session_start();
class Authenticador
{
  private $validador;
  private $baseDeDatos;


  public function loguear($email, $pass){
    $cunsultaUsuario = $this->BaseDeDatos->consultarUsuario($email, $pass);
    if (empty($consultaUsuario)) {
      echo "Usuario Incorrecto";
    }else {
      $_SESSION['email'] = $email;
    }

  }

  public function registrar($datos){
    if($this->validador->validarRegistro($datos)){
      $this->baseDeDatos->agregarUsuario($datos);
    }
  }
  function __construct(){
    $this->baseDeDatos = new BaseDeDatos();
    $this->validador = new Validacion();
  }
}
