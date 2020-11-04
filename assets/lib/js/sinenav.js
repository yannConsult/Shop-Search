$(document).ready(function(){

    var sidenavCloseBtn = document.getElementById("close-sidnav");
    var sidenavCloseMobileBtn = document.getElementById("close-sidnav-mobile");
    var goToNextPageArrow = document.getElementById("go-to-next-page");
    // var sidenavSelf     = document.getElementById("slide-out");


    // console.log(sidenavSelf);
    $('.sidenav').sidenav({
        inDuration: 400,
        outDuration: 400
    });

    if(goToNextPageArrow != null){
      goToNextPageArrow.addEventListener("click", function(){
    
        if(this.hash !== ""){
          // Prevent default anchor click behavior
          event.preventDefault();
  
          // Store hash
          var hash = this.hash;
          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 800, function(){
  
            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        }
      });
    }
   

    sidenavCloseBtn.addEventListener("click", function(){
        console.log('sidenav clicked');
        $('.sidenav').sidenav('close');
      });

      sidenavCloseMobileBtn.addEventListener("click", function(){
        console.log('sidenav clicked');
        $('.sidenav').sidenav('close');
      });

  });

  