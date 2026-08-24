<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Contact</div>
    <h1>Get in Touch</h1>
    <p>We're here to help you take the first step towards wellness. Reach out today — we respond within 24 hours.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid-2" style="gap:64px;align-items:flex-start;">

      <!-- CONTACT FORM -->
      <div class="fade-in">
        <h2 style="margin-bottom:8px;">Send Us a Message</h2>
        <p style="color:var(--grey);margin-bottom:32px;">Fill in the form and our team will get back to you within 24 hours.</p>
        <form class="contact-form" id="contactForm" novalidate>
          <div class="grid-2" style="gap:20px;">
            <div class="form-group">
              <label for="firstName">First Name <span style="color:var(--green-sage);">*</span></label>
              <input type="text" id="firstName" name="firstName" placeholder="e.g. Jane" required>
            </div>
            <div class="form-group">
              <label for="lastName">Last Name <span style="color:var(--green-sage);">*</span></label>
              <input type="text" id="lastName" name="lastName" placeholder="e.g. Nakamya" required>
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="email">Email Address <span style="color:var(--green-sage);">*</span></label>
            <input type="email" id="email" name="email" placeholder="you@example.com" required>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="phone">Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+256 700 000 000">
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="subject">Subject <span style="color:var(--green-sage);">*</span></label>
            <select id="subject" name="subject" required>
              <option value="" disabled selected>Select a topic</option>
              <option value="booking">Book a Session</option>
              <option value="info">General Enquiry</option>
              <option value="corporate">Corporate / Workplace Wellness</option>
              <option value="feedback">Feedback</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="message">Message <span style="color:var(--green-sage);">*</span></label>
            <textarea id="message" name="message" rows="5" placeholder="Tell us how we can help you..." required></textarea>
          </div>
          <div style="margin-top:28px;">
            <button type="submit" class="btn btn-primary" style="width:100%;">Send Message <i class="fas fa-paper-plane"></i></button>
          </div>
          <p style="font-size:0.78rem;color:var(--grey);margin-top:12px;text-align:center;"><i class="fas fa-lock"></i> Your information is strictly confidential and will never be shared.</p>
        </form>
      </div>

      <!-- CONTACT INFO -->
      <div class="fade-in fade-in-delay-2">
        <h2 style="margin-bottom:8px;">Contact Information</h2>
        <p style="color:var(--grey);margin-bottom:32px;">Prefer to call or visit us in person? We&rsquo;d love to see you.</p>

        <div style="display:flex;flex-direction:column;gap:20px;margin-bottom:36px;">
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-location-dot" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:2px;">Our Clinic</strong>
              <span style="color:var(--grey);font-size:0.9rem;">Emesa Complex, Ntinda<br>Kampala, Uganda</span>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-phone" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:2px;">Phone</strong>
              <a href="tel:+256775939636" style="color:var(--grey);font-size:0.9rem;display:block;">+256 775 939 636</a>
              <a href="tel:+256752512999" style="color:var(--grey);font-size:0.9rem;display:block;">+256 752 512 999</a>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-envelope" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:2px;">Email</strong>
              <a href="mailto:info@thriveug.com" style="color:var(--grey);font-size:0.9rem;">info@thriveug.com</a>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-clock" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:2px;">Opening Hours</strong>
              <span style="color:var(--grey);font-size:0.9rem;">Monday &ndash; Saturday: 8am &ndash; 6pm</span><br>
              <span style="color:var(--grey);font-size:0.9rem;">Sunday: By appointment only</span>
            </div>
          </div>
        </div>

        <!-- QR CARD -->
        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:28px;text-align:center;margin-bottom:24px;">
          <p style="font-weight:600;margin-bottom:12px;">Book on WhatsApp — Scan to Chat</p>
          <?php if ( file_exists( THRIVE_DIR . '/images/qr-thrive-location.jpg' ) ) : ?>
            <img src="<?php echo esc_url( THRIVE_URI . '/images/qr-thrive-location.jpg' ); ?>" alt="WhatsApp QR Code — Thrive Therapy" style="width:140px;height:140px;border-radius:12px;display:block;margin:0 auto 12px;">
          <?php endif; ?>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-primary" style="margin-top:8px;" target="_blank" rel="noopener">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>

        <!-- SOCIAL LINKS -->
        <div style="display:flex;gap:12px;">
          <a href="#" style="width:40px;height:40px;background:var(--green-sage);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" style="width:40px;height:40px;background:var(--green-sage);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" style="width:40px;height:40px;background:var(--green-sage);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLINIC PHOTOS -->
<section class="section section-alt">
  <div class="container">
    <div class="grid-2" style="gap:20px;">
      <div style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:16/10;box-shadow:var(--shadow);">
        <img src="<?php echo esc_url( THRIVE_URI . '/images/thrive-reception.jpg' ); ?>" alt="Thrive Therapy reception" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
      <div style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:16/10;box-shadow:var(--shadow);">
        <img src="<?php echo esc_url( THRIVE_URI . '/images/clinic-consultation-room.jpg' ); ?>" alt="Thrive Therapy consultation room" loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;">
      </div>
    </div>
  </div>
</section>

<!-- FAQ STRIP -->
<section class="section">
  <div class="container" style="max-width:760px;">
    <div class="section-header centered fade-in">
      <div class="section-label">Common Questions</div>
      <h2>Quick Answers</h2>
    </div>
    <div class="faq-list fade-in">
      <details class="faq-item">
        <summary>How do I book a session?</summary>
        <div class="faq-answer"><p>The fastest way is via WhatsApp — click the "Book a Session" button anywhere on the site. You can also call us directly or use the contact form above.</p></div>
      </details>
      <details class="faq-item">
        <summary>Do you offer online sessions?</summary>
        <div class="faq-answer"><p>Yes — we offer fully secure video sessions for clients across Uganda and internationally. Same quality, full privacy.</p></div>
      </details>
      <details class="faq-item">
        <summary>Is everything I share confidential?</summary>
        <div class="faq-answer"><p>Absolutely. All sessions are strictly confidential. We only break confidentiality in rare circumstances required by law (e.g. imminent risk of harm).</p></div>
      </details>
      <details class="faq-item">
        <summary>What are your session fees?</summary>
        <div class="faq-answer"><p>Fees vary by service and session format. Please contact us via WhatsApp or phone for a full fee schedule tailored to your needs.</p></div>
      </details>
      <details class="faq-item">
        <summary>Where exactly are you located?</summary>
        <div class="faq-answer"><p>We are located at Emesa Complex, Ntinda, Kampala. We are accessible by boda-boda, taxi, or private car. Contact us for detailed directions.</p></div>
      </details>
    </div>
    <div style="text-align:center;margin-top:32px;">
      <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-primary">View Full FAQ <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Ready to Start Your Wellness Journey?</h2>
    <p class="fade-in">Don&rsquo;t wait — your first step to a healthier, happier life starts with a single message.</p>
    <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-white fade-in" target="_blank" rel="noopener">Book via WhatsApp <i class="fab fa-whatsapp"></i></a>
  </div>
</section>

<?php get_footer(); ?>
