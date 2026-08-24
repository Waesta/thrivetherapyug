<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span>/</span>
      <a href="<?php echo esc_url( home_url( '/blog/' ) ); ?>">Blog</a>
      <span>/</span>
      <?php the_title(); ?>
    </div>
    <h1><?php the_title(); ?></h1>
    <p style="font-size:0.9rem;opacity:0.8;margin-top:8px;">
      <i class="fas fa-calendar"></i> <?php echo get_the_date(); ?>
      &nbsp;&middot;&nbsp;
      <i class="fas fa-user"></i> <?php the_author(); ?>
    </p>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:780px;">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php if ( has_post_thumbnail() ) : ?>
        <div style="border-radius:var(--radius-lg);overflow:hidden;margin-bottom:40px;box-shadow:var(--shadow);">
          <?php the_post_thumbnail( 'large', [ 'style' => 'width:100%;display:block;' ] ); ?>
        </div>
      <?php endif; ?>
      <div class="entry-content fade-in" style="line-height:1.9;color:var(--grey);">
        <?php the_content(); ?>
      </div>
      <div style="margin-top:48px;padding-top:32px;border-top:1px solid var(--border);">
        <div style="display:flex;justify-content:space-between;flex-wrap:wrap;gap:16px;">
          <div><?php previous_post_link( '&larr; %link', '&larr; Previous Post' ); ?></div>
          <div><?php next_post_link( '%link &rarr;', 'Next Post &rarr;' ); ?></div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<section class="cta-banner">
  <div class="container" style="position:relative;">
    <h2 class="fade-in">Ready to Start Your Wellness Journey?</h2>
    <p class="fade-in">Book a consultation and take the first step toward a healthier, happier life.</p>
    <a href="<?php echo esc_url( thrive_wa_url() ); ?>" class="btn btn-white fade-in" target="_blank" rel="noopener">Book a Consultation</a>
  </div>
</section>

<?php get_footer(); ?>
