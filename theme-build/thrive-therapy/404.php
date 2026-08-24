<?php get_header(); ?>

<section style="min-height:60vh;display:flex;align-items:center;padding:80px 0;text-align:center;background:var(--green-pale);">
  <div class="container">
    <div style="font-family:var(--font-display);font-size:8rem;font-weight:700;color:var(--green-mint);line-height:1;margin-bottom:16px;">404</div>
    <h1 style="font-size:2rem;margin-bottom:16px;">Page Not Found</h1>
    <p style="color:var(--grey);max-width:480px;margin:0 auto 36px;">The page you&rsquo;re looking for doesn&rsquo;t exist or may have been moved. Let&rsquo;s get you back on track.</p>
    <div style="display:flex;gap:16px;justify-content:center;flex-wrap:wrap;">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="btn btn-primary">Back to Homepage</a>
      <a href="<?php echo esc_url( home_url( '/contact/' ) ); ?>" class="btn" style="background:white;color:var(--green-deep);border:2px solid var(--green-mid);">Contact Us</a>
    </div>
    <div style="margin-top:56px;">
      <p style="color:var(--grey);font-size:0.9rem;margin-bottom:16px;">Or go directly to:</p>
      <div style="display:flex;gap:12px;justify-content:center;flex-wrap:wrap;">
        <a href="<?php echo esc_url( home_url( '/services/' ) ); ?>" style="color:var(--green-sage);font-weight:600;">Services</a>
        <span style="color:var(--border);">|</span>
        <a href="<?php echo esc_url( home_url( '/about/' ) ); ?>" style="color:var(--green-sage);font-weight:600;">About</a>
        <span style="color:var(--border);">|</span>
        <a href="<?php echo esc_url( home_url( '/faq/' ) ); ?>" style="color:var(--green-sage);font-weight:600;">FAQ</a>
        <span style="color:var(--border);">|</span>
        <a href="<?php echo esc_url( home_url( '/book/' ) ); ?>" style="color:var(--green-sage);font-weight:600;">Book a Session</a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>
