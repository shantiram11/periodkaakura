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
        <div class="top-header">
            <div class="container">
                <div class="desktop-nav-container">
                    <!-- .site-branding -->
                    <div class="site-branding">
                        <a href="#">
                            <figure>
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/temp/header-logo.svg"
                                     alt="header logo"/>
                            </figure>
                        </a>
                    </div>
                    <!-- .site-branding -->

                    <!-- #site-navigation -->
                    <nav id="site-navigation" class="main-navigation">
                        <div>
                            <ul>
                                <li class="active"><a href="#">About</a></li>
                                <li><a href="#">Posdcast</a></li>
                                <li><a href="#">Testimonials</a></li>
                            </ul>
                        </div>
                    </nav>
                    <!-- #site-navigation -->
                </div>
            </div>
        </div>
        <div class="container">
            <div class="flex header-flex-box">
                <div class="left-col flex-item">
                    <div class="header-title-box">
                        <h1 class="title">Know about </br>period kaa kura</h1>
                        <span class="subtitle">A space for menstruators to speak on the silenced <br>subject "Period"</span>
                    </div>
                    <div class="header-listen-box">
                        <span class="title"><span>Latest Episode:</span>Period ka kura</span>
                        <div class="listen-button-container">
                            <button class="pkk-button bg-light-red flex">
                                <img class="mr-2"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/play-white.svg"
                                     alt="listen button">Listen
                                Now
                            </button>
                            <button class="pkk-button flex">
                                <img class="mr-2"
                                     src="<?php echo get_template_directory_uri() ?>/assets/img/play-red.svg"
                                     alt="browse button">
                                Browser All
                            </button>
                        </div>
                    </div>
                    <div class="header-subscribe-box">
                        <div class="flex">
                            <div class="podcast-img-container">
                                <img src="<?php echo get_template_directory_uri() ?>/assets/img/podcast.svg"
                                     class="img-fluid" alt="mic">
                            </div>
                            <h2 class="text-theme-red">Subscribe us on</h2>
                        </div>
                        <div class="flex tag-box">
                            <button class="tag-item">
                                <img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/apple.svg" alt="apple logo">
                                <span>Apple Podcast</span>
                            </button>
                            <button class="tag-item">
                                <img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/sound-cloud.svg" alt="sound cloud logo">
                                <span>Sound Cloud</span>
                            </button>
                            <button class="tag-item">
                                <img
                                        src="<?php echo get_template_directory_uri() ?>/assets/img/rss.svg" alt="rss logo">
                                <span>RSS Feed</span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="right-col flex-item">
                    <div class="hero-image-container cursor-pointer">
                        <figure class="hero-left">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/header-left.svg"
                                 class="img-fluid cover-image" alt="a woman ready for hosing podcast">
                        </figure>
                        <figure class="hero-right">
                            <img src="<?php echo get_template_directory_uri() ?>/assets/img/header-right.svg"
                                 class="img-fluid cover-image" alt="a woman ready for hosing podcast">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
        <figure class="header-wave">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/banner-bg.png"
                 class="cover-image img-fluid" alt="wave">
        </figure>
    </header><!-- #masthead -->
