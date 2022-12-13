<?php
require_once __DIR__ . "/../Traits/Test.php";

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

    use Test;

    public function __construct(String $name, String $brand, String $image, String $code, $price, Category $category)
    {
        $this->name = $name;
        $this->brand = $brand;
        $this->image = $image;
        $this->code = $code;
        if (is_numeric($price)) {
            $this->price = $price;
            $this->setText("TRAIT->");
            echo $this->getText();
        } else {
            throw new Exception("Il prezzo deve essere un valore numerico corretto!");
        }
        $this->category = $category;
    }
}
