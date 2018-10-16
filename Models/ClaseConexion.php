<?php

class Conexion{

  private const usuario='root';
  private const pass='root';
  private const dsn = 'mysql:host=localhost;dbname=EstamperiaSanchez;port=3306';
  private const opt = [ PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION ];
  public $conex;

  public function __construct()
  {
    try{
    //me conecto a la BD
      $this->conex = new PDO(self::dsn, self::usuario, self::pass, self::opt);
    }catch( PDOException $error ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
      echo 'El error es:'. $error->getMessage();
    }
  }

}

$conex = new Conexion();

//var_dump(Conexion::usuario);
