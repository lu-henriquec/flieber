import Setup from "../core";

Setup(function Vision() {
  console.log("Vision");
  const _this = Vision;

  _this.init = () => {
    if ($(window).width() <= 768) {
      _this.carrosselWhy();
    }
  };

  _this.carrosselWhy = () => {
    $(".detalhes").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: false
    });
  };

  _this.carrosselWhy = () => {
    $("#why .box-card").slick({
      infinite: true,
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: false
    });
  };

  _this.init();
});
