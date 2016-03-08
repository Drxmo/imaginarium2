



$(document).ready(function () {
  var $window = $(window);

  // Function to handle changes to style classes based on window width
  function checkWidth() {

    if ($window.width() < 700) {


      $('.headerX').addClass("smallX").addClass("sticky");
    }
    ;


    if ($window.width() >= 700) {

      $('.headerX').removeClass("smallX").removeClass("sticky");
    }
  }

  // Execute on load
  checkWidth();

  // Bind event listener
  $(window).resize(checkWidth);
});


$(document).ready(function () {
  var $window = $(window);
  if ($window.width() >= 668) {
    $(window).scroll(function () {
      if ($(this).scrollTop() > 50) {
        $('.headerX').addClass("smallX");
        $('.headerX').addClass("sticky");
        $('.logohead').addClass("invisibleX");
        $('.containerX1').addClass("visibleX");
        $('.containerX1').removeClass("invisibleX");
        $('.navsub').addClass("stickyX2");
//         $('.slideX2').addClass("stickySlide");
        $('.navbar-rightX').addClass("navbar-rightXM");


      }
      else {
//         $('.slideX2').removeClass("stickySlide");
        $('.headerX').removeClass("smallX");
        $('.headerX').removeClass("sticky");
        $('.logohead').removeClass("invisibleX");
        $('.containerX1').removeClass("visibleX");
        $('.containerX1').addClass("invisibleX");
        $('.navsub').removeClass("stickyX2");
        $('.navbar-rightX').removeClass("navbar-rightXM");

      }

      if ($(this).scrollTop() > 380) {
//    $('.headerX').addClass(".darkbackground");
//    $('.navsub').addClass(".darkbackground");

        $(".navsub").attr("id", "darkbackground");
        if ($(this).scrollTop() > 440)
        {
          $(".headerX").attr("id", "darkbackground");
        } else {
          $(".headerX").removeAttr("id");
        }
      }
      else
      {
        $(".navsub").attr("id", "backrgb");
        $(".headerX").removeAttr("id");


//    $(".navsub").removeAttr("id");

      }

      if ($(this).scrollTop() > 670) {
        $('.headerX').addClass("noStickyX");
        $('.headerX').removeClass("sticky");

        $('.navsub').removeClass("stickyX2");
        $('.navsub').addClass("stickyX3");
        $('.slideX2').addClass("sticky");
      }
      else {

        $('.navsub').removeClass("stickyX3");
        $('.headerX').removeClass("noStickyX");


      }
    });
  }
  else {
    // Hide Header on on scroll down
    // Scroll Up effect
    var didScroll;
    var lastScrollTop = 0;
    var delta = 5;
    var navbarHeight = $('header').outerHeight();

    $(window).scroll(function (event) {
      didScroll = true;
    });

    setInterval(function () {
      if (didScroll) {
        hasScrolled();
        didScroll = false;
      }
    }, 250);

    function hasScrolled() {
      var st = $(this).scrollTop();

      // Make sure they scroll more than delta
      if (Math.abs(lastScrollTop - st) <= delta)
        return;

      // If they scrolled down and are past the navbar, add class .nav-up.
      // This is necessary so you never see what is "behind" the navbar.
      if (st > lastScrollTop && st > navbarHeight) {
        // Scroll Down
        $('.navsub').removeClass('stickyX2');
      } else {
        // Scroll Up
        if (st + $(window).height() < $(document).height()) {
          $('.navsub').addClass('stickyX2');
        }
      }

      lastScrollTop = st;
    }



  }
});

//       
//       $( document ).ready(function() {
//        console.log( "document loaded" );
//        $('.sitiosX').addClass('active');
//        
//    });
// 
//    $( window ).load(function() {
//        console.log( "window loaded" );
//        $('.sitioX').addClass('active');
//    });





//     if ($(this).scrollTop() > 201){  
//        
//        $('.headerX').removeClass("sticky");
//       
//        $('.navsub').removeClass("stickyX2");
//         
//    }
//  

//
//---------PARALLAX EFFECT-----
//---------PARALLAX EFFECT-----
//---------PARALLAX EFFECT-----
$(document).ready(function () {
  var origheight = $("#trans1").height();
  var height = $(window).height();
  if (height > origheight) {
    $("#trans1").height(height);
  }

  $(window).scroll(function () {
    var x = $(this).scrollTop();
    $('#trans1').css('background-position', 'center -' + parseInt(x / 5) + 'px');
  });

});

//-------Moving things effect-------
//-------Moving things effect-------
//-------Moving things effect-------
$(document).ready(function () {
  var $horizontal1 = $('.txt1');
  var $horizontal2 = $('.txt2');
  var $horizontal3 = $('.txtc');

  $(window).scroll(function () {
    var s = $(this).scrollTop(),
            d = $(document).height(),
            c = $(this).height();

    scrollPercent = (s / (d - c));

    var position = (scrollPercent * ($(document).width() - $horizontal1.width()) * 30);
    var position2 = (scrollPercent * ($(document).width() - $horizontal1.width()) * 20);

    $horizontal1.css({
      'left': (position)
    });
    $horizontal2.css({
      'left': (position2 - 6000)
    });
  });
});