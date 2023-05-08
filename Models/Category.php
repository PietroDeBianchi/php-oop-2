<?php

// Create Category's Class
class Category {

    public $name;
    public $icon;

    public function __construct(string $name, string $icon)
    {
        $this->name = $name;
        $this->icon = $icon;
    }

}
