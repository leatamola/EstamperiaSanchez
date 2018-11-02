<?php
session_start();
class Authenticador
{

  private $BaseDeDatos;


  public function loguear($email, $pass){
    $cunsultaUsuario = $this->BaseDeDatos->consultarUsuario($email, $pass);
    if (empty($consultaUsuario)) {
      echo "Usuario Incorrecto";
    }else {
      $_SESSION['email'] = $email;
    }

  }


  function __construct(){
    $this->BaseDeDatos = new BaseDeDatos();
  }
}
