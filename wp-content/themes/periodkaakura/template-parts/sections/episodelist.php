<div class='flex flex-col justify-center items-center gap-12  max-sm:px-0 py-12'>
    <div class="flex flex-row justify-center items-center  gap-24 bg-black text-white p-8 rounded-lg episodes">
    <img class="responsive-image" src="<?php echo esc_url(get_template_directory_uri() . "/assets/img/natracare.png") ?>">
    <div class="flex flex-col justify-start gap-4 w-full">
        <h1 class="text-6xl">Episode 1</h1>
        <p>Episode Name Here</p>
        <p>Guest: Episode Name Here</p>
        <div class="flex flex-row justify-center text-white items-center gap-8 py-8">
            <i class="fa-solid fa-backward-step"></i>
            <i class="fa-solid fa-circle-pause"></i>
            <i class="fa-solid fa-forward-step"></i>
        </div>
        <div class="flex flex-col w-full md:w-2/3">
            <!-- Add your audio player here -->
            <audio class="w-full md:w-2/3" controls>
                <source src="horse.ogg" type="audio/ogg" />
                <source src="horse.mp3" type="audio/mpeg" />
                Your browser does not support the audio element.
            </audio>
        </div>
        <div class="flex flex-row justify-center text-white items-center gap-8 py-8">
            <i class="fa-solid fa-heart"></i>
            <i class="fa-solid fa-volume-low"></i>
            <i class="fa-solid fa-share-nodes"></i>
        </div>
    </div>
</div>

<div class='flex flex-row justify-center items-center gap-8 comment-box'>
    <div className="flex flex-col w-full">
        <form>
            <i class="fa-solid fa-message "></i>
            <input type="text" placeholder="Write a commnet">
        </form>
     <div class="flex flex-row justify-center items-center gap-4 py-4 shadow-2xl">
     <img class="responsive-image" src="<?php echo esc_url(get_template_directory_uri() . "/assets/img/shanti.png") ?>">
<div class="flex flex-col justify-start items-start">
    <div class="flex justify-between gap-8">
        <h2>Shantiram Tiwari</h2>
        <span>8 hour ago</span>
    </div>
    <p>A space for menstruators to speak on the silenced subject "Period"</p>
</div>

     </div>

    </div>
    <div class="w-full flex flex-col justify-center bg-gray-50 md:w-2/3 episode-list">
        <div class="flex flex-col justify-start items-start">
            <h2 class="font-black">Suggested Podcasts</h2>
            <p class="font-thin">Browse all</p>
        </div>

        <div class="flex flex-row justify-between hover:bg-black hover:text-white py-4 hover:rounded-md gap-10 ">
            <div class="flex flex-row justify-center items-center gap-4">
            <img class="responsive-image" src="<?php echo esc_url(get_template_directory_uri() . "/assets/img/head.png") ?>">
                <div class="flex flex-col justify-start items-start">
                    <h3 class="hover:text-red-600 font-black">Episode 1</h3>
                    <p class="hover:text-red-600 font-thin">Episode name here</p>
                </div>
            </div>

            <div class="flex flex-row justify-center items-center">
                <span class="hover:text-red-600">22:37</span>
                <span>Minutes</span>
            </div>
        </div>

        <div class="flex flex-row justify-between rounded-md hover:bg-black hover:text-white py-4 hover:rounded-md gap-10 ">
            <div class="flex flex-row justify-center items-center gap-4">
            <img class="responsive-image" src="<?php echo esc_url(get_template_directory_uri() . "/assets/img/head.png") ?>">
                <div class="flex flex-col justify-start items-start">
                    <h3 class="hover:text-red-600 font-black">Episode 1</h3>
                    <p class="hover:text-red-600 font-thin">Episode name here</p>
                </div>
            </div>

            <div class="flex flex-row justify-center items-center">
                <span class="hover:text-red-600">22:37</span>
                <span>Minutes</span>
            </div>
        </div>

        <div class="flex flex-row justify-center items-center gap-12 bottom-0 left-0">
            <span><i class="fa-solid fa-backward-step"></i>Previous</span>
            <span>Next&nbsp;<i class="fa-solid fa-forward-step"></i></span>
        </div>
    </div>


</div>
</div>