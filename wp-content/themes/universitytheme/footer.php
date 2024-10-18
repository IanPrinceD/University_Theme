 </main>
 <footer class="footer">
  <div class="footer-container g-container">
   <div class="footer-wrapper">
    <div class="footer-logo-container">
     <a href="<?php echo site_url(); ?>" class="footer-logo-link">
      <img src="#" alt="Footer Logo">
     </a>
    </div>
    <nav class="footer-nav-container">
     <?php wp_nav_menu(array(
      'theme_location' => 'footerMenuPrimary'
     ));
     ?>
    </nav>
    <div class="footer-info-container">
     <div class="footer-contact-info-wrapper">
      <h3 class="footer-contact-header">get in touch</h3>
      <div class="footer-contact">
       <i class="fa-regular fa-envelope social-icon"></i>
       <a href="mailto:" class="email-link">email us</a>
      </div>
     </div>
     <div class="footer-social-wrapper">
      <h3 class="footer-contact-header">follow us</h3>
      <div class="social-icons">
       <i class="fa-brands fa-instagram social-icon"></i>
       <i class="fa-brands fa-facebook social-icon"></i>
       <i class="fa-brands fa-pinterest social-icon"></i>
      </div>
     </div>
    </div>
    <div class="newsletter-container">
     <h3 class="footer-contact-header">newsletter</h3>
     <p class="newsletter-body">hey there, trend setter! <span class="newsletter-body-span">sign up for the latest happening right here.</span></p>
     <form action="/" class="newsletter-form">
      <input type="email" placeholder="email *" class="newsletter-email" required>
      <input type="name" placeholder="name *" class="newsletter-name" required>
      <select class="select-role" name="role" id="role" required>
       <option value="" disabled selected>Select your role *</option>
       <option value="1">Role 1</option>
       <option value="1">Role 2</option>
       <option value="1">Role 3</option>
      </select>
      <button class="btn btn-submit" type="submit">subscribe</button>
     </form>
    </div>
   </div>
   <div class="footer-copyright-wrapper">
    <hr>
    <p class="copyright"><span class="copyright-span">&#169; 2024 <?php bloginfo('name'); ?></span> &#183; <span class="copyright-all-rights">all rights reserved</span>
   </div>
  </div>
 </footer>
 </div>
 <?php wp_footer(); ?>
 </body>

 </html>