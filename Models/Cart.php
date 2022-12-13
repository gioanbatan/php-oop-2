<?php
require_once __DIR__ . "/./Product.php";

/** Class of shopping cart
 * @author Giovanni Bassani
 */
class Cart
{
    private $products = [];

    //Add product to cart
    public function add(Product $product)
    {
        $this->products[] = $product;
        var_dump($this->products);
    }

    //Remove single product from cart
    //To fix (remove item via name, but if are > 1?):
    public function rem(Product $product)
    {
        array_splice($this->products, array_search($product, $this->products), 1);
    }

    //Empty cart
    public function empty()
    {
        $this->products = [];
    }

    //Get sum of prices
    public function getTotal()
    {
        $sum = 0;
        foreach ($this->products as $product) {
            $sum += $product->price;
        }
        return $sum;
    }

    //Get products list
    public function getList()
    {
        $productListArray = [];
        foreach ($this->products as $product) {
            $productListArray[] = $product->name;
        }
        return $productListArray;
    }
}
