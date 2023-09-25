
<?php
$paypal = get_post_meta(59, 'paypal', true);
$esewa = get_post_meta(59, 'esewa', true);
?>
<div class="hero donation-box mb-20 mt-40">
    <div class="container">
        <div class="donation-wrapper">
            <div class="donation-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 180 180"
                     fill="none">
                    <circle cx="90" cy="90" r="84.5" fill="white" stroke="#CD1919" stroke-width="11"/>
                    <g filter="url(#filter0_d_1483_4494)">
                        <path d="M94.0892 90C102.744 90 109.769 83.056 109.769 74.5C109.769 65.944 102.744 59 94.0892 59C85.434 59 78.4095 65.944 78.4095 74.5C78.4095 83.056 85.434 90 94.0892 90ZM111.18 107.36C109.957 106.12 108.42 105.5 106.633 105.5H85.671C85.0159 105.5 84.3654 105.39 83.7465 105.176L79.6097 103.74C78.81 103.463 78.3894 102.587 78.6726 101.79C78.9586 100.985 79.8501 100.572 80.6492 100.874L83.8475 102.084C84.3988 102.293 84.9835 102.4 85.573 102.4H93.462C94.5596 102.4 95.4376 101.966 96.1589 101.253C96.8802 100.54 97.2251 99.672 97.2251 98.711C97.2251 97.037 96.4098 95.89 94.7791 95.239L72.8451 87.2161C72.2734 87.007 71.6694 86.9 71.0606 86.9C68.1916 86.9 65.8658 89.2258 65.8658 92.0948V102.782C65.8658 109.891 70.5898 116.134 77.4311 118.067L81.2172 119.136C85.5066 120.347 90.0697 120.168 94.2509 118.624L108.459 113.377C111.197 112.365 113.23 109.438 111.18 107.36ZM59.5939 93.197C59.5939 89.7192 56.7747 86.9 53.297 86.9C49.8192 86.9 47 89.7192 47 93.197V114.703C47 118.181 49.8192 121 53.297 121C56.7747 121 59.5939 118.181 59.5939 114.703V93.197Z"
                              fill="#9D1212"/>
                    </g>
                    <defs>
                        <filter id="filter0_d_1483_4494" x="32" y="39" width="117.016" height="114"
                                filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
                            <feColorMatrix in="SourceAlpha" type="matrix"
                                           values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0"
                                           result="hardAlpha"/>
                            <feOffset dx="11" dy="6"/>
                            <feGaussianBlur stdDeviation="13"/>
                            <feComposite in2="hardAlpha" operator="out"/>
                            <feColorMatrix type="matrix"
                                           values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
                            <feBlend mode="normal" in2="BackgroundImageFix"
                                     result="effect1_dropShadow_1483_4494"/>
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_1483_4494"
                                     result="shape"/>
                        </filter>
                    </defs>
                </svg>
            </div>
            <p class="donate-title text-center  m-auto mt-[30px] mb-[26px]">Donate us to keep the podcast
                running</p>
            <div class="md:flex justify-center items-center gap-5 md:gap-24 md:px-0 px-8">
                <a><img class="w-[200px] h-[80px]" alt="paypal-logo"
                        src="<?php echo get_template_directory_uri() . '/assets/img/paypal-logo.png' ?>">
                    <span><?php  echo $paypal; ?></span>
                </a>
                <a><img class="w-[200px] h-[80px]" alt="esewa-logo"
                        src="<?php echo get_template_directory_uri() . '/assets/img/esewa-logo.png' ?>">
                    <span><?php  echo $esewa; ?></span>
                </a>
            </div>
        </div>
    </div>
</div>