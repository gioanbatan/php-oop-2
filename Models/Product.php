<?php
class Product
{
    public $name;
    public $code;
    public $price;

    public function __construct(String $name, String $code, float $price, Category $category)
    {
        $this->name = $name;
        $this->code = $code;
        $this->price = $price;
        $this->category = $category;
    }
}
