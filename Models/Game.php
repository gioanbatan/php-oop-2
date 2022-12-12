<?php

/**  Class Games for pet
 *Subclass of Product
 *   @author Giovanni Bassani    
 */
class Game extends Product
{
    public $size;
    public $material;
    public $sound;

    public function __construct(String $name, String $brand, String $code, float $price, Category $category, string $size, string $material, string $sound)
    {
        parent::__construct($name, $brand, $code, $price, $category);
        $this->size = $size;
        $this->material = $material;
        $this->sound = $sound;
    }
}
