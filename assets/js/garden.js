document.addEventListener("DOMContentLoaded", function () {


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

        
  // Tab Switching
        const tabBtns = document.querySelectorAll('.tab-btn');
        const tabContents = document.querySelectorAll('.tab-content');

        tabBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                const tabId = btn.getAttribute('data-tab');

                tabBtns.forEach(b => b.classList.remove('active'));
                tabContents.forEach(c => c.classList.remove('active'));

                btn.classList.add('active');
                document.getElementById(tabId).classList.add('active');
            });
        });

        // Lightbox Functionality
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        const closeLightbox = document.getElementById('closeLightbox');
        const prevImage = document.getElementById('prevImage');
        const nextImage = document.getElementById('nextImage');

        let currentImages = [];
        let currentIndex = 0;

        function updateCurrentImages() {
            const activeTab = document.querySelector('.tab-content.active');
            const images = activeTab.querySelectorAll('.gallery-item img');
            currentImages = Array.from(images).map(img => img.src);
        }

        document.querySelectorAll('.gallery-item').forEach((item, index) => {
            item.addEventListener('click', () => {
                updateCurrentImages();
                const activeTab = document.querySelector('.tab-content.active');
                const images = activeTab.querySelectorAll('.gallery-item');
                currentIndex = Array.from(images).indexOf(item);

                lightboxImage.src = currentImages[currentIndex];
                lightbox.classList.add('active');
            });
        });

        closeLightbox.addEventListener('click', () => {
            lightbox.classList.remove('active');
        });

        lightbox.addEventListener('click', (e) => {
            if (e.target === lightbox) {
                lightbox.classList.remove('active');
            }
        });

        prevImage.addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + currentImages.length) % currentImages.length;
            lightboxImage.src = currentImages[currentIndex];
        });

        nextImage.addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % currentImages.length;
            lightboxImage.src = currentImages[currentIndex];
        });

        // Keyboard Navigation
        document.addEventListener('keydown', (e) => {
            if (!lightbox.classList.contains('active')) return;

            if (e.key === 'Escape') {
                lightbox.classList.remove('active');
            } else if (e.key === 'ArrowLeft') {
                prevImage.click();
            } else if (e.key === 'ArrowRight') {
                nextImage.click();
            }
        });

        // Visit Garden Button Actions
        document.querySelectorAll('.visit-garden-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                const activeTab = document.querySelector('.tab-content.active').id;
                alert(`Redirecting to ${activeTab === 'garden1' ? 'Garden 1' : 'Garden 2'}...`);
                // Replace with actual navigation: window.location.href = 'your-url-here';
            });
        });
});