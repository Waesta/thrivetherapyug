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

<nav class="navbar" id="navbar" role="navigation" aria-label="Main navigation">
  <div class="container navbar-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="navbar-logo">
      <img src="<?php echo esc_url( THRIVE_URI . '/images/thrive-logo.jpg' ); ?>" alt="Thrive Therapy &amp; Wellness" height="44">
    </a>

    <ul class="nav-links" id="navLinks">
      <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>" <?php if ( is_front_page() ) echo 'class="active"'; ?>>Home</a></li>
      <li><a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" <?php if ( is_page( 'about' ) ) echo 'class="active"'; ?>>About</a></li>
      <li><a href="<?php echo esc_url( home_url( '/team/' ) ); ?>" <?php if ( is_page( 'team' ) ) echo 'class="active"'; ?>>Our Team</a></li>
      <li class="has-dropdown">
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" <?php if ( is_page( 'services' ) ) echo 'class="active"'; ?>>Services <i class="fas fa-chevron-down"></i></a>
        <ul class="dropdown">
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>"><i class="fas fa-brain"></i> Mental Health Therapy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#mental-wellness' ) ); ?>"><i class="fas fa-heart"></i> Couples &amp; Family Therapy</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><i class="fas fa-apple-whole"></i> Nutrition &amp; Lifestyle</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><i class="fas fa-dumbbell"></i> Physical Strength</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><i class="fas fa-venus"></i> Hormonal Health</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><i class="fas fa-users"></i> Group &amp; Workshops</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><i class="fas fa-shield-heart"></i> Trauma &amp; Grief</a></li>
          <li><a href="<?php echo esc_url( home_url( '/services/#healthy-living' ) ); ?>"><i class="fas fa-briefcase"></i> Workplace Wellness</a></li>
        </ul>
      </li>
      <li><a href="<?php echo esc_url( home_url( '/testimonials/' ) ); ?>" <?php if ( is_page( 'testimonials' ) ) echo 'class="active"'; ?>>Testimonials</a></li>
      <li><a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" <?php if ( is_page( 'faq' ) ) echo 'class="active"'; ?>>FAQ</a></li>
      <li><a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" <?php if ( is_page( 'contact' ) ) echo 'class="active"'; ?>>Contact</a></li>
    </ul>

    <div class="navbar-actions">
      <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-primary navbar-cta" target="_blank" rel="noopener">
        Book a Session
      </a>
      <button class="hamburger" id="hamburger" aria-label="Toggle menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</nav>

<main id="main-content">
