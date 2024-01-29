<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
  public $ingridients;
  public $fats;
  public $carbs;
  public $proteins;

  public function __construct($ingridients , $_fats , $_carbs , $_proteins){
    parent::__construct()
    $this->ingridients = $_ingridients;
    $this->fats = $_fats;
    $this->carbs = $_carbs;
    $this->proteins = $_proteins;
  }

  public function getCals(){
    return ($this->$fats * 9) + (($this->$carbs + $this->$proteins) * 4);
  }
}