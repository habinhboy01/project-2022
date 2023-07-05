(function ($) {
    // Document ready
    $(document).ready(function () {
        // $(sliderContainer).slick({
        //   dots: true,
        //   arrows: true,
        //   infinite: true,
        //   slidesToShow: 1,
        //   slidesToScroll: 1,
        //   // autoplay: true,
        //   autoplaySpeed: 5000,
        // })

        //   $(sliderContainer).slick({
        //     dots: true,
        //     arrows: true,
        //     infinite: true,
        //     slidesToShow: 1,
        //     slidesToScroll: 1,
        //     // autoplay: true,
        //     autoplaySpeed: 5000,
        //     appendDots: $(appendDots),
        //     customPaging: function (slider, i) {

        //         let dot_logo = $(slider.$slides[i]).find(sliderItem).attr("data-dot-logo");
        //         let number = $(slider.$slides[i]).find(sliderItem).attr("data-number");
        //         let views = `<div class="dot-logo" data-slide-name="${sliderContainer}"><span class="dot-number" data-number="${number}">${number}</span><img class="dot-img" src="${dot_logo}" alt=""></div>`;

        //         // return views;
        //         return `${number ? views : ''}`;
        //     }
        // })

        //Ex Slider Header
        $('.customization-program-slider').slick({
            dots: true,
            arrows: true,
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            // autoplay: true,
            autoplaySpeed: 5000,
        })

        function navSliderByImage(sliderContainer, appendDots, sliderItem) {
            $(sliderContainer).slick({
                dots: true,
                arrows: true,
                infinite: true,
                slidesToShow: 1,
                slidesToScroll: 1,
                // autoplay: true,
                autoplaySpeed: 5000,
                appendDots: $(appendDots),
                customPaging: function (slider, i) {

                    let image = $(slider.$slides[i]).find('.collect-slider__product-image img').attr("src");
                    let title = $(slider.$slides[i]).find('.collect-slider__product-title').text();
                    // let views = `<div class="dot-logo" data-slide-name="${sliderContainer}"><span class="dot-number" data-number="${number}">${number}</span><img class="dot-img" src="${dot_logo}" alt=""></div>`;

                    let views = `<div class="collection-dots__item">
                                    <div class="collection-dots__product collection-dots__product--${i + 1} mb-3">
                                        <img class="w-100" src="${image}">
                                    </div>
                                    <h4 class="font-style-05 text-uppercase cl-white">${title}</h4>
                                </div>`;

                    $(appendDots).get(0).style.setProperty("--lengthItem", $(slider.$slides).length);
                    return views;
                }
            })
        }



        function activeDotCustom(itemDotCustom, containerSlide, slide) {
            $(document).on('click', itemDotCustom, function (e) {
                e.stopPropagation();


                let numberDotCustom = $(this).attr('data-number');

                let dotLogo = $(this).closest(containerSlide).find('.collection-dots .slick-dots li:nth-child(' + numberDotCustom + ')');
                // console.log(jQuery(this).closest(containerSlide).find('.collection-dots .slick-dots li:eq('+jQuery(this).index()+')'), jQuery(this).index());
                $(dotLogo).trigger('click');

            })


            $(slide).on('afterChange', function (event, slick, direction) {
                const dotActive = $(containerSlide).find('.collection-dots .slick-dots li.slick-active');

                let dotItem = $(this).closest(containerSlide).find(dotActive)
                let dotIndex = $(this).closest(containerSlide).find('.collection-dots .slick-dots li').index(dotItem)

                $(this).closest(containerSlide).find('.dots-custom li').removeClass('slick-active');
                $(this).closest(containerSlide).find('.dots-custom li').get(dotIndex).classList.add('slick-active');
            });
        }

        function customDots(slideItem, containerSlide) {
            let listSlideItem = jQuery(slideItem);
            let i = 0;
            let dotsHtml = '';
            listSlideItem.each((index, item) => {
                i++;

                let notSlideClone = jQuery(item).closest('.slick-slide');

                if (!notSlideClone.hasClass('slick-cloned')) {

                    let dataNumber = index;
                    let itemDot = '<li data-number="' + dataNumber + '"><button type="button"></button></li>';

                    if (notSlideClone.hasClass('slick-current')) itemDot = '<li data-number="' + dataNumber + '" class="slick-active"><button type="button"></button></li>';

                    dotsHtml += itemDot;
                }
            })

            jQuery(containerSlide).find(".dots-custom").html(dotsHtml);

        }

        function removeSlideItem(items, parent) {
            items.each((index, element) => {
                if (index > 0) i = 1;
                // console.log( $(parent + " .slick-slide").index($(element)) - 1);
                // console.log(index);
                $(parent).slick("slickRemove", $(parent + " .slick-slide").index($(element)) - 1);

            })
        }
        // Slider Bộ Sưu Tập Tết
        // navSliderByImage('.collect-tet-slider__list', '.collection-tet-nav')
        // activeDotCustom('.collect-tet-slider .dots-custom li', '.collect-tet-section', '.collect-tet-slider__list')

        // Slider Bộ Sưu Tập Đám Cưới
        navSliderByImage('.collect-wedding-slider__list', '.collection-wedding-nav')
        activeDotCustom('.collect-wedding-slider .dots-custom li', '.collect-wedding-section', '.collect-wedding-slider__list')

        // Slider Bộ Sưu Tập Mang Dấu ấn cá nhân
        navSliderByImage('.collect-personalized-slider__list', '.collection-personalized-nav')
        activeDotCustom('.collect-personalized-slider .dots-custom li', '.collect-personalized-section', '.collect-personalized-slider__list')

        $(window).on('load resize', function () {

            const tetItem4 = $('.collect-tet-slider__list .collect-tet-slider__item--4').closest('.slick-slide');
            const weddingItem4 = $('.collect-wedding-slider__list .collect-wedding-slider__item--4').closest('.slick-slide');
            const weddingItem5 = $('.collect-wedding-slider__list .collect-wedding-slider__item--5').closest('.slick-slide');
            const personalizedItem4 = $('.collect-personalized-slider__list .collect-personalized-slider__item--4').closest('.slick-slide');

            if ($(window).width() < 992) {
                // set position dots custom

                let heightProductTet = $('.collect-tet-slider__item .collect-tet-slider__item-left').height();
                let heightProductWedding = $('.collect-wedding-slider__item .collect-wedding-slider__item-left').height();
                let heightProductPersonalized = $('.collect-personalized-slider__item .collect-personalized-slider__item-left').height();
                $('.collect-tet-slider .dots-custom').css('top', heightProductTet - 40 + 'px');
                $('.collect-wedding-slider .dots-custom').css('top', heightProductWedding - 40 + 'px');
                $('.collect-personalized-slider .dots-custom').css('top', heightProductPersonalized - 40 + 'px');

            }

            if ($(window).width() <= 576) {

                removeSlideItem(weddingItem4, '.collect-wedding-slider__list');
                removeSlideItem(weddingItem5, '.collect-wedding-slider__list');
                removeSlideItem(personalizedItem4, '.collect-personalized-slider__list');

                // // customDots Bộ Sưu Tập Tết
                removeSlideItem(tetItem4, '.collect-tet-slider__list');
                // customDots('.collect-tet-slider__item', '.collect-tet-section');

                // Promise.resolve()
                //     .then(() => {
                //         removeSlideItem(tetItem4, '.collect-tet-slider__list');
                //         const listItemsTet = $('.collect-tet-slider__list .slick-slide:not(.slick-cloned) .collect-tet-slider__item');
                //         return listItemsTet;
                //     })
                //     .then((listSlide) => {
                //         console.log(listSlide);
                //         customDots(listSlide, '.collect-tet-section');
                //     })
            }
            else {
                let tetItem4Html = $('.collect-tet-storage .collect-tet-storage__item-4').html();
                let weddingItem4Html = $('.collect-wedding-storage .collect-wedding-storage__item-4').html();
                let weddingItem5Html = $('.collect-wedding-storage .collect-wedding-storage__item-5').html();
                let personalizedItem4Html = $('.collect-personalized-storage .collect-personalized-storage__item-4').html();

                if (!tetItem4.length) $(".collect-tet-slider__list").slick("slickAdd", tetItem4Html);
                if (!weddingItem4.length) $(".collect-wedding-slider__list").slick("slickAdd", weddingItem4Html);
                if (!weddingItem5.length) $(".collect-wedding-slider__list").slick("slickAdd", weddingItem5Html);
                if (!personalizedItem4.length) $(".collect-personalized-slider__list").slick("slickAdd", personalizedItem4Html);
            }

            // customDots Bộ Sưu Tập Tết
            customDots('.collect-tet-slider__list .collect-tet-slider__item', '.collect-tet-section');

            // customDots Bộ Sưu Tập Đám Cưới
            customDots('.collect-wedding-slider__list .collect-wedding-slider__item', '.collect-wedding-section');
            // customDots Bộ Sưu Tập Mang Dấu ấn cá nhân
            customDots('.collect-personalized-slider__list .collect-personalized-slider__item', '.collect-personalized-section');

        })

    }) // End document
})(jQuery)