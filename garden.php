<!-- header -->
<?php
include 'components/header.php';
?>

<!-- section -->

<section class="garden-section">

<!-- Hero Section -->
    <div class="garden-hero">
         <img src="https://s7ap1.scene7.com/is/image/itcportalprod/the-worlds-top-five-most-expensive-spices-a-luxurious-culinary-experience?fmt=webp-alpha" alt="image" class="garden-hero-bg">
        <div class="container">
            <h1>Hindustan Spices Gardens</h1>
            <p>Premium Indian spices supplier from Kerala. Reach us for enquiries.</p>
        </div>
    </div>

    <div class="container garden-container">
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
</section>


<!-- footer -->
<?php
include 'components/footer.php';
?>



