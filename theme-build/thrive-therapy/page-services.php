<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Services</div>
    <h1>Our Wellness Services</h1>
    <p>Comprehensive, whole-person care — mental health, physical vitality, and hormonal wellness under one roof.</p>
  </div>
</section>

<!-- PILLAR INTRO -->
<section style="background:var(--green-deep);padding:56px 0;">
  <div class="container">
    <div class="pillar-grid">
      <div class="pillar-item fade-in" style="padding:32px 24px;border-right:1px solid rgba(255,255,255,0.1);">
        <i class="fas fa-brain" style="font-size:2rem;color:var(--green-sage);margin-bottom:16px;display:block;"></i>
        <h3 style="color:white;font-size:1.2rem;margin-bottom:8px;">Mental &amp; Emotional Wellness</h3>
        <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;">Therapy, counselling &amp; psychological support</p>
      </div>
      <div class="pillar-item fade-in fade-in-delay-1" style="padding:32px 24px;border-right:1px solid rgba(255,255,255,0.1);">
        <i class="fas fa-dumbbell" style="font-size:2rem;color:var(--green-sage);margin-bottom:16px;display:block;"></i>
        <h3 style="color:white;font-size:1.2rem;margin-bottom:8px;">Physical Strength &amp; Vitality</h3>
        <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;">Fitness, nutrition &amp; lifestyle coaching</p>
      </div>
      <div class="pillar-item fade-in fade-in-delay-2" style="padding:32px 24px;">
        <i class="fas fa-venus" style="font-size:2rem;color:var(--green-sage);margin-bottom:16px;display:block;"></i>
        <h3 style="color:white;font-size:1.2rem;margin-bottom:8px;">Hormonal &amp; Holistic Health</h3>
        <p style="color:rgba(255,255,255,0.7);font-size:0.88rem;">PCOS, perimenopause &amp; reproductive health</p>
      </div>
    </div>
  </div>
</section>

<!-- MENTAL HEALTH SERVICES -->
<section id="mental-wellness" class="section section-alt">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Mental &amp; Emotional Wellness</div>
      <h2>Therapy &amp; Counselling Services</h2>
      <p>Evidence-based, compassionate support for every stage of your healing journey.</p>
    </div>
    <div class="grid-3">

      <div class="service-card fade-in fade-in-delay-1">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/thrive-reception.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-brain"></i></div>
        </div>
        <div class="service-body">
          <span class="badge" style="margin-bottom:12px;">Most Popular</span>
          <h3>Mental Health Consultation</h3>
          <p>An initial comprehensive assessment of your mental and emotional wellbeing. The foundation of your personalised care plan.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-2">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/therapy-session.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-user"></i></div>
        </div>
        <div class="service-body">
          <h3>Individual Therapy</h3>
          <p>One-on-one sessions for anxiety, depression, grief, self-esteem, life transitions, and personal growth. Fully confidential.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-3">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/clinic-consultation-room.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-heart"></i></div>
        </div>
        <div class="service-body">
          <h3>Couples Therapy</h3>
          <p>Guided communication, conflict resolution, and deeper emotional connection for couples at any stage of their relationship.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-1">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/thrive-welcome.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-people-roof"></i></div>
        </div>
        <div class="service-body">
          <h3>Family Therapy</h3>
          <p>Resolve conflicts and build healthier family dynamics. Ideal for families navigating change, loss, or communication breakdown.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-2">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/group-therapy-workshop.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-users"></i></div>
        </div>
        <div class="service-body">
          <h3>Group Therapy</h3>
          <p>Facilitated group sessions — grief circles, stress support groups, and women&rsquo;s wellness groups. Healing in community.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-3">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/patience-office-portrait.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-shield-heart"></i></div>
        </div>
        <div class="service-body">
          <span class="badge" style="margin-bottom:12px;">Specialist</span>
          <h3>Stress, Grief &amp; Trauma Counselling</h3>
          <p>Specialised support for survivors of trauma, loss, abuse, and crisis — using proven, trauma-informed therapeutic methods.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-1">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/thrive-reception-logo.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-hand-holding-heart"></i></div>
        </div>
        <div class="service-body">
          <h3>Addiction Counselling</h3>
          <p>Compassionate support for individuals navigating substance use, compulsive behaviours, and the road to lasting recovery.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-2">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/patience-ahebwa.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-graduation-cap"></i></div>
        </div>
        <div class="service-body">
          <h3>Career &amp; Academic Counselling</h3>
          <p>Clarity, direction, and confidence for students and professionals navigating academic pressure or career crossroads.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-3">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/thrive-welcome.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-video"></i></div>
        </div>
        <div class="service-body">
          <span class="badge" style="margin-bottom:12px;">Online Available</span>
          <h3>Online Therapy Sessions</h3>
          <p>Secure video sessions from anywhere in Uganda or abroad. Same quality care — maximum privacy and flexibility.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- PHYSICAL & HORMONAL SERVICES -->
<section id="healthy-living" class="section">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">Physical &amp; Hormonal Wellness</div>
      <h2>Beyond the Mind — Full-Body Health</h2>
      <p>We are one of the few clinics in Uganda integrating physical vitality and hormonal health into therapy.</p>
    </div>
    <div class="grid-3">

      <div class="service-card fade-in fade-in-delay-1">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/fitness-class.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-dumbbell"></i></div>
        </div>
        <div class="service-body">
          <h3>Physical Strength &amp; Vitality</h3>
          <p>Personalised movement and fitness programmes designed to build energy, strength, and long-term physical health.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-2">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/womens-wellness-group.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-apple-whole"></i></div>
        </div>
        <div class="service-body">
          <h3>Nutrition &amp; Lifestyle Coaching</h3>
          <p>Evidence-based nutritional guidance and lifestyle habits that support both mental and physical wellbeing.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-3">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/patience-office-portrait.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-venus"></i></div>
        </div>
        <div class="service-body">
          <span class="badge" style="margin-bottom:12px;">Women&rsquo;s Health</span>
          <h3>Hormonal Health</h3>
          <p>Specialist care for perimenopause, PCOS, menstrual health, and hormonal imbalances. Medication-free where possible.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div id="womens-mens-wellness" class="service-card fade-in fade-in-delay-1">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/thrive-welcome.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-ribbon"></i></div>
        </div>
        <div class="service-body">
          <span class="badge" style="margin-bottom:12px;">Confidential</span>
          <h3>Sexual &amp; Reproductive Health</h3>
          <p>Confidential counselling on sexual health, reproductive choices, HIV/AIDS, and STIs — with full respect and dignity.</p>
          <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="service-link" style="margin-top:16px;" target="_blank" rel="noopener">Book Now <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div id="workplace-wellness" class="service-card fade-in fade-in-delay-2">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/group-therapy-workshop.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-briefcase"></i></div>
        </div>
        <div class="service-body">
          <h3>Workplace Wellness</h3>
          <p>Corporate mental health programmes, staff wellbeing workshops, and burnout prevention for organisations across Uganda.</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-link" style="margin-top:16px;">Get a Quote <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

      <div class="service-card fade-in fade-in-delay-3">
        <div class="service-img" style="background-image:url('<?php echo esc_url( THRIVE_URI . '/images/youth-group-session.jpg' ); ?>');">
          <div class="service-img-icon"><i class="fas fa-chalkboard-user"></i></div>
        </div>
        <div class="service-body">
          <h3>Wellness Education &amp; Workshops</h3>
          <p>Community and institutional wellness education — schools, churches, NGOs, and corporate bodies. Contact us for scheduling.</p>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="service-link" style="margin-top:16px;">Contact Us <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- HOW IT WORKS -->
<section class="section section-green">
  <div class="container">
    <div class="section-header centered fade-in">
      <div class="section-label">How It Works</div>
      <h2>Your Journey in 4 Simple Steps</h2>
    </div>
    <div class="grid-4">
      <div class="fade-in fade-in-delay-1" style="text-align:center;padding:32px 20px;">
        <div class="step-num">1</div>
        <h4>Book a Consultation</h4>
        <p style="font-size:0.9rem;margin-top:8px;">Fill in our booking form or call us directly. We respond within 24 hours.</p>
      </div>
      <div class="fade-in fade-in-delay-2" style="text-align:center;padding:32px 20px;">
        <div class="step-num">2</div>
        <h4>Assessment Session</h4>
        <p style="font-size:0.9rem;margin-top:8px;">Patience conducts a thorough assessment across mental, physical, and hormonal health dimensions.</p>
      </div>
      <div class="fade-in fade-in-delay-3" style="text-align:center;padding:32px 20px;">
        <div class="step-num">3</div>
        <h4>Your Personalised Plan</h4>
        <p style="font-size:0.9rem;margin-top:8px;">A tailored care plan is created — combining therapy, lifestyle, and wellness strategies.</p>
      </div>
      <div class="fade-in fade-in-delay-4" style="text-align:center;padding:32px 20px;">
        <div class="step-num">4</div>
        <h4>Thrive</h4>
        <p style="font-size:0.9rem;margin-top:8px;">Build lasting habits, resilience, and wellbeing that transforms your life from the inside out.</p>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Not Sure Which Service Is Right for You?</h2>
    <p class="fade-in">Book a consultation and Patience will guide you to the most suitable approach for your unique situation.</p>
    <div class="fade-in" style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-white" target="_blank" rel="noopener">Book a Free Consultation</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn btn-outline" style="color:white;border-color:rgba(255,255,255,0.5);">Contact Us</a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
