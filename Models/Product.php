<?php

/** Class Product for pets 
 * @author Giovanni Bassani
 */
class Product
{
    public $name;
    public $brand;
    public $image;
    public $code;
    public $price;

    public function __construct(String $name, String $brand, String $image, String $code, float $price, Category $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->image = $image;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
    }
}
