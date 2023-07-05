// menu pc

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.bg-menu').addClass('sticky');
        }
        else {
            $('.bg-menu').removeClass('sticky');
        }
    })
})

scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
  console
}

document.getElementById("drip").addEventListener('click', () => {
  scrollTo(document.getElementById("1"));
});

document.getElementById("story").addEventListener('click', () => {
  scrollTo(document.getElementById("2"));
});

document.getElementById("privilege").addEventListener('click', () => {
  scrollTo(document.getElementById("3"));
});

document.getElementById("meet").addEventListener('click', () => {
  scrollTo(document.getElementById("4"));
});

document.getElementById("exchange").addEventListener('click', () => {
  scrollTo(document.getElementById("5"));
});

document.getElementById("contact").addEventListener('click', () => {
  scrollTo(document.getElementById("6"));
});


// menu mobile
$('.icon-bar').on('click',function(){
 $('.list-menuMobile').slideToggle();
});


$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.bg-mobile').addClass('sticky2');
        }
        else {
            $('.bg-mobile').removeClass('sticky2');
        }
    })
})

scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
  console
}

document.getElementById("drip2").addEventListener('click', () => {
  scrollTo(document.getElementById("1"));
  document.getElementsByClassName('list-menuMobile')[0].style.display = "none";
});

document.getElementById("story2").addEventListener('click', () => {
  scrollTo(document.getElementById("2"));
  document.getElementsByClassName('list-menuMobile')[0].style.display = "none";
});

document.getElementById("privilege2").addEventListener('click', () => {
  scrollTo(document.getElementById("3"));
  document.getElementsByClassName('list-menuMobile')[0].style.display = "none";
});

document.getElementById("meet2").addEventListener('click', () => {
  scrollTo(document.getElementById("4"));
  document.getElementsByClassName('list-menuMobile')[0].style.display = "none";
});

document.getElementById("exchange2").addEventListener('click', () => {
  scrollTo(document.getElementById("5"));
  document.getElementsByClassName('list-menuMobile')[0].style.display = "none";
});

document.getElementById("contact2").addEventListener('click', () => {
  scrollTo(document.getElementById("6"));
  document.getElementsByClassName('list-menuMobile')[0].style.display = "none";
});




// popup
var closePopup = document.getElementsByClassName('close-popup')[0];
var popup = document.getElementsByClassName('popup')[0];
closePopup.onclick = function() {
    popup.style.display='none';
}

// click vào màn hình đóng menu
popup.onclick = function() {
    popup.style.display='none';
}

modelContainer = document.getElementsByClassName('popup2')[0];
modelContainer.addEventListener('click', function (event) {
    event.stopPropagation();
})


// video footer
var video = document.getElementsByClassName('video-footer')[0];

video.onclick = function() {
    document.getElementsByClassName('video-footer2')[0].style.display = 'block';
}

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

function myFunction() {
  document.getElementsByClassName('video-footer2')[0].style.display = 'none';
}

// carousel

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