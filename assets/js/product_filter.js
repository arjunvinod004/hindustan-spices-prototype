// Toggle mobile filters
document.addEventListener("DOMContentLoaded", function () {
        function toggleFilters() {
            const sidebar = document.getElementById('filterSidebar');
            const overlay = document.querySelector('.filter-overlay');
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }

        document.addEventListener("click", function (e) {

    // ADD TO CART click
    if (e.target.classList.contains("btn-add-cart"))
    {
        let btn = e.target;
        let qtyBox = btn.nextElementSibling;

        btn.classList.add("d-none");
        qtyBox.classList.remove("d-none");
    }

    // PLUS
    if (e.target.classList.contains("plus")) {
        let qtyEl = e.target.previousElementSibling;
        qtyEl.innerText = parseInt(qtyEl.innerText) + 1;
    }

    // MINUS
    if (e.target.classList.contains("minus")) {
         let qtyBox = e.target.closest(".qty-wrapper");
        let qtyEl = qtyBox.querySelector(".qty");
        let qty = parseInt(qtyEl.innerText);

        if (qty > 1) {
            qtyEl.innerText = qty - 1;
        } else {
            // qty is 1 → remove item
            qtyBox.classList.add("d-none");
            qtyEl.innerText = 1;

            // show Add to Cart again
            qtyBox.previousElementSibling.classList.remove("d-none");
        }
    }

});
    });