// menu pc

$('.btn-search').on('click',function(){
    var inputText = $('.searchform');
        if(inputText.css('display') == 'none'){
            $('.searchform').show(300);
    
        }else{
            $('.searchform').hide(300); 
        }    
})


// menu mobile

$('.icon-bar').on('click',function(){
    $('.bg-mobile').slideToggle();
});

$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='btn-prev'><i class='fas fa-angle-left'></i></div>","<div class='btn-next'><i class='fas fa-angle-right'></i></div>"],

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
            items:3
        }
    }
})


// bình luận

var activeComment = document.getElementsByClassName('social-single3');
var openComment = document.getElementsByClassName('bg-comments')[0];

for (var i = 0; i < activeComment.length; i++) {
    activeComment[i].onclick = function() {
        openComment.classList.add('activeComment');
    }
};

// click vào màn hình đóng menu

openComment.onclick = function () {
   openComment.classList.remove('activeComment');
}

modelContainer = document.getElementsByClassName('bg-comments2')[0];
modelContainer.addEventListener('click', function (event) {
    event.stopPropagation();
})