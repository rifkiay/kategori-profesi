(function ($) {
    'use strict';
    $(document).ready(function () {
        // Smooth scrolling for internal links
        $('a[href^="#"]').on('click', function (e) {
            e.preventDefault();
            var target = this.hash;
            var $target = $(target);
            if ($target.length) {
                $('html, body').animate({
                    scrollTop: $target.offset().top
                }, 800, 'swing');
            }
        });
        
        // Redirect to login when Dashboard is clicked
        var dashboardLink = document.getElementById("dashboard-link");
        if (dashboardLink) {
            dashboardLink.addEventListener("click", function (event) {
                event.preventDefault(); // Prevent default link behavior
                if (typeof loginUrl !== 'undefined') {
                    window.location.href = loginUrl; // Redirect to login URL
                } else {
                    console.error("loginUrl is not defined.");
                }
            });
        }
    });
})(jQuery);

// Script untuk mengubah warna navbar saat di-scroll
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        document.getElementById("topnav").classList.add("navbar-scrolled");
    } else {
        document.getElementById("topnav").classList.remove("navbar-scrolled");
    }
}
