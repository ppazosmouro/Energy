<?php


if( !defined('_VERSION')) {
  define('_VERSION', '1.0.0');
}

// Custom queries
require_once get_template_directory() . '/inc/queries.php';

if ( ! function_exists( 'renergy_setup' ) ) :
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   */
  function renergy_setup() {
    // Add default posts and comments RSS feed links to head.
    add_theme_support( 'automatic-feed-links' );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support( 'post-thumbnails' );

    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
      array(
        'primary-menu' => esc_html__( 'Header menu', 'renergy' ),
        'footer-menu-1' => esc_html__( 'Footer menu company', 'renergy' ),
        'footer-menu-2' => esc_html__( 'Footer menu information', 'renergy' ),
        'footer-menu-3' => esc_html__( 'Footer menu terms', 'renergy' ),
      )
    );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support(
      'html5',
      array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
      )
    );

    // Set up the WordPress core custom background feature.
    add_theme_support(
      'custom-background',
      apply_filters(
        'renergy_custom_background_args',
        array(
          'default-color' => 'ffffff',
          'default-image' => '',
        )
      )
    );

    // Add theme support for selective refresh for widgets.
    add_theme_support( 'customize-selective-refresh-widgets' );

    /**
     * Add support for core custom logo.
     *
     * @link https://codex.wordpress.org/Theme_Logo
     */
    add_theme_support(
      'custom-logo',
      array(
        'height'      => 120,
        'width'       => 250,
        'flex-width'  => true,
        'flex-height' => true,
      )
    );
  }
endif;
add_action( 'after_setup_theme', 'renergy_setup' );

// Custom styles and libraries
function renergy_styles_scripts() {
  // Custom stylesheet
  wp_enqueue_style('renergy-stylesheet', get_stylesheet_uri(), array(), _VERSION);

  //Load jQuery
  wp_enqueue_script('jquery');

  // Custom scripts
  wp_enqueue_script('renergy-scripts', get_template_directory_uri() . '/js/main.js', array('jquery'), _VERSION, true);
}
add_action( 'wp_enqueue_scripts', 'renergy_styles_scripts' );


// Fonts
function renergy_google_fonts() {
  $google_fonts_url = 'https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;700&display=swap';
  $google_fonts_url_alt = 'https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@1,700&display=swap';
?>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="preload" as="style" href="<?php echo $google_fonts_url; ?>" />
  <link rel="stylesheet" href="<?php echo $google_fonts_url; ?>" media="print" onload="this.media='all'" />

  <link rel="preload" as="style" href="<?php echo $google_fonts_url_alt; ?>" />
  <link rel="stylesheet" href="<?php echo $google_fonts_url_alt; ?>" media="print" onload="this.media='all'" />

  <noscript>
    <link rel="stylesheet" href="<?php echo $google_fonts_url; ?>" />
    <link rel="stylesheet" href="<?php echo $google_fonts_url_alt; ?>" />
  </noscript>
<?php
}
add_action( 'wp_head', 'renergy_google_fonts' );


// ACF Options Page
if( function_exists('acf_add_options_page') ) {

  acf_add_options_page(array(
    'page_title'  => 'Theme General Settings',
    'menu_title'  => 'Theme Settings',
    'menu_slug'   => 'theme-general-settings',
    'capability'  => 'edit_posts',
    'redirect'    => false
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Header Settings',
    'menu_title'  => 'Header',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_sub_page(array(
    'page_title'  => 'Theme Footer Settings',
    'menu_title'  => 'Footer',
    'parent_slug' => 'theme-general-settings',
  ));

  acf_add_options_page(array(
    'page_title'  => 'Global Sections',
    'menu_title'  => 'Global Sections',
    'parent_slug'   => 'theme-general-settings',
  ));
}
