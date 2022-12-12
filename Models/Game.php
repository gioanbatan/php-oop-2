<?php

/**  Class Games for pet
 *Subclass of Product
 *   @author Giovanni Bassani    
 */
class Game extends Product
{
    public $size_cm;
    public $material;
    public $sound;

    public function __construct(String $name, String $brand, String $code, float $price, Category $category, string $size_cm, string $material, string $sound)
    {
        parent::__construct($name, $brand, $code, $price, $category);
        $this->size_cm = $size_cm;
        $this->material = $material;
        $this->sound = $sound;
    }
}
