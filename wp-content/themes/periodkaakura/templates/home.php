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
<main id="primary" class="site-main">
    <?php
    get_template_part('template-parts/sections/hero');
    get_template_part('template-parts/sections/episodeList');
    get_template_part('template-parts/sections/pkk_videos');
    get_template_part('template-parts/sections/pkk_news');
    get_template_part('template-parts/sections/teamAndContact');
    get_template_part('template-parts/sections/testimonials');
    get_template_part('template-parts/sections/photoGallery');
    ?>
</main>

<?php
get_footer();
?>