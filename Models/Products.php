<?php

require_once  __DIR__ . '/Category.php';

// Define a class called "Products"
class Products {

    public $animal;
    public $price;
    public $description;
    public $weight;
    public $category;

    public function __construct( String $_animal, float $_price, Category $_category) 
    {
        $this->animal = $_animal;
        $this->price = $_price;
        $this->category = $_category;
    }

    public function getProducts() 
    {
        return [
            'Animal' => $this->animal, 
            'Description' => $this->description, 
            'Category' => $this->category, 
            'price' => $this->price
        ];
    }
}

?>

