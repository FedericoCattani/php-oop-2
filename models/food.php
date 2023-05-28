<?php

require_once __DIR__ . '/product.php';

class Food extends product
{
  public $weight;
  public $ingredients;

  public function __construct(
    String $_name,
    Float $_price,
    String $_image,
    Category $_category,
    String $_weight,
    array $_ingredients
  ) {
    parent::__construct($_name, $_price, $_image, $_category);

    $this->weight = $_weight;
    $this->ingredients = $_ingredients;
  }
}
