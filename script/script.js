$(document).ready(function() {
	$('#mainMenu ul li').hover(function(){
								// $(this).addClass('animateButton');
								$(this).animate({backgroundPosition : 'bottom 40px right 0% !important'}, 500)},
							function(){
								// $(this).removeClass('animateButton');
								$(this).animate({backgroundPosition : 'bottom 130px right 0% !important'}, 500)
							});
});
