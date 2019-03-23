// event pada saat link di klik

$('.page-scroll').on('click', function(e){

	// ambil isi href
	var tujuan = $(this).attr('href');
	// tangkap elemen ybg
	var elementujuan = $(tujuan);


	// pindahkan scroll
	$('html, body').animate({
		scrollTop: elementujuan.offset().top - 50
	}, 1000, 'easeInOutExpo');

	e.preventDefault()

});


// paralaxx
$(window).scroll(function() {
	var wScroll = $(this).scrollTop();


	// jumbotron
	$('.jumbotron img').css({
		'transform' : 'translate(0px, '+ wScroll/4 +'%)'
	});

	$('.jumbotron h1').css({
		'transform' : 'translate(0px, '+ wScroll/2 +'%)'
	});

	$('.jumbotron p').css({
		'transform' : 'translate(0px, '+ wScroll/1.2 +'%)'
	});


	// portfolio
	if( wScroll > $('.portfolio').offset().top - 300 ) {
		$('.portfolio .thumbnail').each(function(i) {
			setTimeout(function() {
				$('.portfolio .thumbnail').eq(i).addClass('muncul');
			}, 300 * i);
		});



		
	}


});


















