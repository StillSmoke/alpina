$(document).ready(function() {
	$('#mainMenu ul li').hover(function(){
								$(this).addClass('hello');
								$(this).animate({
									"background\-position" : "bottom -130px right 0%"
								}, 
								500)},
							function(){
								$(this).animate({
									"background\-position" : "bottom 0px right 0%"
								}, 
								500)
							})
});
