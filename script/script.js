$(document).ready(function() {
	$('#social a').css('opacity', '0.5');
	$('#social a').hover(function(){
							$(this).stop().animate({opacity: '1'}, 1000)},
						function(){
							$(this).stop().animate({opacity: '0.5'}, 1000)});

	$('#products div').hover(function(){
							$(this).stop().animate({opacity: '1'}, 1000)},
						function(){
							$(this).stop().animate({opacity: '0.6'}, 1000)});

	$('#products').on('click', '.unchangedProduct', function(){
						var x = $(this).children().attr('id');
						$('#products div').stop().fadeOut(500, function(){$('#products span').load('product.php', 'x=' + x)});
	});

	$('#products').on('click', '#btnBack', function(){
						$('#products .changedProduct').stop().fadeOut(500, function(){$('#products span').load('unchangedProduct.html')});
	});

	$('#products span').on('focus', '#phone', function(){
						$("#phone").mask("+7 (999) 999-99-99");
	});
});
