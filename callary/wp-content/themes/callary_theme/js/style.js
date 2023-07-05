var Logo = document.querySelector('.logo');
var img = document.querySelector('.img_logo');
var imgSrc =  img.getAttribute('data-src');
var homeUrl = document.querySelector('.home-url').href;

var subMenu1 = document.querySelectorAll('ul.menu-pc > li > .sub-menu');

// menu pc

// sử lý sub menu-pc

subMenu1.forEach(function (element) {
	element.classList.add('sub-menu1')
})

var subMenu2 = document.querySelectorAll('ul.sub-menu1 > li > .sub-menu');

subMenu2.forEach(function (element) {
	element.classList.add('sub-menu2')
})

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.main').addClass('sticky');
        }
        else {
            $('.main').removeClass('sticky');
        }
    })
})

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 40) {
            $('.bg-menu3').addClass('sticky2');
        }
        else {
            $('.bg-menu3').removeClass('sticky2');
        }
    })
})


$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.text-url').addClass('sticky3');
        }
        else {
             $('.text-url').removeClass('sticky3');
        }
    })
})

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.home-url').addClass('sticky4');
        }
        else {
             $('.home-url').removeClass('sticky4');
        }
    })
})



// menu mobile

// icon bar
var menuBar = document.querySelector('.icon-bar')
menuBar.addEventListener('click', function() {
    menuBar.classList.toggle("change");
    document.querySelector('.main').classList.toggle('active')
    document.querySelector('.bg-mobile2').classList.toggle('active2')
    document.querySelector('.bg-mobile3').classList.toggle('active2')
    document.querySelector('.bg-mobile4').classList.toggle('active2')
    document.querySelector('.bg-mobile5').classList.toggle('active2')
})

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 40) {
            $('.all-mobile').addClass('sticky5');
        }
        else {
            $('.all-mobile').removeClass('sticky5');
        }
    })
})

// sub menu tiệc cưới

var arrow = document.querySelector('.icon-mobile')
arrow.addEventListener('click', function() {
    document.querySelector('.all-subMenu').classList.toggle('open')
})

var arrow2 = document.querySelector('.icon-mobile3')
arrow2.addEventListener('click', function() {
    document.querySelector('.all-subMenu').classList.remove('open')
})

// sub menu sảnh cưới
var arrow3 = document.querySelector('.icon-mobile4')
arrow3.addEventListener('click', function() {
    document.querySelector('.bg-mobile4').classList.toggle('active3')
})

var arrow3 = document.querySelector('.icon-mobile5')
arrow3.addEventListener('click', function() {
    document.querySelector('.bg-mobile4').classList.remove('active3')
})

// sub menu sự kiện công ty

var arrow4 = document.querySelector('.icon-mobile2')
arrow4.addEventListener('click', function() {
    document.querySelector('.bg-mobile5').classList.toggle('active4')
})

var arrow4 = document.querySelector('.icon-mobile6')
arrow4.addEventListener('click', function() {
    document.querySelector('.bg-mobile5').classList.remove('active4')
})


// carousel page home
$('.carousel_1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div><i class='fas fa-chevron-left'></i></div>","<div><i class='fas fa-chevron-right'></i></div>"],

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



// trang trí nổi bật
var allSelect = document.querySelector.bind(document);
var all = document.querySelectorAll.bind(document);

var button = all('.content-decor2');
var contents = all('.content-decor');

button.forEach((tab, index) => {
    var content = contents[index];

    tab.onclick = function () {

        allSelect('.content-decor2.display-decor').classList.remove('display-decor');
        allSelect('.content-decor.display-decor').classList.remove('display-decor');

        this.classList.add('display-decor');
        content.classList.add('display-decor');

    }
}); 



// comment customer
$('.carousel_2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText:["<div class='arrow-color1'><i class='fas fa-chevron-left'></i></div>","<div class='arrow-color2'><i class='fas fa-chevron-right'></i></div>"],

    autoplay:true,
    // autoplayTimeout:5000,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
})

// youtube trang home
// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;

}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}


// back to top

const buttonBackToTop = document.querySelector('.btn-back-to-top');

if (buttonBackToTop)
    window.onscroll = function () { scrollFunction() };

function scrollFunction() {

    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        buttonBackToTop.classList.add('show-btn')
    } else {
        buttonBackToTop.classList.remove('show-btn');
    }
}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
