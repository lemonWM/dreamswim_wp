jQuery(document).ready(function () {

    if (jQuery('.banner-slider').length) {

        var swiper = new Swiper(".hero-banner-wrapper", {
            slidesPerView: 1,
            autoplay: true,
            mousewheel: false,
            speed: 2000,
            loop: true,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            pagination: {
                el: '.swiper-pagination',
                type: 'bullets',
                clickable: true
            },
        });
    }
});

jQuery(document).ready(function () {

    if (jQuery('.blog .pagelayer-pagination').length) {

        var pag = jQuery('.blog .pagelayer-pagination')

        var r = jQuery('<a class="btn-1" type="button" value="Więcej">Więcej</a>');
        jQuery(pag).append(r);
    }
});

jQuery(document).ready(function () {

    if (jQuery('.blog .pagelayer-pagination a').length) {

        var btnMore = jQuery('.blog .pagelayer-pagination a')
        let perPage = 3

        var posts = jQuery('.pagelayer-posts-container .pagelayer-wposts-col')

        jQuery.each(posts, function (key, val) {

            if (key + 1 > perPage) {

                jQuery(val).addClass('hidden-post')

            }
        });

        btnMore.on('click', function () {

            perPage = perPage + 1

            jQuery.each(posts, function (key, val) {
                if (key + 1 <= perPage) {

                    jQuery(val).removeClass('hidden-post')

                }
            });
            if (posts.length == perPage) {
                btnMore.addClass('hide-btn')
            }
        })
    }
});


jQuery(document).ready(function () {

    if (jQuery('footer.pagelayer-footer').length) {

        var footer = jQuery('footer.pagelayer-footer')

        var rx = jQuery('<div class="t-gallery-2-wrapper__overlay t-gallery-wrapper-overlay-top"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1920 226.81" style="width: 100%; opacity: 1.0"><path fill="#FFFFFF" d="M0,115.1c260.5.4,494.4,115.7,1054,111.6,444-3.2,657.6-87.6,866-161.9V0H0"></path></svg></div>');
        jQuery(footer).prepend(rx);
    }
});
jQuery(document).ready(function () {

    if (jQuery('header.pagelayer-header').length) {

        var header = jQuery('header.pagelayer-header')

        var rz = jQuery('<div class="header-loader-toggle"><span><img src="https://dreamswim.pl/wp-content/uploads/2022/03/header-sroller.png"></span></div>');
        jQuery(header).append(rz);

        rz.on('click', function () {

            header.removeClass('scrolled-header-small')
        })
    }
});
jQuery(document).ready(function () {

    if (jQuery('.pricing-items-wrapper').length) {

        var btn = jQuery('.pricing-item.pricing-item-active');

        btn.on('click', function () {

            jQuery([document.documentElement, document.body]).animate({
                scrollTop: jQuery(".pricing-promo-wrapper").offset().top - 100
            }, 1500);
        })
    }
});

