<section class="section-episode-list  mt-6">
    <div class="container">
        <div class="flex items-center justify-between mb-10">
            <div>
                <p class="title">Latest Episodes</p>
                <span class="sub-title">Browse All</span>
            </div>
            <form class="w-[60%]  search-form" method="post" action="">
                <input class="w-full p-1 h-[50px]" type="text">
            </form>
            <div class="select-wrapper">
                <div class="select-header">
                    Filter
                    <svg xmlns="http://www.w3.org/2000/svg" width="19" height="13" viewBox="0 0 19 13" fill="none">
                        <path d="M2 2L9.5 10L17 2" stroke="black" stroke-opacity="0.5" stroke-width="3"/>
                    </svg>
                </div>
                <ul class="select-options">
                    <li>Option 1</li>
                    <li>Option 2</li>
                    <li>Option 3</li>
                    <!-- Add more options as needed -->
                </ul>
            </div>
        </div>
        <div class="latest-episodes">
            <ul class="">
                <li class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-7">
                        <img class="m-auto cover-image"
                             src="<?php echo get_template_directory_uri() . '/assets/img/head.png' ?>" alt="">
                        <div>
                            <p class="episode-count">Episode 1</p>
                            <span class="episode-name">Episode Name Here</span>
                        </div>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p class="episode-count">23:1</p>
                        <span class="episode-name">Minutes</span>
                    </div>
                </li>
                <li class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-7">
                        <img class="m-auto cover-image"
                             src="<?php echo get_template_directory_uri() . '/assets/img/head.png' ?>" alt="">
                        <div>
                            <p class="episode-count">Episode 1</p>
                            <span class="episode-name">Episode Name Here</span>
                        </div>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p class="episode-count">23:1</p>
                        <span class="episode-name">Minutes</span>
                    </div>
                </li>
                <li class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-7">
                        <img class="m-auto cover-image"
                             src="<?php echo get_template_directory_uri() . '/assets/img/head.png' ?>" alt="">
                        <div>
                            <p class="episode-count">Episode 1</p>
                            <span class="episode-name">Episode Name Here</span>
                        </div>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p class="episode-count">23:1</p>
                        <span class="episode-name">Minutes</span>
                    </div>
                </li>
                <li class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-7">
                        <img class="m-auto cover-image"
                             src="<?php echo get_template_directory_uri() . '/assets/img/head.png' ?>" alt="">
                        <div>
                            <p class="episode-count">Episode 1</p>
                            <span class="episode-name">Episode Name Here</span>
                        </div>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p class="episode-count">23:1</p>
                        <span class="episode-name">Minutes</span>
                    </div>
                </li>
                <li class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-7">
                        <img class="m-auto cover-image"
                             src="<?php echo get_template_directory_uri() . '/assets/img/head.png' ?>" alt="">
                        <div>
                            <p class="episode-count">Episode 1</p>
                            <span class="episode-name">Episode Name Here</span>
                        </div>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p class="episode-count">23:1</p>
                        <span class="episode-name">Minutes</span>
                    </div>
                </li>
                <li class="flex justify-between items-center mb-8">
                    <div class="flex items-center gap-7">
                        <img class="m-auto cover-image"
                             src="<?php echo get_template_directory_uri() . '/assets/img/head.png' ?>" alt="">
                        <div>
                            <p class="episode-count">Episode 1</p>
                            <span class="episode-name">Episode Name Here</span>
                        </div>
                    </div>
                    <div class="flex gap-1 items-center">
                        <p class="episode-count">23:1</p>
                        <span class="episode-name">Minutes</span>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectWrapper = document.querySelector('.select-wrapper');

        selectWrapper.addEventListener('click', function () {
            this.classList.toggle('active');
        });

        const options = document.querySelectorAll('.select-options li');

        options.forEach(option => {
            option.addEventListener('click', function () {
                const selectedText = this.textContent;
                const header = selectWrapper.querySelector('.select-header');
                header.textContent = selectedText + ' ' + '▼';
                selectWrapper.classList.remove('active');
            });
        });
    });

</script>