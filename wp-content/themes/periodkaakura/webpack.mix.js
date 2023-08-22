let mix = require('laravel-mix');
mix
    .postCss( 'resources/css/fonts.css', 'assets/css' )
    .postCss('resources/css/_sections/_general.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/_header.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/hero.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/episodeList.css', 'assets/css/_sections')

    .options({
        processCssUrls: false,
        postCss: [
            require('tailwindcss')('./tailwind.config.js'),
            require('tailwindcss/nesting'),
            require('autoprefixer'),
        ],
    });

mix.combine([
    'assets/css/_sections/_general.css',
    'assets/css/_sections/_header.css',
    'assets/css/_sections/hero.css',
    'assets/css/_sections/episodeList.css',


], 'assets/css/theme.css');
