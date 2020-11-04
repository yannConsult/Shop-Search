$(document).ready(function(){
    cardElem = $('.card-anim');
  
    cardElem.each(function(index) {
        $(this).hide();
        // console.log(cardElem[index]);
    });
    // cardElem.each(function(index) {
    //     $(this).delay(400*index).fadeIn(300);
    //     // console.log(cardElem[index]);
    // });
});