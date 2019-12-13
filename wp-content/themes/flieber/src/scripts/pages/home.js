import Setup from "../core";
import AOS from "aos";

Setup(function Home() {
  const _this = Home;

  _this.init = () => {
    _this.carrosselFeature();
    _this.carrosselVideos();
    _this.carrosselHowWeDoIt();
    _this.carrosselDepoiment();
    _this.carrosselTransports();
    _this.tabs();

    AOS.init();
  };

  _this.carrosselFeature = () => {
    $(".feature .slider-for").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: false,
      asNavFor: ".feature .slider-nav",
      centerPadding: `0`,
      autoplay: true,
      autoplaySpeed: 8000
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
      centerPadding: `0`,
      autoplay: true,
      autoplaySpeed: 8000
    });

    var _fundo = "";
    var _fonte = "";
    $(".feature .slider-nav").on("beforeChange", function(
      event,
      slick,
      currentSlide
    ) {
      if (_fundo === "#F1F1F3 50%, #2ea6d0 50%") {
        _fundo = "#2ea6d0 50%, #F1F1F3 50%";
        _fonte = "#ffffff";
      } else {
        _fundo = "#F1F1F3 50%, #2ea6d0 50%";
        _fonte = "#2ea6d0";
      }
      $("section.feature").css("background-position", "right bottom");
      setTimeout(function() {
        $(".home section.feature .slider-nav p").css("color", _fonte);
      }, 500);
      setTimeout(function() {
        $("section.feature").css("transition", "none");
        $("section.feature").css(
          "background",
          "linear-gradient(to right, " + _fundo + ")"
        );
        $("section.feature").css("background-size", "200% 100%");
        setTimeout(function() {
          $("section.feature").css("transition", "all 1s ease");
        }, 100);
      }, 1000);
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

  _this.carrosselHowWeDoIt = () => {
    $(".howwedoit .howwedoit__slider").slick({
      centerMode: true,
      centerPadding: "20%",
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: false,
      infinite: false,
      responsive: [
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            centerMode: false,
            centerPadding: "0"
          }
        }
      ]
    });
  };

  _this.carrosselDepoiment = () => {
    // $(".depoiments .slider-for").slick({
    //   autoplay: true,
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   arrows: false,
    //   fade: true,
    //   asNavFor: ".depoiments .slider-nav",
    //   centerPadding: `0`
    // });

    $(".depoiments .slider-nav").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: true,
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
