<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a href="#main-content" class="skip-link">Skip to main content</a>

<!-- SITE HEADER -->
<header class="site-header" id="siteHeader">
  <div class="top-bar">
    <div class="container">
      <div class="top-bar-inner">
        <div class="top-bar-info">
          <a href="tel:+256775939636"><i class="fas fa-phone"></i> +256 775 939 636</a>
          <a href="tel:+256752512999"><i class="fas fa-phone"></i> +256 752 512 999</a>
          <a href="mailto:info@thriveug.com"><i class="fas fa-envelope"></i> info@thriveug.com</a>
          <span><i class="fas fa-clock"></i> Mon &ndash; Sat: 8am &ndash; 6pm</span>
        </div>
        <div class="top-bar-right">
          <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
  <nav class="navbar" id="navbar">
    <div class="container">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">
        <img src="<?php echo esc_url( get_template_directory_uri() . '/images/thrive-logo.jpg' ); ?>" alt="Thrive Therapy &amp; Wellness" />
      </a>
      <ul class="nav-links">
        <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'class="active"' : ''; ?>>Home</a></li>
        <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php echo is_page( 'about' ) ? 'class="active"' : ''; ?>>About</a></li>
        <li class="has-dropdown">
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" <?php echo is_page( 'services' ) ? 'class="active"' : ''; ?>>Services <i class="fas fa-chevron-down chevron"></i></a>
          <div class="services-dropdown">
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-brain"></i></span>Mental Health Therapy</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-heart"></i></span>Couples &amp; Family</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-apple-whole"></i></span>Nutrition &amp; Lifestyle</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-dumbbell"></i></span>Physical Strength</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-venus"></i></span>Hormonal Health</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-users"></i></span>Group &amp; Workshops</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-shield-heart"></i></span>Trauma &amp; Grief</a>
            <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>"><span class="dd-icon"><i class="fas fa-briefcase"></i></span>Workplace Wellness</a>
            <a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="dd-book"><span class="dd-icon"><i class="fas fa-calendar-check"></i></span>Book a Session</a>
          </div>
        </li>
        <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" <?php echo is_page( 'testimonials' ) ? 'class="active"' : ''; ?>>Testimonials</a></li>
        <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" <?php echo is_home() ? 'class="active"' : ''; ?>>Blog</a></li>
        <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" <?php echo is_page( 'contact' ) ? 'class="active"' : ''; ?>>Contact</a></li>
      </ul>
      <a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="btn btn-primary nav-cta">Book a Session</a>
      <div class="hamburger" id="hamburger"><span></span><span></span><span></span></div>
    </div>
  </nav>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobileNav">
  <button class="mobile-close" id="mobileClose" aria-label="Close menu">&#10005;</button>
  <img src="<?php echo esc_url( get_template_directory_uri() . '/images/thrive-logo.jpg' ); ?>" class="mobile-nav-logo" alt="Thrive Therapy &amp; Wellness" />
  <nav class="mobile-nav-links">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php echo is_front_page() ? 'class="active"' : ''; ?>>Home</a>
    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
    <a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>">Testimonials</a>
    <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
    <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>">FAQ</a>
    <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Contact</a>
  </nav>
  <a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="mobile-nav-cta">Book a Session <i class="fas fa-calendar-check"></i></a>
  <div class="mobile-nav-social">
    <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
    <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
    <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
  </div>
</div>

<main id="main-content">
