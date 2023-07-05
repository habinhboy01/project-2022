// // <!-- ==== START SCRIPT ===== -->
// // <!-- ==== START SCRIPT ===== -->
// // <!-- ==== START SCRIPT ===== -->
// // <!-- ==== START SCRIPT ===== -->
// // <!-- backtotop -->

// $(document).ready(function () {
//     // Open Menu Side
//     $('.hamburger-icon').on('click', function (e) {
//         e.preventDefault();
//         e.stopPropagation();

//         $('.header-side').addClass('open-menu');
//         $('.bg-opacity-dark').addClass('visible');
//     })

//     $(document).on('click', (e) => {
//         e.stopPropagation();

//         if (!$(e.target).closest('.header-side').length && !$(e.target).closest('.lf-header-menu__mb-nav li a').length) {
//             $('.header-side').removeClass('open-menu');
//             $('.bg-opacity-dark').removeClass('visible');
//         }

//     })

//     $('.header-side__close-box').on('click', (e) => {
//         e.preventDefault();
//         e.stopPropagation();

//         $('.header-side').removeClass('open-menu');
//         $('.bg-opacity-dark').removeClass('visible');
//     });
//     // ADD Button arrow to menu item
//     $('.menu-item').each((index, element) => {
//         if ($(element).find('.sub-menu').length) {
//             $(element).find(' > a').append('<button class="lf-menu-drop" type="button"></button>')
//         }
//     })
//     // DROP SUB MENU
//     $('.lf-menu-drop').on('click', function (e) {
//         e.preventDefault();
//         e.stopPropagation();
//         $(this).closest('.menu-item').toggleClass('drop-sub-menu')
//         $(this).closest('.menu-item').find('> .sub-menu').slideToggle();
//     })

//     // Close Menu Sidebar
//     $('.header-side__close-box').on('click', (e) => {
//         e.preventDefault();
//         e.stopPropagation();

//         $('.header-side').removeClass('open-menu');
//         $('.bg-opacity-dark').removeClass('visible');
//     });

//     // <!-- Open menu target onclick -->

//     $('.lf-header-menu__mb-nav li a').on('click', function (event) {
//         event.preventDefault();

//         var target = $(this).attr('href')

//         if (target.length) {
//             $('.hamburger-icon').trigger("click");

//             $('.menu-item-lv-1').removeClass('drop-sub-menu');
//             $('.menu-item-lv-1').removeClass('d-block');
//             $(target).addClass('drop-sub-menu')
//             $(target).addClass('d-block')

//             if ($(target).find('> .sub-menu').css('display') == 'none') {
//                 $(target).find('> .sub-menu').slideToggle()
//             }
//         }
//     })


//     // Hanle menu item link to product
//     // Hanle menu item link to product

//     function scrollToProduct(url) {

//         const queryString = url ? url : window.location.search;
//         const urlParams = new URLSearchParams(queryString);
//         const sliderName = urlParams.get('sliderName')
//         const product = urlParams.get('product')
//         // console.log(urlParams, window.location.search);

//         if ($('#' + sliderName).length) {

//             $('html, body').scrollTop($('#' + sliderName).offset().top - 120)

//             if ($('#' + sliderName).find('.owl-dots button:nth-child(' + product + ')').length) {
//                 $('#' + sliderName).find('.owl-dots button:nth-child(' + product + ')').trigger('click')
//             }
//         }

//     }

//     // run when document ready
//     scrollToProduct()

//     const listItemMenu = $('.menu-item a')

//     listItemMenu.each((index, item) => {
//         let dataSlider = $(item).data('slider');
//         let dataProduct = $(item).data('product');
//         let dataId = $(item).data('id');
//         let itemHref = $(item).attr('href')

//         // Add param to href
//         if (dataSlider && dataProduct) {
//             $(item).attr('href', itemHref + '?sliderName=' + dataSlider + '&product=' + dataProduct)
//         }

//         // Add id to href
//         if (dataId) {
//             $(item).attr('href', itemHref + '#' + dataId)
//         }
//     })

//     // Current page menu item onclick
//     $('.current-page a').on('click', function (e) {
//         e.stopPropagation();
        
//         const url = $(this).attr('href')
//         const param = {
//             sliderName: $(this).data('slider'),
//             product: $(this).data('product')
//         }
        
        
//         if ($('#' + param.sliderName).length && $('#' + param.sliderName).find('.owl-dots button:nth-child(' + param.product + ')').length) {
//             e.preventDefault();
//             const newurl = window.location.protocol + "//" + window.location.host + window.location.pathname + '?sliderName=' + param.sliderName + '&product=' + param.product;
//             const urlParams = '?sliderName=' + param.sliderName + '&product=' + param.product;
//             window.history.replaceState('', '', newurl);
            
//             scrollToProduct(urlParams)
//         } else {
//             window.history.replaceState('', '', window.location.protocol + "//" + window.location.host + window.location.pathname);
//         }
        
//         $('.header-side__close-box').trigger('click')
//     })
// })


// // <!-- ==== END SCRIPT ===== -->
// // <!-- ==== END SCRIPT ===== -->
// // <!-- ==== END SCRIPT ===== -->
// // <!-- ==== END SCRIPT ===== -->