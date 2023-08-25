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
        background: linear-gradient(rgba(255, 0, 0, 0.3), rgba(255, 0, 0, 0.3));
        /*background-blend-mode: multiply;*/
        z-index: -10;
    }
</style>
<section class="section-photo-gallery ">
    <div class="photo-gallery pt-[250px]">
        <div class="container flex flex-col items-center">
            <svg class="" xmlns="http://www.w3.org/2000/svg" width="220" height="220" viewBox="0 0 220 220" fill="none">
                <path d="M110 201.667C160.626 201.667 201.667 160.626 201.667 110C201.667 59.3738 160.626 18.3333 110 18.3333C59.3739 18.3333 18.3333 59.3738 18.3333 110C18.3333 160.626 59.3739 201.667 110 201.667Z"
                      stroke="white" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M131.175 73.3333L183.792 164.45" stroke="white" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M88.825 73.3333H194.058" stroke="white" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M67.65 110L120.267 18.8833" stroke="white" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M88.825 146.667L36.2083 55.55" stroke="white" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M131.175 146.667H25.9417" stroke="white" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
                <path d="M152.35 110L99.7334 201.117" stroke="white" stroke-width="5" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
            <p class="mt-9 text-6xl text-white ">photo <span class="font-black">GALLERY</span></p>
            <p class="text-2xl text-white font-normal py-8">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                reprehenderit
                in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat “
            </p>
            <div class="flex gap-14 gallery-buttons mb-[120px]">
                <a class="text-white" href="#">test</a>
                <a class="text-white" href="#">test</a>
                <a class="text-white" href="#">test</a>
                <a class="text-white" href="#">test</a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="flex mt-11 mb-[110px] justify-center items-center gap-[80px]">
            <div class="gallery-image h-[320px] w-[320px]">

            </div>
            <div class="gallery-image h-[320px] w-[320px]">

            </div>
            <div class="gallery-image h-[320px] w-[320px]">

            </div>
            <div class="gallery-image h-[320px] w-[320px]">

            </div>
        </div>
    </div>
</section>

