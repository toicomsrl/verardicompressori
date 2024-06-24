<?php
require_once get_template_directory() . '/inc/walker.php';

//Aggiunta funzionalità tema
function verardi_custom_logo_setup()
{
    $defaults = array(
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'verardi_custom_logo_setup');

//Aggiunta menù
function verardi_register_menus()
{
    register_nav_menus(array(
        'menu_principale' => __('Menu Principale', 'Verardi'),
        // Add more menu locations if needed
    ));
    register_nav_menus(array(
        'menu_secondario' => __('Menu Secondario', 'Verardi'),
        // Add more menu locations if needed
    ));
}
add_action('after_setup_theme', 'verardi_register_menus');

define('TEMPPATH', get_template_directory_uri());
define('TEMPDIR', get_template_directory());
define('HOME', get_home_url());

define('IMAGES', TEMPPATH . '/assets/imgs');

add_filter('show_admin_bar', '__return_false');
add_filter('xmlrpc_enabled', '__return_false');

add_theme_support('post-thumbnails');

require_once get_template_directory() . '/inc/walker.php';

function verardi_assets()
{
    wp_enqueue_style('style_bootstrap', TEMPPATH . '/assets/css/bootstrap.min.css', false, '1.0', 'all');
    wp_enqueue_style('style_fontawesome', TEMPPATH . '/assets/css/fontawesome.css', false, '1.0', 'all');
    wp_enqueue_style('style_flaticon', TEMPPATH . '/assets/css/flaticon.css', false, '1.0', 'all');
    wp_enqueue_style('style_base_icons', TEMPPATH . '/assets/css/pbminfotech-base-icons.css', false, '1.0', 'all');
    wp_enqueue_style('style_themify', TEMPPATH . '/assets/css/themify-icons.css', false, '1.0', 'all');
    wp_enqueue_style('style_slick', TEMPPATH . '/assets/css/swiper.min.css', false, '1.0', 'all');
    wp_enqueue_style('style_magnific', TEMPPATH . '/assets/css/magnific-popup.css', false, '1.0', 'all');
    wp_enqueue_style('style_aos', TEMPPATH . '/assets/css/aos.css', false, '1.0', 'all');
    wp_enqueue_style('style_shortcode', TEMPPATH . '/assets/css/shortcode.css', false, '1.0', 'all');
    wp_enqueue_style('style_base', TEMPPATH . '/assets/css/base.css', false, '1.0', 'all');
    wp_enqueue_style('style_theme_style', TEMPPATH . '/assets/css/style.css', false, '1.0', 'all');
    wp_enqueue_style('style_responsive', TEMPPATH . '/assets/css/responsive.css', false, '1.0', 'all');
    wp_enqueue_style('style_verardi', TEMPPATH . '/assets/css/verardi.css', false, '1.0', 'all');


    //Script messi prima della chiusura del body
    wp_enqueue_script('js_jquery', TEMPPATH . '/assets/js/jquery.min.js', array(), false, true);
    wp_enqueue_script('js_popper', TEMPPATH . '/assets/js/popper.min.js', array(), false, true);
    wp_enqueue_script('js_bootstrap', TEMPPATH . '/assets/js/bootstrap.min.js', array(), false, true);
    wp_enqueue_script('js_waypoint', TEMPPATH . '/assets/js/jquery.waypoints.min.js', array(), false, true);
    wp_enqueue_script('js_appear', TEMPPATH . '/assets/js/jquery.appear.js', array(), false, true);
    wp_enqueue_script('js_numinate', TEMPPATH . '/assets/js/numinate.min.js', array(), false, true);
    wp_enqueue_script('js_swiper', TEMPPATH . '/assets/js/swiper.min.js', array(), false, true);
    wp_enqueue_script('js_magnific', TEMPPATH . '/assets/js/jquery.magnific-popup.min.js', array(), false, true);
    wp_enqueue_script('js_progress', TEMPPATH . '/assets/js/circle-progress.js', array(), false, true);
    wp_enqueue_script('js_countdown', TEMPPATH . '/assets/js/jquery.countdown.min.js', array(), false, true);
    wp_enqueue_script('js_aos', TEMPPATH . '/assets/js/aos.js', array(), false, true);
    wp_enqueue_script('js_gsap', TEMPPATH . '/assets/js/gsap.js', array(), false, true);
    wp_enqueue_script('js_scroll_trigger', TEMPPATH . '/assets/js/ScrollTrigger.js', array(), false, true);
    wp_enqueue_script('js_split_text', TEMPPATH . '/assets/js/SplitText.js', array(), false, true);
    wp_enqueue_script('js_cursors', TEMPPATH . '/assets/js/cursor.js', array(), false, true);
    wp_enqueue_script('js_magnetic', TEMPPATH . '/assets/js/magnetic.js', array(), false, true);
    wp_enqueue_script('js_gsap_animation', TEMPPATH . '/assets/js/gsap-animation.js', array(), false, true);
    wp_enqueue_script('js_theme_script', TEMPPATH . '/assets/js/scripts.js', array(), false, true);

    // Includo lo script del tema linknet
    wp_enqueue_script('verardi_script', TEMPPATH . '/script.js', array(), false, true);
}
add_action('wp_enqueue_scripts', 'verardi_assets');
