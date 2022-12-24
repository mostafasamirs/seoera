//start select2
$(document).ready(function () {
    $('.selectd').select2();
});



$(".toggle-password").click(function () {

    $(this).toggleClass("fa-eye fa-eye-slash");
    var input = $($(this).attr("toggle"));
    if (input.attr("type") == "password") {
        input.attr("type", "text");
    } else {
        input.attr("type", "password");
    }
});



// $(".toggle-passwordconfirmation").click(function() {

//     $(this).toggleClass("fa-eye fa-eye-slash");
//     var input = $($(this).attr("toggle"));
//     if (input.attr("type") == "password") {
//       input.attr("type", "text");
//     } else {
//       input.attr("type", "password");
//     }
//   });


function toggleFullscreen(elem) {
    elem = elem || document.documentElement;

    if (!document.fullscreenElement && !document.mozFullScreenElement &&
        !document.webkitFullscreenElement && !document.msFullscreenElement) {
        if (elem.requestFullscreen) {
            elem.requestFullscreen();
        } else if (elem.msRequestFullscreen) {
            elem.msRequestFullscreen();
        } else if (elem.mozRequestFullScreen) {
            elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) {
            elem.webkitRequestFullscreen(Element.ALLOW_KEYBOARD_INPUT);
        }
    } else {
        if (document.exitFullscreen) {
            document.exitFullscreen();
        } else if (document.msExitFullscreen) {
            document.msExitFullscreen();
        } else if (document.mozCancelFullScreen) {
            document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
            document.webkitExitFullscreen();
        }
    }
}

document.getElementById('btnFullscreen').addEventListener('click', function () {
    toggleFullscreen();
});

document.getElementById('exampleImage').addEventListener('click', function () {
    toggleFullscreen(this);
});


/* HOME ABOUT PARALAX */
if (jQuery(window).width() > 768) {
    let img1 = document.getElementsByClassName('thumparallax');
    new simpleParallax(img1, {
        delay: 2
    });

    let img2 = document.getElementsByClassName('thumparallax-down');
    new simpleParallax(img2, {
        delay: 2,
        orientation: 'down'
    });
}

if (jQuery('.popup-vimeo-video').length) {
    $(".popup-vimeo-video").magnificPopup({
    type:"iframe",
    removalDelay: 160,
    preloader: false,
    fixedContentPos: false
  });
}


