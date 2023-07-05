$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><img src='./images/prev2.png'></div>","<div class='btn-next'><img src='./images/next2.png'></div>"],

    autoplay:true,
    // autoplayTimeout:8000,
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
