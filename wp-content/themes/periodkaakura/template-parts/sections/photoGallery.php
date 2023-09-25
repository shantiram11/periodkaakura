
<?php
$post_id = getIdBySlug('gallery', 'sections');
$title = get_post_meta($post_id, 'section_title', true);
$subtitle = get_post_meta($post_id, 'section_subtitle', true);
$gallery = get_post_meta($post_id, 'section_gallery_repeat_group', true);
?>
<section class="section-photo-gallery mt-6 mb-20">
        <div class="container ">
            <p class="title py-2"><?php echo $title ?></p>
            <p class="subtitle  mt-2 mb-4"><?php echo $subtitle ?></p>
            <div class="st-gallery pb-[60px]">
            <div class="gap-[54px] grid owl-carousel" id="gallery_slider">
                <?php if (isset($gallery)):
                    foreach ($gallery as $image):
                        ?>
                        <div class="gallery-item flex flex-col justify-around items-center">
                            <img class="img-fluid rounded-[35px] cover-image" src="<?php echo $image['image'] ?>" alt="gallery images periodkaakura"/>
                            <p class="caption mt-2">
                                <?php echo $image['caption'] ?>
                            </p>
                        </div>
                    <?php
                    endforeach;
                endif;
                ?>
            </div>

        </div>
    </div>
</section>

