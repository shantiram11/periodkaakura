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

?>

<footer id="colophon" class="bg-[#9C1112] text-center text-white dark:bg-neutral-600 dark:text-neutral-200 site-footer">
    <div class="site-info">
        <!--Footer container-->
        <div class="container p-6">
            <div class="py-[45px]">
                <img
                        src="<?php echo get_template_directory_uri() ?>/assets/img/temp/footer-logo.jpeg"
                        class="w-[96px] m-auto sm:m-1 rounded-full  shadow-lg"/>
            </div>
            <div class="grid gap-4 md:grid-cols-2 lg:grid-cols-4">
                <div class="mb-6 lg:mb-0">
                    <ul class="list-none">
                        <h3 class="mb-5"> Social </h3>
                        <li>
                            Instagaram
                        </li>
                        <li>
                            Facebook
                        </li>
                        <li>
                            Twitter
                        </li>
                        <li>
                            Youtube
                        </li>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0">
                    <ul class="list-none">
                        <h3 class="mb-5"> Listen On </h3>
                        <li>
                            <a href="">Spotify</a>
                        </li>
                        <li>
                            <a href="">Sound Cloud</a>
                        </li>
                        <li>
                            <a href="">Apple Podcast</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0">
                    <ul class="list-none">
                        <h3 class="mb-5"> Contact </h3>
                        <li>
                            <a href="mailto:periodkaakura@gmail.com">periodkaakura@gmail.com</a>
                        </li>
                        <li>
                            <a href="tel:+9779800001223">9800001223</a>
                        </li>
                    </ul>
                </div>
                <div class="mb-6 lg:mb-0">
                    <ul class="list-none">
                        <h3 class="mb-5"> Tech Support </h3>
                        <li>
                            Sweven Visuals
                        </li>
                        <li>
                            Swevenvisuals@gmail.com
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--Copyright section-->
        <div class="flex justify-around items-center pb-4">

            <div
                    class="text-white text-xl font-bold dark:bg-neutral-700 dark:text-neutral-200">
                © <?php echo date('Y'); ?> Copyright:
                <a class="" href="https://tailwind-elements.com/"
                >PeriodKaaKura</a
                >
            </div>

            <a class="text-[#29CC97] text-xl font-bold"  px-4" href="https://tailwind-elements.com/"
            > Website By: Sweven Visuals</a
        </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
