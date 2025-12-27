document.addEventListener("DOMContentLoaded", function () {
 let quantity = 1;
        const qtyDisplay = document.getElementById('quantity-value');
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