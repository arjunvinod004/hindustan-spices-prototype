//header sticky on scroll
 // Sticky Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('mainNav');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile Search Toggle
        const mobileSearchToggle = document.getElementById('mobileSearchToggle');
        const mobileSearchBar = document.getElementById('mobileSearchBar');

        if (mobileSearchToggle && mobileSearchBar) {
            mobileSearchToggle.addEventListener('click', function() {
                mobileSearchBar.classList.toggle('active');
            });

            // Close search bar when clicking outside
            document.addEventListener('click', function(event) {
                if (!mobileSearchToggle.contains(event.target) && !mobileSearchBar.contains(event.target)) {
                    mobileSearchBar.classList.remove('active');
                }
            });
        }

        // Cart Badge Update Demo (you can integrate with actual cart)
        function updateCartBadge(count) {
            const badges = document.querySelectorAll('.badge-count');
            badges.forEach(badge => {
                if (badge.closest('.icon-wrapper').querySelector('.fa-shopping-cart')) {
                    badge.textContent = count;
                }
            });
        }

        // Wishlist Badge Update Demo
        function updateWishlistBadge(count) {
            const badges = document.querySelectorAll('.badge-count');
            badges.forEach(badge => {
                if (badge.closest('.icon-wrapper').querySelector('.fa-heart')) {
                    badge.textContent = count;
                }
            });
        }

        // Example: Update cart count after 3 seconds (demo)
        setTimeout(() => {
            updateCartBadge(7);
        }, 3000);
        // Example: Update wishlist count after 5 seconds (demo)



// Variant selection and price update
document.addEventListener("DOMContentLoaded", function () {
document.querySelectorAll('.variant-option').forEach(option => {
    option.addEventListener('click', function () {

        // Remove active class from all
        document.querySelectorAll('.variant-option').forEach(el => el.classList.remove('active'));

        // Add active to clicked one
        this.classList.add('active');

        // Get prices
        const price = parseInt(this.dataset.price);
        const original = parseInt(this.dataset.original);

        // Update prices
        document.getElementById('productPrice').textContent = `₹${price}`;
        document.getElementById('originalPrice').textContent = `₹${original}`;

        // Calculate discount
        const discount = Math.round(((original - price) / original) * 100);
        document.querySelector('.discount-badge').textContent = `${discount}% OFF`;
    });
});


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

    });