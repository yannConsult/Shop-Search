$(document).ready(function(){

    var productsBackground = $(".bg-smart-manager");

    
    if(productsBackground.length !== 1){
        productsBackground.each(function(index, element){
            var actualIndex = index;
            if(actualIndex % 2 === 0){
                console.log("isEven");
                $(this).css({backgroundColor: "#dddddd"});
            }else{
                console.log("isOdd");
                $(this).css({backgroundColor: "#bbbebd"});
            }
        });
    }else{
        console.log("not greater than 1");
    }

});