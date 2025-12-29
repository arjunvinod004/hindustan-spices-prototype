<?php
include 'components/header.php';
?>

<main id="main-content">
<section class="checkout-section">
    <!-- Main Content -->
    <div class="checkout-container">
        <div class="row">
            <!-- Left Column - Forms -->
            <div class="col-lg-7">
                <!-- Shipping Information -->
                <div class="checkout-card">
                    <h2 class="section-title">
                        <i class="fas fa-shipping-fast"></i>
                        Shipping Information
                    </h2>
                    <form>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">First Name </label>
                                    <input type="text" class="form-control" placeholder="John" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Last Name </label>
                                    <input type="text" class="form-control" placeholder="Doe" required>
                                </div>
                            </div>
                        </div>

                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Email</label>
                                    <input type="text" class="form-control" placeholder="John" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Phone No </label>
                                    <input type="tel" class="form-control" placeholder="1234567890" required>
                                </div>
                            </div>
                        </div>



                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">Pincode</label>
                                    <input type="text" class="form-control" placeholder="12345" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                             <div class="form-group">
                                    <label class="form-label">City </label>
                                    <input type="text" class="form-control" placeholder="New York" required>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">

                                  <label class="form-label">Country </label>
                                    <select class="form-select" required>
                                        <option value="">Select Country</option>
                                        <option value="ind" selected>India</option>
                                        <option value="ca">Canada</option>
                                        <option value="uk">United Kingdom</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-label">State </label>
                                    <select class="form-select" required>
                                        <option value="">Select State</option>
                                        <option value="ker" selected>Kerala</option>
                                        <option value="tn">Tamilnadu</option>
                                        <option value="Maharashtra">Maharashtra</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                         <div class="form-group">
                            <label class="form-label">Street Address </label>
                            <input type="text" class="form-control" placeholder="123 Main Street" required>
                        </div>


                    </form>
                </div>

            </div>

            <!-- Right Column - Order Summary -->
            <div class="col-lg-5">
                <div class="checkout-card order-summary">
                    <h2 class="section-title">
                        <i class="fas fa-shopping-bag"></i>
                        Order Summary
                    </h2>

                    <div class="promo-code">
                        <input type="text" class="form-control" placeholder="Enter Coupon Code">
                        <button class="btn-apply">Apply</button>
                    </div>

                    <!-- Cart Items -->
                    <div class="cart-item">
                        <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Product" class="cart-item-image">
                        <div class="cart-item-details">
                            <div class="cart-item-name">Curry Leaf</div>
                            <div class="cart-item-price">₹12.99</div>
                            <div class="cart-item-quantity">

                                <span>2</span>

                            </div>
                        </div>
                        <div style="font-weight: 600;">₹25.98</div>
                    </div>

                    <div class="cart-item">
                        <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-1-298x298.jpg" alt="Product" class="cart-item-image">
                        <div class="cart-item-details">
                            <div class="cart-item-name">Sarvasugandhi</div>
                            <div class="cart-item-price">₹15.99</div>
                            <div class="cart-item-quantity">

                                <span>1</span>

                            </div>
                        </div>
                        <div style="font-weight: 600;">₹15.99</div>
                    </div>

                    <div class="cart-item">
                        <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" alt="Product" class="cart-item-image">
                        <div class="cart-item-details">
                            <div class="cart-item-name">Pepper Mint</div>
                            <div class="cart-item-price">₹9.99</div>
                            <div class="cart-item-quantity">

                                <span>3</span>

                            </div>
                        </div>
                        <div style="font-weight: 600;">₹29.97</div>
                    </div>



                    <!-- Summary -->
                    <div class="summary-row">
                        <span>Subtotal</span>
                        <span>₹71.94</span>
                    </div>
                    <div class="summary-row">
                        <span>Shipping</span>
                        <span>₹5.00</span>
                    </div>

                    <div class="summary-row">
                        <span style="color: #4CAF50;">Discount</span>
                        <span style="color: #4CAF50;">-₹10.00</span>
                    </div>
                    <div class="summary-row total">
                        <span>Total</span>
                        <span>₹66.94</span>
                    </div>

                    <button class="btn-checkout mt-3">
                        <i class="fas fa-lock me-2"></i>Place Order
                    </button>

                </div>
            </div>
        </div>
    </div>
</section>
</main>
    <?php
include 'components/footer.php';
?>