<?php
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";

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
$objectTest = new Product("Crocchette", "123xyf", 7.65, new Category("Cane"));
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