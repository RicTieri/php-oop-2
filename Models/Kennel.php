<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product{
  public $lenght;
  public $depth;
  public $height;

  public function __construct(string $_lenght, string $_depth, string $_height){
    parent::__construct( $_name,  $_price,  $_isAvailable,   $_category,  $_description,  $_pieceLeft,  $_imageUrl);
    $this->lenght = $_lenght;
    $this->depth = $_depth;
    $this->height = $_height;
  }

  public function getSize(){
    return $this->$lenght .'w x '. $this->$height . 'h x ' . $this->$depth . 'd cm ';
  }
}