<?php

trait productBase{
  public $name;
  public $price;
  public $isAvailable;
  public $sale;

  public function getPrice(){
      return ($this->price * $this->sale)/100;
}
}