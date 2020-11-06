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


    // var starIndex = 0;
    // var t = ['Restaurant', 'Jewerly', 'Perfume', 'Shoes', 'Calendar', 'Mugs', 'Coffee', 'Computer', 'Mouse', 'Drinks'];
    // var slideIndex = t.length;
    // $(".next-btn").on("click", function() {
    //     console.log('next btn click');
    //     //remove all slide
    //     if (starIndex < slideIndex - 1) {
    //         for (var i = 0; i < 4; i++) {
    //             $('.quick-search').slick('slickRemove', i);

    //         }
    //         starIndex = starIndex + i;
    //     } else {
    //         $(this).attr('disabled', "true");
    //     }

    //     console.log(i);
    //     starIndex++;
    //     var tempArray = new Array();

    //     //fill temp Array
    //     // for (var i = starIndex; i < slideIndex - 1; i++) {
    //     //     tempArray.push(t[i + 1]);
    //     // }
    //     // console.log('Temp Array Data: ' + tempArray);
    //     // //Add new slide
    //     // for (var i = 0; i < tempArray.length; i++) {
    //     //     $('.quick-search').slick('slickAdd', '<div><a href="#" class="no-deco"><div class="py-3 border text-dark px-3 mx-3 mb-2 rounded-button px-4 text-center"> ' + tempArray[i] + '</div></a></div>');
    //     // }

    //     // <
    //     // div >
    //     //     <
    //     //     a href = "#"
    //     // class = "no-deco" > < div class = "py-3 border text-dark px-3 mx-3 mb-2 rounded-button px-4 text-center" > Shoes < /div> </a >
    //     //     <
    //     //     /div>

    // });

    $(".prev-btn").on("click", function() {

    });

});