let mix = require('laravel-mix');
mix
    .postCss( 'resources/css/fonts.css', 'assets/css' )
    .postCss('resources/css/_sections/_general.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/_header.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/_footer.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/hero.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/podcast.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/testimonial.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/team.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/episodelist.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/gallery.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/box.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/playlist.css', 'assets/css/_sections')
    .postCss('resources/css/_sections/miniplay.css', 'assets/css/_sections')

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
    'assets/css/_sections/_footer.css',
    'assets/css/_sections/hero.css',
    'assets/css/_sections/podcast.css',
    'assets/css/_sections/testimonial.css',
    'assets/css/_sections/team.css',
    'assets/css/_sections/episodelist.css',
    'assets/css/_sections/gallery.css',
    'assets/css/_sections/box.css',
    'assets/css/_sections/playlist.css',
    'assets/css/_sections/miniplay.css',


], 'assets/css/theme.css');
