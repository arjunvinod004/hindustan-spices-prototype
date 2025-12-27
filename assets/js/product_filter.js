// Toggle mobile filters
document.addEventListener("DOMContentLoaded", function () {
        function toggleFilters() {
            const sidebar = document.getElementById('filterSidebar');
            const overlay = document.querySelector('.filter-overlay');
            sidebar.classList.toggle('show');
            overlay.classList.toggle('show');
        }
    });