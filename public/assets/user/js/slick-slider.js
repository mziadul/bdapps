
    $(document).on('ready', function() {

      $(".regular").slick({
        dots: false,
        infinite: true,
        slidesToShow: 5,
        slidesToScroll: 1,


        responsive: [
          {
            breakpoint: 350,
            settings: {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 650,
            settings: {
              slidesToShow: 1,
            }
          },
          {
            breakpoint: 790,
            settings: {
              slidesToShow: 3,
            }
          },
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 4,
            }
          },
          {
            breakpoint: 1150,
            settings: {
              slidesToShow: 5,
            }
          },
      ]
      });


    });
