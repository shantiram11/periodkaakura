<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package periodkaakura
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.min.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header relative">
        <div id="nav">
            <div class="container">
                <div class="flex justify-between">
                    <img class="object-cover w-[53px] h-[53px]"
                         src="<?php echo get_template_directory_uri() . '/assets/img/temp/header-logo.svg' ?>">
                    <ul>
                        <li class="">About us</li>
                        <li class="">Podcast</li>
                        <li class="">Testinomials</li>
                    </ul>
                </div>
            </div>
        </div>
    </header><!-- #masthead -->
</div>


