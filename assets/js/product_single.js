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