<?php

class Product {
  public $name;
  public $price;
  public $isAvailable;
  public $category;
  public $description;
  public $pieceLeft;
  public $imageUrl;
  
  /**
   * function to generate new Movie object
   */
  public function __construct(string $_name, float $_price, bool $_isAvailable, Category $_category, string $_description, int $_pieceLeft, string $_imageUrl){
    $this->name = $_name;
    $this->price = $_price;
    $this->isAvailable = $_isAvailable;
    $this->category = $_category;
    $this->description = $_description;
    $this->pieceLeft = $_pieceLeft;
    $this->imageUrl = $_imageUrl;
  }

}