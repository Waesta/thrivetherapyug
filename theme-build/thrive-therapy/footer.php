</main>

<footer>
  <div class="container">
    <div class="footer-grid">
      <div class="footer-brand">
        <img src="<?php echo esc_url( THRIVE_URI . '/images/thrive-logo.jpg' ); ?>" alt="Thrive Therapy &amp; Wellness" style="height:44px;width:auto;filter:brightness(0) invert(1);margin-bottom:16px;">
        <p>Where Mental And Physical Wellness Meet. Serving Kampala and Uganda since 2016.</p>
        <div class="social-links">
          <a href="#" class="social-link" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-link" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="social-link" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
        </div>
      </div>
      <div class="footer-col">
        <h5>Services</h5>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>">Mental Health Therapy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>">Healthy Living &amp; Relationships</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#womens-mens-wellness' ) ); ?>">Women&rsquo;s &amp; Men&rsquo;s Wellness</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#childrens-development' ) ); ?>">Children&rsquo;s Development</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#workplace-wellness' ) ); ?>">Workplace Wellness</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Company</h5>
        <ul class="footer-links">
          <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About Us</a></li>
          <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Our Team</a></li>
          <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>">Testimonials</a></li>
          <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a></li>
          <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a></li>
          <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a></li>
          <li><a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h5>Contact</h5>
        <ul class="footer-links">
          <li><a href="#"><i class="fas fa-location-dot"></i> Emesa Complex, Ntinda, Kampala</a></li>
          <li><a href="tel:+256775939636"><i class="fas fa-phone"></i> +256 775 939 636</a></li>
          <li><a href="tel:+256752512999"><i class="fas fa-phone"></i> +256 752 512 999</a></li>
          <li><a href="mailto:info@thriveug.com"><i class="fas fa-envelope"></i> info@thriveug.com</a></li>
          <li><span><i class="fas fa-clock"></i> Mon &ndash; Sat: 8am &ndash; 6pm</span></li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom">
      <span>&copy; <?php echo date( 'Y' ); ?> Thrive Therapy &amp; Wellness. All rights reserved.</span>
      <span>Powered by <a href="https://waestaltd.com" target="_blank" rel="noopener noreferrer" style="color:inherit;text-decoration:underline;">Waesta Enterprises U Ltd</a></span>
    </div>
  </div>
</footer>

<a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="wa-float" target="_blank" rel="noopener noreferrer" aria-label="Book on WhatsApp">
  <span class="wa-float-label">Book via WhatsApp</span>
  <i class="fab fa-whatsapp"></i>
</a>
<button class="back-to-top" id="backToTop" aria-label="Back to top"><i class="fas fa-chevron-up"></i></button>

<div class="cookie-banner" id="cookieBanner" role="dialog" aria-label="Cookie consent">
  <p>We use cookies to improve your experience. By accepting, you agree to our <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>">Privacy Policy</a>.</p>
  <div class="cookie-banner-actions">
    <button class="btn-cookie-accept" id="cookieAccept">Accept</button>
    <button class="btn-cookie-decline" id="cookieDecline">Decline</button>
  </div>
</div>

<?php wp_footer(); ?>
</body>
</html>
