<?php

require_once __DIR__ . '/Product.php';

class Toy extends Product{
  public $data;

  public function __construct($_data){
    parent::__construct()
    $this->data = $_data;
  }
}