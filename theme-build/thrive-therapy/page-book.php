<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Book a Session</div>
    <h1>Book Your Session</h1>
    <p>Fill in the form and we&rsquo;ll confirm your booking within 24 hours. All sessions are fully confidential.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="grid-2" style="gap:64px;align-items:flex-start;">

      <!-- BOOKING FORM -->
      <div class="fade-in">

        <!-- WHATSAPP QUICK BOOK -->
        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:28px;margin-bottom:36px;border:2px solid var(--green-mint);">
          <h4 style="display:flex;align-items:center;gap:10px;margin-bottom:12px;">
            <i class="fab fa-whatsapp" style="font-size:1.6rem;color:#25D366;"></i>Book Instantly via WhatsApp
          </h4>
          <p style="color:var(--grey);font-size:0.88rem;margin-bottom:16px;">Choose your service and tap — WhatsApp opens with your request ready. We respond within minutes during clinic hours.</p>
          <div class="form-group" style="margin-bottom:12px;">
            <select id="waService" style="width:100%;padding:12px 16px;border:1px solid var(--border);border-radius:var(--radius);font-size:0.9rem;font-family:var(--font-body);color:var(--green-deep);">
              <option value="">Select a service to book via WhatsApp</option>
              <option value="Mental+Health+Consultation">Mental Health Consultation</option>
              <option value="Individual+Therapy">Individual Therapy</option>
              <option value="Couples+Therapy">Couples Therapy</option>
              <option value="Family+Therapy">Family Therapy</option>
              <option value="Group+Therapy">Group Therapy</option>
              <option value="Stress+%26+Grief+Counseling">Stress &amp; Grief Counseling</option>
              <option value="Trauma+Counseling">Trauma Counseling</option>
              <option value="Addiction+Counseling">Addiction Counseling</option>
              <option value="Career+%26+Academic+Counseling">Career &amp; Academic Counseling</option>
              <option value="HIV%2FAIDS+Counselling">HIV/AIDS Counselling</option>
              <option value="Sexual+%26+Reproductive+Health">Sexual &amp; Reproductive Health</option>
              <option value="Hormonal+Health+(PCOS+%2F+Perimenopause)">Hormonal Health (PCOS / Perimenopause)</option>
              <option value="Physical+Strength+%26+Vitality">Physical Strength &amp; Vitality</option>
              <option value="Nutrition+%26+Lifestyle+Coaching">Nutrition &amp; Lifestyle Coaching</option>
              <option value="Workplace+Wellness">Workplace Wellness</option>
              <option value="Online+Therapy+Session">Online Therapy Session</option>
            </select>
          </div>
          <a id="waBookBtn" href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-primary" target="_blank" rel="noopener" style="background:#25D366;border-color:#25D366;width:100%;justify-content:center;">
            <i class="fab fa-whatsapp"></i> Book via WhatsApp
          </a>
        </div>

        <div class="section-label">Appointment Form</div>
        <h2 style="margin-bottom:8px;">Schedule Your Session</h2>
        <p style="color:var(--grey);margin-bottom:28px;">All sessions are confidential. We respond within 24 hours.</p>

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
            <label for="bookPhone">Phone Number <span style="color:var(--green-sage);">*</span></label>
            <input type="tel" id="bookPhone" name="phone" placeholder="+256 700 000 000" required>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="serviceType">Service Type <span style="color:var(--green-sage);">*</span></label>
            <select id="serviceType" name="serviceType" required>
              <option value="" disabled selected>Select a service</option>
              <optgroup label="Mental Health">
                <option>Mental Health Consultation</option>
                <option>Individual Therapy</option>
                <option>Couples Therapy</option>
                <option>Family Therapy</option>
                <option>Group Therapy</option>
                <option>Stress &amp; Grief Counseling</option>
                <option>Trauma Counseling</option>
                <option>Addiction Counseling</option>
                <option>Career &amp; Academic Counseling</option>
                <option>HIV/AIDS Counselling</option>
              </optgroup>
              <optgroup label="Physical &amp; Hormonal Wellness">
                <option>Sexual &amp; Reproductive Health</option>
                <option>Hormonal Health (PCOS / Perimenopause)</option>
                <option>Physical Strength &amp; Vitality</option>
                <option>Nutrition &amp; Lifestyle Coaching</option>
              </optgroup>
              <optgroup label="Corporate &amp; Group">
                <option>Workplace Wellness</option>
                <option>Online Therapy Session</option>
              </optgroup>
              <option value="unsure">Not sure — please advise</option>
            </select>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="sessionFormat">Session Format <span style="color:var(--green-sage);">*</span></label>
            <select id="sessionFormat" name="sessionFormat" required>
              <option value="" disabled selected>Select format</option>
              <option value="in-person">In-Person — Emesa Complex, Ntinda</option>
              <option value="online">Online (Video Call)</option>
            </select>
          </div>
          <div class="grid-2" style="gap:20px;margin-top:20px;">
            <div class="form-group">
              <label for="preferredDate">Preferred Date <span style="color:var(--green-sage);">*</span></label>
              <input type="date" id="preferredDate" name="preferredDate" required>
            </div>
            <div class="form-group">
              <label for="preferredTime">Preferred Time</label>
              <select id="preferredTime" name="preferredTime">
                <option value="" disabled selected>Select time</option>
                <option>8:00 AM</option>
                <option>9:00 AM</option>
                <option>10:00 AM</option>
                <option>11:00 AM</option>
                <option>12:00 PM</option>
                <option>1:00 PM</option>
                <option>2:00 PM</option>
                <option>3:00 PM</option>
                <option>4:00 PM</option>
                <option>5:00 PM</option>
              </select>
            </div>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="heardAbout">How did you hear about us?</label>
            <select id="heardAbout" name="heardAbout">
              <option value="" disabled selected>Select one</option>
              <option value="google">Google Search</option>
              <option value="facebook">Facebook</option>
              <option value="instagram">Instagram</option>
              <option value="referral">Referred by a friend</option>
              <option value="whatsapp">WhatsApp</option>
              <option value="other">Other</option>
            </select>
          </div>
          <div class="form-group" style="margin-top:20px;">
            <label for="bookMessage">What would you like to work on? <span style="color:var(--grey);font-weight:400;">(Optional)</span></label>
            <textarea id="bookMessage" name="message" rows="4" placeholder="Briefly describe what you&rsquo;d like to work on (helps us prepare for your session)..."></textarea>
          </div>
          <div style="margin-top:20px;display:flex;align-items:flex-start;gap:10px;">
            <input type="checkbox" id="privacyCheck" name="privacy" required style="margin-top:3px;flex-shrink:0;">
            <label for="privacyCheck" style="font-size:0.85rem;color:var(--grey);font-weight:400;">I understand that all sessions are confidential and agree to Thrive Therapy &amp; Wellness&rsquo;s <a href="<?php echo esc_url( home_url( '/privacy-policy/' ) ); ?>" style="color:var(--green-sage);">Privacy Policy</a>.</label>
          </div>
          <div style="margin-top:28px;">
            <button type="submit" class="btn btn-primary" style="width:100%;">Book My Session <i class="fas fa-calendar-check"></i></button>
          </div>
          <p style="font-size:0.78rem;color:var(--grey);margin-top:12px;text-align:center;"><i class="fas fa-lock"></i> Strictly confidential. Your information will never be shared without your consent.</p>
        </form>
      </div>

      <!-- SIDEBAR INFO -->
      <div class="fade-in fade-in-delay-2">
        <h2 style="margin-bottom:24px;">Booking Information</h2>

        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:24px;margin-bottom:20px;">
          <h4 style="margin-bottom:12px;"><i class="fas fa-location-dot" style="color:var(--green-sage);margin-right:8px;"></i>Our Location</h4>
          <p style="color:var(--grey);font-size:0.9rem;line-height:1.7;">Emesa Complex<br>Opposite Kampala Independent Hospital<br>Ntinda, Kampala, Uganda</p>
        </div>

        <div style="background:var(--green-pale);border-radius:var(--radius-lg);padding:24px;margin-bottom:20px;">
          <h4 style="margin-bottom:12px;"><i class="fas fa-clock" style="color:var(--green-sage);margin-right:8px;"></i>Clinic Hours</h4>
          <table style="width:100%;font-size:0.88rem;color:var(--grey);">
            <tr><td style="padding:4px 0;"><strong style="color:var(--green-deep);">Monday &ndash; Friday</strong></td><td style="text-align:right;">8:00 AM &ndash; 6:00 PM</td></tr>
            <tr><td style="padding:4px 0;"><strong style="color:var(--green-deep);">Saturday</strong></td><td style="text-align:right;">9:00 AM &ndash; 3:00 PM</td></tr>
            <tr><td style="padding:4px 0;"><strong style="color:var(--green-deep);">Sunday</strong></td><td style="text-align:right;">Closed</td></tr>
          </table>
        </div>

        <?php if ( file_exists( THRIVE_DIR . '/images/qr-thrive-location.jpg' ) ) : ?>
        <div style="background:white;border:2px solid var(--green-mint);border-radius:var(--radius-lg);padding:20px;margin-bottom:20px;text-align:center;">
          <p style="font-weight:600;margin-bottom:10px;font-size:0.9rem;">Scan to Book on WhatsApp</p>
          <img src="<?php echo esc_url( THRIVE_URI . '/images/qr-thrive-location.jpg' ); ?>" alt="Thrive WhatsApp QR Code" style="width:130px;height:130px;display:block;margin:0 auto;border-radius:8px;">
        </div>
        <?php endif; ?>

        <div style="margin-bottom:20px;">
          <h4 style="margin-bottom:12px;"><i class="fas fa-phone" style="color:var(--green-sage);margin-right:8px;"></i>Need to Talk Now?</h4>
          <p style="color:var(--grey);font-size:0.88rem;margin-bottom:12px;">Call or WhatsApp us directly to book or ask any questions.</p>
          <div style="display:flex;flex-direction:column;gap:10px;">
            <a href="tel:+256775939636" class="btn btn-primary" style="justify-content:center;">
              <i class="fas fa-phone"></i> +256 775 939 636
            </a>
            <a href="tel:+256752512999" class="btn" style="background:var(--green-pale);color:var(--green-deep);border:none;justify-content:center;">
              <i class="fas fa-phone"></i> +256 752 512 999
            </a>
          </div>
        </div>

        <div style="background:#F8F9FA;border-radius:var(--radius-lg);padding:20px;">
          <h5 style="margin-bottom:10px;"><i class="fas fa-info-circle" style="color:var(--green-sage);margin-right:6px;"></i>What Happens Next?</h5>
          <ol style="padding-left:18px;color:var(--grey);font-size:0.85rem;line-height:1.9;margin:0;">
            <li>We receive your booking request</li>
            <li>Our team contacts you within 24 hours</li>
            <li>We confirm your date, time &amp; clinician</li>
            <li>You receive session link (online) or directions</li>
            <li>Your wellness journey begins</li>
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

<script>
(function(){
  var sel = document.getElementById('waService');
  var btn = document.getElementById('waBookBtn');
  if(!sel || !btn) return;
  var base = '<?php echo esc_js( "https://wa.me/256775939636?text=Hello+Thrive+Therapy+%26+Wellness%2C%0A%0AI'd+like+to+book+a+session+for%3A+" ); ?>';
  sel.addEventListener('change', function(){
    if(this.value) btn.href = base + this.value;
  });
})();
</script>

<?php get_footer(); ?>
