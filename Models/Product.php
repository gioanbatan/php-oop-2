<?php
class Product
{
    public $name;
    public $brand;
    public $code;
    public $price;

    public function __construct(String $name, String $brand, String $code, float $price, Category $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
    }
}
