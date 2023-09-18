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


function pkk_show_only_in_section_hero_sections($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section Hero
    if ($slug === "section-hero") {
        return true;
    }
    return false;
}

function pkk_show_only_in_section_episodes($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section episodes
    if ($slug === "episodes") {
        return true;
    }
    return false;
}

function pkk_show_only_in_testimonial_section($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section episodes
    if ($slug === "testimonials") {
        return true;
    }
    return false;
}

function pkk_show_only_in_news($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section episodes
    if ($slug === "news") {
        return true;
    }
    return false;
}
function pkk_show_only_in_team($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section episodes
    if ($slug === "team") {
        return true;
    }
    return false;
}
function pkk_show_only_in_gallery($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section gallery
    if ($slug === "gallery") {
        return true;
    }
    return false;
}
function pkk_show_only_in_videos($field): bool
{
    $slug = get_post_field('post_name', $field->object_id);

    //testimonial will only be displayed in section gallery
    if ($slug === "videos") {
        return true;
    }
    return false;
}


/*start: page meta box */
require get_template_directory() . '/inc/custom-meta-box/page-meta.php';
/*end: page meta box */

/*start: About page meta box */
require get_template_directory() . '/inc/custom-meta-box/about-meta.php';
/*end: About page meta box */

/*start: About page meta box */
require get_template_directory() . '/inc/custom-meta-box/episode-meta.php';
/*end: About page meta box */