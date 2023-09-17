<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package periodkaakura
 */

get_header();
?>

    <main id="primary" class="site-main">
<!--        --><?php
//        get_template_part('template-parts/sections/hero');
//
//        ?>
        <div class="container" id="404-page">
            <div class="error-container">
                <h1 class="error-heading">Oops! That page can't be found.</h1>
                <p class="error-message">The page you are looking for might have been removed or is temporarily
                    unavailable.</p>
                <div class="back-link">
                    <a href="/">Go back to the home page</a>
                </div>
            </div>
        </div>

<!--        <img src="--><?php //echo get_template_directory_uri() ?><!--/assets/img/foot-vector.png"-->
<!--             alt="animated-picture-of-hosts">-->

    </main><!-- #main -->

<?php
get_footer();
