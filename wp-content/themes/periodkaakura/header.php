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

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header relative">
 
    <nav>
      
            <ul>
              
              <li><i class="fa-solid fa-magnifying-glass"></i></li>
              <li>Testinomials</li>
              <li>Podcast</li>
              <li>About us</li>
            </ul>
          </nav>
    </div>
     
    </header><!-- #masthead -->
