<?php get_header(); ?>

<!-- HERO SLIDER -->
<section class="hero-slider" id="heroSlider" aria-label="Homepage hero">
  <div class="slides-track" id="slidesTrack">

    <!-- Slide 1: Mental Health -->
    <div class="slide" style="background-image:linear-gradient(135deg, rgba(26,26,26,0.88) 0%, rgba(42,107,28,0.75) 100%), url('<?php echo esc_url( THRIVE_URI . '/images/therapy-session.jpg' ); ?>');background-size:cover;background-position:center;">
      <div class="container slide-content">
        <div class="slide-tag">Mental Health</div>
        <h1>Are You Carrying More Than You Should?</h1>
        <p>5 signs it may be time to talk to a professional. Our licensed therapists in Kampala offer compassionate, confidential support — in a space where healing is possible.</p>
        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px;">
          <a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>" class="btn btn-primary">Explore Mental Health Services</a>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-outline-white" target="_blank" rel="noopener">Book a Free Consultation</a>
        </div>
      </div>
    </div>

    <!-- Slide 2: Hormonal Health -->
    <div class="slide" style="background-image:linear-gradient(135deg, rgba(26,26,26,0.88) 0%, rgba(42,107,28,0.75) 100%), url('<?php echo esc_url( THRIVE_URI . '/images/womens-wellness-group.jpg' ); ?>');background-size:cover;background-position:center;">
      <div class="container slide-content">
        <div class="slide-tag">Hormonal Health</div>
        <h1>Perimenopause Isn&rsquo;t Just Ageing</h1>
        <p>Your body is sending signals — hot flashes, fatigue, mood shifts. PCOS, irregular cycles, and perimenopause all have answers. We help you find them — naturally.</p>
        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px;">
          <a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>" class="btn btn-primary">Explore Hormonal Health</a>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-outline-white" target="_blank" rel="noopener">Book a Free Consultation</a>
        </div>
      </div>
    </div>

    <!-- Slide 3: Physical Strength -->
    <div class="slide" style="background-image:linear-gradient(135deg, rgba(26,26,26,0.88) 0%, rgba(42,107,28,0.75) 100%), url('<?php echo esc_url( THRIVE_URI . '/images/fitness-class.jpg' ); ?>');background-size:cover;background-position:center;">
      <div class="container slide-content">
        <div class="slide-tag">Physical Strength</div>
        <h1>Strength Training After 40 Changes Everything</h1>
        <p>Build muscle, protect your bones, and reclaim your energy. Our personalized fitness programmes are designed for real Ugandan bodies and busy lives.</p>
        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px;">
          <a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>" class="btn btn-primary">Explore Physical Wellness</a>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-outline-white" target="_blank" rel="noopener">Book a Free Consultation</a>
        </div>
      </div>
    </div>

    <!-- Slide 4: Our Specialists -->
    <div class="slide" style="background-image:linear-gradient(135deg, rgba(26,26,26,0.88) 0%, rgba(42,107,28,0.75) 100%), url('<?php echo esc_url( THRIVE_URI . '/images/group-therapy-workshop.jpg' ); ?>');background-size:cover;background-position:center;">
      <div class="container slide-content">
        <div class="slide-tag">Our Specialists</div>
        <h1>Meet the Minds Behind Thrive</h1>
        <p>A multidisciplinary team of licensed therapists, nutritionists, hormonal health coaches and fitness specialists — united by one mission: your transformation.</p>
        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px;">
          <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="btn btn-primary">Meet Our Team</a>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-outline-white" target="_blank" rel="noopener">Book a Free Consultation</a>
        </div>
      </div>
    </div>

    <!-- Slide 5: Get Started -->
    <div class="slide" style="background-image:linear-gradient(135deg, rgba(26,26,26,0.88) 0%, rgba(42,107,28,0.75) 100%), url('<?php echo esc_url( THRIVE_URI . '/images/patience-office-portrait.jpg' ); ?>');background-size:cover;background-position:center;">
      <div class="container slide-content">
        <div class="slide-tag">Get Started</div>
        <h1>Not Sure Where to Start?</h1>
        <p>Book a free 15-minute consultation. We&rsquo;ll listen, understand your needs, and match you with the right specialist — no commitment required.</p>
        <div style="display:flex;gap:16px;flex-wrap:wrap;margin-top:32px;">
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-primary" target="_blank" rel="noopener">Book a Free Consultation</a>
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline-white">View All Services</a>
        </div>
      </div>
    </div>

  </div><!-- /.slides-track -->

  <!-- Controls -->
  <button class="slide-btn slide-prev" id="slidePrev" aria-label="Previous slide"><i class="fas fa-chevron-left"></i></button>
  <button class="slide-btn slide-next" id="slideNext" aria-label="Next slide"><i class="fas fa-chevron-right"></i></button>
  <div class="slide-dots" id="slideDots">
    <button class="slide-dot active" data-slide="0" aria-label="Slide 1"></button>
    <button class="slide-dot" data-slide="1" aria-label="Slide 2"></button>
    <button class="slide-dot" data-slide="2" aria-label="Slide 3"></button>
    <button class="slide-dot" data-slide="3" aria-label="Slide 4"></button>
    <button class="slide-dot" data-slide="4" aria-label="Slide 5"></button>
  </div>
</section>

<!-- STATS BAND -->
<section class="stats-band">
  <div class="container">
    <div class="stats-grid">
      <div class="stat-item fade-in"><span class="stat-num">500+</span><span class="stat-label">Clients Helped</span></div>
      <div class="stat-item fade-in fade-in-delay-1"><span class="stat-num">8+</span><span class="stat-label">Years Experience</span></div>
      <div class="stat-item fade-in fade-in-delay-2"><span class="stat-num">95%</span><span class="stat-label">Client Satisfaction</span></div>
      <div class="stat-item fade-in fade-in-delay-3"><span class="stat-num">8</span><span class="stat-label">Specialist Services</span></div>
    </div>
  </div>
</section>

<!-- TAGLINE BAND -->
<div class="tagline-band">
  <div class="container">
    <p>&ldquo;Where Mental And Physical Wellness Meet&rdquo;</p>
  </div>
</div>

<!-- SERVICES PREVIEW -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">What We Offer</div>
      <h2>Whole-Person Wellness</h2>
      <p>We don&rsquo;t just talk wellness. We help you transform from tired to thriving — inside and out.</p>
    </div>
    <div class="pillar-preview-grid">
      <div class="pillar-preview-card fade-in fade-in-delay-1">
        <div class="pillar-icon"><i class="fas fa-brain"></i></div>
        <h3>Mental &amp; Emotional Wellness</h3>
        <p>Compassionate, evidence-based integrative therapy for individuals, youth, couples and families navigating stress, anxiety, depression and trauma.</p>
        <a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="pillar-preview-card fade-in fade-in-delay-2">
        <div class="pillar-icon"><i class="fas fa-dumbbell"></i></div>
        <h3>Physical Strength &amp; Vitality</h3>
        <p>Personalized exercise for muscle strength, bone density and hormonal health. Mobility routines and guided fitness plans for beginners and busy lives.</p>
        <a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
      </div>
      <div class="pillar-preview-card fade-in fade-in-delay-3">
        <div class="pillar-icon"><i class="fas fa-venus"></i></div>
        <h3>Hormonal &amp; Holistic Health</h3>
        <p>Hormonal balance coaching, perimenopause care, PCOS, menstrual health, energy and metabolism reset — without medication dependency.</p>
        <a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>" class="service-link">Explore <i class="fas fa-arrow-right"></i></a>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-primary">View All 8 Services <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- WHY THRIVE -->
<section class="section" style="background:var(--green-deep);">
  <div class="container">
    <div class="section-header centered fade-in" style="margin-bottom:48px;">
      <div class="section-label" style="color:var(--green-mint);">Our Philosophy</div>
      <h2 style="color:white;">A Medication-Free Rich Life Approach</h2>
      <p style="color:rgba(255,255,255,0.78);max-width:680px;margin:12px auto 0;">Our mission is to help you regain and maintain optimal health by targeting the root triggers of disease. We prioritise sustainable, lifestyle-based strategies that promote independence, clarity, strength and wellbeing at every stage of life.</p>
    </div>
    <div class="grid-4">
      <div class="why-item fade-in fade-in-delay-1">
        <div class="why-icon"><i class="fas fa-users-gear"></i></div>
        <h4>Licensed Multi-Clinician Practice</h4>
        <p>Led by Ahebwa Keisha Patience — Counselling Psychologist and Public Health Specialist — with a team of credentialed specialists across all disciplines.</p>
      </div>
      <div class="why-item fade-in fade-in-delay-2">
        <div class="why-icon"><i class="fas fa-lock"></i></div>
        <h4>100% Confidential</h4>
        <p>Everything shared in your sessions stays between you and your clinician. Your privacy and dignity are protected at every step.</p>
      </div>
      <div class="why-item fade-in fade-in-delay-3">
        <div class="why-icon"><i class="fas fa-heart-pulse"></i></div>
        <h4>Integrative, Whole-Person Care</h4>
        <p>We address mind, body and hormones together — not in isolation — for lasting, sustainable transformation.</p>
      </div>
      <div class="why-item fade-in fade-in-delay-4">
        <div class="why-icon"><i class="fas fa-video"></i></div>
        <h4>In-Person &amp; Online Sessions</h4>
        <p>Visit our Ntinda clinic or connect from anywhere in Uganda and beyond via secure online sessions.</p>
      </div>
    </div>
  </div>
</section>

<!-- MEET OUR TEAM -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Meet Our Team</div>
      <h2>Expert Specialists, One Shared Mission</h2>
      <p>Our multidisciplinary specialists are here for you — each one trained, certified, and deeply committed to your wellbeing.</p>
    </div>
    <div class="grid-4">
      <!-- Founder -->
      <div class="team-card fade-in fade-in-delay-1">
        <div class="team-photo" style="position:relative;">
          <img src="<?php echo esc_url( THRIVE_URI . '/images/patience-office-portrait.jpg' ); ?>" alt="Ahebwa Keisha Patience — Founder">
          <span style="position:absolute;top:12px;left:12px;background:var(--green-sage);color:white;font-size:0.7rem;font-weight:700;padding:4px 10px;border-radius:50px;text-transform:uppercase;letter-spacing:0.05em;">Founder &amp; Lead Clinician</span>
        </div>
        <div class="team-body">
          <h4>Ahebwa Keisha Patience</h4>
          <p class="team-role">Counselling Psychologist</p>
          <p style="font-size:0.82rem;color:var(--grey);margin-top:6px;">MSc Public Health &middot; Trauma-informed therapy &middot; Integrative wellness &mdash; 8+ years serving Kampala.</p>
        </div>
      </div>
      <!-- Nutrition -->
      <div class="team-card fade-in fade-in-delay-2">
        <div class="team-photo" style="background:var(--green-pale);display:flex;align-items:center;justify-content:center;aspect-ratio:4/3;">
          <i class="fas fa-apple-whole" style="font-size:3.5rem;color:var(--green-sage);"></i>
        </div>
        <div class="team-body">
          <h4>Nutrition &amp; Lifestyle Specialist</h4>
          <p class="team-role">BSc Nutrition &amp; Dietetics</p>
          <p style="font-size:0.82rem;color:var(--grey);margin-top:6px;">Specialising in hormonal nutrition, PCOS dietary management, gut health and metabolic reset for Ugandan women.</p>
        </div>
      </div>
      <!-- Fitness -->
      <div class="team-card fade-in fade-in-delay-3">
        <div class="team-photo" style="background:var(--green-pale);display:flex;align-items:center;justify-content:center;aspect-ratio:4/3;">
          <i class="fas fa-dumbbell" style="font-size:3.5rem;color:var(--green-sage);"></i>
        </div>
        <div class="team-body">
          <h4>Physical Strength &amp; Fitness Coach</h4>
          <p class="team-role">Certified Personal Trainer</p>
          <p style="font-size:0.82rem;color:var(--grey);margin-top:6px;">Strength training, post-partum recovery, bone density, cardiovascular health and mobility coaching.</p>
        </div>
      </div>
      <!-- Placeholder -->
      <div class="team-card fade-in fade-in-delay-4" style="border:2px dashed var(--border);box-shadow:none;background:transparent;">
        <div class="team-photo" style="background:#F8F9FA;display:flex;align-items:center;justify-content:center;aspect-ratio:4/3;">
          <i class="fas fa-plus" style="font-size:2.5rem;color:var(--green-mint);"></i>
        </div>
        <div class="team-body">
          <h4 style="color:var(--grey);">Expanding Our Team</h4>
          <p style="font-size:0.82rem;color:var(--grey);margin-top:6px;">New specialists joining Thrive in 2026. Watch this space.</p>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" class="btn btn-primary">Meet Our Full Team <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- TESTIMONIALS -->
<section class="section section-green">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Voices of Healing</div>
      <h2>Real Words from Real People</h2>
      <p>Real words from real people who chose to begin their wellness journey with us.</p>
    </div>
    <div class="grid-3">
      <div class="testimonial-card fade-in fade-in-delay-1">
        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <blockquote>&ldquo;The workouts are simple but powerful. My energy and sleep have improved so much — I feel like myself again.&rdquo;</blockquote>
        <div class="testimonial-author">
          <div class="testimonial-avatar">AC</div>
          <div><strong>Anonymous Client</strong><span>Kampala, Uganda</span></div>
        </div>
      </div>
      <div class="testimonial-card fade-in fade-in-delay-2">
        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <blockquote>&ldquo;Therapy here gave me back my mental peace and body confidence. I didn&rsquo;t think healing was possible — I was wrong.&rdquo;</blockquote>
        <div class="testimonial-author">
          <div class="testimonial-avatar">AC</div>
          <div><strong>Anonymous Client</strong><span>Ntinda, Kampala</span></div>
        </div>
      </div>
      <div class="testimonial-card fade-in fade-in-delay-3">
        <div class="stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
        <blockquote>&ldquo;Finally found support for my hormones and emotions without shame. The team at Thrive creates a safe space unlike anything I&rsquo;ve experienced.&rdquo;</blockquote>
        <div class="testimonial-author">
          <div class="testimonial-avatar">AC</div>
          <div><strong>Anonymous Client</strong><span>Uganda</span></div>
        </div>
      </div>
    </div>
    <div style="text-align:center;margin-top:36px;">
      <a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" class="btn btn-primary">Read More Stories <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- WELLNESS SHOP TEASER -->
<section class="section">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Thrive Wellness Shop</div>
      <h2>Support Your Healing at Home</h2>
      <p>Curated supplements, self-care products and books &mdash; recommended by our clinicians and delivered to you across Uganda.</p>
    </div>
    <div class="shop-teaser-grid">
      <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="shop-teaser-card fade-in fade-in-delay-1">
        <img src="https://images.pexels.com/photos/3683041/pexels-photo-3683041.jpeg?auto=compress&cs=tinysrgb&w=500&h=500&fit=crop" alt="Magnesium Glycinate" loading="lazy">
        <div class="shop-teaser-card-body"><h4>Magnesium Glycinate</h4><div class="price">UGX 45,000</div></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="shop-teaser-card fade-in fade-in-delay-2">
        <img src="https://images.pexels.com/photos/3735162/pexels-photo-3735162.jpeg?auto=compress&cs=tinysrgb&w=500&h=500&fit=crop" alt="Aromatherapy Self-Care Kit" loading="lazy">
        <div class="shop-teaser-card-body"><h4>Aromatherapy Self-Care Kit</h4><div class="price">UGX 85,000</div></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="shop-teaser-card fade-in fade-in-delay-3">
        <img src="https://images.pexels.com/photos/590493/pexels-photo-590493.jpeg?auto=compress&cs=tinysrgb&w=500&h=500&fit=crop" alt="Wellness Journal &amp; Workbook" loading="lazy">
        <div class="shop-teaser-card-body"><h4>Wellness Journal &amp; Workbook</h4><div class="price">UGX 35,000</div></div>
      </a>
      <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="shop-teaser-card fade-in fade-in-delay-4">
        <img src="https://images.pexels.com/photos/4046316/pexels-photo-4046316.jpeg?auto=compress&cs=tinysrgb&w=500&h=500&fit=crop" alt="Hormonal Balance Supplement" loading="lazy">
        <div class="shop-teaser-card-body"><h4>Hormonal Balance Supplement</h4><div class="price">UGX 65,000</div></div>
      </a>
    </div>
    <div style="text-align:center;margin-top:40px;">
      <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" class="btn btn-primary">Browse the Wellness Shop <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- LIFE AT THRIVE GALLERY -->
<section class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Our Clinic</div>
      <h2>Life at Thrive</h2>
      <p>From our warm, welcoming clinic to vibrant community sessions — this is where transformation happens.</p>
    </div>
    <div class="gallery-grid">
      <div class="gallery-item fade-in fade-in-delay-1" style="grid-row:span 2;">
        <img src="<?php echo esc_url( THRIVE_URI . '/images/thrive-reception.jpg' ); ?>" alt="Thrive Therapy reception" loading="lazy">
      </div>
      <div class="gallery-item fade-in fade-in-delay-2">
        <img src="<?php echo esc_url( THRIVE_URI . '/images/group-therapy-workshop.jpg' ); ?>" alt="Group therapy workshop" loading="lazy">
      </div>
      <div class="gallery-item fade-in fade-in-delay-3">
        <img src="<?php echo esc_url( THRIVE_URI . '/images/womens-wellness-group.jpg' ); ?>" alt="Women&rsquo;s wellness group" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- LOCATION BAND -->
<section class="section" style="background:var(--green-deep);padding:64px 0;">
  <div class="container">
    <div class="grid-2" style="gap:64px;align-items:center;">
      <div class="fade-in">
        <div class="section-label" style="color:var(--green-mint);">Visit Us</div>
        <h2 style="color:white;margin-top:8px;">Visit Our Ntinda Clinic</h2>
        <p style="color:rgba(255,255,255,0.78);margin-top:16px;">Emesa Complex, Opposite Kampala Independent Hospital, Ntinda, Kampala.</p>
        <div style="display:flex;flex-direction:column;gap:12px;margin-top:28px;">
          <div style="display:flex;align-items:center;gap:12px;color:rgba(255,255,255,0.85);font-size:0.92rem;">
            <i class="fas fa-phone" style="color:var(--green-sage);width:16px;"></i>
            <a href="tel:+256775939636" style="color:inherit;">+256 775 939 636</a>
          </div>
          <div style="display:flex;align-items:center;gap:12px;color:rgba(255,255,255,0.85);font-size:0.92rem;">
            <i class="fas fa-phone" style="color:var(--green-sage);width:16px;"></i>
            <a href="tel:+256752512999" style="color:inherit;">+256 752 512 999</a>
          </div>
          <div style="display:flex;align-items:center;gap:12px;color:rgba(255,255,255,0.85);font-size:0.92rem;">
            <i class="fas fa-envelope" style="color:var(--green-sage);width:16px;"></i>
            <a href="mailto:info@thriveug.com" style="color:inherit;">info@thriveug.com</a>
          </div>
          <div style="display:flex;align-items:center;gap:12px;color:rgba(255,255,255,0.85);font-size:0.92rem;">
            <i class="fas fa-clock" style="color:var(--green-sage);width:16px;"></i>
            <span>Mon&ndash;Fri: 8am&ndash;6pm &nbsp;|&nbsp; Sat: 9am&ndash;3pm &nbsp;|&nbsp; Sun: Closed</span>
          </div>
        </div>
        <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-primary" style="margin-top:28px;">Get Directions</a>
      </div>
      <div class="fade-in fade-in-delay-2" style="text-align:center;">
        <?php if ( file_exists( THRIVE_DIR . '/images/qr-thrive-location.jpg' ) ) : ?>
          <img src="<?php echo esc_url( THRIVE_URI . '/images/qr-thrive-location.jpg' ); ?>" alt="Scan to find us on WhatsApp" style="width:180px;height:180px;border-radius:16px;box-shadow:0 8px 32px rgba(0,0,0,0.3);margin-bottom:16px;display:block;margin-left:auto;margin-right:auto;">
        <?php endif; ?>
        <p style="color:rgba(255,255,255,0.7);font-size:0.85rem;">Scan to Book via WhatsApp</p>
        <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn" style="margin-top:12px;background:#25D366;color:white;border:none;" target="_blank" rel="noopener">
          <i class="fab fa-whatsapp"></i> Chat on WhatsApp
        </a>
      </div>
    </div>
  </div>
</section>

<!-- CTA BANNER -->
<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Transform from Tired to Thriving</h2>
    <p class="fade-in">Take the first step today. Book a free consultation and let us match you with the right specialist — no commitment required.</p>
    <div class="fade-in" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-white" target="_blank" rel="noopener">Book a Free Consultation</a>
      <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-outline" style="color:white;border-color:rgba(255,255,255,0.5);">View Our Services</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
