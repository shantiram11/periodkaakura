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
                <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-6">
                    <div class="mb-6 lg:mb-0">
                        <img
                                src="https://tecdn.b-cdn.net/img/new/fluid/city/113.webp"
                                class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img
                                src="https://tecdn.b-cdn.net/img/new/fluid/city/111.webp"
                                class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img
                                src="https://tecdn.b-cdn.net/img/new/fluid/city/112.webp"
                                class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img
                                src="https://tecdn.b-cdn.net/img/new/fluid/city/114.webp"
                                class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img
                                src="https://tecdn.b-cdn.net/img/new/fluid/city/115.webp"
                                class="w-full rounded-md shadow-lg" />
                    </div>
                    <div class="mb-6 lg:mb-0">
                        <img
                                src="https://tecdn.b-cdn.net/img/new/fluid/city/116.webp"
                                class="w-full rounded-md shadow-lg" />
                    </div>
                </div>
            </div>

            <!--Copyright section-->
            <div
                    class="bg-[#9c111200] p-4 text-center text-white dark:bg-neutral-700 dark:text-neutral-200">
                © <?php echo date('Y'); ?> Copyright:
                <a class="dark:text-neutral-400" href="https://tailwind-elements.com/"
                >PeriodKaaKura</a
                >
            </div>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
