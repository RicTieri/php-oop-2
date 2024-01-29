<?php

require_once __DIR__ . '/Product.php';

class Kennel extends Product{
  public $data;

  public function __construct($_data){
    parent::__construct()
    $this->data = $_data;
  }
}