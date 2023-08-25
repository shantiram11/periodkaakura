<?php

/**
 * Include and setup custom metaboxes and fields. (make sure you copy this file to outside the CMB2 directory)
 *
 * Be sure to replace all instances of '_drive_auto_body_' with your project's prefix.
 * http://nacin.com/2010/05/11/in-wordpress-prefix-everything/
 *
 * @category drive-autobody
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/CMB2/CMB2
 */

/**
 * Get the bootstrap! If using the plugin from wordpress.org, REMOVE THIS!
 */

if (file_exists(get_template_directory() . '/inc/custom-meta-box/cmb2/init.php')) {
    require_once get_template_directory() . '/inc/custom-meta-box/cmb2/init.php';
}

/*start: page meta box */
require get_template_directory() . '/inc/custom-meta-box/page-meta.php';
/*end: page meta box */

/*start: About page meta box */
require get_template_directory() . '/inc/custom-meta-box/contact-meta.php';
/*end: About page meta box */

/*start: About page meta box */
require get_template_directory() . '/inc/custom-meta-box/collection-meta.php';
/*end: About page meta box */