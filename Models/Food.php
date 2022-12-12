<?php

/**  Class Food for pet
 *Subclass of Product
 *   @author Giovanni Bassani    
 */
class Food extends Product
{
    public $weight_kg;
    public $ingredients;
    public $consistency;
    public $package;

    public function __construct(String $name, String $brand, String $image, String $code, float $price, Category $category, float $weight_kg, array $ingredients, string $consistency, string $package)
    {
        parent::__construct($name, $brand, $image, $code, $price, $category);
        $this->weight_kg = $weight_kg;
        $this->ingredients = $ingredients;
        $this->consistency = $consistency;
        $this->package = $package;
    }
}
