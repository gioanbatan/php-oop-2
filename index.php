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

// Test guest user
$guest = new Customer("Test", "Cognome", "testtest@hotmail.com");
$guest->cart = new Cart();
$guest->cart->add($products_db[1]);
$guest->cart->add($products_db[2]);
var_dump($guest->cart->getTotal());
// $guest->cart->empty();
var_dump($guest->cart->getTotal());

$productList = $guest->cart->getList();
if (!empty($productList)) {
    foreach ($productList as $key => $product) {
        echo "$key: $product <br>";
    }
} else {
    echo "Il carrello è vuoto!";
}

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
                                    <p><?php echo $product->price ?> €</p>
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