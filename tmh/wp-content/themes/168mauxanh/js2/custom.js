 
function square($id) {
    var w = $id.outerWidth();
    $id.css("height", w );
}
$(document).ready(function () {
          
     $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
    $('#slider').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 8000,
        animateOut: 'fadeOut'
    });
    $('#benhnhan').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 5000

    });
     $('#online').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        items: 1,
        autoplay: true,
        autoplayTimeout: 3000,
        animateOut: 'fadeOut'

    });
    $(".box3 a").hover(function () {
        $(".box4").removeClass("active");
        var tab = $(this).attr("data-tab");
        $("#" + tab + "").addClass("active");
        $(".box3 a").removeClass("active");
        $(this).addClass("active");
    });

    $(".box14 a").hover(function () {
        $(".box13").removeClass("active");
        var tab = $(this).attr("data-tab");
        $("#" + tab + "").addClass("active");
        $(".box14 a").removeClass("active");
        $(this).addClass("active");
    });

     $(".box16 a").hover(function () {
        $(".box17").removeClass("active");
        var tab = $(this).attr("data-tab");
        $("#" + tab + "").addClass("active");
        $(".box16 a").removeClass("active");
        $(this).addClass("active");
        $(".box18").removeClass("active");
        var tab2 = $("#" + tab + " a:first-child").attr("data-tab");        
        $("#" + tab2 + "").addClass("active");

    });


      $(".box17 a").hover(function () {
        $(".box18").removeClass("active");
        var tab = $(this).attr("data-tab");
        $("#" + tab + "").addClass("active");
        $(".box17 a").removeClass("active");
        $(this).addClass("active");
        
    });
    
});

$(function(){
			$(".box23").scrollText({
				'duration': 1000
			});
		});
 
//fixheight 
jQuery.fn.vjustify = function () {
    var maxHeight = 0;
    this.each(function () {
        if (this.offsetHeight > maxHeight) {
            maxHeight = this.offsetHeight;
        }
    });
    this.each(function () {
        jQuery(this).height(maxHeight + "px");
        if (this.offsetHeight > maxHeight) {
            jQuery(this).height((maxHeight - (this.offsetHeight - maxHeight)) + "px");
        }
    });
}
;

function runOnLoad(f) {
    if (runOnLoad.loaded)
        f();
    // If already loaded, just invoke f() now.
    else
        runOnLoad.funcs.push(f);
    // Otherwise, store it for later
}

runOnLoad.funcs = [];
// The array of functions to call when the document loads
runOnLoad.loaded = false;
// The functions have not been run yet.

runOnLoad.run = function () {
    if (runOnLoad.loaded)
        return;
    // If we've already run, do nothing

    for (var i = 0; i < runOnLoad.funcs.length; i++) {
        try {
            runOnLoad.funcs[i]();
        } catch (e) {
            / An exception in one function shouldn't stop the rest /
        }
    }

    runOnLoad.loaded = true;
    // Remember that we've already run once.

    delete runOnLoad.funcs;
    // But don't remember the functions themselves.
    delete runOnLoad.run;
    // And forget about this function too!
}
;

// Register runOnLoad.run() as the onload event handler for the window
if (window.addEventListener)
    window.addEventListener("load", runOnLoad.run, false);
else if (window.attachEvent)
    window.attachEvent("onload", runOnLoad.run);
else
    window.onload = runOnLoad.run;

runOnLoad(function () {
    jQuery(".fixheight1").vjustify();
    jQuery(".fixheight2").vjustify();
    jQuery(".fixheight3").vjustify();
});