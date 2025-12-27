<!-- Sticky Sidebar -->
<div class="sidebar" aria-label="Quick contact links">

  <!-- WhatsApp -->
  <a href="https://wa.me/911234567890"
     target="_blank"
     rel="noopener noreferrer"
     class="icon whatsapp"
     aria-label="Chat with us on WhatsApp">
    <i class="fa-brands fa-whatsapp"></i>
  </a>

  <!-- Enquiry -->
  <a href="contact.php"
     class="icon enquiry"
     aria-label="Send us an enquiry">
    <i class="fa-solid fa-envelope"></i>
  </a>

</div>
<!-- Sticky Sidebar -->


<!-- Footer -->
  <footer role="contentinfo">
    <div class="container">
        <div class="row">

            <!-- Company -->
            <div class="col-lg-3 col-md-6 mb-3">
                <ul class="footer-links">
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="shipping.php">Shipping</a></li>
                    <li><a href="returns.php">Returns & Refunds</a></li>
                    <li><a href="contact.php">Contact Us</a></li>
                </ul>
            </div>

            <!-- Policies -->
            <div class="col-lg-3 col-md-6 mb-3">
                <ul class="footer-links">
                    <li><a href="faq.php">FAQs</a></li>
                    <li><a href="privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="terms-conditions.php">Terms & Conditions</a></li>
                </ul>
            </div>

            <!-- Social -->
            <div class="col-lg-6 col-md-12 text-lg-end">
                <div class="social-icons" aria-label="Social media links">
                    <a href="https://facebook.com/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                        <i class="fab fa-facebook"></i>
                    </a>
                    <a href="https://instagram.com/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://youtube.com/" target="_blank" rel="noopener noreferrer" aria-label="YouTube">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>

        </div>

        <!-- Copyright -->
        <div class="row mt-4">
            <div class="col-12">
                <p class="text-muted mb-0">
                    © <?php echo date('Y'); ?> Hindustan Spices. All Rights Reserved.
                </p>
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