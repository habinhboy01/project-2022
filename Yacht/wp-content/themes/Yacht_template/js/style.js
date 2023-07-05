var Logo = document.querySelector('.logo');
var img = document.querySelector('.img_logo');
var imgSrc =  img.getAttribute('data-src');
var homeUrl = document.querySelector('.home-url').href;


// menu pc
$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 280) {
            $('.background-menu').addClass('sticky');
        }
        else {
             $('.background-menu').removeClass('sticky');
        }
    })
})
  

// menu mobile

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 80) {
            $('.background-menu-mobile').addClass('sticky');
        }
        else {
             $('.background-menu-mobile').removeClass('sticky');
        }
    })
})

$('.btn-open').on('click',function(){
    $('.tab-mobile2').slideToggle();
});


// thanh tìm kiếm
$('.search').on('click',function(){
    var inputText = $('.bg-form');
        if(inputText.css('display') == 'none'){
            $('.bg-form').show(300);
    
        }else{
            $('.bg-form').hide(300); 
        }    
})

$('.close').on('click',function(){
    var inputText = $('.bg-form');
        if(inputText.css('display') == 'none'){
            $('.bg-form').show(300);
    
        }else{
            $('.bg-form').hide(300); 
        }    
})

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 280) {
            $('.bg-form').addClass('bg-form-sticky');
        }
        else {
             $('.bg-form ').removeClass('bg-form-sticky');
        }
    })
})


// slider home
$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='display-arrow'><i class='fas fa-angle-left'></i></div>","<div class='display-arrow'><i class='fas fa-angle-right'></i></div>"],

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
            items:1
        }
    }
})



