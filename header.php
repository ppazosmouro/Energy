<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name').' - '.get_bloginfo('description');
    } else{
        echo wp_title('');
    }?>
  </title>

  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="header js-header">
    <div class="container header__block">

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

        <p class="logo__text">Renergy</p>
      </div>

      <div class="menu-btn" id="menuBtn">
        <div class="menu-btn__burger"></div>
      </div>

      <nav class="nav" id="menu">
        <?php
          wp_nav_menu(array(
            'theme_location' => 'primary-menu',
            'container' => 'nav',
            'container_class' => 'main-nav',
          ));
        ?>
      </nav>
    </div>
  </header>
