<?php get_header(); ?>

<section class="hero">
  <div class="hero__img">
    <?php
      $hero_img = get_field('hero_background');
    ?>
    <img
      src="<?php echo $hero_img['url']; ?>"
      alt="echo $hero_img['alt'];"
    >
  </div>
  <div class="container">
    <div class="hero__content">
      <h1 class="text-center hero__title fw-bold"><?php the_field('hero_quote'); ?></h1>
      <div class="hero__cta">
        <div class="hero__icons">
          <?php
            $hero_icon_1 = get_field('hero_icon_1');
            $hero_icon_2 = get_field('hero_icon_2');
          ?>
          <img
            src="<?php echo $hero_icon_1['url']; ?>"
            alt="<?php echo $hero_icon_1['alt']; ?>"
            class="hero__icon"
          >
          <img
            src="<?php echo $hero_icon_2['url']; ?>"
            alt="<?php echo $hero_icon_2['alt']; ?>"
            class="hero__icon"
          >
        </div>
        <a href="<?php the_field('hero_button_link');?>" class="button button-lg"><?php the_field('hero_button_title');?></a>
      </div>
    </div>
  </div>
</section>

<?php
// ACF Global section (option page)
?>
<section class="wwd generic-section bg-grey">
  <div class="container">
    <div class="wwd__content">
      <div class="wwd__group">
        <h3 class="wwd__title fz-h2"><?php the_field('wwd_title', 'option'); ?></h3>
        <h2 class="wwd__description fz-h1 fw-bold text-emphasis-medium"><?php the_field('wwd_subtitle', 'option'); ?></h2>
      </div>

      <div class="wwd__divider"></div>

      <div class="wwd__group">
        <p class="wwd__paragraph text-emphasis-medium fw-medium"><?php the_field('wwd_description', 'option'); ?></p>
        <a href="<?php the_field('wwd_button_link', 'option'); ?>" class="button button-lg"><?php the_field('wwd_button_title', 'option'); ?></a>
      </div>
    </div>
  </div>
</section>

<?php
// ACF Global section (option page)
?>
<section class="projects generic-section">
  <div class="projects__img">
    <?php
      $projects_img = get_field('projects_background', 'option');
    ?>
    <img
      src="<?php echo $projects_img['url']; ?>"
      alt="<?php echo $projects_img['alt']; ?>"
    >
  </div>

  <div class="container">
    <div class="projects__group">
      <h2 class="projects__title fz-h1 fw-bold"><?php the_field('projects_title', 'option'); ?></h2>
      <p class="projects__description text-emphasis-medium fw-medium"><?php the_field('projects_description', 'option'); ?></p>
    </div>

    <div class="projects__map">
      <?php
        $projects_map = get_field('projects_map', 'option');
      ?>
      <img
        src="<?php echo $projects_map['url']; ?>"
        alt="<?php echo $projects_map['alt']; ?>"
      >

      <?php if( have_rows('projects_list') ): ?>
        <div class="projects__countries">
          <?php while( have_rows('projects_list') ) : the_row(); ?>
            <h3 class="projects__country">
              <?php echo get_sub_field('country', 'option'); ?>
              <span><?php echo get_sub_field('mw', 'option'); ?>MW</span>
            </h3>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>

<section class="cards-section generic-section">
  <!-- CF -->
  <div class="cards-section__img">
    <?php
      $cards_background = get_field('cards_background');
    ?>
    <img
      src="<?php echo $cards_background['url']; ?>"
      alt="<?php echo $cards_background['alt']; ?>"
    >
  </div>

  <?php if( have_rows('cards_list') ): ?>
    <div class="container">
      <div class="l-grid l-grid--big-gap-lg">
        <?php while( have_rows('cards_list') ) : the_row(); ?>
          <div class="l-col-12 l-col-md-6">
            <article class="card">
              <div class="card__img">
                <?php
                  $card_img = get_sub_field('image');
                ?>
                <img
                  src="<?php echo $card_img['url']; ?>"
                  alt="<?php echo $card_img['alt']; ?>"
                >
              </div>

              <?php
                $card_icon = get_sub_field('icon');
              ?>
              <img
                src="<?php echo $card_icon['url']; ?>"
                alt="<?php echo $card_icon['alt']; ?>"
                class="card__icon"
              >

              <div class="card__content">
                <h3 class="card__title"><?php echo get_sub_field('title'); ?></h3>
                <p class="card__description"><?php echo get_sub_field('description'); ?></p>
                <a href="<?php echo get_sub_field('button_link'); ?>" class="button button-lg card__read-more"><?php echo get_sub_field('button_title'); ?></a>
              </div>
            </article>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  <?php endif; ?>
</section>

<section class="stats generic-section bg-light" id="solar">
  <div class="container">
    <div class="stats__group">
      <div class="stats__text">
        <h3 class="stats__title fz-h1 fw-bold"><?php the_field('solar_title'); ?></h3>
        <div class="stats__description text-emphasis-medium fw-medium">
          <?php the_field('solar_description'); ?>
        </div>
      </div>

      <?php
        $solar_img = get_field('solar_image');
      ?>
      <img
        src="<?php echo $solar_img['url']; ?>"
        alt="<?php echo $solar_img['alt']; ?>"
        class="stats__img"
      >
    </div>

    <div class="stats__group stats__group--reverse">
      <div class="stats__text">
        <h3 class="stats__title fz-h1 fw-bold"><?php the_field('co2_title'); ?></h3>
        <div class="stats__description text-emphasis-medium fw-medium">
          <?php the_field('co2_description'); ?>
        </div>
      </div>

      <?php
        $co2_img = get_field('co2_image');
      ?>
      <img
        src="<?php echo $co2_img['url']; ?>"
        alt="<?php echo $co2_img['alt']; ?>"
        class="stats__img"
      >
    </div>
  </div>
</section>

<section class="club">
  <div class="club__img">
    <?php
      $jtc_background = get_field('jtc_background')
    ?>
    <img
      src="<?php echo $jtc_background['url']; ?>"
      alt="<?php echo $jtc_background['alt']; ?>"
    >
  </div>
  <div class="container">
    <div class="club__content">
      <h2 class="club__quote fz-h1 text-center fw-bold"><?php the_field('jtc_quote'); ?></h2>
    </div>

    <div class="club__join">
      <div class="club__join-img">
        <?php
          $jtc_img = get_field('jtc_image');
        ?>
        <img
          src="<?php echo $jtc_img['url']; ?>"
          alt="<?php echo $jtc_img['alt']; ?>"
        >
      </div>
      <div class="club__join-content">
        <h3 class="club__join-title"><?php the_field('jtc_description'); ?></h3>
        <a href="<?php the_field('jtc_button_link'); ?>" class="button"><?php the_field('jtc_button_title'); ?></a>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
