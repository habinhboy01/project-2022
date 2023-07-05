$('#arrow-drop').on('click',function(){
 $('.sub-menu2').slideToggle();
});


// menu mobile

$('.bar').on('click',function(){
 $('.sub-mobile').slideToggle();
});

$('#arrow-drop2').on('click',function(){
 $('.sub-mobile2').slideToggle();
});


// carousel index 2
$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='arrow-left'><i class='fas fa-arrow-circle-left'></i></div>","<div class='arrow-right'><i class='fas fa-arrow-circle-right'></i></div>"],

    autoplay:true,
    autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:4
        }
    }
})