// menu pc
$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.box_menu').addClass('sticky');
        }
        else {
            $('.box_menu').removeClass('sticky');
        }
    })
})


// menu mobile

var navOpen = document.getElementById('openNav');

navOpen.onclick = function () {
  document.getElementById("mySidenav").style.width = "300px";

  document.getElementById("next_sub").style.display = "block";
  document.getElementById("next_sub2").style.display = "block";
  document.getElementById("next_sub3").style.display = "block";
  document.getElementById("next_sub4").style.display = "block";

}


// sub menu mobile 1

var nextMenu = document.querySelector('#next_sub')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile1').classList.toggle('active1');
})

var nextMenu = document.querySelector('#previous_sub')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile1').classList.remove('active1');

    document.getElementById("mySidenav").style.width = "300px";

	  document.getElementById("next_sub").style.display = "block";
	  document.getElementById("next_sub2").style.display = "block";
	  document.getElementById("next_sub3").style.display = "block";
	  document.getElementById("next_sub4").style.display = "block";

})


// sub menu mobile 2

var nextMenu = document.querySelector('#next_sub2')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile2').classList.toggle('active2');
})

var nextMenu = document.querySelector('#previous_sub2')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile2').classList.remove('active2');

      document.getElementById("next_sub").style.display = "block";
	  document.getElementById("next_sub2").style.display = "block";
	  document.getElementById("next_sub3").style.display = "block";
	  document.getElementById("next_sub4").style.display = "block";

    document.getElementById("mySidenav").style.width = "300px";

})


// sub menu mobile 3

var nextMenu = document.querySelector('#next_sub3')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile3').classList.toggle('active3');

})

var nextMenu = document.querySelector('#previous_sub3')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile3').classList.remove('active3');

      document.getElementById("next_sub").style.display = "block";
	  document.getElementById("next_sub2").style.display = "block";
	  document.getElementById("next_sub3").style.display = "block";
	  document.getElementById("next_sub4").style.display = "block";

    document.getElementById("mySidenav").style.width = "300px";

})

// sub menu mobile 4

var nextMenu = document.querySelector('#next_sub4')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile4').classList.toggle('active4');

})

var nextMenu = document.querySelector('#previous_sub4')
nextMenu.addEventListener('click', function() {
    document.querySelector('.sub_mobile4').classList.remove('active4');

      document.getElementById("next_sub").style.display = "block";
	  document.getElementById("next_sub2").style.display = "block";
	  document.getElementById("next_sub3").style.display = "block";
	  document.getElementById("next_sub4").style.display = "block";

    document.getElementById("mySidenav").style.width = "300px";

})

// click vào màn hình đóng menu
$(document).mouseup(function(e) 
{
    var container = $(".main");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) 
    {
        document.getElementById("mySidenav").style.width = "0";
		document.getElementById("main").style.marginLeft= "0";

		document.querySelector('.sub_mobile1').classList.remove('active1');

		document.querySelector('.sub_mobile2').classList.remove('active2');

		document.querySelector('.sub_mobile3').classList.remove('active3');

		document.querySelector('.sub_mobile4').classList.remove('active4');

		document.getElementById("next_sub").style.display = "none";
		document.getElementById("next_sub2").style.display = "none";
		document.getElementById("next_sub3").style.display = "none";
		document.getElementById("next_sub4").style.display = "none";

		document.body.style.backgroundColor = "white";
    }
});


// fixed top menu mobile

$(document).ready(function() {
    $(window).scroll(function(event) {
        var pos_body = $('html,body').scrollTop();
        if (pos_body > 0) {
            $('.box_menuMobile').addClass('sticky2');
        }
        else {
            $('.box_menuMobile').removeClass('sticky2');
        }
    })
})