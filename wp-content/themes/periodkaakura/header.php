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
<!--    <link rel="stylesheet"-->
<!--          href="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/simplePagination.min.css">-->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <header id="masthead" class="site-header fixed bg-white left-0 top-0 right-0 z-20">
        <div class="container">
            <div class="flex justify-between items-center header-content">
                <div class="site-branding">
                    <a href="/">
                        <?php
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id, 'full');
                        if (has_custom_logo()) {
                            echo '<img class="w-[75px]" src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '">';
                        } else {
                            echo '<h1>' . get_bloginfo('name') . '</h1>';
                        }
                        ?>
                    </a>
                </div>
                <div class="flex items-center gap-8 ">
                    <div class="hidden lg:block lg:h-full">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary-menu',
                            'menu_class' => 'menu flex items-center gap-8',
                            'menu_id' => 'site-navigation',
                            'container' => 'nav',
                        ));
                        ?>
                    </div>
                    <div class="flex items-center gap-2">
                        <div class="mobile icon gradiant-bg with-icon lg:hidden" id="mobile-toggle">
                            <svg height="32px" id="Layer_1" style="enable-background:new 0 0 32 32;" version="1.1"
                                 viewBox="0 0 32 32" width="32px" xml:space="preserve"
                                 xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path
                                        d="M4,10h24c1.104,0,2-0.896,2-2s-0.896-2-2-2H4C2.896,6,2,6.896,2,8S2.896,10,4,10z M28,14H4c-1.104,0-2,0.896-2,2 s0.896,2,2,2h24c1.104,0,2-0.896,2-2S29.104,14,28,14z M28,22H4c-1.104,0-2,0.896-2,2s0.896,2,2,2h24c1.104,0,2-0.896,2-2 S29.104,22,28,22z"/></svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-navigation hidden lg:!hidden" id="mobile-nav">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary-menu',
                    'menu_class' => 'mob-navigation',
                    'menu_id' => 'site-navigation',
                    'container' => 'nav',
                ));
                ?>
            </div>
        </div>
    </header>
</div>


