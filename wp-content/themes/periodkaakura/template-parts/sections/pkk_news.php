<?php
$post_id = getIdBySlug('news', 'sections');

// Get the episodes data from the CMB2 group
$title = get_post_meta($post_id, 'section_title', true);
$news = get_post_meta($post_id, 'section_news_repeat_group', true);

?>
<section class="pkk-news">
    <div class="container">
        <p class="title py-2"><?php echo $title ?></p>
        <span class="subtitle">Sub-title text lorem ipsuim</span>

        <div class="pb-6 pt-3 news-gallery grid grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6 flex-wrap">
            <?php
            if (!empty($news)):
                foreach ($news as $single_news):
                    ?>
                    <div class="relative">
                        <img class="w-full h-full news-image"
                             src="<?php echo $single_news['image']; ?>"
                             alt="Period kaa kura news screenshot">
                        <div class="news-overlay">
                            <a class="rounded-lg px-3 font-bold py-1 text-[#9c1112] bg-white" href="<?php echo $single_news['link']?>" target="_blank"> View </a>
                        </div>
                    </div>
                <?php
                endforeach;
            endif;
            ?>
            <!--            <div class="relative">-->
            <!--                <img class="max-h-[150px]" src="-->
            <?php //echo get_template_directory_uri() ?><!--/assets/img/foot-vector.png"-->
            <!--                     alt="animated-picture-of-hosts">-->
            <!---->
            <!--            </div>-->
            <!--            <div class="relative">-->
            <!--                <img class="max-h-[150px]" src="-->
            <?php //echo get_template_directory_uri() ?><!--/assets/img/foot-vector.png"-->
            <!--                     alt="animated-picture-of-hosts">-->
            <!---->
            <!--            </div>-->

        </div>
    </div>
</section>