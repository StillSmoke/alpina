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
});
