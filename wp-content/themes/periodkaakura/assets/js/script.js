
jQuery(document).ready(function($) {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 2,
        margin: 20,
        autoplay: true,
        dots:true,
        autoplayTimeout: 8500,
        smartSpeed: 450,
        responsive: {
            0: {
                items: 1
            },
            768: {
                items: 1
            },
            1170: {
                items: 2
            }
        }
    });

});
document.addEventListener('DOMContentLoaded', () => {
    const audioPlayer = document.getElementById('custom-audio-player');
    const playButton = document.getElementById('play-button');
    const skipBackButton = document.getElementById('skip-back');
    const skipForwardButton = document.getElementById('skip-forward');
    const volumeControl = document.getElementById('volume-control');
    const progressBar = document.getElementById('progress-bar');
    const currentTimeElement = document.getElementById('current-time');
    let isDragging = false;

    playButton.addEventListener('click', () => {
        if (audioPlayer.paused) {
            audioPlayer.play();
            // playButton.textContent = 'Pause';
        } else {
            audioPlayer.pause();
            // playButton.textContent = 'Play';
        }
    });
    // Update progress bar as audio plays
    audioPlayer.addEventListener('timeupdate', () => {
        if (!isDragging) {
            const progress = (audioPlayer.currentTime / audioPlayer.duration) * 100;
            progressBar.style.width = progress + '%';

            currentTimeElement.textContent = formatTime(audioPlayer.currentTime);
        }
    });

    // Handle dragging on progress bar
    progressBar.addEventListener('mousedown', (event) => {
        isDragging = true;
        updateProgressBar(event);
    });

    document.addEventListener('mousemove', (event) => {
        if (isDragging) {
            updateProgressBar(event);
        }
    });

    document.addEventListener('mouseup', () => {
        if (isDragging) {
            isDragging = false;
        }
    });
    // Format time in MM:SS format
    function formatTime(time) {
        const minutes = Math.floor(time / 60);
        const seconds = Math.floor(time % 60);
        return `${minutes}:${seconds.toString().padStart(2, '0')}`;
    }
    // Update progress bar and audio time based on mouse position
    function updateProgressBar(event) {
        const containerWidth = progressBar.parentElement.offsetWidth;
        const offsetX = event.clientX - progressBar.parentElement.getBoundingClientRect().left;
        const newProgress = (offsetX / containerWidth) * 100;

        progressBar.style.width = newProgress + '%';
        const newTime = (newProgress / 100) * audioPlayer.duration;
        audioPlayer.currentTime = newTime;

        currentTimeElement.textContent = formatTime(newTime);
    }
    skipBackButton.addEventListener('click', () => {
        audioPlayer.currentTime -= 10; // Skip back by 10 seconds
    });

    skipForwardButton.addEventListener('click', () => {
        audioPlayer.currentTime += 10; // Skip forward by 10 seconds
    });

    volumeControl.addEventListener('input', () => {
        audioPlayer.volume = volumeControl.value;
    });

    // Update play button text when audio ends
    audioPlayer.addEventListener('ended', () => {
        playButton.textContent = 'Play';
    });
});
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
