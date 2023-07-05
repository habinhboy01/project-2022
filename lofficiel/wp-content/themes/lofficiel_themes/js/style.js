// menu mobile

var menuBar = document.querySelector('.icon-bar')
menuBar.addEventListener('click', function() {
	document.querySelector('.model-menu').classList.toggle('active')
})

var menuBar2 = document.querySelector('.icon-bar2')
menuBar2.addEventListener('click', function() {
	document.querySelector('.model-menu').classList.toggle('active')
})

// close model menu
var closeMenu = document.querySelector(".close-model");
closeMenu.addEventListener('click', function() {
	document.querySelector('.model-menu').classList.remove('active')
})




// menu pc
// menu thứ 1

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.header').addClass('sticky');
        }
        else {
            $('.header').removeClass('sticky');
        }
    })
})

// menu thứ 2

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.header2').addClass('sticky2');
        }
        else {
            $('.header2').removeClass('sticky2');
        }
    })
})



var add = document.querySelectorAll('div.content-intro > ul.post-categories > li > a');

add.forEach(function (element) {
	element.id = 'title';
})

var add2 = document.querySelectorAll('div.bg-single > ul.post-categories > li');

add2.forEach(function (element) {
    element.id = 'title2';
})