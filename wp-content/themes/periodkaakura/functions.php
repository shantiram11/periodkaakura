<?php
/**
 * periodkaakura functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package periodkaakura
 */

if ( ! defined( 'KS_DEV_MODE' ) ) {
    define( 'PKK_DEV_MODE', true );
}
if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

function getIdBySlug($slug, $post_type = 'post'): int
{
    //    return url_to_postid( site_url($slug) );
    if ($post = get_page_by_path($slug, OBJECT, $post_type))
    {
        $id = $post->ID;
    } else
    {
        $id = 0;
    }

    return $id;
}

require get_template_directory() . '/inc/setup.php';
require get_template_directory() . '/inc/widgets.php';
require get_template_directory() . '/inc/front/enqueue.php';
require get_template_directory() . '/inc/custom-functions.php';

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

require get_template_directory() . '/inc/class/PkkCPT.php';
require get_template_directory() . '/inc/custom-meta-box/CMB-functions.php';
/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

