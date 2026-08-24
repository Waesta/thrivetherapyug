<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
      <span>/</span>
      <?php the_title(); ?>
    </div>
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:800px;">
    <?php while ( have_posts() ) : the_post(); ?>
      <div class="entry-content fade-in">
        <?php the_content(); ?>
      </div>
    <?php endwhile; ?>
  </div>
</section>

<?php get_footer(); ?>
