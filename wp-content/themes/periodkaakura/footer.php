<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package periodkaakura
 */


$youtube = nl2br(htmlspecialchars_decode(get_option('pkk_youtube_url')));
$spotify = nl2br(htmlspecialchars_decode(get_option('pkk_spotify')));
$email = nl2br(htmlspecialchars_decode(get_option('pkk_email')));
$contact = nl2br(htmlspecialchars_decode(get_option('pkk_contact_number')));
$facebook = nl2br(htmlspecialchars_decode(get_option('pkk_facebook_url')));
$instagram = nl2br(htmlspecialchars_decode(get_option('pkk_instagram_url')));
$twitter = nl2br(htmlspecialchars_decode(get_option('pkk_twitter')));
$sound_cloud = nl2br(htmlspecialchars_decode(get_option('pkk_sound_cloud')));
$apple_podcast = nl2br(htmlspecialchars_decode(get_option('pkk_apple_podcast')));
?>

<footer id="colophon" class="bg-[#9C1112] text-center text-white dark:bg-neutral-600 dark:text-neutral-200 site-footer">
    <div class="site-info">
        <!--Footer container-->
        <div class="container p-6">
            <div class="py-[45px] flex justify-between gap-8 px-[10%] items-center">
                <img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/temp/footer-logo.jpeg"
                        class="w-[96px]  rounded-full  shadow-lg"/>
                <p class="logo-tag">Period Kaa Kura Podcast is an initiation of two young women from Nepal, Shristi Kafle and Priyanka Budhathoki, breaking the rooted silence  </p>
            </div>
            <div class="flex justify-around items-start gap-4 ">
                <div class="mb-6 lg:mb-0">
                    <ul class="list-none">
                        <h3 class="mb-5"> Social </h3>
                        <?php
                        if ($instagram):
                            ?>
                            <li><a target="_blank" href="<?php echo $instagram; ?>">
                                    Instagaram
                                </a>

                            </li>
                        <?php
                        endif;
                        if ($facebook):
                            ?>
                            <li><a target="_blank" href="<?php echo $facebook; ?>">
                                    Facebook
                                </a>

                            </li>
                        <?php
                        endif;
                        if ($twitter):
                            ?>
                            <li><a target="_blank" href="<?php echo $twitter; ?>">
                                    Twitter
                                </a>

                            </li>
                        <?php
                        endif;
                        if ($youtube):
                            ?>
                            <li><a target="_blank" href="<?php echo $youtube; ?>">
                                    Youtube
                                </a></li>
                        <?php
                        endif;
                        ?>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0 grid place-content-end">
                    <ul class="list-none">
                        <h3 class="mb-5"> Listen On </h3>
                        <?php
                        if ($spotify):
                            ?>
                            <li><a target="_blank" href="<?php echo $spotify; ?>">
                                    Spotify
                                </a>

                            </li>
                        <?php
                        endif;
                        if ($sound_cloud):
                            ?>
                            <li><a target="_blank" href="<?php echo $sound_cloud; ?>">
                                    Sound cloud
                                </a>

                            </li>
                        <?php
                        endif;
                        if ($apple_podcast):
                            ?>
                            <li>
                                <a href="<?php echo $apple_podcast; ?>">Apple Podcast</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0 grid place-content-end">
                    <ul class="list-none">
                        <h3 class="mb-5"> Contact </h3>
                        <?php
                        if ($email):
                            ?>
                            <li>
                                <a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
                            </li>
                        <?php endif;
                        if ($contact):
                            ?>
                            <li>
                                <a href="tel:<?php echo $contact; ?>"><?php echo $contact; ?></a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </div>

        <!--Copyright section-->
        <div class=" mt-10 pb-4">

            <div
                    class="text-white text-sm font-bold dark:bg-neutral-700 dark:text-neutral-200">
                © <?php echo date('Y'); ?> Copyright:
                <a class="" href="/"
                >PeriodKaaKura</a
                >
            </div>

            <a class="text-[#29CC97] text-sm font-bold" href=""
            > Website By: Sweven Visuals</a
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplePagination.js/1.6/jquery.simplePagination.min.js"></script>

<?php wp_footer(); ?>

</body>
</html>
