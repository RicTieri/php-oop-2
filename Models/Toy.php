<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
  public $material;
  public $dimension;

  public function __construct(string $_material, $_dimension){
    parent::__construct(string $_name, float $_price, bool $_isAvailable , Category $_category, string $_description, int $_pieceLeft, string $_imageUrl);
    $this->material = $_material;
    $this->dimension = $_dimension;
  }
}