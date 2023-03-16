<?php
/*
* Template Name: About Us template
*/
?>
<?php get_header(); ?>

<?php get_template_part('template-parts/page-hero'); ?>

<section class="about generic-section" id="about">
  <div class="container">
    <div class="about__content">
      <div class="about__group">
        <h2 class="about__title mt-0 mb-2 fw-bold">
          <?php the_field('about_title'); ?>
          <span><?php the_field('about_title_logo_text'); ?></span>
        </h2>
        <h3 class="about__subtitle"><?php the_field('wwd_subtitle', 'option'); ?></h3>
      </div>
      <div class="about__description">
        <?php the_field('about_description'); ?>
      </div>
    </div>
  </div>
</section>

<?php if( have_rows('management_list') ): ?>
  <section class="management generic-section" id="management">
    <div class="management__img">
      <?php
        $management_background = get_field('management_background');
      ?>
      <img
        src="<?php echo $management_background['url']; ?>"
        alt="<?php echo $management_background['alt']; ?>"
      >
    </div>

    <div class="management__container">
      <h2 class="management__title mt-0 fz-h1 fw-bold wt-100 center-block text-center"><?php the_field('management_title'); ?></h2>

      <div class="l-grid">
        <?php while( have_rows('management_list') ) : the_row(); ?>
          <div class="l-col-12 l-col-sm-6 l-col-xl-3">
            <article class="management__card">
              <div class="management__card-img">
                <?php
                  $management_person_img = get_sub_field('image');
                ?>
                <img
                  src="<?php echo $management_person_img['url']; ?>"
                  alt="<?php echo $management_person_img['alt']; ?>"
                >
              </div>

              <a href="<?php echo get_sub_field('linkedin_url'); ?>" class="button management__card-button">
                <?php
                  $linkedin_icon = get_sub_field('linkedin_icon');
                ?>
                <img
                  src="<?php echo $linkedin_icon['url']; ?>"
                  alt="<?php echo $linkedin_icon['alt']; ?>"
                >
              </a>

              <div class="management__card-content">
                <h3 class="management__card-title"><?php echo get_sub_field('name'); ?></h3>
                <p class="management__card-description"><?php echo get_sub_field('description'); ?></p>
              </div>
            </article>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </section>
<?php endif; ?>

<section class="wwd-2 generic-section" id="what-we-do">
  <div class="container">
    <div class="wwd-2__img">
      <?php
        $wwd2_img = get_field('wwd_image', 'option');
      ?>
      <img
        src="<?php echo $wwd2_img['url']; ?>"
        alt="<?php echo $wwd2_img['alt']; ?>"
      >
    </div>
    <div class="wwd-2__content">
      <h2 class="wwd-2__title fz-h2 mb-0"><?php the_field('wwd_title', 'option'); ?></h3>
      <p class="wwd-2__paragraph text-emphasis-medium fw-medium"><?php the_field('wwd_description', 'option'); ?></p>
    </div>
  </div>
</section>

<section class="projects-2" id="projects">
  <div class="container">
    <div class="projects-2__group">
      <h2 class="projects-2__title fz-h1 fw-bold text-center center-block wt-100"><?php the_field('projects_title', 'option'); ?></h2>
      <p class="projects-2__description text-emphasis-medium fw-medium text-center"><?php the_field('projects_description', 'option'); ?></p>
    </div>

    <div class="projects-2__countries">
      <?php if( have_rows('projects_list_2', 'option') ): ?>
        <div class="l-grid">
          <?php while( have_rows('projects_list_2', 'option') ) : the_row(); ?>
            <div class="l-col-12 l-col-sm-6 l-col-md-3">
              <div class="projects-2__country-group">
                <p class="projects-2__country">
                  <?php echo get_sub_field('country_1', 'option'); ?>
                  <span><?php echo get_sub_field('country_1_mw', 'option'); ?>MW</span>
                </p>
                <p class="projects-2__country">
                  <?php echo get_sub_field('country_2', 'option'); ?>
                  <span><?php echo get_sub_field('country_2_mw', 'option'); ?>MW</span>
                </p>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="projects-2__reach">
      <h3 class="projects-2__reach-title"><?php the_field('lm_title'); ?></h3>
      <a href="<?php the_field('lm_button_link'); ?>" class="button button-lg"><?php the_field('lm_button_text'); ?></a>
    </div>
  </div>
</section>

<?php get_footer(); ?>
