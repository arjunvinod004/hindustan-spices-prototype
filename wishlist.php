<!-- Header -->
<?php
include 'components/header.php';
?>

<!-- section -->

<section class="cart-section">
<div class="container">
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-12">
                <div class="cart-card">
                    <div class="d-flex justify-content-between align-items-center mb-3 wishlist">
                        <h3 style="margin: 0; font-weight: 600;">Wishlist(1)</h3>
                        <a href="index.php" class="btn-continue">
                            <i class="fas fa-arrow-left"></i>
                            Continue Shopping
                        </a>
                    </div>

                    <table class="cart-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th style="text-align: center;">Price</th>
                                <th style="text-align: center;">Quantity</th>
                                <th style="text-align: center;">Total</th>
                                <th style="text-align: center;">Actions</th>
                            </tr>
                        </thead>
                        <tbody id="cartItems">
                            <tr class="cart-item-row">
                                <td>
                                    <div class="product-info">
                                        <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Product" class="product-image">
                                        <div class="product-details">
                                            <h5>Curry Leaf</h5>
                                          
                                            <span class="badge bg-success">In Stock</span>
                                        
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="product-price">₹12.99</div>
                                </td>
                                <td>
                                    <div class="quantity-control">
                                    <span class="quantity-value" id="quantity-value">2</span>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="product-price item-total">₹25.98</div>
                                </td>
                                <td style="text-align: center;">
                                  <div>
                   <a href="cart.php" class="btn-checkout" >
                        <i class="fa-solid fa-cart-arrow-down me-2"></i>Add to Cart
                    </a>

                  </div>
                                </td>
                            </tr>

                           

                          
                        </tbody>
                    </table>
                </div>
            </div>


        </div>
    </div>
</section>

<!-- Footer -->
<?php
include 'components/footer.php';
?>