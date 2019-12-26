import Setup from "../core";

Setup(function Solution() {
  // console.log("Solution");
  const _this = Solution;

  _this.init = () => {
    if ($(window).width() <= 768) {
      // _this.carrosselWhy();
      // _this.carrosselOption();
    }
  };

  _this.carrosselOption = () => {
    $("#option .option").slick({
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
