<?php
/*
* Template Name: Contact Us (Old) template
*/
?>

<?php get_header(); ?>

<?php get_template_part('template-parts/page-hero'); ?>

<section class="contact">
  <div class="container">
    <div class="l-grid l-grid--big-gap-lg">
      <div class="l-col-12 l-col-md-6">
        <div class="contact__form">
          <h3 class="mt-0 fz-h2 contact__title">Get in touch</h3>
          <div class="form">
            <?php
              echo do_shortcode('[wpforms id="141" title="false"]');
            ?>
          </div>
        </div>
      </div>
      <div class="l-col-12 l-col-md-6">
        <div class="contact__info">
          <h2 class="mt-0 contact__title">Contact Us</h2>
          <div class="contact-item">
            <?php
              $location_img = get_field('location_icon');
            ?>
            <?php if( $location_img ): ?>
              <?php
                $location_img_url = $location_img['url'];
                $location_img_alt = $location_img['alt'];
              ?>
              <img
                src="<?php echo $location_img_url; ?>"
                alt="<?php echo $location_img_alt; ?>"
                class="contact-item__icon"
              >
              <div class="contact-item__content">
                <p class="contact-item__title"><?php the_field('location_text'); ?></p>
              </div>
            <?php endif; ?>
          </div>

          <div class="contact-item">
            <?php
              $email_img = get_field('email_icon');
            ?>
            <?php if( $email_img ): ?>
              <?php
                $email_img_url = $email_img['url'];
                $email_img_alt = $email_img['alt'];
              ?>
              <img
                src="<?php echo $email_img_url; ?>"
                alt="<?php echo $email_img_alt; ?>"
                class="contact-item__icon contact-item__icon--small"
              >
              <div class="contact-item__content">
                <a href="mailto:<?php the_field('email_text'); ?>" class="contact-item__title anchor"><?php the_field('email_text'); ?></a>
              </div>
            <?php endif; ?>
          </div>

          <div class="contact__map">
            <?php echo get_the_content(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>
