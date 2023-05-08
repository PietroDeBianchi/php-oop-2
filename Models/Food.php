<?php
// Connect models
require_once  __DIR__ . '/Products.php';
require_once  __DIR__ . '/Category.php';
// Create an extended class for Products's Class
class Food extends Products
{
    public $calories;

    public function __construct(string $name, float $price, Category $category, int $calories)
    {
        $this->calories = $calories;
        parent::__construct($name, $price, $category);
    }

    // Create a function  to call class name
    public function getClass()
    {
        return get_class();
    }
}
