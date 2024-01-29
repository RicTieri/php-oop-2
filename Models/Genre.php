<?php

class Genre {
  public $firstGenre;
  public $secondGenre;
  public $thirdGenre;
  
  /**
   * function to generate new Genre object
   */
  public function __construct(string $_firstGenre, string $_secondGenre = null, string $_thirdGenre = null){
    $this->firstGenre = $_firstGenre;
    $this->secondGenre = $_secondGenre;
    $this->thirdGenre = $_thirdGenre;
  }

}