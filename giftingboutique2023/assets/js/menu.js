// <!-- backtotop -->
const buttonBackToTop = document.querySelector('.btn-back-to-top');
const btnShare = document.querySelector('.btn-share');

window.onscroll = scrollFunction;

function scrollFunction() {

    if (document.body.scrollTop > 1500 || document.documentElement.scrollTop > 1500) {
        buttonBackToTop ? buttonBackToTop.classList.add('show-btn') : null;
    } else {
        buttonBackToTop ? buttonBackToTop.classList.remove('show-btn') : null;
    }

    if ((document.body.scrollTop > window.screen.height || document.documentElement.scrollTop > window.screen.height) && window.screen.width > 576) {
        btnShare ? btnShare.classList.add('show-btn') : null;
    }
    else if ((document.body.scrollTop > (window.screen.height / 3) || document.documentElement.scrollTop > (window.screen.height / 3)) && window.screen.width < 576) {
        btnShare ? btnShare.classList.add('show-btn') : null;
    }
    else {
        btnShare ? btnShare.classList.remove('show-btn') : null;
    }

    

}

function backToTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

// set variable heightMenuBar
var heightMenuBar = document.querySelector('.header-side:not(.hd-homepage .header-side)')
if (heightMenuBar) {
    heightMenuBar = heightMenuBar.offsetHeight
    // console.log(heightMenuBar);
    document.querySelector('html').style.setProperty('--heightMenuBar', heightMenuBar + 'px');
    document.body.style.paddingTop = heightMenuBar - 10 + 'px'; // padding top body
}

// Action button share
const shareData = {
    title: document.title,
    // text: window.location.href,
    url: window.location.href
}

// console.log(shareData);
// Share must be triggered by "user activation"
btnShare.addEventListener('click', async () => {
    if (navigator.share) {
        try {
            await navigator.share(shareData);
            alert('Shared Successfully')

        } catch (err) {
            console.log(`Error: ${err}`)
        }
    }
});

(function ($) {
    $(document).ready(function () {
        // end backtotop

        // Open Menu Side
        $('.hamburger-icon').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            $('.header-side').addClass('open-menu');
            $('.bg-opacity-dark').addClass('visible');
        })

        // $(document).on('click', (e) => {
        //     e.stopPropagation();

        //     if (!$(e.target).closest('.header-side').length && !$(e.target).closest('.lf-header-menu__mb-nav li a').length) {
        //         $('.header-side').removeClass('open-menu');
        //         $('.bg-opacity-dark').removeClass('visible');
        //     }

        // })

        $('.header-side__close-box').on('click', (e) => {
            e.preventDefault();
            e.stopPropagation();

            $('.header-side').removeClass('open-menu');
            $('.bg-opacity-dark').removeClass('visible');
        });
        // ADD Button arrow to menu item
        $('.menu-item').each((index, element) => {
            if ($(element).find('.sub-menu').length) {
                $(element).find(' > a').append('<button class="lf-menu-drop" type="button"></button>')
            }
        })
        // DROP SUB MENU
        $('.lf-menu-drop').on('click', function (e) {
            e.preventDefault();
            e.stopPropagation();

            $(this).closest('.menu-item').toggleClass('drop-sub-menu')
            $(this).closest('.menu-item').find('> .sub-menu').slideToggle();
        })

        // Close Menu Sidebar
        $('.header-side__close-box').on('click', (e) => {
            e.preventDefault();
            e.stopPropagation();

            $('.header-side').removeClass('open-menu');
            $('.bg-opacity-dark').removeClass('visible');
        });

        // <!-- Open menu target onclick -->
        // $('.drop-sub-menu > .sub-menu').css('display', 'block')

        $(window).resize(function () {
            const heightMenuBar = $('.header-side__wrap').outerHeight();
            $('body').get(0).style.setProperty('--heightMenuBar', heightMenuBar + 'px');

            if ($(window).width() < 1024) {

                $('.header-container .menu-item-lv-1 > a').on('click', function (event) {
                    event.preventDefault();

                    if ($(this).parent().hasClass('drop-sub-menu')) {
                        $('.menu-item-lv-1').removeClass('drop-sub-menu');
                    } else {
                        $('.menu-item-lv-1').removeClass('drop-sub-menu');
                        $(this).parent().addClass('drop-sub-menu');
                    }
                })
            }
        })

        if ($(window).width() < 1024) {

            $('.header-container .menu-item-lv-1 > a').on('click', function (event) {
                event.preventDefault();

                if ($(this).parent().hasClass('drop-sub-menu')) {
                    $('.menu-item-lv-1').removeClass('drop-sub-menu');
                } else {
                    $('.menu-item-lv-1').removeClass('drop-sub-menu');
                    $(this).parent().addClass('drop-sub-menu');
                }
            })
        }


        // Hanle menu item link to product
        // Hanle menu item link to product

        function scrollToProduct(url) {

            const queryString = url ? url : window.location.search;
            const urlParams = new URLSearchParams(queryString);
            const sliderName = urlParams.get('sliderName')
            const product = urlParams.get('product')
            // console.log(urlParams, window.location.search);

            if ($('#' + sliderName).length) {

                $('html, body').scrollTop($('#' + sliderName).offset().top - 120)

                if ($('#' + sliderName).find('.owl-dots button:nth-child(' + product + ')').length) {
                    $('#' + sliderName).find('.owl-dots button:nth-child(' + product + ')').trigger('click')
                }
            }

        }

        // run when document ready
        scrollToProduct()

        const listItemMenu = $('.menu-item a')

        listItemMenu.each((index, item) => {
            let dataSlider = $(item).data('slider');
            let dataProduct = $(item).data('product');
            let dataId = $(item).data('id');
            let itemHref = $(item).attr('href')

            // Add param to href
            if (dataSlider && dataProduct) {
                $(item).attr('href', itemHref + '?sliderName=' + dataSlider + '&product=' + dataProduct)
            }

            // Add id to href
            if (dataId) {
                $(item).attr('href', itemHref + '#' + dataId)
            }
        })

        // Current page menu item onclick
        $('.current-page a').on('click', function (e) {
            e.stopPropagation();

            const url = $(this).attr('href')
            const param = {
                sliderName: $(this).data('slider'),
                product: $(this).data('product')
            }


            if ($('#' + param.sliderName).length && $('#' + param.sliderName).find('.owl-dots button:nth-child(' + param.product + ')').length) {
                e.preventDefault();
                const newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?sliderName=' + param.sliderName + '&product=' + param.product;
                const urlParams = '?sliderName=' + param.sliderName + '&product=' + param.product;
                window.history.replaceState('', '', newurl);

                scrollToProduct(urlParams)
            } else {
                window.history.replaceState('', '', window.location.protocol + "//" + window.location.host + window.location.pathname);
            }

            $('.header-container .menu-item-lv-1').removeClass('drop-sub-menu')
        })
    })

})(jQuery)