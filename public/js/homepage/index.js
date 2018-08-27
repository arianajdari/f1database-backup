var imageSource = document.head.querySelector("[property=big-image-path]").content;
var centerText = $("#center_text");
var background = $("#homepage_index_background");
var windowHeight = $(window).height();
var windowWidth = $(window).width();

if(windowWidth >= 1920 || windowHeight >= 1279) {
    $("#homepage_index_background img").attr('src', imageSource);
}

background.css('height', windowHeight);

centerText.css({
	'margin-left': Math.round((windowWidth/2) - centerText.width() / 2),
	'margin-top' : 80 + 'px',
	'height' : windowHeight - 160
});

$(window).on('resize', function() {
	windowHeight = $(window).height();

	background.css('height', windowHeight);

	centerText.css({
    	'margin-left': Math.round((windowWidth/2) - (centerText.width() / 2)),
    	'margin-top' : Math.round((windowHeight/4)) 
	});
});
