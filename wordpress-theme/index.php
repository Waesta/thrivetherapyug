<?php get_header(); ?>
<main id="main-content" style="padding:180px 0 100px;min-height:60vh;">
  <div class="container">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <article style="margin-bottom:48px;">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <div><?php the_excerpt(); ?></div>
      </article>
    <?php endwhile; else : ?>
      <p>No content found.</p>
    <?php endif; ?>
  </div>
</main>
<?php get_footer(); ?>
