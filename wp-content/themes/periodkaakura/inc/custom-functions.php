<?php
add_filter('admin_init', 'pkk_settings_handle');
function pkk_settings_handle()
{
    /*Contact Form Shortcode*/
    register_setting('general', 'pkk_facebook_url', 'esc_attr');
    add_settings_field('pkk_facebook_url', '<label for="pkk_facebook_url">' . __('Facebook Url ',
            'pkk_facebook_url') . '</label>', 'pkk_facebook_url_register_fields_html', 'general');

    /*Newsletter*/
    register_setting('general', 'pkk_instagram_url', 'esc_attr');
    add_settings_field('pkk_instagram_url', '<label for="pkk_instagram_url">' . __('Instagram Url ',
            'pkk_instagram_url') . '</label>', 'pkk_instagram_url_register_fields_html', 'general');

    register_setting('general', 'pkk_contact_number', 'esc_attr');
    add_settings_field('pkk_contact_number', '<label for="pkk_contact_number">' . __('Contact Number ',
            'pkk_contact_number') . '</label>', 'pkk_contact_number_register_fields_html', 'general');

    /*Newsletter*/
    register_setting('general', 'pkk_email', 'esc_attr');
    add_settings_field('pkk_email', '<label for="pkk_email">' . __('Email',
            'pkk_email') . '</label>', 'pkk_email_register_fields_html', 'general');

    register_setting('general', 'pkk_twitter', 'esc_attr');
    add_settings_field('pkk_twitter', '<label for="pkk_twitter">' . __('Twitter
        ', 'pkk_twitter') . '</label>', 'pkk_twitter_register_fields_html', 'general');

    register_setting('general', 'pkk_youtube_url', 'esc_attr');
    add_settings_field('pkk_youtube_url', '<label for="pkk_youtube_url">' . __('Youtube Url
        ', 'pkk_youtube_url') . '</label>', 'pkk_youtube_url_register_fields_html', 'general');

    register_setting('general', 'pkk_spotify', 'esc_attr');
    add_settings_field('pkk_spotify', '<label for="pkk_spotify">' . __('Spotify
        ', 'pkk_spotify') . '</label>', 'pkk_spotify_register_fields_html', 'general');


    register_setting('general', 'pkk_sound_cloud', 'esc_attr');
    add_settings_field('pkk_sound_cloud', '<label for="pkk_sound_cloud">' . __('Sound Cloud',
            'pkk_sound_cloud') . '</label>', 'pkk_sound_cloud_register_fields_html', 'general');

    register_setting('general', 'pkk_apple_podcast', 'esc_attr');
    add_settings_field('pkk_apple_podcast', '<label for="pkk_apple_podcast">' . __('Apple Podcast
    ', 'pkk_apple_podcast') . '</label>', 'pkk_apple_podcast_register_fields_html', 'general');

}

function pkk_facebook_url_register_fields_html()
{
    $value_contact = get_option('pkk_facebook_url', '');
    echo '<input type="text" id="pkk_facebook_url" class="regular-text" name="pkk_facebook_url" value="' . $value_contact . '" />';
}

function pkk_instagram_url_register_fields_html()
{
    $value_newsletter = get_option('pkk_instagram_url', '');
    echo '<input type="text" id="pkk_instagram_url" class="regular-text" name="pkk_instagram_url" value="' . $value_newsletter . '" />';
}

function pkk_contact_number_register_fields_html()
{
    $value_contact = get_option('pkk_contact_number', '');
    echo '<input type="text" id="pkk_contact_number" class="regular-text" name="pkk_contact_number" value="' . $value_contact . '" />';
}

function pkk_email_register_fields_html()
{
    $value_newsletter = get_option('pkk_email', '');
    echo '<input type="text" id="pkk_email" class="regular-text" name="pkk_email" value="' . $value_newsletter . '" />';
}

function pkk_twitter_register_fields_html()
{
    $value_newsletter = get_option('pkk_twitter', '');
    echo '<input type="text" id="pkk_twitter" class="regular-text" name="pkk_twitter" value="' . $value_newsletter . '" />';
}

function pkk_youtube_url_register_fields_html()
{
    $value_newsletter = get_option('pkk_youtube_url', '');
    echo '<input type="text" id="pkk_youtube_url" class="regular-text" name="pkk_youtube_url" value="' . $value_newsletter . '" />';
}

function pkk_spotify_register_fields_html()
{
    $value_spotify = get_option('pkk_spotify', '');
    echo '<input type="text" id="pkk_spotify" class="regular-text" name="pkk_spotify" value="' . $value_spotify . '" />';
}

function pkk_apple_podcast_register_fields_html()
{
    $value_apple_podcast = get_option('pkk_apple_podcast', '');
    echo '<input type="text" id="pkk_apple_podcast" class="regular-text" name="pkk_apple_podcast" value="' . $value_apple_podcast . '" />';
}

function pkk_sound_cloud_register_fields_html()
{
    $value_sound_cloud = get_option('pkk_sound_cloud', '');
    echo '<input type="text" id="pkk_sound_cloud" class="regular-text" name="pkk_sound_cloud" value="' . $value_sound_cloud . '" />';
}
