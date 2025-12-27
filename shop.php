<!-- header -->
<?php
include 'components/header.php';
?>


<!-- section -->
  <main id="main-content">
 <section class="filter-sections">
      <!-- Filter Overlay for Mobile -->
    <div class="filter-overlay" ></div>

    <!-- Main Content -->
    <div class="container shop-container">
        <div class="row">
            <!-- Sidebar Filters -->
            <div class="col-lg-3 mt-4">
                <button class="filter-toggle" onclick="toggleFilters()">
                    <i class="fas fa-filter me-2"></i>Filters
                </button>

                <div class="filter-sidebar" id="filterSidebar">
                    <div class="filter-title">
                        <span>Filters</span>
                       
                    </div>

                    <!-- Categories -->
                    <div class="filter-section">
                        <h6>Categories</h6>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Spices <span class="filter-count">(24)</span>
                            </button>
                        </div>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Herbs <span class="filter-count">(18)</span>
                            </button>
                        </div>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Tea <span class="filter-count">(12)</span>
                            </button>
                        </div>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Powder <span class="filter-count">(15)</span>
                            </button>
                        </div>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Seeds <span class="filter-count">(9)</span>
                            </button>
                        </div>
                    </div>    
                </div>
            </div>

            <!-- Products Grid -->
            <div class="col-lg-9 mt-4">
                <div class="products-section">
                         <div class="row g-4 mb-5">
            <div class="col-6  col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" class="ingredient-image" alt="Aloe">
                    <div class="ingredient-title">Curry Leaf</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                    <div class="ingredient-actions">
                    <a href="product_single.php" class="btn-select-options"> <i class="fas fa-shopping-cart mx-1"></i>Select options</a>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>
            <div class="col-6  col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-1-298x298.jpg" class="ingredient-image" alt="Tea Tree">
                    <div class="ingredient-title">Sarvasugandhi</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                    <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>

                </div>
            </div>
            <div class=" col-6  col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" class="ingredient-image" alt="Rosehip">
                    <div class="ingredient-title">Pepper Mint</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                    <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>

            <div class=" col-6 col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Shatavari-298x298.jpg" class="ingredient-image" alt="Rosehip">
                    <div class="ingredient-title">Shatavari</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                   <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>

             <div class=" col-6 col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-1-298x298.jpg" class="ingredient-image" alt="Rosehip">
                    <div class="ingredient-title">Shatavari</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                   <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>
             <div class="col-6 col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-1-298x298.jpg" class="ingredient-image" alt="Rosehip">
                    <div class="ingredient-title">Shatavari</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                   <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>

                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>
             <div class="col-6 col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" class="ingredient-image" alt="Rosehip">
                    <div class="ingredient-title">Shatavari</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                   <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>
             <div class="col-6 col-lg-4">
                <div class="ingredient-card">
                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Shatavari-298x298.jpg" class="ingredient-image" alt="Rosehip">
                    <div class="ingredient-title">Shatavari</div>
                    <div class="ingredient-desc">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                    <div class="product-price">
                    <span class="price-current">₹12.99</span>
                    </div>
                   <div class="ingredient-actions">
                    <button class="btn-add-cart"> <i class="fas fa-shopping-cart mx-1"></i>Add to Cart</button>
                    <div class="qty-wrapper d-none">
                        <button class="qty-btn minus">−</button>
                        <span class="qty">1</span>
                        <button class="qty-btn plus">+</button>
                    </div>
                    <button class="btn-wishlist"> <i class="fa-solid fa-heart mx-1"></i>Wishlist</button>
                    </div>
                </div>
            </div>
        </div> 

                </div>
            </div>        
        </div>
 </section>
</main>

<!-- <script>
function toggleFilters() 
{
    const sidebar = document.getElementById('filterSidebar');
    const overlay = document.querySelector('.filter-overlay');
    sidebar.classList.toggle('show');
    overlay.classList.toggle('show');
}
</script> -->

<!-- footer -->
<?php
include 'components/footer.php';
?>