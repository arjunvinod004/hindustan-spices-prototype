<!-- Header -->
<?php
include 'components/header.php';
?>

<!-- section -->


<section class="contact-section">
    <!-- Hero Section -->
    <div class="contact-hero">
         <img src="https://s7ap1.scene7.com/is/image/itcportalprod/the-worlds-top-five-most-expensive-spices-a-luxurious-culinary-experience?fmt=webp-alpha" alt="image" class="contact-hero-bg">
        <div class="container">
            <h1>Get in Touch</h1>
            <p>We'd love to hear from you. Send us a message and we'll respond as soon as possible.</p>
        </div>
    </div>

 

  

<div class="container">

    <div class="contact-content">
                <div class="contact-info">
                    <h3>Get In Touch</h3>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div>
                            <strong>Address</strong><br>
                          Hindustan Spices <br> Chakkupallam P.O, 5thMile <br>
                          Kumily -Munnar Road, Idukki (D) Kerala(S), South India <br>
                          Pin:685509                       
                         </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fas fa-phone-alt"></i></div>
                        <div>
                            <strong>Phone</strong><br>
                          +919746827724                        
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"> <i class="fas fa-envelope"></i></div>
                        <div>
                            <strong>Email</strong><br>
                           info@hindustanspices.in                        
                        </div>
                    </div>
                    <div class="info-item">
                        <div class="info-icon"><i class="fa-solid fa-clock"></i></div>
                        <div>
                            <strong>Working Hours</strong><br>
                            10:00 AM - 6:00 PM                        
                        </div>
                    </div>
                </div>
                <form class="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name" required="">
                             <div class="error" id="error_name" style="color:red;"></div>
                        </div>
                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Your Email" required="">
                             <div class="error" id="error_email" style="color:red;"></div>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <input id="phone_no" name="phone_no" type="tel" placeholder="Phone Number">
                             <div class="error" id="error_phone_no" style="color:red;"></div>
                        </div>
                        <div class="form-group">
                            <input id="subject" name="subject" type="text" placeholder="Subject">
                             <div class="error" id="error_subject" style="color:red;"></div>
                        </div>
                        <div class="form-group">
                          <select name="product_name" class="form-select" id="product_name">
                            <option value="">select product</option>
                            </select>
                                                        
                             <div class="error" id="error_product_name" style="color:red;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <textarea id="message" name="message" placeholder="Your Message" required=""></textarea>
                         <div class="error" id="error_message" style="color:red;"></div>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>

</div>

   
</section>

<!-- Footer -->
  <?php
include 'components/footer.php';
?>