<?php

/**  Class Kennel for pet
 *Subclass of Product
 *   @author Giovanni Bassani    
 */
class Kennel extends Product
{
    public $size_cm;
    public $weigth_kg;
    public $material;

    public function __construct(String $name, String $brand, String $image, String $code, float $price, Category $category, string $size_cm, float $weight_g, string $material)
    {
        parent::__construct($name, $brand, $image, $code, $price, $category);
        $this->size_cm = $size_cm;
        $this->weight_g = $weight_g;
        $this->material = $material;
    }
}
