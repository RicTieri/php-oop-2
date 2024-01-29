<?php

class Category {
  public $name;
  public $imageUrl;
  
  /**
   * function to generate new Genre object
   */
  public function __construct(string $_name, string $_imageUrl = null){
    $this->name = $_name;
    $this->imageUrl = $_imageUrl;
  }

}