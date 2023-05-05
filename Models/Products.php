<?php
// Define a class called "Category"
class Products{

    public $name;
    public $price;

    public function __construct(string $_name,int $_price){

        $this->name = $_name;
        $this->price = $_price;
    }

    public function getProducts(){
        return $this->name . "<br/>" . $this->price;
    }  
}

?>