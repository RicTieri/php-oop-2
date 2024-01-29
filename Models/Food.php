<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
  public $ingridients;
  public $fats;
  public $carbs;
  public $proteins;

  public function __construct(array $ingridients, int $_fats, int $_carbs, int $_proteins){
    parent::__construct( $_name,  $_price,  $_isAvailable ,   $_category,  $_description,  $_pieceLeft,  $_imageUrl);
    $this->ingridients = $_ingridients;
    $this->fats = $_fats;
    $this->carbs = $_carbs;
    $this->proteins = $_proteins;
  }

  public function getCals(){
    return ($this->$fats * 9) + (($this->$carbs + $this->$proteins) * 4);
  }
}