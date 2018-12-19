$('.item-nav').on('click', function(event) {
	event.preventDefault();
	let Item = $(this).attr('href');

	if ($(window).width() > 1370) {
		$('body, html').stop(true, true).animate({
			scrollTop: $(Item).offset().top - 100
		}, 1000);
	} else {
		$('body > button > span').removeClass('active-btn');

		$('body > nav').removeClass('active-nav');

		$('body, html').stop(true, true).animate({
			scrollTop: $(Item).offset().top
		}, 1000);
	}
});

$('#FormContact').on('submit', function(event) {
	event.preventDefault();
	$(this).find('input').val('');
	$(this).find('textarea').val('');
});

$('body > button').on('click', function(event) {
	event.preventDefault();
	
	$(this).find('span').toggleClass('active-btn');

	$('body > nav').toggleClass('active-nav');
});