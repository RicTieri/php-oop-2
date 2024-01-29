<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
  public $material;
  public $dimension;

  public function __construct(string $_material, string $_dimension){
    parent::__construct( $_name,  $_price,  $_isAvailable ,   $_category,  $_description,  $_pieceLeft,  $_imageUrl);
    $this->material = $_material;
    $this->dimension = $_dimension;
  }
} 