$(document).ready(function () {

    // IMAGE SLIDER

    var imageSlider = new Swiper(".imageSlider", {

        slidesPerView: 1,
        spaceBetween: 20,
        effect: "fade",
        fadeEffect: {
            crossFade: true
        },
        allowTouchMove: false

    });


    // CONTENT SLIDER

    var contentSlider = new Swiper(".contentSlider", {

        slidesPerView: 1,
        spaceBetween: 30,
        speed: 1000,

        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        on: {

            slideChange: function () {

                let activeIndex = contentSlider.activeIndex;

                imageSlider.slideTo(activeIndex);

                $(".custom-tab").removeClass("active");

                $(".custom-tab")
                    .eq(activeIndex)
                    .addClass("active");

            }

        }

    });


    // TAB CLICK

    $(".custom-tab").click(function () {

        let index = $(this).index();

        contentSlider.slideTo(index);

        imageSlider.slideTo(index);

        $(".custom-tab").removeClass("active");

        $(this).addClass("active");

    });

});