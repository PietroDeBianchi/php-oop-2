<?php
// Define a class called "Category"
class Category {

    public $animal;
    public $icon;

    public function __construct( String $_animal, String $_icon) {
        $this->animal = $_animal;
        $this->icon = $_icon;
    }

}
?>