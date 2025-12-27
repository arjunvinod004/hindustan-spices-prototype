// Variant selection and price update
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

