<?php

/** 
 * Class Category of product
 * @author Giovanni Bassani
 */
class Category
{
    public $category;

    /**
     * Description
     * @param {string} Category type
     * @returns {any}
     * 
     */
    function __construct(String $category)
    {
        $this->category = $category;
    }
}
