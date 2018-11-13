<?php

class Autenticador
{
  private $validador;
  private $baseDeDatos;
  public $errorLogueo = "SOy un error MOSTRAME";

  function __construct(){
    $this->baseDeDatos = new BaseDeDatos();
    $this->validador = new Validacion();
    session_start();
  }

  public function loguear($datos){
    if($this->validador->validarLogueo($datos)){
      $consultaUsuario = $this->baseDeDatos->consultarUsuario($datos['userMail'], $datos['userPass']);
      if(empty($consultaUsuario)) {
        $this->errorLogueo = "EL usuario no existe o la contraseña es inválida";
        echo "error 1";
      //  var_dump($consultaUsuario);
      }else {
        $this->errorLogueo = "INTENTO LOGUEAR EN SESION";
        $_SESSION['email'] = $datos['userMail'];
        echo "error 2";
        //header('location:userHome.php?us='.$datos['userMail']);
      }
    }else{
      $this->errorLogueo = "datos del form erroneos";
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
