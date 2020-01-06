$( document ).ready(function() {
var hamburger = $('#hamburger');
var menu = $('#menu')
var Lscreen=screen.width


	hamburger.click(function() {
    hamburger.toggleClass('is-active');
    menu.toggleClass('actif')


    return false;
	});


 	$(window).scroll(function () {
 	//console.log("test")
  if (window.innerWidth < 1018) {
    //console.log("test3")
 	 	if ($(this).scrollTop() > 75) {
 	 		//console.log("test2") 
        	$('header').addClass("fixe");
          $('.pb-resp').addClass("mta");
          $('.pb-resp2').addClass("mta2");

        	}
    	else {
      		$('header').removeClass("fixe");
  	 		}
      }
      else {

      }
   	});

 });