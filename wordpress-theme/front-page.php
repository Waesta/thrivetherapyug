<?php
/**
 * Front page template — Thrive Therapy & Wellness
 * Mirrors the GitHub/Vercel static version exactly.
 */
get_header();
$_uri = get_template_directory_uri();
$_wa  = 'https://wa.me/256775939636?text=Hello%20Thrive%20Therapy%20%26%20Wellness%2C%0A%0AI%27d%20like%20to%20book%20a%20session.%20Please%20advise%20on%20available%20times.%0A%0AThank%20you.';
?>

<!-- HERO — SPLIT LAYOUT -->
<section class="hero">
  <div class="hero-panel">
    <div class="hero-blob"></div>
    <div class="hero-blob-2"></div>
    <div class="container">
      <div class="hero-content">
        <div class="hero-tag"><i class="fas fa-leaf"></i> Ntinda, Kampala &middot; Uganda</div>
        <h1>Reboot Your Life &mdash;<br><em>Mind, Body &amp; Hormones</em></h1>
        <p>Strong body. Clear mind. Balanced hormones. At Thrive Therapy &amp; Wellness we address mental health, nutrition, physical strength and hormonal wellbeing &mdash; all under one roof.</p>
        <div class="hero-actions">
          <a href="<?php echo esc_url( $_wa ); ?>" class="btn btn-white" target="_blank" rel="noopener">Book a Free Consultation <i class="fas fa-arrow-right"></i></a>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">Our Services</a>
        </div>
        <div class="hero-stats">
          <div class="stat-item">
            <div class="stat-num" data-target="500" data-suffix="+">500+</div>
            <div class="stat-label">Clients Helped</div>
          </div>
          <div class="stat-item">
            <div class="stat-num" data-target="8" data-suffix="+">8+</div>
            <div class="stat-label">Years Experience</div>
          </div>
          <div class="stat-item">
            <div class="stat-num" data-target="95" data-suffix="%">95%</div>
            <div class="stat-label">Client Satisfaction</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hero-photo">
    <img src="<?php echo esc_url( $_uri . '/images/patience-office-portrait.jpg' ); ?>" alt="Patience Ahebwa &mdash; Founder, Thrive Therapy &amp; Wellness" loading="eager" />
    <div class="hero-trust-badge">
      <i class="fas fa-shield-heart"></i>
      <div>
        <strong>100% Confidential</strong>
        <span>Licensed &amp; certified clinician</span>
      </div>
    </div>
  </div>
</section>

<!-- TAGLINE BAND -->
<div style="background:var(--green-sage);padding:20px 0;text-align:center;">
  <p style="color:white;font-family:var(--font-display);font-size:1.2rem;font-weight:600;letter-spacing:0.12em;text-transform:uppercase;margin:0;">
    Where Mental And Physical Wellness Meet
  </p>
</div>

<!-- SERVICES PREVIEW -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">What We Offer</div>
      <h2>Whole-Person Wellness</h2>
      <p>We don't just talk wellness. We help you transform from tired to thriving &mdash; inside and out.</p>
    </div>
    <div class="grid-3">
      <div class="card fade-in fade-in-delay-1">
        <div class="card-icon"><i class="fas fa-brain"></i></div>
        <h3>Mental &amp; Emotional Wellness</h3>
        <p>Compassionate, evidence-based integrative therapy for individuals, youth, couples and families navigating stress, anxiety, depression and trauma.</p>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color:var(--green-sage);font-weight:600;display:inline-flex;align-items:center;gap:6px;margin-top:16px;font-size:0.9rem;">Learn more <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="card fade-in fade-in-delay-2">
        <div class="card-icon"><i class="fas fa-dumbbell"></i></div>
        <h3>Physical Strength &amp; Vitality</h3>
        <p>Personalized exercise for muscle strength, bone density and hormonal health. Mobility routines and guided fitness plans for beginners and busy lives.</p>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color:var(--green-sage);font-weight:600;display:inline-flex;align-items:center;gap:6px;margin-top:16px;font-size:0.9rem;">Learn more <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="card fade-in fade-in-delay-3">
        <div class="card-icon"><i class="fas fa-venus"></i></div>
        <h3>Hormonal &amp; Holistic Health</h3>
        <p>Hormonal balance coaching, perimenopause and post-menopausal care, PCOS, menstrual health, energy and metabolism reset &mdash; without medication dependency.</p>
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color:var(--green-sage);font-weight:600;display:inline-flex;align-items:center;gap:6px;margin-top:16px;font-size:0.9rem;">Learn more <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <div style="text-align:center;margin-top:48px;" class="fade-in">
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline">View All Services</a>
    </div>
  </div>
</section>

<!-- WHY THRIVE -->
<section class="section section-dark">
  <div class="container">
    <div class="grid-2" style="gap:64px;">
      <div class="fade-in">
        <div class="section-label" style="color:var(--green-mint);">Why Thrive</div>
        <h2 style="color:white;margin-bottom:20px;">A Medication-Free <em>Rich Life</em> Approach</h2>
        <p style="color:rgba(255,255,255,0.72);margin-bottom:36px;">Our mission is to help you regain and maintain optimal health by targeting the root triggers of disease. We prioritise sustainable, lifestyle-based strategies that promote independence, clarity, strength and wellbeing at every stage of life.</p>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-white">Meet Patience Ahebwa <i class="fas fa-arrow-right"></i></a>
      </div>
      <div style="display:flex;flex-direction:column;gap:16px;">
        <div class="why-item fade-in fade-in-delay-1">
          <div class="why-icon"><i class="fas fa-graduation-cap"></i></div>
          <div>
            <h4>Clinician &amp; Public Health Specialist</h4>
            <p>Led by Patience Ahebwa &mdash; Counselling Psychologist and Public Health Specialist with deep clinical expertise.</p>
          </div>
        </div>
        <div class="why-item fade-in fade-in-delay-2">
          <div class="why-icon"><i class="fas fa-lock"></i></div>
          <div>
            <h4>100% Confidential</h4>
            <p>Everything shared in your sessions stays between you and your therapist. Your privacy is sacred.</p>
          </div>
        </div>
        <div class="why-item fade-in fade-in-delay-3">
          <div class="why-icon"><i class="fas fa-leaf"></i></div>
          <div>
            <h4>Integrative, Whole-Person Care</h4>
            <p>We address mind, body and hormones together &mdash; not in isolation &mdash; for lasting, sustainable transformation.</p>
          </div>
        </div>
        <div class="why-item fade-in fade-in-delay-4">
          <div class="why-icon"><i class="fas fa-map-location-dot"></i></div>
          <div>
            <h4>In-Person &amp; Online Sessions</h4>
            <p>Visit our Ntinda clinic or connect from anywhere in Uganda and beyond via secure online sessions.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- TESTIMONIALS PREVIEW -->
<section class="section">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Client Stories</div>
      <h2>Voices of Healing</h2>
      <p>Real words from real people who chose to begin their wellness journey with us.</p>
    </div>
    <div class="grid-3">
      <div class="testimonial-card fade-in fade-in-delay-1">
        <div class="quote-mark">&ldquo;</div>
        <p class="testimonial-text">The workouts are simple but powerful. My energy and sleep have improved so much &mdash; I feel like myself again.</p>
        <div class="testimonial-author">
          <div class="author-avatar">A</div>
          <div>
            <div class="author-name">Anonymous Client</div>
            <div class="author-location">Kampala, Uganda</div>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card fade-in fade-in-delay-2">
        <div class="quote-mark">&ldquo;</div>
        <p class="testimonial-text">Therapy sessions here gave me back my mental peace and body confidence. I didn't think healing was possible &mdash; I was wrong.</p>
        <div class="testimonial-author">
          <div class="author-avatar">B</div>
          <div>
            <div class="author-name">Anonymous Client</div>
            <div class="author-location">Ntinda, Kampala</div>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          </div>
        </div>
      </div>
      <div class="testimonial-card fade-in fade-in-delay-3">
        <div class="quote-mark">&ldquo;</div>
        <p class="testimonial-text">Finally found support for my hormones and emotions without shame. Patience creates a safe space unlike anything I've experienced.</p>
        <div class="testimonial-author">
          <div class="author-avatar">C</div>
          <div>
            <div class="author-name">Anonymous Client</div>
            <div class="author-location">Uganda</div>
            <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
          </div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:48px;" class="fade-in">
      <a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" class="btn btn-outline">Read More Stories</a>
    </div>
  </div>
</section>

<!-- LIFE AT THRIVE GALLERY -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Real Moments</div>
      <h2>Life at Thrive</h2>
      <p>From our warm, welcoming clinic to vibrant community sessions &mdash; this is where transformation happens.</p>
    </div>
    <div class="grid-3" style="gap:20px;">
      <div class="fade-in fade-in-delay-1" style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:4/3;box-shadow:var(--shadow);">
        <img src="<?php echo esc_url( $_uri . '/images/thrive-reception.jpg' ); ?>"
             alt="Thrive Therapy &amp; Wellness welcoming reception"
             loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;"
             onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'" />
      </div>
      <div class="fade-in fade-in-delay-2" style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:4/3;box-shadow:var(--shadow);">
        <img src="<?php echo esc_url( $_uri . '/images/group-therapy-workshop.jpg' ); ?>"
             alt="Group therapy and wellness workshop session"
             loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;"
             onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'" />
      </div>
      <div class="fade-in fade-in-delay-3" style="border-radius:var(--radius-lg);overflow:hidden;aspect-ratio:4/3;box-shadow:var(--shadow);">
        <img src="<?php echo esc_url( $_uri . '/images/womens-wellness-group.jpg' ); ?>"
             alt="Women's wellness group gathering"
             loading="lazy" style="width:100%;height:100%;object-fit:cover;display:block;transition:transform 0.4s ease;"
             onmouseover="this.style.transform='scale(1.04)'" onmouseout="this.style.transform='scale(1)'" />
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;" class="fade-in">
      <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" class="btn btn-outline">Meet Our Team &amp; See Our Clinic</a>
    </div>
  </div>
</section>

<!-- LOCATION BAND -->
<section class="section section-green">
  <div class="container">
    <div class="grid-2" style="gap:56px;align-items:center;">
      <div class="fade-in">
        <div class="section-label">Find Us</div>
        <h2>Visit Our Ntinda Clinic</h2>
        <p style="margin-top:16px;">Emesa Complex, Opposite Kampala Independent Hospital, Ntinda, Kampala.</p>
        <div style="display:flex;flex-direction:column;gap:14px;margin-top:28px;">
          <a href="tel:+256775939636" style="display:flex;align-items:center;gap:12px;font-weight:500;color:var(--green-deep);"><i class="fas fa-phone" style="color:var(--green-sage);width:20px;"></i> +256 775 939 636</a>
          <a href="tel:+256752512999" style="display:flex;align-items:center;gap:12px;font-weight:500;color:var(--green-deep);"><i class="fas fa-phone" style="color:var(--green-sage);width:20px;"></i> +256 752 512 999</a>
          <a href="mailto:info@thriveug.com" style="display:flex;align-items:center;gap:12px;font-weight:500;color:var(--green-deep);"><i class="fas fa-envelope" style="color:var(--green-sage);width:20px;"></i> info@thriveug.com</a>
          <span style="display:flex;align-items:center;gap:12px;color:var(--grey);"><i class="fas fa-clock" style="color:var(--green-sage);width:20px;"></i> Mon &ndash; Sat: 8am &ndash; 6pm</span>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="margin-top:32px;">Get Directions &amp; Contact <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="fade-in fade-in-delay-2" style="text-align:center;">
        <p style="font-size:0.85rem;color:var(--grey);margin-bottom:16px;text-transform:uppercase;letter-spacing:0.1em;font-weight:600;">Scan to find us</p>
        <img src="<?php echo esc_url( $_uri . '/images/thrive-qrcode.jpg' ); ?>"
             alt="Thrive Therapy &amp; Wellness &mdash; Scan for location"
             style="max-width:220px;margin:0 auto;border-radius:16px;box-shadow:var(--shadow);" />
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Transform from Tired to Thriving</h2>
    <p class="fade-in">Take the first step today. Book a free 15-minute consultation with Patience Ahebwa and let us match you with the right support.</p>
    <div class="fade-in" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( $_wa ); ?>" class="btn btn-white" target="_blank" rel="noopener">Book a Free Consultation</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline" style="color:white;border-color:rgba(255,255,255,0.5);">Get in Touch</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
