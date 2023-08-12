<?php

/**
 * Template Name: home
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pkk
 */

get_header();
?>
<main id="primary" class="site-main ">
    <?php
    get_template_part('template-parts/sections/hero');
    ?>
  <?php
    get_template_part('template-parts/sections/miniplay');
    ?>
    <?php
    get_template_part('template-parts/sections/playlist');
    ?>
    <?php
    get_template_part('template-parts/sections/team');
    ?>
    <?php
    get_template_part('template-parts/sections/testimonial');
    ?>
    <?php
    get_template_part('template-parts/sections/gallery');
    ?>
    <?php
    get_template_part('template-parts/sections/box');
    ?>
    <?php
    get_template_part('template-parts/sections/episodelist');
    ?>
  
</main>

<?php
get_footer();
?>