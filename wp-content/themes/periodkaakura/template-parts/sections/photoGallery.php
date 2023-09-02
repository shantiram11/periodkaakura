<style>
    .photo-gallery {
        background-image: url("<?php echo get_template_directory_uri() ?>/assets/img/background.png");
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        position: relative;

    }

    .photo-gallery::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0.5;
        background: linear-gradient(180deg, rgba(0, 0, 0, 0.48) 0%, rgba(0, 0, 0, 0.50) 100%);
        backdrop-filter: blur(22.5px);
        /*background-blend-mode: multiply;*/
        z-index: -10;
    }
</style>
<section class="section-photo-gallery ">
    <div class="photo-gallery pt-[250px]">
        <div class="container flex flex-col items-center">
            <img src="<?php echo get_template_directory_uri() ?>/assets/img/aperture.png" alt="aperture-image">
            <p class="mt-9 text-6xl text-[#D49C4D]">photo <span class="font-black">GALLERY</span></p>
            <p class="text-2xl text-white font-normal py-8">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit
                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat “
            </p>
            <div class="flex flex-wrap gap-14 gallery-buttons mb-[120px]">
                <a class="text-white" href="#">test</a>
                <a class="text-white" href="#">test</a>
                <a class="text-white" href="#">test</a>
                <a class="text-white" href="#">test</a>
            </div>
        </div>
    </div>
    <div class="st-gallery bg-[#D49C4D] py-[60px]">
        <div class="container ">
            <div class="gap-[54px] grid md:grid-cols-3 lg:grid-cols-4">
                <div class="">
                    <img
                            src="https://tecdn.b-cdn.net/img/new/fluid/city/113.webp"
                            class="w-full rounded-md shadow-lg"/>
                </div>
                <div class="">
                    <img
                            src="https://tecdn.b-cdn.net/img/new/fluid/city/111.webp"
                            class="w-full rounded-md shadow-lg"/>
                </div>
                <div class="">
                    <img
                            src="https://tecdn.b-cdn.net/img/new/fluid/city/112.webp"
                            class="w-full rounded-md shadow-lg"/>
                </div>
                <div class="">
                    <img
                            src="https://tecdn.b-cdn.net/img/new/fluid/city/114.webp"
                            class="w-full rounded-md shadow-lg"/>
                </div>

            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri() ?>/assets/img/foot-vector.png" alt="animated-picture-of-hosts">
</section>

