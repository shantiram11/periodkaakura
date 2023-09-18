<?php
$post_id = getIdBySlug('videos', 'sections');

// Get the episodes data from the CMB2 group
$title = get_post_meta($post_id, 'section_title', true);
$subtitle = get_post_meta($post_id, 'section_subtitle', true);
$videos = get_post_meta($post_id, 'section_videos_repeat_group', true);
?>

<section class="pkk-videos">
    <div class="container">
        <p class="title py-2"><?php echo $title ?></p>
        <span class="subtitle"><?php echo $subtitle ?></span>

        <div class="pb-6 md:flex gap-9">
            <?php
            if (isset($videos)):
                foreach ($videos as $video):
                    echo htmlspecialchars_decode($video['iframe']);
                endforeach;
            endif;
            ?>

        </div>
    </div>
</section>