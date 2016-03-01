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

  var windowPos = $(window).scrollTop() + 70;
  $('a[href$="#ingredients"]').css({'background' : 'none', 'color' : '#9d9d9d'});

  if (windowPos > $('#ingredients').offset().top) {
    $('nav li a').css({'background' : 'none', 'color' : '#9d9d9d'});
    $('a[href$="#ingredients"]').css({'background' : '#000', 'color' : '#fff'});
  }

  if (windowPos > $('#pricing').offset().top) {
    $('nav li a').css({'background' : 'none', 'color' : '#9d9d9d'});
    $('a[href$="#pricing"]').css({'background' : '#000', 'color' : '#fff'});
  }

  if (windowPos > $('#uses').offset().top) {
    $('nav li a').css({'background' : 'none', 'color' : '#9d9d9d'});
    $('a[href$="#uses"]').css({'background' : '#000', 'color' : '#fff'});
  }

  if (windowPos > $('#story').offset().top) {
    $('nav li a').css({'background' : 'none', 'color' : '#9d9d9d'});
    $('a[href$="#story"]').css({'background' : '#000', 'color' : '#fff'});
  }

  if (windowPos > $('#faq').offset().top) {
    $('nav li a').css({'background' : 'none', 'color' : '#9d9d9d'});
    $('a[href$="#faq"]').css({'background' : '#000', 'color' : '#fff'});
  }

});

//Smooth Scrolling
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 2000);
        return false;
      }
    }
  });


 

});
