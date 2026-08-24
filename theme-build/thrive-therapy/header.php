<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?><?php bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<div class="top-bar">
  <div class="container top-bar-inner">
    <div class="top-bar-left">
      <a href="tel:+256775939636"><i class="fas fa-phone"></i> +256 775 939 636</a>
      <a href="tel:+256752512999"><i class="fas fa-phone"></i> +256 752 512 999</a>
      <a href="mailto:info@thriveug.com"><i class="fas fa-envelope"></i> info@thriveug.com</a>
      <span><i class="fas fa-clock"></i> Mon&ndash;Fri: 8am&ndash;6pm &nbsp;|&nbsp; Sat: 9am&ndash;3pm</span>
    </div>
    <div class="top-bar-right">
      <a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
      <a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
      <a href="#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
    </div>
  </div>
</div>

<header id="siteHeader">
<nav class="navbar" role="navigation" aria-label="Main navigation">
  <div class="container navbar-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-logo logo">
      <img src="<?php echo esc_url( THRIVE_URI . '/images/thrive-logo.jpg' ); ?>" alt="Thrive Therapy &amp; Wellness" height="44">
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_front_page() ) echo 'class="active"'; ?>>Home</a></li>
      <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php if ( is_page( 'about' ) ) echo 'class="active"'; ?>>About</a></li>
      <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" <?php if ( is_page( 'team' ) ) echo 'class="active"'; ?>>Our Team</a></li>
      <li class="has-dropdown">
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" <?php if ( is_page( 'services' ) ) echo 'class="active"'; ?>>Services <i class="fas fa-chevron-down chevron"></i></a>
        <ul class="dropdown">
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>"><span class="dd-icon"><i class="fas fa-brain"></i></span>Mental Health Therapy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>"><span class="dd-icon"><i class="fas fa-heart"></i></span>Couples &amp; Family</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><span class="dd-icon"><i class="fas fa-apple-whole"></i></span>Nutrition &amp; Lifestyle</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><span class="dd-icon"><i class="fas fa-dumbbell"></i></span>Physical Strength</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><span class="dd-icon"><i class="fas fa-venus"></i></span>Hormonal Health</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>"><span class="dd-icon"><i class="fas fa-users"></i></span>Group &amp; Workshops</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>"><span class="dd-icon"><i class="fas fa-shield-heart"></i></span>Trauma &amp; Grief</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><span class="dd-icon"><i class="fas fa-briefcase"></i></span>Workplace Wellness</a></li>
          <li><a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="dd-book"><span class="dd-icon"><i class="fas fa-calendar-check"></i></span>Book a Session</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>" <?php if ( is_page( 'shop' ) ) echo 'class="active"'; ?>>Shop</a></li>
      <li><a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>" <?php if ( is_home() || is_archive() ) echo 'class="active"'; ?>>Blog</a></li>
      <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" <?php if ( is_page( 'faq' ) ) echo 'class="active"'; ?>>FAQ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" <?php if ( is_page( 'contact' ) ) echo 'class="active"'; ?>>Contact</a></li>
    </ul>

    <div class="navbar-actions">
      <a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" class="btn btn-primary navbar-cta nav-cta">
        Book a Session
      </a>
      <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>
</header>

<!-- MOBILE NAV -->
<div class="mobile-nav" id="mobileNav">
  <button class="mobile-close" id="mobileClose" aria-label="Close menu">&#10005;</button>
  <img src="<?php echo esc_url( THRIVE_URI . '/images/thrive-logo.jpg' ); ?>" class="mobile-nav-logo" alt="Thrive Therapy &amp; Wellness">
  <nav class="mobile-nav-links">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
    <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>">About</a>
    <a href="<?php echo esc_url( home_url( '/team/' ) ); ?>">Our Team</a>
    <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>">Services</a>
    <a href="<?php echo esc_url( home_url( '/shop/' ) ); ?>">Shop</a>
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
