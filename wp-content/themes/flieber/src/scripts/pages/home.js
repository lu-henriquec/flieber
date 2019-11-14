import Setup from "../core";

Setup(function Home() {
  const _this = Home;

  _this.init = () => {
    _this.carrosselFeature();
    _this.carrosselVideos();
    _this.carrosselDepoiment();
    _this.carrosselTransports();
    _this.tabs();
  };

  _this.carrosselFeature = () => {
    $(".feature .slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: ".feature .slider-nav",
      centerPadding: `0`
    });

    $(".feature .slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".feature .slider-for",
      dots: true,
      arrows: false,
      fade: true,
      centerMode: false,
      focusOnSelect: false,
      centerPadding: `0`
    });
  };

  _this.carrosselVideos = () => {
    $(".videos .slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: ".videos .slider-nav"
    });

    $(".videos .slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".videos .slider-for",
      dots: true,
      arrows: false,
      fade: true,
      focusOnSelect: false
    });
  };

  _this.carrosselDepoiment = () => {
    $(".depoiments .slider-for").slick({
      autoplay: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".depoiments .slider-nav",
      centerPadding: `0`
    });

    $(".depoiments .slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".depoiments .slider-for",
      dots: false,
      arrows: false,
      fade: true,
      centerMode: false,
      focusOnSelect: false,
      centerPadding: `0`
    });
  };

  _this.carrosselTransports = () => {
    $(".transports .slider-for").slick({
      autoplay: false,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".transports .slider-nav",
      centerPadding: `0`
    });

    $(".transports .slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".transports .slider-for",
      dots: true,
      customPaging: function(slider, i) {
        return (
          '<button class="tab">' +
          $(slider.$slides[i])
            .find("h3")
            .text() +
          "</button>"
        );
      },
      arrows: false,
      fade: true,
      centerMode: false,
      focusOnSelect: false,
      centerPadding: `0`
    });
  };

  _this.tabs = () => {
    $(".blog__tabs a").on("click", function() {
      const content = $(this).attr("data-content");

      $(`.blog__content, .blog__tabs a`).removeClass("active");
      $(this).addClass("active");
      $(`.blog__content[data-anchor=${content}]`).addClass("active");
    });
  };

  _this.init();
});
