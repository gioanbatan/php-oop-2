<?php
require_once __DIR__ . "/Database/products_db.php";
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

// $objectTest = new Kennel("Suite", "Canis", "2wg2g3f", 65.99, new Category("cane"), "50 x 60 x60", 1.20, "cotone e poliestere");
// var_dump($objectTest);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <!-- FontAwesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>PHP OOP 2</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center mb-3">PetShop</h1>

        <div class="row row-cols-3">

            <?php foreach ($products_db as $product) { ?>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $product->image ?>" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $product->name ?></h5>
                            <h6><?php echo get_class($product) ?></h6>
                            <h6><?php echo $product->brand ?></h6>
                            <hr>
                            <p class="card-text">
                                <?php
                                if ($product->category->category === "cane") {
                                    echo '<i class="fa-solid fa-dog"></i>';
                                } else if ($product->category->category === "gatto") {
                                    echo '<i class="fa-solid fa-cat"></i>';
                                } else {
                                    echo '<i class="fa-solid fa-paw"></i>';
                                }
                                ?>
                                <span class="d-inline-block ms-2"><?php echo ucfirst($product->category->category); ?></span>
                            </p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

</body>

</html>