<?php
require_once __DIR__ . "/../Models/Category.php";
require_once __DIR__ . "/../Models/Product.php";
require_once __DIR__ . "/../Models/Food.php";
require_once __DIR__ . "/../Models/Game.php";
require_once __DIR__ . "/../Models/Kennel.php";


$products_db = [
    new Food("Crocchette", "Purina", "https://picsum.photos/300/200", "123xyf", 7.65, new Category("cane"), 1, ["pollo", "verdure"], "secco", "sacchetto"),
    new Game("Osso finto", "Canis", "https://picsum.photos/300/200", "2w23e3f", 11.99, new Category("cane"), "6 x 22", "gomma", "si"),
    new Kennel("Suite", "Miaos", "https://picsum.photos/300/200", "2wg2g3f", 65.99, new Category("gatto"), "50 x 60 x60", 1.20, "cotone e poliestere")
];

// Testing object
// $objectTest = new Product("Crocchette", "123xyf", 7.65, new Category("Cane"));
// var_dump($objectTest);

// $objectTest = new Food("crocchette", "Purina", "123xyf", 7.65, new Category("cane"), 1, ["pollo", "verdure"], "secco", "sacchetto");
// var_dump($objectTest);

// $objectTest = new Game("Osso finto", "Canis", "2w23e3f", 11.99, new Category("cane"), "6 x 22", "gomma", "si");
// var_dump($objectTest);

// $objectTest = new Kennel("Suite", "Canis", "2wg2g3f", 65.99, new Category("cane"), "50 x 60 x60", 1.20, "cotone e poliestere");
// var_dump($objectTest);