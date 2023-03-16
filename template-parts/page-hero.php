<?php
  $hero_background = get_the_post_thumbnail_url(get_the_ID(), 'full');

  // Check if a custom field exists
  $page_title = get_the_title();

  if( get_field('hero_title')) {
    $page_title = get_field('hero_title');
  } else if ( get_field('hero_quote') ) {
    $page_title = get_field('hero_quote');
  }
?>

<section class="hero hero--page">
  <div class="hero__img">
    <?php if ($hero_background) : ?>
      <img
        src="<?php echo $hero_background; ?>"
        alt="Page background"
      >
    <?php endif; ?>
  </div>
  <div class="container">
    <div class="hero__content">
      <h1 class="text-center hero__title fw-bold"><?php echo $page_title; ?></h1>
    </div>
  </div>
</section>
