$(document).ready(function () {
    //menu
    (function ($) {
        $(window).on("load scroll", function () {
            if ($(document).scrollTop() > 100) {
                $(".menu").addClass("menu--smaller");
            } else {
                $(".menu").removeClass("menu--smaller");
            }
        });

        $(window).resize(function () {
            if ($(window).width() > 1023) {
                $("#menu__toggle").prop("checked", false);
            }
        });
    })(jQuery);

    //accordion
    var acc = document.getElementsByClassName("accordion__toggle");

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("accordion__toggle--active");
            var panel = this.nextElementSibling;

            if (panel.style.maxHeight) {
                panel.style.maxHeight = null;
            } else {
                panel.style.maxHeight = panel.scrollHeight + "px";
            }
        });
    }

    //gallery
    var lightbox = new PhotoSwipeLightbox({
        gallery: ".gallery",
        children: "a",
        // dynamic import is not supported in UMD version
        pswpModule: PhotoSwipe,
    });
    lightbox.init();

    //wow
    var width =
        window.innerWidth ||
        document.documentElement.clientWidth ||
        document.body.clientWidth;

    if (width > 1028) {
    }
    new WOW().init();
});
