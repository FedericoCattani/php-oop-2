<?php

require_once __DIR__ . '/product.php';

class Accessory extends product
{
  public $material;
  public $size;

  public function __construct(
    String $_name,
    Float $_price,
    String $_image,
    Category $_category,
    String $_material,
    String $_size
  ) {
    parent::__construct($_name, $_price, $_image, $_category);

    $this->material = $_material;
    $this->size = $_size;
  }
}
