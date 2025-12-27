<!-- header -->
<?php
include 'components/header.php';
?>

<!-- section -->
<section class="garden-section">
    <div class="container">
        <h2 class="section-title"> Garden Gallery</h2>

        <!-- Tab Navigation -->
        <div class="tab-navigation">
            <button class="tab-btn active" data-tab="garden1">Garden 1</button>
            <button class="tab-btn" data-tab="garden2">Garden 2</button>
        </div>

        <!-- Garden 1 Tab -->
        <div class="tab-content active" id="garden1">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558904541-efa843a96f01?w=800" alt="Garden 1 - Image 1">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1585320806297-9794b3e4eeae?w=800" alt="Garden 1 - Image 2">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1416879595882-3373a0480b5b?w=800" alt="Garden 1 - Image 3">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1591857177580-dc82b9ac4e1e?w=800" alt="Garden 1 - Image 4">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1523348837708-15d4a09cfac2?w=800" alt="Garden 1 - Image 5">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1466692476868-aef1dfb1e735?w=800" alt="Garden 1 - Image 6">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
            <button class="visit-garden-btn">
                Visit Garden 1
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>

        <!-- Garden 2 Tab -->
        <div class="tab-content" id="garden2">
            <div class="gallery-grid">
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1592150621744-aca64f48394a?w=800" alt="Garden 2 - Image 1">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=800" alt="Garden 2 - Image 2">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1584479898061-15742e14f50d?w=800" alt="Garden 2 - Image 3">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1513836279014-a89f7a76ae86?w=800" alt="Garden 2 - Image 4">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1563620116-c7501de04d5f?w=800" alt="Garden 2 - Image 5">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
                <div class="gallery-item">
                    <img src="https://images.unsplash.com/photo-1517677129300-07b130802f46?w=800" alt="Garden 2 - Image 6">
                    <div class="overlay">
                        <i class="fas fa-search-plus"></i>
                    </div>
                </div>
            </div>
            <button class="visit-garden-btn">
                Visit Garden 2
                <i class="fas fa-arrow-right"></i>
            </button>
        </div>
    </div>

    <!-- Lightbox -->
    <div class="lightbox" id="lightbox">
        <div class="lightbox-content">
            <button class="lightbox-close" id="closeLightbox">
                <i class="fas fa-times"></i>
            </button>
            <button class="lightbox-nav lightbox-prev" id="prevImage">
                <i class="fas fa-chevron-left"></i>
            </button>
            <img src="" alt="Lightbox Image" id="lightboxImage">
            <button class="lightbox-nav lightbox-next" id="nextImage">
                <i class="fas fa-chevron-right"></i>
            </button>
        </div>
    </div>

    <script>
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
    </script>
</section>


<!-- footer -->
<?php
include 'components/footer.php';
?>



