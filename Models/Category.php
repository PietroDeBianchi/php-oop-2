<?php
// Define a class called "Animals"
class Animals {
    // Define public properties for the movie
    public $cat;
    public $dog;
    public $rabbit;

    // Define a constructor function that accepts arguments for the movie's properties and sets them on the object
    public function __construct(string $cat, string $dog, string $rabbit) {
        $this->cat = $cat;
        $this->dog = $dog;
        $this->rabbit = $rabbit;
    }
}
?>