<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
  public $material;
  public $dimension;

  public function __construct(string $_name, float $_price, bool $_isAvailable, Category $_category, string $_description, int $_pieceLeft, string $_imageUrl,  int $sale, string $_material, string $_dimension){
    parent::__construct( $_name,  $_price,  $_isAvailable,  $_category,  $_description,  $_pieceLeft,  $_imageUrl,  $sale);
    $this->material = $_material;
    $this->dimension = $_dimension;
  }

  public function getInfo(){
    return 'Oggetto in: '.$this->material .'<br> Size: '. $this->dimension;
  }
} 