// Swap YouTube thumbnails for the real player only when clicked.
document.addEventListener('click', (event) => {
    const button = event.target.closest('[data-youtube]');
    if (!button) return;

    const iframe = document.createElement('iframe');
    iframe.src = `https://www.youtube-nocookie.com/embed/${button.dataset.youtube}?autoplay=1`;
    iframe.title = button.getAttribute('aria-label');
    iframe.allow = 'accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture';
    iframe.allowFullscreen = true;
    iframe.className = 'absolute inset-0 h-full w-full';
    button.replaceWith(iframe);
});

document.querySelector('[data-menu-toggle]')?.addEventListener('click', (event) => {
    const menu = document.getElementById('mobile-menu');
    const open = menu.classList.toggle('hidden') === false;
    event.currentTarget.setAttribute('aria-expanded', open);
});
