<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Book a Session</div>
    <h1>Book a Session</h1>
    <p>Ready to take the first step? Fill in the form below and our team will confirm your appointment within 24 hours.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid-2" style="gap:64px;align-items:flex-start;">

      <!-- BOOKING FORM -->
      <div class="fade-in">

        <!-- WHATSAPP QUICK BOOK -->
        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:28px;margin-bottom:36px;border:2px solid var(--green-mint);">
          <div style="display:flex;align-items:center;gap:12px;margin-bottom:12px;">
            <i class="fab fa-whatsapp" style="font-size:1.8rem;color:#25D366;"></i>
            <h3 style="margin:0;font-size:1.1rem;">Quickest Way: Book on WhatsApp</h3>
          </div>
          <p style="color:var(--grey);font-size:0.9rem;margin-bottom:16px;">Skip the form — send us a WhatsApp message and we&rsquo;ll confirm your slot within minutes.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-primary" target="_blank" rel="noopener" style="background:#25D366;border-color:#25D366;">
            <i class="fab fa-whatsapp"></i> Book via WhatsApp
          </a>
        </div>

        <h2 style="margin-bottom:8px;">Or Fill In the Booking Form</h2>
        <p style="color:var(--grey);margin-bottom:28px;">We&rsquo;ll confirm your appointment via WhatsApp or email within 24 hours.</p>

        <form class="contact-form" id="bookingForm" novalidate>
          <div class="grid-2" style="gap:20px;">
            <div class="form-group">
              <label for="bookFirstName">First Name <span style="color:var(--green-sage);">*</span></label>
              <input type="text" id="bookFirstName" name="firstName" placeholder="e.g. Jane" required>
            </div>
            <div class="form-group">
              <label for="bookLastName">Last Name <span style="color:var(--green-sage);">*</span></label>
              <input type="text" id="bookLastName" name="lastName" placeholder="e.g. Nakamya" required>
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="bookEmail">Email Address <span style="color:var(--green-sage);">*</span></label>
            <input type="email" id="bookEmail" name="email" placeholder="you@example.com" required>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="bookPhone">WhatsApp / Phone Number <span style="color:var(--green-sage);">*</span></label>
            <input type="tel" id="bookPhone" name="phone" placeholder="+256 700 000 000" required>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="serviceType">Service Type <span style="color:var(--green-sage);">*</span></label>
            <select id="serviceType" name="serviceType" required>
              <option value="" disabled selected>Select a service</option>
              <optgroup label="Mental Health">
                <option value="mental-consultation">Mental Health Consultation</option>
                <option value="individual">Individual Therapy</option>
                <option value="couples">Couples Therapy</option>
                <option value="family">Family Therapy</option>
                <option value="group">Group Therapy</option>
                <option value="grief">Grief &amp; Trauma Counselling</option>
                <option value="addiction">Addiction Counselling</option>
                <option value="career">Career &amp; Academic Counselling</option>
              </optgroup>
              <optgroup label="Physical &amp; Hormonal Wellness">
                <option value="physical">Physical Strength &amp; Vitality</option>
                <option value="nutrition">Nutrition &amp; Lifestyle Coaching</option>
                <option value="hormonal">Hormonal Health (PCOS / Perimenopause)</option>
                <option value="children">Children&rsquo;s &amp; Adolescent Development</option>
              </optgroup>
              <optgroup label="Corporate">
                <option value="corporate">Workplace Wellness</option>
                <option value="workshop">Wellness Education &amp; Workshops</option>
              </optgroup>
              <option value="unsure">Not sure — please advise</option>
            </select>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="sessionFormat">Session Format <span style="color:var(--green-sage);">*</span></label>
            <select id="sessionFormat" name="sessionFormat" required>
              <option value="" disabled selected>Select format</option>
              <option value="in-person">In-Person (Ntinda, Kampala)</option>
              <option value="online">Online (Video Call)</option>
              <option value="no-preference">No preference</option>
            </select>
          </div>
          <div class="grid-2" style="gap:20px;margin-top:20px;">
            <div class="form-group">
              <label for="preferredDate">Preferred Date</label>
              <input type="date" id="preferredDate" name="preferredDate">
            </div>
            <div class="form-group">
              <label for="preferredTime">Preferred Time</label>
              <select id="preferredTime" name="preferredTime">
                <option value="" disabled selected>Select time</option>
                <option value="8am-10am">8am &ndash; 10am</option>
                <option value="10am-12pm">10am &ndash; 12pm</option>
                <option value="12pm-2pm">12pm &ndash; 2pm</option>
                <option value="2pm-4pm">2pm &ndash; 4pm</option>
                <option value="4pm-6pm">4pm &ndash; 6pm</option>
              </select>
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="heardAbout">How Did You Hear About Us?</label>
            <select id="heardAbout" name="heardAbout">
              <option value="" disabled selected>Select one</option>
              <option value="google">Google Search</option>
              <option value="social">Social Media</option>
              <option value="referral">Friend / Family Referral</option>
              <option value="doctor">Doctor Referral</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="bookMessage">Additional Information</label>
            <textarea id="bookMessage" name="message" rows="4" placeholder="Briefly describe what you&rsquo;d like to work on (optional, but helps us prepare)..."></textarea>
          </div>
          <div style="margin-top:28px;">
            <button type="submit" class="btn btn-primary" style="width:100%;">Submit Booking Request <i class="fas fa-paper-plane"></i></button>
          </div>
          <p style="font-size:0.78rem;color:var(--grey);margin-top:12px;text-align:center;"><i class="fas fa-lock"></i> Strictly confidential. Your information will never be shared without your consent.</p>
        </form>
      </div>

      <!-- SIDEBAR INFO -->
      <div class="fade-in fade-in-delay-2">
        <h2 style="margin-bottom:24px;">Booking Information</h2>

        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:24px;margin-bottom:24px;">
          <h4 style="margin-bottom:16px;"><i class="fas fa-location-dot" style="color:var(--green-sage);margin-right:8px;"></i>Our Location</h4>
          <p style="color:var(--grey);font-size:0.9rem;margin-bottom:8px;">Emesa Complex, Ntinda<br>Kampala, Uganda</p>
          <p style="color:var(--grey);font-size:0.9rem;">Accessible by boda-boda, taxi, or private car from anywhere in Kampala.</p>
        </div>

        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:24px;margin-bottom:24px;">
          <h4 style="margin-bottom:16px;"><i class="fas fa-clock" style="color:var(--green-sage);margin-right:8px;"></i>Opening Hours</h4>
          <table style="width:100%;font-size:0.9rem;color:var(--grey);">
            <tr><td style="padding:4px 0;"><strong style="color:var(--green-deep);">Monday &ndash; Friday</strong></td><td style="text-align:right;">8am &ndash; 6pm</td></tr>
            <tr><td style="padding:4px 0;"><strong style="color:var(--green-deep);">Saturday</strong></td><td style="text-align:right;">9am &ndash; 4pm</td></tr>
            <tr><td style="padding:4px 0;"><strong style="color:var(--green-deep);">Sunday</strong></td><td style="text-align:right;">By appointment</td></tr>
          </table>
        </div>

        <!-- QR -->
        <div style="background:white;border:2px solid var(--green-mint);border-radius:var(--radius-lg);padding:24px;margin-bottom:24px;text-align:center;">
          <p style="font-weight:600;margin-bottom:12px;">Scan to Book on WhatsApp</p>
          <?php if ( file_exists( THRIVE_DIR . '/images/qr-thrive-location.jpg' ) ) : ?>
            <img src="<?php echo esc_url( THRIVE_URI . '/images/qr-thrive-location.jpg' ); ?>" alt="Thrive WhatsApp QR Code" style="width:130px;height:130px;display:block;margin:0 auto 12px;border-radius:8px;">
          <?php endif; ?>
        </div>

        <!-- CALL BUTTONS -->
        <div style="display:flex;flex-direction:column;gap:12px;">
          <a href="tel:+256775939636" class="btn btn-primary" style="justify-content:center;">
            <i class="fas fa-phone"></i> Call +256 775 939 636
          </a>
          <a href="tel:+256752512999" class="btn" style="background:var(--green-pale);color:var(--green-deep);border:none;justify-content:center;">
            <i class="fas fa-phone"></i> Call +256 752 512 999
          </a>
        </div>

        <div style="background:#F8F9FA;border-radius:var(--radius-lg);padding:20px;margin-top:24px;">
          <h5 style="margin-bottom:8px;"><i class="fas fa-info-circle" style="color:var(--green-sage);margin-right:6px;"></i>What Happens Next?</h5>
          <ol style="padding-left:18px;color:var(--grey);font-size:0.88rem;line-height:1.8;margin:0;">
            <li>We receive your booking request</li>
            <li>Our team contacts you within 24 hours</li>
            <li>We confirm your date, time, and clinician</li>
            <li>You receive a session link (for online) or directions</li>
            <li>Your journey to wellness begins</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Your First Step Starts Here</h2>
    <p class="fade-in">It takes courage to ask for help. We honour that courage — and we&rsquo;re ready to walk this journey with you.</p>
    <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-white fade-in" target="_blank" rel="noopener"><i class="fab fa-whatsapp"></i> Book via WhatsApp</a>
  </div>
</section>

<?php get_footer(); ?>
