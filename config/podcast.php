<?php

return [
    'feed_url' => env('PODCAST_FEED_URL', 'https://anchor.fm/s/3a7569b4/podcast/rss'),

    'links' => [
        'spotify' => 'https://podcasters.spotify.com/pod/show/period-kaa-kura',
        'apple' => 'https://podcasts.apple.com/np/podcast/period-kaa-kura-nepali-podcast/id1534970764',
        'soundcloud' => 'https://soundcloud.com/period-ka-kura',
        'youtube' => 'https://www.youtube.com/@periodkaakura',
        'instagram' => 'https://www.instagram.com/period_kaakura/',
        'facebook' => 'https://www.facebook.com/Periodkaakura',
        'twitter' => 'https://twitter.com/PeriodKaaKura',
        'patreon' => 'https://www.patreon.com/PeriodKaaKura',
    ],

    'email' => 'periodkakura@gmail.com',

    // Where contact form messages are emailed. Override on staging so test messages don't reach the creators.
    'contact_recipient' => env('CONTACT_RECIPIENT', 'periodkakura@gmail.com'),

    // Comma-separated emails allowed into /admin outside local development.
    'admin_emails' => array_filter(explode(',', env('ADMIN_EMAILS', ''))),
];
