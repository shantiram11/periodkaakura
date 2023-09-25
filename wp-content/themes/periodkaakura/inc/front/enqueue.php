<?php
/**
 * Enqueue scripts and styles.
 */
function periodkaakura_scripts()
{

    $uri = get_theme_file_uri();
    $ver = PKK_DEV_MODE ? time() : _S_VERSION;

    wp_register_style('font-awesome-style', $uri . '/assets/css/all.min.css', [], $ver);
    wp_register_style('periodkaakura-font', $uri . '/assets/css/fonts.css', [], $ver);
    wp_register_style('periodkaakura-theme', $uri . '/assets/css/theme.css', [], $ver);
    wp_register_style('owl-carousel-css', $uri . '/assets/css/owl.carousel.min.css', [], $ver);
    wp_register_style('custom_css', $uri . '/assets/css/custom.css', [], $ver);
    wp_register_style('simple-pagination', $uri . '/assets/css/simplePagination.min.css', [], $ver);

    wp_enqueue_style('font-awesome-style');
    wp_enqueue_style('periodkaakura-font');
    wp_enqueue_style('periodkaakura-theme');
    wp_enqueue_style('owl-carousel-css');
    wp_enqueue_style('simple-pagination');
    wp_enqueue_style('custom_css');

    wp_enqueue_style('periodkaakura-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('periodkaakura-style', 'rtl', 'replace');

    wp_enqueue_script("jquery");

    wp_register_script('simplePagination-script', $uri . '/assets/js/simplePagination.min.js', ['jquery'], $ver, true);
    wp_register_script('periodkaakura-script', $uri . '/assets/js/script.js', ['jquery'], $ver, true);
    wp_register_script('owl-carousel-script', $uri . '/assets/js/owl.carousel.js', ['jquery'], $ver, true);


    wp_enqueue_script("owl-carousel-script");
    wp_enqueue_script("simplePagination-script");
    wp_enqueue_script("periodkaakura-script");

    wp_enqueue_script('periodkaakura-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), _S_VERSION, true);

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}

add_action('wp_enqueue_scripts', 'periodkaakura_scripts');
