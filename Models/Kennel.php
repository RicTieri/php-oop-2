<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product{
  public $lenght;
  public $depth;
  public $height;

  public function __construct(string $_name, float $_price, bool $_isAvailable, Category $_category, string $_description, int $_pieceLeft, string $_imageUrl, int $sale, string $_lenght, string $_depth, string $_height){
    parent::__construct( $_name,  $_price,  $_isAvailable,  $_category,  $_description,  $_pieceLeft,  $_imageUrl,  $sale);
    $this->lenght = $_lenght;
    $this->depth = $_depth;
    $this->height = $_height;
  }

  public function getInfo(){
    return 'Dimensioni: '.$this->lenght .'w x '. $this->height . 'h x ' . $this->depth . 'd cm ';
  }
}