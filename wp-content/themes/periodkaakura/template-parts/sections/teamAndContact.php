<?php
$post_id = getIdBySlug('team', 'sections');
$teams = get_post_meta($post_id, 'section_team_repeat_group', true);
$title = get_post_meta($post_id, 'section_title', true);
$subtitle = get_post_meta($post_id, 'section_subtitle', true);
?>
<section class="section-team-and-contact mt-6 mb-20">
    <div class="team-section">
        <div class="container" id="team">
            <div class="relative overflow-x-visible pt-[70px] pb-[30px]">
                <!--                <div class="bg-black absolute top-0 left-0 h-full w-full" style="z-index: -1;"></div>-->
                <p class="title"><?php echo $title ?></p>
                <p class="subtitle mt-2 mb-4"><?php echo $subtitle ?></p>
                <?php
                if (isset($teams)):
                    foreach ($teams as $team):
                        ?>
                        <div class="md:flex gap-8 mt-10 mb-2 md:mb-0">
                            <img class="w-[180px] h-[180px]  rounded-[50%]" src="<?php
                            if (isset($team['image']))
                                echo $team['image']; ?>"
                                 alt="">

                            <div>
                                <div class="md:flex justify-start items-center gap-9">
                        <span class="team-name ">
                          <?php
                          if (isset($team['name']))
                              echo $team['name']; ?>
                        </span>
                                    <div class="flex gap-5">
                                        <a href="<?php
                                        if (isset($team['insta']))
                                            echo $team['insta']; ?>">
                                            <div class="icon-wrapper">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 20 20"
                                                     fill="none">
                                                    <path d="M13.8108 2.0542H5.973C3.80864 2.0542 2.05408 3.80876 2.05408 5.97312V13.811C2.05408 15.9753 3.80864 17.7299 5.973 17.7299H13.8108C15.9752 17.7299 17.7298 15.9753 17.7298 13.811V5.97312C17.7298 3.80876 15.9752 2.0542 13.8108 2.0542Z"
                                                          stroke="url(#paint0_linear_1354_3219)" stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M13.027 9.39817C13.1237 10.0505 13.0123 10.7167 12.7086 11.302C12.4049 11.8873 11.9243 12.362 11.3353 12.6585C10.7463 12.9549 10.0788 13.0581 9.42771 12.9534C8.77665 12.8486 8.1752 12.5412 7.70891 12.0749C7.24262 11.6086 6.93523 11.0072 6.83047 10.3561C6.72571 9.70506 6.8289 9.03754 7.12538 8.44851C7.42185 7.85948 7.89651 7.37894 8.48184 7.07522C9.06717 6.7715 9.73336 6.66009 10.3857 6.75681C11.051 6.85548 11.667 7.16553 12.1427 7.64116C12.6183 8.1168 12.9283 8.73279 13.027 9.39817Z"
                                                          stroke="url(#paint1_linear_1354_3219)" stroke-width="2"
                                                          stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <path d="M14.2026 5.58105H14.2106"
                                                          stroke="url(#paint2_linear_1354_3219)"
                                                          stroke-width="2" stroke-linecap="round"
                                                          stroke-linejoin="round"/>
                                                    <defs>
                                                        <linearGradient id="paint0_linear_1354_3219" x1="9.89191"
                                                                        y1="2.0542"
                                                                        x2="9.89191" y2="17.7299"
                                                                        gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#D50000"/>
                                                            <stop offset="0.671875" stop-color="#D38F0B"/>
                                                        </linearGradient>
                                                        <linearGradient id="paint1_linear_1354_3219" x1="9.92579"
                                                                        y1="6.7229"
                                                                        x2="9.92579" y2="12.9932"
                                                                        gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#D50000"/>
                                                            <stop offset="0.671875" stop-color="#D38F0B"/>
                                                        </linearGradient>
                                                        <linearGradient id="paint2_linear_1354_3219" x1="14.2066"
                                                                        y1="5.58105"
                                                                        x2="14.2066" y2="6.58105"
                                                                        gradientUnits="userSpaceOnUse">
                                                            <stop stop-color="#D50000"/>
                                                            <stop offset="0.671875" stop-color="#D38F0B"/>
                                                        </linearGradient>
                                                    </defs>
                                                </svg>
                                            </div>
                                        </a>
                                        <a href="<?php
                                        if (isset($team['twitter']))
                                            echo $team['twitter'];
                                        ?>">
                                            <div class="icon-wrapper">

                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                     viewBox="0 0 20 20"
                                                     fill="none">
                                                    <path d="M18.5135 2.83796C17.7629 3.36739 16.9319 3.77232 16.0524 4.03715C15.5804 3.49439 14.953 3.10969 14.2552 2.93509C13.5574 2.76049 12.8228 2.80441 12.1508 3.06091C11.4788 3.31741 10.9017 3.77411 10.4977 4.36925C10.0937 4.96439 9.88224 5.66925 9.89188 6.3885V7.17228C8.51449 7.208 7.14964 6.90252 5.91889 6.28304C4.68814 5.66356 3.6297 4.74932 2.83783 3.62174C2.83783 3.62174 -0.297304 10.6758 6.75675 13.8109C5.14257 14.9066 3.21966 15.456 1.27026 15.3785C8.32432 19.2974 16.9459 15.3785 16.9459 6.36499C16.9452 6.14667 16.9242 5.92888 16.8832 5.71445C17.6832 4.92556 18.2477 3.92955 18.5135 2.83796Z"
                                                          fill="#129BFF"/>
                                                </svg>

                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <p class="tracking-tight leading-[450] dark:text-gray-500 team-desc text-white mt-4 text-justify">
                                    <?php
                                    if (isset($team['body']))
                                        echo $team['body']; ?>
                                </p>
                            </div>
                        </div>
                    <?php
                    endforeach;
                endif;
                ?>
            </div>
        </div>
    </div>


</section>
