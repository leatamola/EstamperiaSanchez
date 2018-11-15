<?php
class Usuario{
    private $nombre;
    private $pass;
    private $email;
    private $telefono;
    private $direccion;
    private $historialCompra = [];

    public function __construct($nombre, $email)
    {
      $this->nombre = $nombre;
      //$this->pass = $pass;
      $this->email = $email;
      //$this->tel = $tel;
      //$this->direccion = $dire;
      //$this->historialCompra = [];
    }

    public function getNombre()
    {
        return $this->nombre;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    public function getDireccion()
    {
        return $this->direccion;
    }

    public function setNombre($inputUsuario)
    {
        $this->modelo = $inputUsuario;
    }
    public function setPass($inputPass)
    {
        $this->pass = $inputPass;
    }
    public function setEmail($inputEmail)
    {
        $this->email = $inputEmail;
    }
    public function setDireccion(Direccion $inputDireccion)
    {
        $this->direccion = $inputEmail;
    }
    public function setTelefono($inputTelefono)
    {
        $this->telefono = $inputTelefono;
    }
    public function agregarCompra(Compra $compra)
    {
       $this->historialCompra[] = $compra;
    }


}
