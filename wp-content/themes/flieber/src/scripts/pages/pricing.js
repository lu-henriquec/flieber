import Setup from "../core";

Setup(function Pricing() {
  console.log("Pricing");
  const _this = Pricing;

  _this.init = () => {
    _this.toggles();
  };

  _this.toggles = () => {
    $(".slide__header").on("click", function() {
      $(this)
        .parent()
        .find(".slide__content")
        .slideToggle(1000);
      $(this).toggleClass("active");
    });
  };

  _this.init();
});
