<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Contact</div>
    <h1>Get in Touch</h1>
    <p>We&rsquo;re at Emesa Complex, Ntinda, Kampala. Reach out — we respond within 24 hours.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid-2" style="gap:64px;align-items:flex-start;">

      <!-- CONTACT FORM -->
      <div class="fade-in">
        <div class="section-label">Send a Message</div>
        <h2 style="margin-bottom:8px;">We&rsquo;ll Respond Within 24 Hours</h2>
        <p style="color:var(--grey);margin-bottom:32px;">Fill in the form and our team will get back to you within 24 hours. All enquiries are confidential.</p>
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
              <option value="general">General Enquiry</option>
              <option value="booking">Booking Information</option>
              <option value="mental">Mental Health Therapy</option>
              <option value="hormonal">Hormonal Health</option>
              <option value="physical">Physical Wellness</option>
              <option value="corporate">Workplace Wellness</option>
              <option value="online">Online Therapy</option>
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
        <div class="section-label">Contact Details</div>
        <h2 style="margin-bottom:24px;">Find Us</h2>

        <div style="display:flex;flex-direction:column;gap:20px;margin-bottom:36px;">
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-location-dot" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:4px;">Our Clinic</strong>
              <span style="color:var(--grey);font-size:0.9rem;line-height:1.6;">Emesa Complex<br>Opposite Kampala Independent Hospital<br>Ntinda, Kampala, Uganda</span>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-phone" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:4px;">Call or WhatsApp</strong>
              <a href="tel:+256775939636" style="color:var(--grey);font-size:0.9rem;display:block;">+256 775 939 636</a>
              <a href="tel:+256752512999" style="color:var(--grey);font-size:0.9rem;display:block;">+256 752 512 999</a>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-envelope" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:4px;">Email Us</strong>
              <a href="mailto:info@thriveug.com" style="color:var(--grey);font-size:0.9rem;">info@thriveug.com</a>
            </div>
          </div>
          <div style="display:flex;align-items:flex-start;gap:16px;">
            <div style="width:44px;height:44px;background:var(--green-pale);border-radius:50%;display:flex;align-items:center;justify-content:center;flex-shrink:0;">
              <i class="fas fa-clock" style="color:var(--green-sage);"></i>
            </div>
            <div>
              <strong style="display:block;margin-bottom:4px;">Working Hours</strong>
              <span style="color:var(--grey);font-size:0.9rem;display:block;">Monday &ndash; Friday: 8:00 AM &ndash; 6:00 PM</span>
              <span style="color:var(--grey);font-size:0.9rem;display:block;">Saturday: 9:00 AM &ndash; 3:00 PM</span>
              <span style="color:var(--grey);font-size:0.9rem;display:block;">Sunday: Closed</span>
            </div>
          </div>
        </div>

        <!-- QR CARD -->
        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:24px;text-align:center;margin-bottom:24px;">
          <p style="font-weight:600;margin-bottom:12px;">Book on WhatsApp — Scan to Chat</p>
          <?php if ( file_exists( THRIVE_DIR . '/images/qr-thrive-location.jpg' ) ) : ?>
            <img src="<?php echo esc_url( THRIVE_URI . '/images/qr-thrive-location.jpg' ); ?>" alt="WhatsApp QR Code — Thrive Therapy" style="width:140px;height:140px;border-radius:12px;display:block;margin:0 auto 12px;">
          <?php endif; ?>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-primary" style="margin-top:8px;" target="_blank" rel="noopener">
            <i class="fab fa-whatsapp"></i> Chat on WhatsApp
          </a>
        </div>

        <div style="display:flex;gap:12px;">
          <a href="#" style="width:40px;height:40px;background:var(--green-sage);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" style="width:40px;height:40px;background:var(--green-sage);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" style="width:40px;height:40px;background:var(--green-sage);color:white;border-radius:50%;display:flex;align-items:center;justify-content:center;" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- CLINIC GALLERY -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Visit Us</div>
      <h2>A Space Built for Your Wellness</h2>
      <p>Our Ntinda clinic is thoughtfully designed — professional, private, and welcoming from the moment you walk in.</p>
    </div>
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

<!-- FAQ -->
<section class="section">
  <div class="container" style="max-width:760px;">
    <div class="section-header centered fade-in">
      <div class="section-label">FAQ</div>
      <h2>Frequently Asked Questions</h2>
    </div>
    <div class="faq-list fade-in">
      <details class="faq-item">
        <summary>Is everything I share in therapy confidential?</summary>
        <div class="faq-answer"><p>Yes, absolutely. All sessions are strictly confidential. We only break confidentiality in rare legal exceptions — such as when there is immediate risk of harm to yourself or others.</p></div>
      </details>
      <details class="faq-item">
        <summary>Do you offer online sessions?</summary>
        <div class="faq-answer"><p>Yes. We offer fully secure online video sessions for clients anywhere in Uganda or internationally. Online sessions are equally effective and offer maximum privacy and convenience.</p></div>
      </details>
      <details class="faq-item">
        <summary>What is the medication-free approach?</summary>
        <div class="faq-answer"><p>We believe in addressing root causes rather than masking symptoms. Our approach uses therapy, lifestyle changes, nutrition, and holistic interventions wherever possible — empowering you to live a rich life naturally.</p></div>
      </details>
      <details class="faq-item">
        <summary>What are your payment methods?</summary>
        <div class="faq-answer"><p>We accept cash, MTN Mobile Money, Airtel Money, and bank transfer. Payment is confirmed before each session. Please contact us to discuss payment plans if needed.</p></div>
      </details>
      <details class="faq-item">
        <summary>How many sessions will I need?</summary>
        <div class="faq-answer"><p>This varies by individual. Some clients see significant progress in just a few sessions; others benefit from ongoing support. After your initial consultation, you&rsquo;ll receive a recommended personalised plan.</p></div>
      </details>
    </div>
    <div style="text-align:center;margin-top:32px;">
      <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" class="btn btn-primary">View Full FAQ <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Ready to Begin?</h2>
    <p class="fade-in">Book a consultation today. We&rsquo;re at Emesa Complex, Ntinda, Kampala — and online everywhere.</p>
    <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-white fade-in" target="_blank" rel="noopener">Book via WhatsApp <i class="fab fa-whatsapp"></i></a>
  </div>
</section>

<?php get_footer(); ?>
