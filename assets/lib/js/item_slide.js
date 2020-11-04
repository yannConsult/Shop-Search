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
    fr = new FilmRoll({
        container: '#film_roll',
        height: 50,
        configure_load: true,
        prev: '.prev-btn',
        next: '.next-btn',
        pager: false,
        scroll: false
    });

    fr = new FilmRoll({
        container: '#film_roll_ad',
        height: 200,
        configure_load: true,
        prev: '.prev-ad-btn',
        next: '.next-ad-btn',
        pager: false,
        scroll: false
    });
});