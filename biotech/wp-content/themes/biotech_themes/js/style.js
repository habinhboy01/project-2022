var Logo = document.querySelector('.logo');
var img = document.querySelector('.img_logo');
var imgSrc =  img.getAttribute('data-src');

// menu pc
scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
  console
}

document.getElementById("intro").addEventListener('click', () => {
  scrollTo(document.getElementById("1"));
});

document.getElementById("effective").addEventListener('click', () => {
  scrollTo(document.getElementById("2"));
});

document.getElementById("license").addEventListener('click', () => {
  scrollTo(document.getElementById("3"));
});

document.getElementById("contact").addEventListener('click', () => {
  scrollTo(document.getElementById("4"));
});


// menu mobile
scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
  console
}

document.getElementById("intro1").addEventListener('click', () => {
  scrollTo(document.getElementById("1"));
});

document.getElementById("effective1").addEventListener('click', () => {
  scrollTo(document.getElementById("2"));
});

document.getElementById("license1").addEventListener('click', () => {
  scrollTo(document.getElementById("3"));
});

document.getElementById("contact1").addEventListener('click', () => {
  scrollTo(document.getElementById("4"));
});


// menu footer
scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
  console
}

document.getElementById("intro2").addEventListener('click', () => {
  scrollTo(document.getElementById("1"));
});

document.getElementById("effective2").addEventListener('click', () => {
  scrollTo(document.getElementById("2"));
});

document.getElementById("license2").addEventListener('click', () => {
  scrollTo(document.getElementById("3"));
});

document.getElementById("contact2").addEventListener('click', () => {
  scrollTo(document.getElementById("4"));
});

// button bar menu mobile
function myFunction(x) {
  x.classList.toggle("change");
}

$('.all_bar').on('click',function(){
	$('.sub_menu_mobile').slideToggle();
});


scrollTo = (element) => {
  window.scroll({
    behavior: 'smooth',
    left: 0,
    top: element.offsetTop
  });
  console
}

document.getElementById("button-variations").addEventListener('click', () => {
  scrollTo(document.getElementById("4"));
});



/*Woo qty*/
jQuery( function( $ ) {

    if ( ! String.prototype.getDecimals ) {
        String.prototype.getDecimals = function() {
            var num = this,
                match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
            if ( ! match ) {
                return 0;
            }
            return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
        }
    }

    function wcqi_refresh_quantity_increments(){
        $( 'div.quantity:not(.buttons_added), td.quantity:not(.buttons_added)' ).addClass( 'buttons_added' ).append( '<input type="button" value="+" class="plus" />' ).prepend( '<input type="button" value="-" class="minus" />' );
    }

    $( document ).on( 'updated_wc_div', function() {
        wcqi_refresh_quantity_increments();
    } );

    $( document ).on( 'click', '.plus, .minus', function() {
        // Get values
        var $qty      = $( this ).closest( '.quantity' ).find( '.qty'),
            currentVal = parseFloat( $qty.val() ),
            max          = parseFloat( $qty.attr( 'max' ) ),
            min          = parseFloat( $qty.attr( 'min' ) ),
            step      = $qty.attr( 'step' );

        // Format values
        if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
        if ( max === '' || max === 'NaN' ) max = '';
        if ( min === '' || min === 'NaN' ) min = 0;
        if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

        // Change the value
        if ( $( this ).is( '.plus' ) ) {
            if ( max && ( currentVal >= max ) ) {
                $qty.val( max );
            } else {
                $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        } else {
            if ( min && ( currentVal <= min ) ) {
                $qty.val( min );
            } else if ( currentVal > 0 ) {
                $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
            }
        }

        // Trigger change event
        $qty.trigger( 'change' );
    });
    wcqi_refresh_quantity_increments();
});