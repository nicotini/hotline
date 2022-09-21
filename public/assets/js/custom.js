(function ($) {
    "use strict";
    // preloder
    $(window).on('load', function () {
        $('.preloader').fadeOut(1000);
    })


    $(document).ready(function () {
        // lightcase 
        $('a[data-rel^=lightcase]').lightcase();

        //Header
        var fixed_top = $("header");
        $(window).on('scroll', function () {
            if ($(this).scrollTop() > 200) {
                fixed_top.addClass("header_bg animated fadeInDown");
            } else {
                fixed_top.removeClass("header_bg animated fadeInDown");
            }
        });
        
        //Toggle Menu
        // $('.bar').on('click', () => {
        //     $('.header-area ').toggleClass('show');
        // });
        // $('.menu ul li a').on('click', () => {
        //     $('.navbar-collapse').removeClass('show');
        //     $('.navbar-toggler').addClass('collapsed');
        // });

        $('.menu ul li a').on('click', function(e) {
            var element = $(this).parent('li');
            if (element.hasClass('open')) {
                element.removeClass('open');
                element.find('li').removeClass('open');
                element.find('ul').slideUp(1000,"swing");
            }
            else {
                element.addClass('open');
                element.children('ul').slideDown(1000,"swing");
                element.siblings('li').children('ul').slideUp(1000,"swing");
                element.siblings('li').removeClass('open');
                element.siblings('li').find('li').removeClass('open');
                element.siblings('li').find('ul').slideUp(1000,"swing");
            }
        });

        // scrollReveal Init
        if (screen.width > 576) {
            $(document).ready(function () {
                new WOW().init();
            });
        }
        
        // Banner slider
        var swiper = new Swiper('.banner__slider', {
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".banner__pagination",
                clickable: true,
            },
        });


        // Poster slider
        var swiper = new Swiper('.poster__slider', {
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".poster__next",
                prevEl: ".poster__prev",
            },
        });


        // Poster slider
        var swiper = new Swiper('.event__slider', {
            slidesPerView: 1,
            spaceBetween: 0,
            loop: true,
            // autoplay: {
            //     delay: 10000,
            //     disableOnInteraction: false,
            // },
            navigation: {
                nextEl: ".event__next",
                prevEl: ".event__prev",
            },
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30,
                },
            },
        });

        // sermon slider
        var swiper = new Swiper('.sermon__slider', {
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: ".sermon__next",
                prevEl: ".sermon__prev",
            },
        });

        // About slider
        var swiper = new Swiper('.about__slider', {
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".about__pagination",
                clickable: true,
            },
        });


        // Poster slider
        var swiper = new Swiper('.partner__slider', {
            slidesPerView: 2,
            spaceBetween: 30,
            loop: true,
            // autoplay: {
            //     delay: 10000,
            //     disableOnInteraction: false,
            // },
            breakpoints: {
                768: {
                    slidesPerView: 4,
                },
            },
        });

        
        // counter up 
        $('.counter__number').counterUp({
            delay: 10,
            time: 2000
        });

        

        // Testimonial slider
        var swiper = new Swiper('.testimonial__slider', {
            loop: true,
            autoplay: {
                delay: 10000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".testimonial__pagination",
                clickable: true,
            },
        });

        //Isotope
        jQuery(window).on('load',function() { 
            var $grid = $('.grid').isotope({
                itemSelector: '.col-12',
                masonry: {
                    columnWidth: 0
                }
            })

            // filter items on button click
            $('.gallery__filter ul').on('click', 'li', function () {
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({
                    filter: filterValue
                });
            });

            $('.gallery__filter ul').each(function (i, buttonGroup) {
                var $buttonGroup = $(buttonGroup);
                $buttonGroup.on('click', 'li', function () {
                    $buttonGroup.find('.active').removeClass('active');
                    $(this).addClass('active');
                });
            });
        });

        //Countdown js initialization
        document.addEventListener('readystatechange', event => {
            if (event.target.readyState === "complete") {
                var clockdiv = document.getElementsByClassName("count-down");
                var countDownDate = new Array();
                for (var i = 0; i < clockdiv.length; i++) {
                    countDownDate[i] = new Array();
                    countDownDate[i]['el'] = clockdiv[i];
                    countDownDate[i]['time'] = new Date(clockdiv[i].getAttribute('data-date')).getTime();
                    countDownDate[i]['days'] = 0;
                    countDownDate[i]['hours'] = 0;
                    countDownDate[i]['seconds'] = 0;
                    countDownDate[i]['minutes'] = 0;
                }
                var countdownfunction = setInterval(function () {
                    for (var i = 0; i < countDownDate.length; i++) {
                        var now = new Date().getTime();
                        var distance = countDownDate[i]['time'] - now;
                        countDownDate[i]['days'] = Math.floor(distance / (1000 * 60 * 60 * 24));
                        countDownDate[i]['hours'] = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                        countDownDate[i]['minutes'] = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                        countDownDate[i]['seconds'] = Math.floor((distance % (1000 * 60)) / 1000);
                        if (distance < 0) {
                            countDownDate[i]['el'].querySelector('.days').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.hours').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.minutes').innerHTML = 0;
                            countDownDate[i]['el'].querySelector('.seconds').innerHTML = 0;
                        } else {
                            countDownDate[i]['el'].querySelector('.days').innerHTML = countDownDate[i]['days'];
                            countDownDate[i]['el'].querySelector('.hours').innerHTML = countDownDate[i]['hours'];
                            countDownDate[i]['el'].querySelector('.minutes').innerHTML = countDownDate[i]['minutes'];
                            countDownDate[i]['el'].querySelector('.seconds').innerHTML = countDownDate[i]['seconds'];
                        }
                    }
                }, 1000);
            }
        });

        

        // scroll up start here
        $(function(){
            $(window).scroll(function(){
                if ($(this).scrollTop() > 300) {
                    $('.scrollToTop').css({'bottom':'2%', 'opacity':'1','transition':'all .5s ease'});
                } else {
                    $('.scrollToTop').css({'bottom':'-30%', 'opacity':'0','transition':'all .5s ease'})
                }
            });
            //Click event to scroll to top
            $('.scrollToTop').on('click', function(){
                $('html, body').animate({scrollTop : 0},500);
                return false;
            });
        });

        // ajax contact form
        $(function() {
            var form = $('#contact-form');
            var formMessages = $('.form-message');
            $(form).submit(function(e) {
                e.preventDefault();
                var formData = $(form).serialize();
                $.ajax({
                    type: 'POST',
                    url: $(form).attr('action'),
                    data: formData
                })
                .done(function(response) {
                    $(formMessages).removeClass('error');
                    $(formMessages).addClass('success');
                    $(formMessages).text(response);
                    $('#contact-form input, #contact-form textarea').val('');
                })
                .fail(function(data) {
                    $(formMessages).removeClass('success');
                    $(formMessages).addClass('error');
                    if (data.responseText !== '') {
                        $(formMessages).text(data.responseText);
                    } else {
                        $(formMessages).text('Oops! An error occured and your message could not be sent.');
                    }
                });
            });
        });
    });
})(jQuery);