<?php

require_once  __DIR__ . '/Products.php';
require_once  __DIR__ . '/Category.php';
class Game extends Products
{
    public $material;

    public function __construct(string $name, float $price, Category $category, string $material)
    {
        $this->material = $material;
        parent::__construct($name, $price, $category);
    }
}
