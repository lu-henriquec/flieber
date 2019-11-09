import Setup from "../core";
import "slick-carousel/slick/slick.js";

Setup(function Home() {
  console.log("Home");
  const _this = Home;

  _this.init = () => {
    _this.carrosselFeature();
  };

  _this.carrosselFeature = () => {
    $(".slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: ".slider-nav",
      centerPadding: `0`
    });

    $(".slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".slider-for",
      dots: true,
      arrows: false,
      fade: true,
      centerMode: false,
      focusOnSelect: false,
      centerPadding: `0`
    });
  };

  _this.init();
});
