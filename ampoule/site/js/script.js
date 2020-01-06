$( document ).ready(function() {
var hamburger = $('#hamburger');
var menu = $('#menu')
	hamburger.click(function() {
    hamburger.toggleClass('is-active');
    menu.toggleClass('actif')


    return false;


	});
});