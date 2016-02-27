$(document).ready(function() {
	$('#mainMenu ul li').hover(function(){
									$(this).animate({
										'backgroundPosition': 'center top'
									}, 1000)},
								function(){
									$(this).animate({
										'backgroundPosition': 'center bottom'
									}, 1000)
							});

	$('#social a').css('opacity', '0.5');
	$('#social a').hover(function(){
							$(this).stop().animate({opacity: '1'}, 1000)},
						function(){
							$(this).stop().animate({opacity: '0.5'}, 1000)});

	$('#products div').fadeTo("slow", 0.6);
	$('#products div').hover(function(){
								$(this).stop().fadeTo("slow",1),
								$(this).css('borderRadius', '5px')}, 
							function(){
								$(this).stop().fadeTo("slow", 0.6),
								$(this).css('borderRadius', '')} 
 							); 
});
