document.addEventListener('DOMContentLoaded', function () {
    const toggleButton = document.getElementById('navbar-toggle');
    const menu = document.querySelector('.navbar-menu');

    toggleButton.addEventListener('click', function () {
        menu.classList.toggle('active');
    });
});


// Show or hide the button when scrolling
jQuery(document).ready(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            $('.back-to-top').fadeIn();
        } else {
            $('.back-to-top').fadeOut();
        }
    });

    // Smooth scrolling to top
    $('.back-to-top').click(function (e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: 0 }, '300');
    });
});

