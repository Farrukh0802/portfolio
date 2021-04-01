$(document).ready(function(){
    $('.slider').slick({
        prevArrow: '<button class="slick__btn slick-prev"><img src="img/icons/arrow-left-s-line.svg" alt="left"></button>',
        nextArrow: '<button class="slick__btn slick-next"><img src="img/icons/arrow-right-s-line.svg" alt="right"></button>',
        dots: false,
        lazyLoad: 'ondemand',
        slidesToShow: 3,
        slidesToScroll: 1,
        centerMode: true,
        autoplay: false,
        waitForAnimation: false,
        responsive: [
          {
            breakpoint: 1024,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 400,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });
      });