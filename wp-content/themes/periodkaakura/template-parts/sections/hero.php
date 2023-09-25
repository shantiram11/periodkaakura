<?php
$post_id = getIdBySlug('section-hero', 'sections');

// Get the episodes data from the CMB2 group
$title = get_post_meta($post_id, 'section_title', true);
$subtitle = get_post_meta($post_id, 'section_subtitle', true);
$sliders = get_post_meta($post_id, 'section_hero_section_repeat_group', true);
$sound_cloud = nl2br(htmlspecialchars_decode(get_option('pkk_sound_cloud')));
$apple_podcast = nl2br(htmlspecialchars_decode(get_option('pkk_apple_podcast')));
$spotify = nl2br(htmlspecialchars_decode(get_option('pkk_spotify')));

?>
<section class="hero-section mb-20">
    <div class="container">
        <div class="md:grid grid-cols-2 gap-[16%]">
            <div class="hero-left">
                <h2><?php echo htmlspecialchars($title); ?>
                </h2>
                <div class="hero-content">
                    <p class="font-semibold text-lg mb-5">
                        <span class="subtitle"><?php echo substr($subtitle, 0, 100); ?></span>
                        <span class="full-subtitle" style="display: none;"><?php echo $subtitle; ?></span>
                        <?php if (strlen($subtitle) > 100) { ?>
                            <button class="text-sm text-red-700 read-more-btn">Read More..</button>
                        <?php } ?>
                    </p>
                </div>
                <div class="m-auto grid items-center  font-bold text-xs text-red-700">
                    <p class="mt-6 pb-1">Latest Episode: Period ka kura</p>
                    <div class="flex gap-[25px] mb-6">
                        <a href="#episode" class="red-play-button gap-2  flex">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20"
                                 fill="none">
                                <path d="M1 1L15 10L1 19V1Z" stroke="white" stroke-width="2" stroke-linecap="round"
                                      stroke-linejoin="round"/>
                            </svg>
                            <span class="text-white">Listen Now</span>
                        </a>
                        <!--                        <a href="#" class="white-play-button gap-2 flex">-->
                        <!--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20"-->
                        <!--                                 fill="none">-->
                        <!--                                <path d="M1 1L15 10L1 19V1Z" stroke="#9C1112" stroke-width="2" stroke-linecap="round"-->
                        <!--                                      stroke-linejoin="round"/>-->
                        <!--                            </svg>-->
                        <!--                            <span class="text-red-900">Browse All</span>-->
                        <!--                        </a>-->
                    </div>
                    <figure class="mb-[8px]">
                        <a href="" class=" cursor-auto subscribe-btn flex items-center gap-2">
                            <img class="h-9 w-9"
                                 src="<?php echo get_template_directory_uri() . '/assets/img/mic.png' ?>"
                                 alt="">
                            Subscribe
                        </a>
                    </figure>
                    <ul class="list-none media-feed flex gap-7">
                        <?php
                        if ($spotify):
                            ?>
                            <li class=""><a href="<?php echo $spotify; ?>"
                                            class="cursor-pointer flex items-center gap-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="23" height="23"
                                         viewBox="0 0 50 50">
                                        <path d="M25.009,1.982C12.322,1.982,2,12.304,2,24.991S12.322,48,25.009,48s23.009-10.321,23.009-23.009S37.696,1.982,25.009,1.982z M34.748,35.333c-0.289,0.434-0.765,0.668-1.25,0.668c-0.286,0-0.575-0.081-0.831-0.252C30.194,34.1,26,33,22.5,33.001 c-3.714,0.002-6.498,0.914-6.526,0.923c-0.784,0.266-1.635-0.162-1.897-0.948s0.163-1.636,0.949-1.897 c0.132-0.044,3.279-1.075,7.474-1.077C26,30,30.868,30.944,34.332,33.253C35.022,33.713,35.208,34.644,34.748,35.333z M37.74,29.193 c-0.325,0.522-0.886,0.809-1.459,0.809c-0.31,0-0.624-0.083-0.906-0.26c-4.484-2.794-9.092-3.385-13.062-3.35 c-4.482,0.04-8.066,0.895-8.127,0.913c-0.907,0.258-1.861-0.272-2.12-1.183c-0.259-0.913,0.272-1.862,1.184-2.12 c0.277-0.079,3.854-0.959,8.751-1c4.465-0.037,10.029,0.61,15.191,3.826C37.995,27.328,38.242,28.388,37.74,29.193z M40.725,22.013 C40.352,22.647,39.684,23,38.998,23c-0.344,0-0.692-0.089-1.011-0.275c-5.226-3.068-11.58-3.719-15.99-3.725 c-0.021,0-0.042,0-0.063,0c-5.333,0-9.44,0.938-9.481,0.948c-1.078,0.247-2.151-0.419-2.401-1.495 c-0.25-1.075,0.417-2.149,1.492-2.4C11.729,16.01,16.117,15,21.934,15c0.023,0,0.046,0,0.069,0 c4.905,0.007,12.011,0.753,18.01,4.275C40.965,19.835,41.284,21.061,40.725,22.013z"></path>
                                    </svg>
                                    <span class="text-black ">Spotify</span> </a>
                            </li>
                        <?php
                        endif;
                        if ($apple_podcast):
                            ?>
                            <li class=""><a href="<?php echo $apple_podcast; ?>" target="_blank"
                                            class="cursor-pointer flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="20" viewBox="0 0 12 14"
                                         fill="none">
                                        <path d="M11.1457 4.96554C11.0671 5.02648 9.6805 5.80781 9.6805 7.54516C9.6805 9.55469 11.4449 10.2656 11.4977 10.2832C11.4896 10.3265 11.2174 11.2568 10.5675 12.2047C9.98789 13.0389 9.38259 13.8717 8.46178 13.8717C7.54097 13.8717 7.304 13.3368 6.241 13.3368C5.20509 13.3368 4.83677 13.8893 3.9945 13.8893C3.15223 13.8893 2.56453 13.1174 1.88882 12.1695C1.10613 11.0564 0.473755 9.3272 0.473755 7.68599C0.473755 5.05356 2.18538 3.65745 3.86992 3.65745C4.765 3.65745 5.51113 4.24514 6.07309 4.24514C6.60797 4.24514 7.44212 3.62224 8.46042 3.62224C8.84635 3.62224 10.233 3.65745 11.1457 4.96554ZM7.977 2.50779C8.39813 2.00812 8.69604 1.3148 8.69604 0.621485C8.69604 0.525341 8.68792 0.427844 8.67032 0.349304C7.98512 0.375033 7.16994 0.805647 6.67839 1.37574C6.29246 1.81447 5.93226 2.50779 5.93226 3.21058C5.93226 3.31621 5.94986 3.42183 5.95799 3.45568C6.00132 3.46381 6.07174 3.47329 6.14215 3.47329C6.75693 3.47329 7.53014 3.06163 7.977 2.50779Z"
                                              fill="#121212"/>
                                    </svg>
                                    <span class="text-black ">Apple Podcast</span> </a>
                            </li>
                        <?php endif;
                        if ($sound_cloud):
                            ?>
                            <li class=""><a href="<?php echo $sound_cloud; ?>"
                                            class="cursor-pointer flex gap-2 items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23"
                                         fill="none">
                                        <g clip-path="url(#clip0_1509_92)">
                                            <path d="M1.13357 16.0104C0.715437 16.0104 0.373306 15.6682 0.373306 15.2501V13.7296C0.373306 13.3114 0.715437 12.9693 1.13357 12.9693C1.55171 12.9693 1.89384 13.3114 1.89384 13.7296V15.2501C1.89384 15.6682 1.55175 16.0104 1.13357 16.0104Z"
                                                  fill="#121212"/>
                                            <path d="M4.1747 16.0104C3.75656 16.0104 3.41443 15.6682 3.41443 15.2501V12.209C3.41443 11.7909 3.75656 11.4487 4.1747 11.4487C4.59283 11.4487 4.93496 11.7909 4.93496 12.209V15.2501C4.93496 15.6682 4.59283 16.0104 4.1747 16.0104Z"
                                                  fill="#121212"/>
                                            <path d="M7.2158 16.0103C6.79767 16.0103 6.45554 15.6682 6.45554 15.2501V10.6884C6.45554 10.2703 6.79767 9.92816 7.2158 9.92816C7.63394 9.92816 7.97607 10.2703 7.97607 10.6884V15.2501C7.97607 15.6682 7.63394 16.0103 7.2158 16.0103Z"
                                                  fill="#121212"/>
                                            <path d="M10.2569 16.0104C9.83874 16.0104 9.49661 15.5922 9.49661 15.06V9.35794C9.49661 8.82573 9.83874 8.40759 10.2569 8.40759C10.675 8.40759 11.0171 8.82573 11.0171 9.35794V15.06C11.0171 15.5922 10.6751 16.0104 10.2569 16.0104Z"
                                                  fill="#121212"/>
                                            <path d="M19.7603 16.0104C21.2429 16.0104 22.4213 14.8319 22.4213 13.3494C22.4213 11.8669 21.2428 10.6885 19.7603 10.6885C19.4562 10.6885 19.1901 10.7265 18.886 10.8405C18.4299 8.36962 16.2631 6.50696 13.6781 6.50696C13.298 6.50696 12.9179 6.54498 12.5377 6.62099V16.0104H16.9473H19.7603Z"
                                                  fill="#121212"/>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1509_92">
                                                <rect width="22.048" height="22.048" fill="white"
                                                      transform="translate(0.373306 0.234619)"/>
                                            </clipPath>
                                        </defs>
                                    </svg>
                                    <span class="text-black ">Sound Cloud</span> </a>
                            </li>
                        <?php
                        endif;
                        ?>

                    </ul>
                </div>
            </div>
            <div class="hero-right mt-[60px]">
                <div class="">
                    <div class="owl-carousel owl-theme" id="hero-slider">
                        <?php
                        if (isset($sliders)):
                            foreach ($sliders as $slider):
                                ?>
                                <div class="item">
                                    <a href="<?php echo $slider['url']; ?>">
                                        <img class="m-auto cover-image"
                                                    src="<?php echo $slider['poster']; ?>"
                                                    alt="">
                                    </a>
                                </div>
                            <?php
                            endforeach;
                        endif;
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<script type="text/javascript">-->
<!--    document.addEventListener('DOMContentLoaded', () => {-->
<!--        const audioPlayer = document.getElementById('custom-audio-player');-->
<!--        const playButton = document.getElementById('play-button');-->
<!--        const skipBackButton = document.getElementById('skip-back');-->
<!--        const skipForwardButton = document.getElementById('skip-forward');-->
<!--        const volumeControl = document.getElementById('volume-control');-->
<!--        const progressBar = document.getElementById('progress-bar');-->
<!--        const currentTimeElement = document.getElementById('current-time');-->
<!--        let isDragging = false;-->
<!---->
<!--        playButton.addEventListener('click', () => {-->
<!--            if (audioPlayer.paused) {-->
<!--                audioPlayer.play();-->
<!--                // playButton.textContent = 'Pause';-->
<!--            } else {-->
<!--                audioPlayer.pause();-->
<!--                // playButton.textContent = 'Play';-->
<!--            }-->
<!--        });-->
<!--        // Update progress bar as audio plays-->
<!--        audioPlayer.addEventListener('timeupdate', () => {-->
<!--            if (!isDragging) {-->
<!--                const progress = (audioPlayer.currentTime / audioPlayer.duration) * 100;-->
<!--                progressBar.style.width = progress + '%';-->
<!---->
<!--                currentTimeElement.textContent = formatTime(audioPlayer.currentTime);-->
<!--            }-->
<!--        });-->
<!---->
<!--        // Handle dragging on progress bar-->
<!--        progressBar.addEventListener('mousedown', (event) => {-->
<!--            isDragging = true;-->
<!--            updateProgressBar(event);-->
<!--        });-->
<!---->
<!--        document.addEventListener('mousemove', (event) => {-->
<!--            if (isDragging) {-->
<!--                updateProgressBar(event);-->
<!--            }-->
<!--        });-->
<!---->
<!--        document.addEventListener('mouseup', () => {-->
<!--            if (isDragging) {-->
<!--                isDragging = false;-->
<!--            }-->
<!--        });-->
<!---->
<!--        // Format time in MM:SS format-->
<!--        function formatTime(time) {-->
<!--            const minutes = Math.floor(time / 60);-->
<!--            const seconds = Math.floor(time % 60);-->
<!--            return `${minutes}:${seconds.toString().padStart(2, '0')}`;-->
<!--        }-->
<!---->
<!--        // Update progress bar and audio time based on mouse position-->
<!--        function updateProgressBar(event) {-->
<!--            const containerWidth = progressBar.parentElement.offsetWidth;-->
<!--            const offsetX = event.clientX - progressBar.parentElement.getBoundingClientRect().left;-->
<!--            const newProgress = (offsetX / containerWidth) * 100;-->
<!---->
<!--            progressBar.style.width = newProgress + '%';-->
<!--            const newTime = (newProgress / 100) * audioPlayer.duration;-->
<!--            audioPlayer.currentTime = newTime;-->
<!---->
<!--            currentTimeElement.textContent = formatTime(newTime);-->
<!--        }-->
<!---->
<!--        skipBackButton.addEventListener('click', () => {-->
<!--            audioPlayer.currentTime -= 10; // Skip back by 10 seconds-->
<!--        });-->
<!---->
<!--        skipForwardButton.addEventListener('click', () => {-->
<!--            audioPlayer.currentTime += 10; // Skip forward by 10 seconds-->
<!--        });-->
<!---->
<!--        volumeControl.addEventListener('input', () => {-->
<!--            audioPlayer.volume = volumeControl.value;-->
<!--        });-->
<!---->
<!--        // Update play button text when audio ends-->
<!--        audioPlayer.addEventListener('ended', () => {-->
<!--            playButton.textContent = 'Play';-->
<!--        });-->
<!--    });-->
<!---->
<!--</script>-->