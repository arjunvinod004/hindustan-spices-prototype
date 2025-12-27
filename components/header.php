<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spices</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <?php
$current_page = basename($_SERVER["PHP_SELF"], ".php");

// Page-specific assets
$page_assets = [
    "index" => [
        "css" => ["assets/css/home.css"],
        "js"  => ["assets/js/home.js"]
    ],
    "index1" => [
        "css" => ["assets/css/home1.css"],
        "js"  => ["assets/js/home.js"]
    ],
    "product_single" => [
        "css" => ["assets/css/product_single.css"],
        "js"  => ["assets/js/product_single.js"]
    ],

    "checkout" => [
        "css" => ["assets/css/checkout.css"],
        "js"  => ["assets/js/checkout.js"]
    ],
    "cart" => [
        "css" => ["assets/css/cart.css"],
        "js"  => ["assets/js/cart.js"]
    ],
    "garden" => [
        "css" => ["assets/css/garden.css"],
        "js"  => ["assets/js/garden.js"]
    ],
    "contact" => [
        "css" => ["assets/css/contact.css"],
        "js"  => ["assets/js/contact.js"]
]
];
?>

<?php
if (!empty($page_assets[$current_page]["css"])) {
    foreach ($page_assets[$current_page]["css"] as $css) {
        echo '<link rel="stylesheet" href="'.$css.'">'."\n";
    }
}
?>

</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><img width="80" src="hindustan-spices-prototype/../assets/images/hindustan_logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <!-- <li class="nav-item"><a class="nav-link" href="index1.php">Home 1</a></li> -->
                    <li class="nav-item"><a class="nav-link" href="#">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="garden.php">Garden</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>
                <div class="search-bar me-3">
                    <i class="fas fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search...">
                </div>
                <div class="d-flex align-items-center nav-items">

                      <div class="cart-icon mx-3">
                        <a class="navbars" href="login.html"><i class="fa-solid fa-user"></i></a>

                    </div>
                    <div class="cart-icon me-3">

                        <i class="fa-solid fa-heart"></i>
                        <span class="cart-badge">0</span>
                    </div>
                    <div class="cart-icon">
                        <a href="cart.php">
                        <i class="fas fa-shopping-cart fa-lg"></i>
                        <span class="cart-badge">0</span>
                        </a>

                    </div>

                </div>
            </div>
        </div>
</nav>

