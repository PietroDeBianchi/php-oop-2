<?php
// Define a class called "Category"
class Category {

    public $animals;

    public function __construct(string $_animals){
        $this->animals = $_animals;
    }
    
    
    public function getSpecies(){
        return $this->animals;
    }
    
}
?>