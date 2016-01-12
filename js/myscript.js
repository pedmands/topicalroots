/*! 
// Topical Roots JS
// Copyright 2016 Preston Edmands
// MIT License
**/
$(document).ready(function() {


var nb = $(".navbar");
nbs = "stickynav";
sb = $(".site-branding").height();
sc = $(".site-content");
nbb = $(".navbar-brand");

$(window).scroll(function() {
	if( $(this).scrollTop() > sb ) {
		nb.addClass(nbs);
		sc.css({'margin-top' : '50px'});
		nbb.css({'opacity' : '1'});
	} else {
		nb.removeClass(nbs);
		sc.css({'margin-top' : '0'});
		nbb.css({'opacity' : '0'});
	}
});



// Nav Highlighting
$(window).scroll(function(){

  var windowPos = $(window).scrollTop() + 60;
  $('nav li a').removeClass('active');

  if (windowPos > $('#about').offset().top) {
    $('nav li a').removeClass('active');
    $('a[href$="#about"]').addClass('active');
  }

  if (windowPos > $('#classes').offset().top) {
    $('nav li a').removeClass('active');
    $('a[href$="#classes"]').addClass('active');
  }

  if (windowPos > $('#coaches').offset().top) {
    $('nav li a').removeClass('active');
    $('a[href$="#coaches"]').addClass('active');
  }

  if (windowPos > $('#schedule').offset().top) {
    $('nav li a').removeClass('active');
    $('a[href$="#schedule"]').addClass('active');
  }

  if (windowPos > $('#location').offset().top) {
    $('nav li a').removeClass('active');
    $('a[href$="#location"]').addClass('active');
  }

  stickyNav();
  logoBgFader();
});

//Smooth Scrolling
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 2000);
        return false;
      }
    }
  });


 

});
