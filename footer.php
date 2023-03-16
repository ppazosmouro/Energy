    <footer class="footer">
      <div class="container">
        <div class="footer__block">
          <div class="footer__group">
            <div class="logo">
              <?php
                $custom_logo_id = get_theme_mod('custom_logo');
              ?>

              <?php if ( has_custom_logo() ): ?>
                <?php
                  $logo = wp_get_attachment_image_src($custom_logo_id , 'full');
                  $logo_uri = esc_url($logo[0]);
                ?>
                <img
                  src="<?php echo $logo_uri; ?>"
                  alt="<?php echo get_bloginfo( 'name' ); ?>"
                  class="logo__img"
                >
              <?php endif; ?>

              <p class="logo__text logo__text--blue">Renergy</p>
            </div>

            <p class="footer__description"><?php the_field('footer_description', 'option'); ?></p>
          </div>

          <div class="footer__menu">
            <?php
              $locations = get_nav_menu_locations();
              $menu_1 = wp_get_nav_menu_object($locations['footer-menu-1']);
            ?>
            <h3 class="footer__menu-title"><?php echo $menu_1->name; ?></h3>
            <?php
              wp_nav_menu(array(
                'theme_location' => 'footer-menu-1',
                'container' => 'nav',
                'container_class' => 'footer__nav'
              ));
            ?>
          </div>

          <div class="footer__menu">
            <?php
              $menu_2 = wp_get_nav_menu_object($locations['footer-menu-2']);
            ?>
            <h3 class="footer__menu-title"><?php echo $menu_2->name; ?></h3>
            <?php
              wp_nav_menu(array(
                'theme_location' => 'footer-menu-2',
                'container' => 'nav',
                'container_class' => 'footer__nav'
              ));
            ?>
          </div>

          <div class="footer__contact">
            <div class="contact-item">
              <?php
                $location_img = get_field('location_icon', 'option');
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
                  <p class="contact-item__title"><?php the_field('location_text', 'option'); ?></p>
                </div>
              <?php endif; ?>
              </div>

              <div class="contact-item">
              <?php
                $email_img = get_field('email_icon', 'option');
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
                  <a href="mailto:<?php the_field('email_text', 'option'); ?>" class="contact-item__title anchor"><?php the_field('email_text', 'option'); ?></a>
                </div>
              <?php endif; ?>
            </div>

            <?php if( have_rows('social_links', 'option') ): ?>
              <ul class="social">
              <?php while( have_rows('social_links', 'option') ) : the_row(); ?>
                <?php
                  $social_img = get_sub_field('icon', 'option');
                ?>
                <li class="social__item" title="<?php the_sub_field('title');?>">
                  <a href="<?php the_sub_field('link'); ?>">
                    <img src="<?php echo $social_img['url']; ?>" alt="<?php echo $social_img['alt']; ?>">
                  </a>
                </li>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="copyright">
          <p class="copyright__text text-emphasis-disabled fw-medium">&copy;<?php echo date('Y').' '.get_bloginfo('name');?>, All Rights Reserved.</p>

          <?php
            wp_nav_menu(array(
              'theme_location' => 'footer-menu-3',
              'container' => 'nav',
              'container_class' => 'copyright__nav'
            ));
          ?>
        </div>
      </div>
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
