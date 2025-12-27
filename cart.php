<!-- header -->
<?php
include 'components/header.php';
?>

<!-- section -->
<main id="main-content">
<section class="cart-section">
<div class="cart-container">
        <div class="row">
            <!-- Cart Items -->
            <div class="col-lg-8">
                <div class="cart-card">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 style="margin: 0; font-weight: 600;">Cart Items (4)</h3>
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
                                <th></th>
                            </tr>
                        </thead>
                        <tbody id="cartItems">
                            <tr class="cart-item-row">
                                <td>
                                    <div class="product-info">
                                        <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Product" class="product-image">
                                        <div class="product-details">
                                            <h5>Curry Leaf</h5>
                                            <p>Fresh organic curry leaves</p>
                                            <span class="badge bg-success">In Stock</span>
                                        </div>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="product-price">₹12.99</div>
                                </td>
                                <td>
                                    <div class="quantity-control">
                                        <button id="decreaseQty" class="quantity-btn" >-</button>
                                        <span class="quantity-value" id="quantity-value">2</span>
                                        <button id="increaseQty" class="quantity-btn">+</button>
                                    </div>
                                </td>
                                <td style="text-align: center;">
                                    <div class="product-price item-total">₹25.98</div>
                                </td>
                                <td style="text-align: center;">
                                    <i class="fas fa-trash remove-btn"></i>
                                </td>
                            </tr>




                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Cart Summary -->
            <div class="col-lg-4">
                <div class="cart-summary">
                    <h3 class="summary-title">Order Summary</h3>

                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span id="subtotal">₹90.93</span>
                    </div>

                    <div class="summary-row total">
                        <span>Total</span>
                        <span id="total">₹90.93</span>
                    </div>

                  <div>
                   <a href="checkout.php" class="btn-checkout" >
                        <i class="fas fa-shipping-fast me-2"></i>Proceed to Checkout
                    </a>

                  </div>



                </div>
            </div>
        </div>
    </div>
</section>
</main>

<!-- footer -->
<?php
include 'components/footer.php';
?>



