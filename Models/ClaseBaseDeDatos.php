<?php

class BaseDeDatos{

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

  public function consultarUsuario($email, $pass){
    $query=$this->conex->query("'SELECT Mail, Pass FROM usuarios WHERE'.$email. '= Mail AND'. $pass .'= Pass'");
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    return $usuario;
  }
  public function agregarUsuario($datos){
    try{
      $sqlInsert = 'INSERT INTO usuarios (Nombre, Tel, Mail, Pass, sexo) VALUES ( :Nombre, :Tel, :Mail, :Pass, :sexo)';
      $ins = $this->conex->prepare($sqlInsert);

      $ins->bindValue(':Nombre', $datos['userName']);
      $ins->bindValue(':Tel', $datos['userPhone']);
      $ins->bindValue(':Mail', $datos['userMail']);
      $ins->bindValue(':Pass', $datos['userPass']);
      $ins->bindValue(':sexo', $datos['userGender']);

      $ins->execute();
      //var_dump($ins);
    // header('location:registrarUsuarioOK.php?us='.$datos['userName'].'&&g='.$datos['userGender'].'');
    }
    catch( PDOException $error ){
    // echo 'Error con la BD, contacta con el administrador del sistema';
      echo 'El error es:'. $error->getMessage();
    }

  }
}



//var_dump(Conexion::usuario);
