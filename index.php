<?php
require_once __DIR__ . "/Database/products_db.php";
require_once __DIR__ . "/Models/Category.php";
require_once __DIR__ . "/Models/Product.php";
require_once __DIR__ . "/Models/Food.php";
require_once __DIR__ . "/Models/Game.php";
require_once __DIR__ . "/Models/Kennel.php";
require_once __DIR__ . "/Models/Customer.php";
require_once __DIR__ . "/Models/Cart.php";

require_once __DIR__ . "/Views/Layout/head.php";

// Test gueat user
$guest = new Customer("Test", "Cognome", "testtest@hotmail.com");
$guest->cart = new Cart();
$guest->cart->add($products_db[1]);

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

<body>
    <header>
        <nav class="navbar navbar-light bg-light justify-content-between mb-3">
            <a class="navbar-brand ms-3">PetShop</a>
            <form class="form-inline">
                <button class="btn btn-outline-success my-2 my-sm-0 me-3" type="submit">Login</button>
            </form>
        </nav>
    </header>
    <div class="container">
        <div class="row row-cols-3">

            <?php foreach ($products_db as $product) { ?>
                <div class="col">
                    <div class="card">
                        <img class="card-img-top" src="<?php echo $product->image ?>" alt="Card image cap">
                        <div class="card-body">


                            <div class="row">
                                <div class="col-8">
                                    <h5 class="card-title"><?php echo $product->name ?></h5>
                                    <h6><?php echo "Marca: $product->brand " ?></h6>
                                    <h6><?php echo "Tipologia: " . get_class($product) ?></h6>
                                </div>
                                <div class="col-4">
                                    <p>Prezzo:</p>
                                    <p><?php echo $product->price ?></p>
                                </div>

                            </div>
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
                            <a href="#" class="btn btn-primary">Aggiungi al carrello</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <?php
    require_once __DIR__ . "/Views/Layout/footer.php"
    ?>