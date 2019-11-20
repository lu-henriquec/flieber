import Setup from "../core";

Setup(function Header() {
  console.log("Header");
  const _this = Header;

  _this.init = () => {
    _this.menuScroll();
    _this.menuMobile();
  };

  _this.menuScroll = () => {
    $(window).on("scroll", function() {
      const header = $("header");

      $(window).scrollTop() > 10
        ? header.addClass("fixed")
        : header.removeClass("fixed");
    });
  };

  _this.menuMobile = () => {
    $("header .menu").on("click", function() {
      $("header").toggleClass("open");
    });
  };

  _this.init();
});
