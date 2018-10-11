<?php
class Direccion{
    private $calle;
    private $localidad;
    private $codigoPostal;
    private $altura;

    public function __construct($calle, $localidad, $codigoPostal, $altura)
    {
      $this->calle = $calle;
      $this->localidad = $localidad;
      $this->altura = $altura;
      $this->codigoPostal = $codigoPostal;
    }

    public function getCalle()
    {
        return $this->nombre;
    }
    public function getLocalidad()
    {
        return $this->email;
    }
    public function getCodigoPostal()
    {
        return $this->telefono;
    }
    public function getAltura()
    {
        return $this->altura;
    }

    public function setCalle($inputCalle)
    {
        $this->calle = $inputCalle;
    }
    public function setLocalidad($inputLocalidad)
    {
        $this->localidad = $inputLocalidad;
    }
    public function setCodigoPostal($inputCodigoPostal)
    {
        $this->codigoPostal = $inputCodigoPostal;
    }
    public function setaltura($inputaltura)
    {
        $this->altura = $inputAltura;
    }
}
