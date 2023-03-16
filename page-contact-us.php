<?php
/*
* Template Name: Contact Us template
*/
?>

<?php get_header('sticky'); ?>

<section class="hero--map">
  <div class="hero--map__map">
    <?php echo get_the_content(); ?>
  </div>
</section>

<main id="contact-us">
  <section class="contact-2">
    <div class="container">
      <div class="contact-2__form">
        <h1 class="mt-0 fz-h1 contact-2__title">Get in touch</h1>
        <div class="form">
          <?php
            echo do_shortcode('[wpforms id="141" title="false"]');
          ?>
        </div>
      </div>
    </div>
  </section>

</main>


<?php get_footer(); ?>
