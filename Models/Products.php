<?php

require_once  __DIR__ . '/Category.php';
class Products
{

    public $name;
    public $description;
    public $price;
    public $weight;
    public $category;
    public $image;

    public function __construct(string $name, float $price, Category $category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->category = $category;
    }

    public function getProduct()
    {
        return "Name: $this->name, Description: $this->description, Price: $this->price";
    }

    // public function setWeight(float $weight)
    // {
    //     $this->weight = $weight;
    // }

    // public function getWeight(float $weight)
    // {
    //     return $this->weight;
    // }
}
