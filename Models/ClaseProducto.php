<?php
abstract class Producto{
    private $modelo;
    private $color;
    private $precio;
    private $foto;


    public function __construct()
    {

    }

    public function getModelo()
    {
        return $this->modelo;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getFoto()
    {
        return $this->foto;
    }
    public function setModelo($inputModelo)
    {
        $this->modelo = $inputModelo;
    }
    public function setColor($inputColor)
    {
        $this->color = $inputColor;
    }
    public function setFoto($inputFoto)
    {
        $this->foto = $inputFoto;
    }

}