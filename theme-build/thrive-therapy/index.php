<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Blog</div>
    <h1>Wellness Blog</h1>
    <p>Insights, guides, and stories from the Thrive Therapy &amp; Wellness team.</p>
  </div>
</section>

<section class="section section-alt">
  <div class="container">
    <?php if ( have_posts() ) : ?>
      <div class="grid-3">
        <?php while ( have_posts() ) : the_post(); ?>
          <article class="card fade-in" style="overflow:hidden;padding:0;">
            <?php if ( has_post_thumbnail() ) : ?>
              <a href="<?php the_permalink(); ?>">
                <div style="aspect-ratio:16/9;overflow:hidden;">
                  <?php the_post_thumbnail( 'medium_large', [ 'style' => 'width:100%;height:100%;object-fit:cover;display:block;' ] ); ?>
                </div>
              </a>
            <?php endif; ?>
            <div style="padding:24px;">
              <div style="font-size:0.78rem;color:var(--green-sage);font-weight:600;margin-bottom:8px;text-transform:uppercase;letter-spacing:0.05em;">
                <?php echo get_the_date(); ?>
              </div>
              <h3 style="font-size:1.1rem;margin-bottom:10px;">
                <a href="<?php the_permalink(); ?>" style="color:var(--green-deep);text-decoration:none;"><?php the_title(); ?></a>
              </h3>
              <p style="font-size:0.88rem;color:var(--grey);line-height:1.6;"><?php echo get_the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="service-link" style="margin-top:16px;display:inline-flex;align-items:center;gap:6px;">Read More <i class="fas fa-arrow-right"></i></a>
            </div>
          </article>
        <?php endwhile; ?>
      </div>
      <div style="margin-top:48px;text-align:center;">
        <?php the_posts_pagination( [
          'mid_size'  => 2,
          'prev_text' => '&larr; Previous',
          'next_text' => 'Next &rarr;',
        ] ); ?>
      </div>
    <?php else : ?>
      <div style="text-align:center;padding:80px 0;">
        <i class="fas fa-pen-nib" style="font-size:3rem;color:var(--green-mint);margin-bottom:20px;display:block;"></i>
        <h3>No Posts Yet</h3>
        <p style="color:var(--grey);margin:12px 0 28px;">Check back soon for wellness insights and guides from our team.</p>
        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Homepage</a>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
