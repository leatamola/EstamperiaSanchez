<?php
class Compra{
    private $carrito;
    private $modoPago;
    private $fecha;

    public function __construct(Carrito $carrito, $modoPago)
    {
      $this->modoPago = $modoPago;
      $this->carrito = $carrito;
    }
