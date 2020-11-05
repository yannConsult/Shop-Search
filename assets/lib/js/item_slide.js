$(document).ready(function() {

    // var carousel;
    // $(document).ready(function() {
    //     carousel = $("ul.item-swipe");
    //     carousel.itemslide({
    //         disable_slide: true,
    //         duration: 1500,
    //         disable_clicktoslide: false,
    //         disable_slide: true,
    //         disable_scroll: true,
    //         parent_width: false,
    //         one_item: false
    //     });
    // });
    // fr = new FilmRoll({
    //     container: '#film_roll',
    //     height: 50,
    //     configure_load: true,
    //     prev: '.prev-btn',
    //     next: '.next-btn',
    //     pager: false,
    //     scroll: false
    // });

    // fr = new FilmRoll({
    //     container: '#film_roll_ad',
    //     height: 200,
    //     configure_load: true,
    //     prev: '.prev-ad-btn',
    //     next: '.next-ad-btn',
    //     pager: false,
    //     scroll: false
    // });


    $('.quick-search').slick({
        dots: false,
        infinite: false,
        arrows: true,
        speed: 600,
        slidesToShow: 4,
        slidesToScroll: 4,
        adaptiveHeight: true,
        prevArrow: $('.prev-btn'),
        nextArrow: $('.next-btn'),
        centerMode: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    $('.demo').slick({
        dots: false,
        infinite: true,
        arrows: true,
        speed: 600,
        slidesToShow: 3,
        slidesToScroll: 3,
        adaptiveHeight: true,
        prevArrow: $('.prev-ad-btn'),
        nextArrow: $('.next-ad-btn'),
        centerMode: false,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    // var slideIndex = 4;
    // $(".next-btn").on("click", function() {

    // });

    // $(".prev-btn").on("click", function() {

    // });

});