<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- SEO Title -->
    <title>Hindustan Spices | Premium Indian Spices & Masala Online</title>
    <!-- Meta Description -->
    <meta name="description" content="Buy premium quality Indian spices and masalas from Hindustan Spices. 100% natural, aromatic, and fresh spices delivered to your doorstep.">
    <!-- Canonical -->
    <link rel="canonical" href="https://coinoneglobal.com/hindustan-spices-prototype/">
    <!-- Favicon -->
    <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">
    <!-- Preconnect (Performance Boost) -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- Open Graph -->
    <meta property="og:title" content="Hindustan Spices – Premium Indian Spices">
    <meta property="og:description" content="Authentic Indian spices & masalas. Fresh, pure, and aromatic.">
    <meta property="og:image" content="https://coinoneglobal.com/assets/images/og-image.jpg">
    <meta property="og:url" content="https://coinoneglobal.com/hindustan-spices-prototype/">
    <meta property="og:type" content="website">

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
    ],
    "wishlist" => [
        "css" => ["assets/css/wishlist.css"],
        "js"  => ["assets/js/wishlist.js"]
    ],
    "shop" => [
        "css" => ["assets/css/shop.css"],
        "js"  => ["assets/js/shop.js"]
    ],
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
    <!-- Sticky Navigation -->
    <nav class="navbar navbar-expand-lg" id="mainNav">
        <div class="container">
            <!-- Logo -->
            <a class="navbar-brand" href="index.php">
                <img src="http://localhost/hindustan-spices-prototype/assets/images/hindustan_logo.png" alt="Hindustan Spices">
            </a>

            <!-- Collapsible Menu -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto me-4">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="shop.php">Shop</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="garden.php">Garden</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact</a></li>
                </ul>

                <!-- Desktop Search Bar -->
                <div class="search-bar-desktop d-none d-lg-flex">
                    <input type="text" placeholder="Search products...">
                    <i class="fas fa-search"></i>
                </div>
            </div>

            <!-- Right Side Container: Icons + Search + Toggle -->
            <div class="right-side-container">
                <!-- User, Wishlist, Cart Icons (Always Visible) -->
                <div class="nav-icons">
                    <!-- User Icon -->
                    <div class="icon-wrapper">
                        <a href="login.html">
                            <i class="fa-solid fa-user"></i>
                        </a>
                    </div>

                    <!-- Wishlist Icon -->
                    <div class="icon-wrapper">
                    <a href="wishlist.php">
                            <i class="fa-solid fa-heart"></i>
                            <span class="badge-count">5</span>
                    </a>

                    </div>

                    <!-- Cart Icon -->
                    <div class="icon-wrapper">
                        <a href="cart.php">
                            <i class="fas fa-shopping-cart"></i>
                            <span class="badge-count">5</span>
                        </a>
                    </div>
                </div>

                <!-- Mobile Search Toggle -->
                <div class="icon-wrapper mobile-search-toggle d-lg-none" id="mobileSearchToggle">
                    <i class="fas fa-search"></i>
                </div>

                <!-- Menu Toggle Button -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>


        </div>

        <!-- Mobile Search Bar (Dropdown) -->
        <div class="mobile-search-bar" id="mobileSearchBar">
            <input type="text" placeholder="Search products...">
        </div>
    </nav>

