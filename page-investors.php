<?php
/*
* Template Name: Investors template
*/
?>
<?php get_header(); ?>

<?php get_template_part('template-parts/page-hero'); ?>

<main>
  <section class="generic-section">
    <div class="container">
      <div class="stats__group mt-5">
        <div class="stats__text">
          <h2 class="stats__title fz-h1 fw-bold"><?php the_field('lm_title'); ?></h2>
          <div class="stats__description text-emphasis-medium fw-medium">
            <p><?php the_field('lm_description'); ?></p>
          </div>

          <a href="<?php the_field('lm_button_link'); ?>" class="button button-lg"><?php the_field('lm_button_text'); ?></a>
        </div>

        <?php
          $lm_img = get_field('lm_image');
        ?>
        <img
          src="<?php echo $lm_img['url']; ?>"
          alt="<?php echo $lm_img['alt']; ?>"
          class="stats__img br-radius box-shadow"
          width="320"
          height="320"
        >
      </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>
