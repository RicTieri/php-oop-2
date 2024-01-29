<?php

class Genre {
  public $firstGenre;
  public $imageUrl;
  
  /**
   * function to generate new Genre object
   */
  public function __construct(string $_firstGenre, string $_imageUrl = null){
    $this->firstGenre = $_firstGenre;
    $this->imageUrl = $_imageUrl;
  }

}