<?php

require_once __DIR__ . '/Product.php';

class Food extends Product{
  public $ingredients;
  public $fats;
  public $carbs;
  public $proteins;

  public function __construct(string $_name, float $_price, bool $_isAvailable, Category $_category, string $_description, int $_pieceLeft, string $_imageUrl, int $sale, array $_ingredients, int $_fats, int $_carbs, int $_proteins){
    parent::__construct( $_name,  $_price,  $_isAvailable,  $_category,  $_description,  $_pieceLeft,  $_imageUrl,  $sale);
    $this->ingredients = $_ingredients;
    $this->fats = $_fats;
    $this->carbs = $_carbs;
    $this->proteins = $_proteins;
  }

  public function getInfo() {
    echo '<p>Ingredienti:</p><ul>';
    foreach ($this->ingredients as $ingredient) {
        echo '<li>' . $ingredient . '</li>';
    }
    echo '</ul><p>Valori Nutrizionali</p>';
    echo "<ul><li>Grassi: {$this->fats}g</li><li>Carboidrati: {$this->carbs}g</li><li>Proteine: {$this->proteins}g</li></ul>";
    echo 'Totale Cal: ' . (($this->fats * 9) + (($this->carbs + $this->proteins) * 4));
}
}