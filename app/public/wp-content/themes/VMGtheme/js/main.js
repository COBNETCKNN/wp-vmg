jQuery(document).ready(function (jQuery) {
  jQuery('.slick').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1000,
    arrows: false
  });
  jQuery(".nav-toggler").each(function (_, navToggler) {
    var target = jQuery(navToggler).data("target");
    jQuery(navToggler).on("click", function () {
      jQuery(target).animate({
        height: "toggle"
      });
    });
  });
});
