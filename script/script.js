$(document).ready(function() {
	$('#mainMenu ul li').hover(function(){
									$(this).animate({
										'background-position': 'center top'
									}, 1000)},
								function(){
									$(this).animate({
										'background-position': 'center bottom'
									}, 1000)
							});

	$('#social a').css('opacity', '0.5');
	$('#social a').hover(function(){
							$(this).stop().animate({opacity: '1'}, 1000)},
						function(){
							$(this).stop().animate({opacity: '0.5'}, 1000)});

	$('#products div').click(function(){
						$('#products div').stop().fadeOut(500, function(){$('#products span').load('product.html', 'x=' + $(this).attr('href'))})
					}); 

});
