<?php
class Carrito{
    private $productos = [];
    private $usuario;
    private $total = 0;

    public function __construct(Usuario $usuario)
    {
      $this->usuario = $usuario;

    }

}
