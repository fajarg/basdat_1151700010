$('.page-scroll').on('click'.function(e){

	var tujuan = $(this).attr('href');

	var elementTujuan = $(tujuan);

	$('body').animate({
		scrollTop: elementTujuan.offset().top - 50
	},1000,);

	e.preventDefault();
})

