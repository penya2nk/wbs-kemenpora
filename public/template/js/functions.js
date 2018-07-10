/**
 * Created by User on 10/9/2016.
 */
$(document).ready(function(){
    // Add smooth scrolling to all links in navbar + to top link
    $(".navbar a, a[href='#startPage']").on('click', function(event) {
        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
            // Prevent default anchor click behavior
            event.preventDefault();

            // Store hash
            var hash = this.hash;

            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 900, function(){

                // Add hash (#) to URL when done scrolling (default click behavior)
                window.location.hash = hash;
            });
        } // End if


        //---------------------------------------------------------------------------//


    });

    $(window).scroll(function() {
        $(".slideAnim").each(function(){
            var pos = $(this).offset().top;

            var winTop = $(window).scrollTop();
            if (pos < winTop + 600) {
                $(this).addClass("slide");
            }
        });
    });
})

$(document).ready(function(){
    $("button").click(function(){
        $("#div1").fadeIn();
        $("#div2").fadeIn("slow");
        $("#div3").fadeIn(3000);
    });
});


// Buat highlight navbar yang lagi active
$(document).ready(function() {
    // get current URL path and assign 'active' class
    //var pathname = window.location.pathname.substr();
    //alert(pathname);
    //return;
    // var aaa = "localhost/laraRNI/public/home";
    //
    // alert(aaa);
    //
    // $('.nav > li > a[href="'+aaa+'"]').parent().addClass('active');

    // $(".nav li").removeClass("active");//this will remove the active class from
    // //previously active menu item
    // $('#homeNav').addClass('active');

    var z = '';//this.location.pathname;

    //$('a[href="' + z + '"]').parents('li,ul').addClass('active');

    // var aa = this.location.pathname;
    //
    // alert(aa);
});

$(document).ready(function(){
    $(".clickable-row").click(function(){
        window.document.location = $(this).data("href");
    });
});

$(document).ready(function() {
            
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear' 
            };
            
            
            $().UItoTop({ easingType: 'easeOutQuart' });
            
        });

