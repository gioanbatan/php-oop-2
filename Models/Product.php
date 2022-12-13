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

    public function __construct(String $name, String $brand, String $image, String $code, $price, Category $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->image = $image;
        $this->code = $code;
        if (is_numeric($price)) {
            echo "ECCO";
            $this->price = $price;
        } else {
            echo "OCCE";
            throw new Exception("Il prezzo deve essere un valore numerico corretto!");
        }
        $this->category = $category;
    }
}
