
AOS.init({
    once: true,
});


// Website Loader
$(window).on('load', function () {
    $('#loading').hide();
})

// Menu Setting Class
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('#megamenu').addClass('top-75');
    } else {
        $('#megamenu').removeClass('top-75');
    }
});

// Events Slider Function
var carousel = $("#carousel").flipster({
    style: 'carousel',
    spacing: -0.5,
    nav: false,
    buttons: true,
    scrollwheel: false,
    loop: 1,
    // start: 0,
});


// Counter
const counters = document.querySelectorAll(".counter");
counters.forEach((counter) => {
    counter.innerText = "0";
    const updateCounter = () => {
        const target = +counter.getAttribute("data-target");
        const count = +counter.innerText;
        const increment = target / 200;
        if (count < target) {
            counter.innerText = `${Math.ceil(count + increment)}`;
            setTimeout(updateCounter, 1);
        } else counter.innerText = target + '+';
    };
    updateCounter();
});


// Show / Hide Support Function
$('#formsdas').hide();
$('#text').hide();
$("#btntnt").click(function () {
    $('#formsdas').fadeToggle(500);
    $('#text').slideToggle(500);
});

// Hamburger Menu Animation Function
document.addEventListener('click', function (e) {
    // Hamburger menu
    if (e.target.classList.contains('hamburger-toggle')) {
        e.target.children[0].classList.toggle('active');
    }
})


// Scroll to top
function scrollToTop() {
    window.scrollTo(0, 0);
}

// Course Page Animations for scrolling Section Js Function
var animating = false;
$(document).ready(function () {
    var scrollLink = $('.scroll');
    // Smooth scrolling
    scrollLink.click(function (e) {
        //e.preventDefault();
        animating = true;

        $('body,html').animate({
            scrollTop: $(this.hash).offset().top - 90
        }, 100);
    });

    // Active link switching
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();
        scrollLink.each(function () {
            var sectionOffset = $(this.hash).offset().top - 90;
            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        })
    })
});


// Home Page Slider
$('#homeSlider').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ['<i class="las la-angle-left arrow-left"></i>', '<i class="las la-angle-right arrow-right"></i>'],
    pagination: true,
    autoplay: true,
    autoPlaySpeed: 2000,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        },
        992: {
            items: 1,
        },
        1200: {
            items: 1,
        },
        1920: {
            items: 1,
        }
    }
});

// Top Rankers Slider
$('#topRankers').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ['<i class="las la-angle-left arrow-left"></i>', '<i class="las la-angle-right arrow-right"></i>'],
    pagination: true,
    autoplay: true,
    autoPlaySpeed: 2000,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 3,
        },
        1200: {
            items: 3,
        },
        1920: {
            items: 3,
        }
    }
});

// Toppers Talks Slider
$('#toppersTalks').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ['<i class="las la-angle-left arrow-left"></i>', '<i class="las la-angle-right arrow-right"></i>'],
    pagination: true,
    autoplay: true,
    autoPlaySpeed: 2000,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 1,
        },
        992: {
            items: 1,
        },
        1200: {
            items: 1,
        },
        1920: {
            items: 1,
        }
    }
});

// Our Centers
$('#ourCenters').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ['<i class="las la-angle-left arrow-left"></i>', '<i class="las la-angle-right arrow-right"></i>'],
    pagination: true,
    autoplay: true,
    autoPlaySpeed: 2000,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 3.2,
        },
        1200: {
            items: 4.2,
        },
        1920: {
            items: 4.2,
        }
    }
});
// Our Centers
$('#studentFeedback').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ['<i class="las la-angle-left arrow-left"></i>', '<i class="las la-angle-right arrow-right"></i>'],
    pagination: true,
    autoplay: true,
    autoPlaySpeed: 2000,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        },
        992: {
            items: 2,
        },
        1200: {
            items: 2,
        },
        1920: {
            items: 2,
        }
    }
});
// Our Centers
$('#talkShow').owlCarousel({
    loop: true,
    nav: true,
    dots: true,
    navText: ['<i class="las la-angle-left arrow-left"></i>', '<i class="las la-angle-right arrow-right"></i>'],
    pagination: true,
    autoplay: true,
    autoPlaySpeed: 2000,
    smartSpeed: 2000,
    autoplayTimeout: 5000,
    autoplayHoverPause: true,
    responsive: {
        0: {
            items: 1,
        },
        768: {
            items: 2,
        }
    }
});


