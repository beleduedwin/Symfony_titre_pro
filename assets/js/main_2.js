//smooth scroll

	$(document).ready(function() {
		$('.js-scrollTo').on('click', function() { // Au clic sur un élément
			var page = $(this).attr('data-target'); // Page cible
			var speed = 750; // Durée de l'animation (en ms)
			$('html, body').animate( { scrollTop: $(page).offset().top }, speed ); // Go
			return false;
		});
	});




//    skill-bar
$(document).ready(function () {
    $('.skillbar').each(function () {
        $(this).find('.skillbar-bar').animate({
            width:$(this).attr('data-percent')
        },4000);

    });

});



//Menu toggle-button
$(document).ready(function () {
    $(".menu-icon").on("click", function () {
        $("nav ul").toggleClass("showing");

    });
});

//scrolling Effect

$(window).on("scroll", function () {
    if($(window).scrollTop()){
        $('nav').addClass('black');
    }
else{
        $('nav').removeClass('black');
    }
});





