// carousel page home
$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='color-icon'><i class='fas fa-chevron-left'></i></div>","<div class='color-icon'><i class='fas fa-chevron-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:8000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})