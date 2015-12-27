
/* 
 * Custom Responsive Superfish settings
 */

jQuery(document).ready(function($){
	var breakpoint = 660;
    var sf = $('ul.nav-menu');
	
    if($(document).width() >= breakpoint){
        sf.superfish({
            delay: 100,
            speed: 'fast'
        });
    }
	
    $(window).resize(function(){
        if($(document).width() >= breakpoint & !sf.hasClass('sf-js-enabled')){
            sf.superfish({
                delay: 100,
                speed: 'fast'
            });
        } else if($(document).width() < breakpoint) {
            sf.superfish('destroy');
        }
    });
});
              