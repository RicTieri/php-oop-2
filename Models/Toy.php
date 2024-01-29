<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
  public $material;
  public $dimension;

  public function __construct(string $_material, $_dimension){
    parent::__construct()
    $this->material = $_material;
    $this->dimension = $_dimension;
  }
}