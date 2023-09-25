<?php
$post_id = getIdBySlug('testimonials', 'sections');

// Get the episodes data from the CMB2 group
$title = get_post_meta($post_id, 'section_title', true);
$testimonials = get_post_meta($post_id, 'section_testimonial_section_repeat_group', true);

?>

<section class="section-testimonials mt-6 mb-20" id="testimonial">
    <div class="container" >
        <h3 class="mt-20 text-3xl text-black font-bold mb-4"><?php echo $title ?></h3>
        <div id="customers-testimonials" class="flex gap-[60px] owl-carousel" style="overflow-x: hidden">
           <?php
           if(isset($testimonials)):
               foreach ($testimonials as $testimonial):
           ?>
            <div class="testimonial ">
                <img class="cover-image " src="<?php echo $testimonial['image']; ?>">
                <div class="p-8 flex flex-col items-center justify-between testimonial-content">
                    <h3 class="name text-center">
                     <?php echo $testimonial['name']; ?>
                    </h3>
                    <p class="position mt-3 text-center">   <?php echo $testimonial['position']; ?></p>
                    <p class="description mt-6 text-center"> <?php echo $testimonial['testimonial']; ?> </p>
                </div>
            </div>
            <?php
            endforeach;
            endif;
            ?>
<!--            <div class="testimonial flex flex-col items-center justify-between">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/assets/img/temp/testi2.png' ?><!--">-->
<!--                <div class="p-8 testimonial-content">-->
<!--                    <h3 class="name text-center">-->
<!--                        Priyanka & Shristi-->
<!--                    </h3>-->
<!--                    <p class="position mt-3 text-center">Co-creator of Period Kaa Kura</p>-->
<!--                    <p class="description mt-6 text-center">People fighting against period taboos and the stigma they-->
<!--                        faced-->
<!--                        inspire us the most. There are changemakers in the society becoming the voice of the-->
<!--                        voiceless that encourages us to keep moving forward with creating awareness on menstrual-->
<!--                        health. We envision a society where no girls, women and non-binary people face-->
<!--                        discrimination during period. For that, we aim to continue producing more podcast episodes-->
<!--                        in the coming days raising awareness on menstrual health and hygiene. </p>-->
<!--                </div>-->
<!--            </div>-->
<!--            <div class="testimonial flex flex-col items-center justify-between">-->
<!--                <img src="--><?php //echo get_template_directory_uri() . '/assets/img/temp/testimonial.png' ?><!--">-->
<!--                <div class="p-8 testimonial-content">-->
<!--                    <h3 class="name text-center">-->
<!--                        Gyan Maharjan-->
<!--                    </h3>-->
<!--                    <p class="position mt-3 text-center">President X-Pose Nepal</p>-->
<!--                    <p class="description mt-6 text-center">“Menstruation is not an issue for females. Unless we males-->
<!--                        are aware and comfortable cooperating and openly discussing this topic, taboos and stigma-->
<!--                        related to menstruation will remain the same.“ </p>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</section>
