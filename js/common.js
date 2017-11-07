




$(window).load(function() {




// Loader

    $('.loader_inner').fadeOut();
    $('.loader').delay(400).fadeOut("slow");



// Sandwich and hidden menu

    $('.header__btn-menu').click(function() {
    $('.sandwich').toggleClass("active");
    });

    $('.header__btn-menu').click(function () {
        if ( $('.header__hidden-menu').is(':hidden')) {
            $('.header__hidden-menu').show();
            $('.header__hidden-menu').animate({right: "0px"}, 400);

            }

        else {
            $('.header__hidden-menu').animate({right: "-" + window.innerWidth }, 400, function(){
                $('.header__hidden-menu').hide();
            });

        }

      });

 //Append href/ID image for Popup

    $('.participant__max-img-wrapper').each(function(i) {

         $(this).find('a').attr('href', '#img-max-' + i);
         $(this).find('.modal-box__content').attr('id', 'img-max-' + i);
    });

    $('.participant__less-img-wrapper').each(function(i) {

         $(this).find('a').attr('href', '#img-less-' + i);
         $(this).find('.modal-box__content').attr('id', 'img-less-' + i);
    });

    // // $('.history__img-wrapper').each(function(i) {
    // //
    // //      $(this).find('a').attr('href', '#img-' + i);
    // //      $(this).find('.modal-box__content').attr('id', 'img-' + i);
    // // })
    //

    // // Magnific popup content


    $('.popup-content').magnificPopup({
                    type: 'inline',
                    closeOnContentClick: true
                });

 



    var count = $('.popup-gallary').length;

    if(count) {
        $('.popup-gallary').each(function(i) {
            var link = $(this).find('img').attr('src');
            $(this).attr('href', link);
            if(count == i+1) {
                $('.popup-gallary').magnificPopup({
                    type: 'image',
                    closeOnContentClick: true,
                    gallery: {
                        enabled: true
                    }
                });
            }
        })
    };


    // Slick slider

    $('.charity__contribution').click(function () {
        if ($('.popup__window').fadeIn()) {
                $('.popup__slick-slider').slick({
            });
        }
    });

    $('.popup__close-btn').click(function () {
        $('.popup__window').fadeOut();
    });





});