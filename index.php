<?php
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Kennel.php";


/*
Product
+-> Name
    Code
    Price
    < Category


Category -> Subcategories:
            Food
            Game
            Kennel

BONUS
Customer

Cart

Account

CreditCard
*/


// Testing object
// $objectTest = new Product("Crocchette", "123xyf", 7.65, new Category("Cane"));
// var_dump($objectTest);

// $objectTest = new Food("crocchette", "Purina", "123xyf", 7.65, new Category("cane"), 1, ["pollo", "verdure"], "secco", "sacchetto");
// var_dump($objectTest);

// $objectTest = new Game("Osso finto", "Canis", "2w23e3f", 11.99, new Category("cane"), "6 x 22", "gomma", "si");
// var_dump($objectTest);

$objectTest = new Kennel("Suite", "Canis", "2wg2g3f", 65.99, new Category("cane"), "50 x 60 x60", 1.20, "cotone e poliestere");
var_dump($objectTest);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">


    <title>PHP OOP 2</title>
</head>

<body>
    <?php
    echo "Hello";
    ?>
</body>

</html>