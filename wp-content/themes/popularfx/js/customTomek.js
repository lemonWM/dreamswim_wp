const swiper = new Swiper(".swiper-container", {
  speed: 2000,
  duration: 3000,
  autoplay: false,
  calculateHeight: true,
  autoHeight: true,
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  pagination: {
    el: ".swiper-pagination-testimonials",
    clickable: true,
  },
});

// modul team nav

var jQuerygrid = jQuery(".team-navigation-wrapper__images").isotope({
  // options
});
// filter items on button click

jQuery(".team-navigation-wrapper__header--filters").on(
  "click",
  "p",
  function () {
    jQuery(".team-navigation-wrapper__header--filters p").removeClass(
      "active-filter"
    );
    jQuery(this).addClass("active-filter");
    var filterValue = jQuery(this).attr("data-filter");
    jQuerygrid.isotope({ filter: filterValue });
  }
);

// Fancybox

const loadMore = jQuery("#loadMore");
const showLess = jQuery("#showLess");
const videos = jQuery(".gallery-wrapper .videos");
const images = jQuery(".gallery-wrapper .images");
const galleryFiltersP = jQuery(".gallery-filters p");
const galleryVideoFilter = jQuery(".gallery-filters .videos-filter");
const galleryImageFilter = jQuery(".gallery-filters .images-filter");
const galleryAllFilter = jQuery(".gallery-filters .all-filter");
const item = jQuery(".gallery-wrapper__item");

Fancybox.bind('.gallery-wrapper__item[data-fancybox="gallery"]', {
  caption: function (fancybox, carousel, slide) {
    return (
      `${slide.index + 1} / ${carousel.slides.length} <br />` +
      slide.caption
    );
  },
});

jQuery(function () {
  item.hide();
  jQuery(
    ".gallery-wrapper .gallery-wrapper__item:nth-child(n+1):nth-child(-n+9)"
  ).fadeIn("slow");

  loadMore.click(function () {
    jQuery(this)
      .closest(".gallery-wrapper")
      .find(".gallery-wrapper__item:not(:visible):lt(3)")
      .fadeIn("slow");
    showLess.fadeIn("slow");
  });

  showLess.click(function () {
    loadMore.fadeIn("slow");
  });
});

jQuery(document).ready(function () {
  list_size = item.length;
  x = 9;
  galleryAllFilter.click(function () {
    galleryFiltersP.removeClass("active-filter");
    galleryAllFilter.addClass("active-filter");
    videos.show();
    images.show();
    showLess.show();
    loadMore.hide();
    x = item.length;
  });
  galleryVideoFilter.click(function () {
    galleryFiltersP.removeClass("active-filter");
    galleryVideoFilter.addClass("active-filter");
    images.fadeOut("fast");
    videos.show();
    x = videos.length;
  });
  galleryImageFilter.click(function () {
    galleryFiltersP.removeClass("active-filter");
    galleryImageFilter.addClass("active-filter");
    videos.fadeOut("slow");
    images.show();

    x = images.length;
  });
  jQuery("gallery-wrapper__item:lt(" + x + ")").show();

  loadMore.click(function () {
    x = x + 3 <= list_size ? x + 3 : list_size;
    jQuery("gallery-wrapper__item:lt(" + x + ")").fadeIn("slow");
    //hide loadmore when all items displayed
    jQuery(this).toggle(x < list_size);
  });
  showLess.click(function () {
    x = x - 3;
    jQuery(this)
      .closest(".gallery-wrapper")
      .find(".gallery-wrapper__item:lt(" + x + ")")
      .fadeOut("slow");
    x = 3;
    showLess.hide();
  });
});
