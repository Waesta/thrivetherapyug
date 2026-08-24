<?php get_header(); ?>

<section class="page-hero">
  <div class="container">
    <div class="breadcrumb"><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a><span>/</span>Search</div>
    <h1>Search Results</h1>
    <?php if ( get_search_query() ) : ?>
      <p>Results for: <strong><?php echo esc_html( get_search_query() ); ?></strong></p>
    <?php endif; ?>
  </div>
</section>

<section class="section section-alt">
  <div class="container" style="max-width:760px;">
    <form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>" style="margin-bottom:40px;">
      <div style="display:flex;gap:12px;">
        <input type="search" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" placeholder="Search&hellip;" style="flex:1;padding:12px 16px;border:1px solid var(--border);border-radius:var(--radius);font-size:1rem;">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>
    <?php if ( have_posts() ) : ?>
      <div style="display:flex;flex-direction:column;gap:24px;">
        <?php while ( have_posts() ) : the_post(); ?>
          <article style="border-bottom:1px solid var(--border);padding-bottom:24px;">
            <h3 style="margin-bottom:6px;"><a href="<?php the_permalink(); ?>" style="color:var(--green-deep);text-decoration:none;"><?php the_title(); ?></a></h3>
            <p style="color:var(--grey);font-size:0.88rem;margin-bottom:10px;"><i class="fas fa-calendar"></i> <?php echo get_the_date(); ?></p>
            <p style="color:var(--grey);line-height:1.7;"><?php echo get_the_excerpt(); ?></p>
            <a href="<?php the_permalink(); ?>" class="service-link" style="margin-top:10px;display:inline-flex;align-items:center;gap:6px;">Read More <i class="fas fa-arrow-right"></i></a>
          </article>
        <?php endwhile; ?>
      </div>
    <?php else : ?>
      <div style="text-align:center;padding:60px 0;">
        <i class="fas fa-search" style="font-size:3rem;color:var(--green-mint);margin-bottom:20px;display:block;"></i>
        <h3>Nothing Found</h3>
        <p style="color:var(--grey);margin:12px 0 28px;">Try a different search term, or browse our services and pages below.</p>
        <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
          <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" class="btn btn-primary">Our Services</a>
          <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn" style="background:white;color:var(--green-deep);border:2px solid var(--green-mid);">Contact Us</a>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php get_footer(); ?>
