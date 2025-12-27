<!-- sticky sidebar -->
<div class="sidebar">
  <a href="https://wa.me/911234567890" target="_blank" class="icon whatsapp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>
  <a href="#" class="icon enquiry">
    <i class="fa-solid fa-envelope"></i>
  </a>
</div>
 <!-- Sticky Sidebar -->

<!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 mb-3">
                    <ul class="footer-links">
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#shipping">Shipping</a></li>
                        <li><a href="#returns">Returns</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-3">
                    <ul class="footer-links">
                        <li><a href="#faqs">FAQs</a></li>
                        <li><a href="#privacy">Privacy Policy</a></li>
                        <li><a href="#terms">Terms</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 col-md-12 text-end">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-12">
                    <p class="text-muted mb-0">Copyright © 2022 All Rights Reserved.</p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<?php
if (!empty($page_assets[$current_page]["js"])) {
    foreach ($page_assets[$current_page]["js"] as $js) {
        echo '<script src="'.$js.'"></script>'."\n";
    }
}
?>

</body>
</html>