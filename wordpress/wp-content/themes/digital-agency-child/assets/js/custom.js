// Add a small visual change to a header that has the "site-header" CSS class.
document.addEventListener('DOMContentLoaded', function () {
    var header = document.querySelector('.site-header');

    window.addEventListener('scroll', function () {
        if (header) {
            header.classList.toggle('is-scrolled', window.scrollY > 30);
        }
    });

    // Smoothly scroll to anchors on the same page.
    document.querySelectorAll('a[href^="#"]').forEach(function (link) {
        link.addEventListener('click', function (event) {
            var target = document.querySelector(link.getAttribute('href'));
            if (target) {
                event.preventDefault();
                target.scrollIntoView({ behavior: 'smooth' });
            }
        });
    });
});
