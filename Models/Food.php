<?php

class Food extends Product
{
    public $weight_kg;
    public $ingredients;
    public $consistency;
    public $package;

    public function __construct(String $name, String $brand, String $code, float $price, Category $category, float $weight_kg, array $ingredients, string $consistency, string $package)
    {
        parent::__construct($name, $brand, $code, $price, $category);
        $this->weight_kg = $weight_kg;
        $this->ingredients = $ingredients;
        $this->consistency = $consistency;
        $this->package = $package;
    }
}
