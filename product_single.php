<?php
include 'components/header.php';
?>
<main id="main-content">
    <!-- Success Message -->
    <div class="success-message" id="successMessage">
        <i class="fas fa-check-circle me-2"></i>
        <span id="messageText">Item added to cart!</span>
    </div>

    <!-- Breadcrumb -->
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Shop</a></li>
                <li class="breadcrumb-item"><a href="#">Spices</a></li>
                <li class="breadcrumb-item active" aria-current="page">Organic Turmeric Powder</li>
            </ol>
        </nav>
    </div>

    <!-- Product Section -->
    <section class="product-section">
        <div class="container">
            <div class="row">
                <!-- Product Gallery -->
                <div class="col-lg-6 mb-4">
                    <div class="product-gallery">
                        <!-- Main Image Slider -->
                        <div class="swiper main-image-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Turmeric-powder-1.jpg" a   lt="Turmeric Powder">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-8-298x298.jpg" alt="Turmeric Powder Detail">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Turmeric Powder Close-up">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" alt="Turmeric Powder Usage">
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>

                        <!-- Thumbnail Slider -->
                        <div class="swiper thumbnail-slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Turmeric-powder-1.jpg" alt="Thumbnail 1">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-8-298x298.jpg" alt="Thumbnail 2">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Thumbnail 3">
                                </div>
                                <div class="swiper-slide">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" alt="Thumbnail 4">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Product Info -->
                <div class="col-lg-6">
                    <div class="product-info">
                        <h1 class="product-title">Organic Turmeric Powder</h1>

                        <div class="product-rating">
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span class="rating-count">(4.5) 128 Reviews</span>
                        </div>

                        <p class="product-description">
                            Premium quality organic turmeric powder sourced directly from the finest farms in Kerala.
                            Known for its vibrant color, rich aroma, and high curcumin content. Perfect for cooking,
                            health remedies, and beauty treatments. 100% pure, no additives or preservatives.
                        </p>

                        <!-- Weight Variant -->
                        <div class="variant-section">
                            <label class="variant-label">Weight:</label>
                            <div class="variant-options">
                                <div class="variant-option" data-price="249" data-original="399" data-weight="100g">100g</div>
                                <div class="variant-option" data-price="449" data-original="699" data-weight="250g">250g</div>
                                <div class="variant-option active" data-price="799" data-original="1299" data-weight="500g">500g</div>
                                <div class="variant-option" data-price="1499" data-original="2499" data-weight="1kg">1kg</div>
                            </div>
                        </div>

                        <div class="d-flex align-items-center">
                            <span class="product-price" id="productPrice">₹249</span>
                            <span class="original-price" id="originalPrice">₹399</span>
                            <span class="discount-badge">38% OFF</span>
                        </div>

                        <!-- Type Variant -->
                        <!-- <div class="variant-section">
                            <label class="variant-label">Type:</label>
                            <div class="variant-options" id="typeOptions">
                                <div class="variant-option active" data-type="powder">Powder</div>
                                <div class="variant-option" data-type="whole">Whole Root</div>
                                <div class="variant-option" data-type="organic">Organic Certified</div>
                            </div>
                        </div> -->

                        <!-- Quantity Selector -->
                        <div class="quantity-selector">
                            <span class="quantity-label">Quantity:</span>
                            <div class="qty-controls">
                                <button class="qty-btn" id="decreaseQty">−</button>
                                <span class="qty-display" id="quantity">1</span>
                                <button class="qty-btn" id="increaseQty">+</button>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="action-buttons">
                            <a href="cart.php" class="btn-add-cart" id="addToCart">
                                <i class="fas fa-shopping-cart"></i>
                                Add to Cart
                            </a>
                            <button class="btn-wishlist" id="addToWishlist">
                                <i class="far fa-heart"></i>
                            </button>
                        </div>

                        <!-- Product Meta -->
                        <div class="product-meta">
                            <div class="meta-item">
                                <span class="meta-label">Availability:</span>
                                <span class="stock-status in-stock">In Stock</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">SKU:</span>
                                <span>TUR-ORG-500</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Category:</span>
                                <span>Spices, Organic Products</span>
                            </div>
                            <div class="meta-item">
                                <span class="meta-label">Tags:</span>
                                <span>Turmeric, Organic, Kerala Spices, Natural</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
    <?php
include 'components/footer.php';
?>
    <script>
        // Initialize Swiper for thumbnails first
        const thumbnailSwiper = new Swiper('.thumbnail-slider', {
            loop: true,
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesProgress: true,
        });

        // Initialize Swiper for main images
        const mainSwiper = new Swiper('.main-image-slider', {
            loop: true,
            spaceBetween: 10,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: thumbnailSwiper,
            },
        });

        // Quantity controls
        let quantity = 1;
        const qtyDisplay = document.getElementById('quantity');
        const decreaseBtn = document.getElementById('decreaseQty');
        const increaseBtn = document.getElementById('increaseQty');

        decreaseBtn.addEventListener('click', () => {
            if (quantity > 1) {
                quantity--;
                qtyDisplay.textContent = quantity;
            }
        });

        increaseBtn.addEventListener('click', () => {
            quantity++;
            qtyDisplay.textContent = quantity;
        });

        // Weight variant selection
        const weightOptions = document.querySelectorAll('.variant-section:first-of-type .variant-option');
        const productPrice = document.getElementById('productPrice');
        const originalPrice = document.getElementById('originalPrice');

        weightOptions.forEach(option => {
            option.addEventListener('click', function() {
                weightOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');

                const price = this.getAttribute('data-price');
                const original = this.getAttribute('data-original');

                productPrice.textContent = '₹' + price;
                originalPrice.textContent = '₹' + original;
            });
        });

        // Type variant selection
        const typeOptions = document.querySelectorAll('#typeOptions .variant-option');
        typeOptions.forEach(option => {
            option.addEventListener('click', function() {
                typeOptions.forEach(opt => opt.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // Add to Cart functionality
        let cartCount = 0;
        const addToCartBtn = document.getElementById('addToCart');
        const cartCountDisplay = document.getElementById('cartCount');
        const successMessage = document.getElementById('successMessage');
        const messageText = document.getElementById('messageText');

        addToCartBtn.addEventListener('click', () => {
            cartCount += quantity;
            cartCountDisplay.textContent = cartCount;

            messageText.textContent = `${quantity} item(s) added to cart!`;
            showMessage();

            // Reset quantity to 1
            quantity = 1;
            qtyDisplay.textContent = quantity;
        });

        // Wishlist functionality
        let wishlistCount = 0;
        let isInWishlist = false;
        const wishlistBtn = document.getElementById('addToWishlist');
        const wishlistCountDisplay = document.getElementById('wishlistCount');

        wishlistBtn.addEventListener('click', () => {
            isInWishlist = !isInWishlist;

            if (isInWishlist) {
                wishlistBtn.classList.add('active');
                wishlistBtn.innerHTML = '<i class="fas fa-heart"></i>';
                wishlistCount++;
                messageText.textContent = 'Added to wishlist!';
            } else {
                wishlistBtn.classList.remove('active');
                wishlistBtn.innerHTML = '<i class="far fa-heart"></i>';
                wishlistCount--;
                messageText.textContent = 'Removed from wishlist!';
            }

            wishlistCountDisplay.textContent = wishlistCount;
            showMessage();
        });

        // Show success message
        function showMessage() {
            successMessage.style.display = 'block';
            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 3000);
        }
    </script>
</body>
</html>