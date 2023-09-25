<?php
$post_id = getIdBySlug('videos', 'sections');

// Get the episodes data from the CMB2 group
$title = get_post_meta($post_id, 'section_title', true);
$subtitle = get_post_meta($post_id, 'section_subtitle', true);
$videos = get_post_meta($post_id, 'section_videos_repeat_group', true);
?>

<section class="pkk-videos mt-6 mb-20">
    <div class="container">
        <p class="title py-2"><?php echo $title ?></p>
        <p class="subtitle mt-2 mb-4"><?php echo $subtitle ?></p>
        <div class=" md:flex gap-9 owl-carousel owl-theme" id="video_slider">
            <?php
            if (isset($videos)):
                foreach ($videos as $video):
                    ?>
<!--                    <div class="item">-->
                        <?php
                        echo htmlspecialchars_decode($video['iframe']);
                        ?>
<!--                    </div>-->
                <?php
                endforeach;
            endif;
            ?>

        </div>
    </div>
</section>