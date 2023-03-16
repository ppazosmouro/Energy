<?php
/*
* Template Name: Sustainability template
*/
?>
<?php get_header(); ?>

<?php get_template_part('template-parts/page-hero'); ?>

<main>
  <section class="generic-section bg-grey">
    <div class="container">
      <div class="l-grid l-grid--center">

        <h2 class="stats__title fz-h1 mt-0 mb-0 fw-bold wt-100 text-center l-col-12 l-col-md-6 l-col-centered"><?php the_field('sbl_title'); ?></h2>

        <?php
          $sbl_logo = get_field('sbl_logo');
        ?>
        <img
          src="<?php echo $sbl_logo['url']; ?>"
          alt="<?php echo $sbl_logo['alt']; ?>"
          class="wt-100 l-col-12 l-col-md-6 l-col-centered"
        >
      </div>
    </div>
  </section>

  <section class="sustainability generic-section">
    <div class="container">

      <h2 class="text-center fz-h3 text-emphasis-medium fw-medium mt-0 mt-2 mb-4"><?php the_field('sbl_description'); ?></h2>

      <div class="l-grid">
        <div class="l-col-12 l-col-sm-6">
          <article class="sustainability__card">
            <div class="sustainability__icon">
              <?php
                $no_poverty_icon = get_field('no_poverty_icon');
              ?>
              <img
                src="<?php echo $no_poverty_icon['url']; ?>"
                alt="<?php echo $no_poverty_icon['alt']; ?>"
              >
            </div>

            <h3 class="sustainability__title"><?php the_field('no_poverty_title'); ?></h3>
            <p class="sustainability__subtitle"><?php the_field('no_poverty_subtitle'); ?></p>

            <p class="sustainability__description fw-medium text-emphasis-medium"><?php the_field('no_poverty_description'); ?></p>
          </article>
        </div>
        <div class="l-col-12 l-col-sm-6">
          <article class="sustainability__card">
            <div class="sustainability__icon">
              <?php
                $climate_icon = get_field('climate_icon');
              ?>
              <img
                src="<?php echo $climate_icon['url']; ?>"
                alt="<?php echo $climate_icon['alt']; ?>"
              >
            </div>

            <h3 class="sustainability__title"><?php the_field('climate_title'); ?></h3>
            <p class="sustainability__subtitle"><?php the_field('climate_subtitle'); ?></p>

            <p class="sustainability__description fw-medium text-emphasis-medium"><?php the_field('climate_description'); ?></p>
          </article>
        </div>
      </div>
    </div>
  </section>

<?php if( have_rows('bp_list') ): ?>
  <section class="generic-section">
    <div class="container">
      <h2 class="text-center center-block fz-h2 mb-4 text-emphasis-medium fw-bold"><?php the_field('bp_title'); ?></h2>

      <div class="l-grid l-grid--big-gap-lg">
        <?php while( have_rows('bp_list')): the_row(); ?>
          <div class="l-col-12 l-col-sm-6 l-col-md-4">
            <div class="sustainability__group">
              <div class="sustainability__group-icon">
                <?php
                  $bp_icon = get_sub_field('icon');
                ?>
                <img
                  src="<?php echo $bp_icon['url']; ?>"
                  alt="<?php echo $bp_icon['alt']; ?>"
                >
              </div>
              <h3 class="sustainability__group-title"><?php echo get_sub_field('title'); ?></h3>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

</main>

<?php get_footer(); ?>
