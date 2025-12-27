<!-- header -->
<?php
include 'components/header.php';
?>

<!-- section -->
 <section class="filter-sections">
      <!-- Filter Overlay for Mobile -->
    <div class="filter-overlay" onclick="toggleFilters()"></div>

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

                    

                    <!-- Brand -->
                    <div class="filter-section">
                        <h6>Brand</h6>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Hindustan Spices <span class="filter-count">(42)</span>
                            </button>
                        </div>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Organic Valley <span class="filter-count">(28)</span>
                            </button>
                        </div>
                        <div class="filter-option">
                            <button class="filter-btn" onclick="toggleFilter(this)">
                                Pure Nature <span class="filter-count">(16)</span>
                            </button>
                        </div>
                    </div>

                    
                </div>
            </div>

            <!-- Products Grid -->
            <div class="col-lg-9">
                <div class="products-section">
                  

                    <div class="row g-4">
                        <!-- Product 1 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Product" class="product-image">
                                    <span class="product-badge">Organic</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Herbs</div>
                                    <h5 class="product-name">Curry Leaf</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(24)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$12.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 2 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-1-298x298.jpg" alt="Product" class="product-image">
                                    <span class="product-badge sale">Sale</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Spices</div>
                                    <h5 class="product-name">Sarvasugandhi</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-count">(18)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$12.99</span>
                                        <span class="price-original">$15.99</span>
                                        <span class="price-discount">19% OFF</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 3 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" alt="Product" class="product-image">
                                    <span class="product-badge new">New</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Herbs</div>
                                    <h5 class="product-name">Pepper Mint</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(32)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$9.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 4 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Shatavari-298x298.jpg" alt="Product" class="product-image">
                                    <span class="product-badge">Organic</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Herbs</div>
                                    <h5 class="product-name">Shatavari</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-count">(15)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$18.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 5 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-8-298x298.jpg" alt="Product" class="product-image">
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Spices</div>
                                    <h5 class="product-name">Cumin Seeds</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(28)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$14.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 6 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Spices-in-Kerala-4-298x298.jpeg" alt="Product" class="product-image">
                                    <span class="product-badge sale">Sale</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Spices</div>
                                    <h5 class="product-name">Cinnamon</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(42)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$16.99</span>
                                        <span class="price-original">$19.99</span>
                                        <span class="price-discount">15% OFF</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 7 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Turmeric-powder-1.jpg" alt="Product" class="product-image">
                                    <span class="product-badge">Organic</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Powder</div>
                                    <h5 class="product-name">Turmeric Powder</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-count">(35)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$11.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 8 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/08/Spices-in-Kerala-9.jpg" alt="Product" class="product-image">
                                    <span class="product-badge new">New</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Tea</div>
                                    <h5 class="product-name">Green Tea</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(51)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$13.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 9 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Curry-Leaf-1-298x298.jpg" alt="Product" class="product-image">
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Herbs</div>
                                    <h5 class="product-name">Basil Leaves</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-count">(22)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$10.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 10 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Spices-in-Kerala-1-1-298x298.jpeg" alt="Product" class="product-image">
                                    <span class="product-badge">Organic</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Spices</div>
                                    <h5 class="product-name">Cardamom</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(38)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$24.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 11 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/07/hindustanspices-1-298x298.jpg" alt="Product" class="product-image">
                                    <span class="product-badge sale">Sale</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Seeds</div>
                                    <h5 class="product-name">Fennel Seeds</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="far fa-star"></i>
                                        </div>
                                        <span class="rating-count">(29)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$8.99</span>
                                        <span class="price-original">$11.99</span>
                                        <span class="price-discount">25% OFF</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>

                        <!-- Product 12 -->
                        <div class="col-md-6 col-lg-4">
                            <div class="product-card">
                                <div class="product-image-wrapper">
                                    <img src="https://hindustanspices.in/wp-content/uploads/2020/11/Pepper-Mint-298x298.jpg" alt="Product" class="product-image">
                                    <span class="product-badge new">New</span>
                                    <div class="product-actions">
                                        <button class="action-btn"><i class="far fa-heart"></i></button>
                                        <button class="action-btn"><i class="far fa-eye"></i></button>
                                    </div>
                                </div>
                                <div class="product-info">
                                    <div class="product-category">Herbs</div>
                                    <h5 class="product-name">Oregano</h5>
                                    <div class="product-rating">
                                        <div class="stars">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                        <span class="rating-count">(45)</span>
                                    </div>
                                    <div class="product-price">
                                        <span class="price-current">$15.99</span>
                                    </div>
                                    <button class="btn-add-cart"><i class="fas fa-shopping-cart me-2"></i>Add to Cart</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>        
        </div>
 </section>

 <script>
     function toggleFilters() {
            const sidebar = document.getElementById('filterSidebar');
            const overlay = document.querySelector('.filter-overlay');
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }
 </script>

<!-- footer -->
<?php
include 'components/footer.php';
?>