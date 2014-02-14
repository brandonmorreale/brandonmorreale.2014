var header = {
	init: function () {
		this.run();
	},
	run: function () {
		var menu = document.querySelector('header');
		var origOffsetY = menu.offsetTop + 3;
		$(window).scroll(function() {
			if ($(window).scrollTop() >= origOffsetY) {
				$('header').addClass('scroll');
			} 
			else {
				$('header').removeClass('scroll');
			}          
		});
	}
}

var opacity = {
	init: function () {
		this.run();
	},
	run: function () {
		$('ul.portfolio li').mouseenter(function(){
			$('.portfolio li').css('opacity', '.2');
			$(this).css('opacity', '1');
		})
		$('ul.portfolio li').mouseleave(function(){
			$('.portfolio li').css('opacity', '1');
		})
	}
}

var social = {
	init: function () {
		this.run();
	},
	run: function () {
		$('.social i').mouseenter(function(){
			var socialclass = $(this).attr('id');
			if ($('span').hasClass(socialclass)) {
				$('span.' + socialclass).addClass('active')
			}
		})
		$('.social i').mouseout(function(){
			$('span').removeClass('active')
		})
	}
}

$(document).ready(function(){
	header.init();
	opacity.init();
	social.init();
});