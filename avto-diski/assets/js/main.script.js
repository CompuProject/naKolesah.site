!function () {
    function e(t, n, r) {
        function o(a, i) {
            if (!n[a]) {
                if (!t[a]) {
                    var u = "function" == typeof require && require;
                    if (!i && u)return u(a, !0);
                    if (f)return f(a, !0);
                    var c = new Error("Cannot find module '" + a + "'");
                    throw c.code = "MODULE_NOT_FOUND", c
                }
                var s = n[a] = {exports: {}};
                t[a][0].call(s.exports, function (e) {
                    return o(t[a][1][e] || e)
                }, s, s.exports, e, t, n, r)
            }
            return n[a].exports
        }

        for (var f = "function" == typeof require && require, a = 0; a < r.length; a++)o(r[a]);
        return o
    }

    return e
}()({
    1: [function (e, t, n) {
        "use strict";
        $(document).ready(function () {
            $("a.scrollto").click(function () {
                var e = $(this).attr("href"), t = $(e).offset().top - 150;
                return jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: t}, 800), !1
            }), $(".range-example-start").asRange({
                step: 1e3,
                range: !1,
                min: 1e3,
                max: 8e4,
                value: 39e3
            }), function () {
                var e = void 0;
                for (e = 1; e <= 4; e++)!function () {
                    var t = $("#step" + e), n = e - 1, r = $("#step" + n), o = t.find(".js-prev-step"), f = e + 1, a = $("#step" + f), i = t.find(".js-next-step");
                    o && o.on("click", function (e) {
                        console.log("кря"), e.preventDefault(), t.fadeOut("fast"), r.fadeIn("slow")
                    }), i && i.on("click", function (e) {
                        e.preventDefault(), t.fadeOut("fast"), a.fadeIn("slow")
                    })
                }()
            }()
        })
    }, {}]
}, {}, [1]);
$(document).ready(function () {
    var site_url = location.href.replace('https://nakolesah.site/','').replace('/','');
    if (site_url == 'avto-diski') {
        $('.header__top-phone-number span').html('8 (800) 550-63-94');
        $('.footer__phone--number p').html('8 (800) 550-63-94');
    } else if (site_url == 'diski-avto') {
        $('.header__top-phone-number .text').html('8 (800) 222-09-86 ');
        $('.footer__phone--number p').html('8 (800) 222-09-86 ');
    }
    $('.modalInput').mask('+7 (999) 999-99-99');
    function changeOnlineSelectionSteps1() {
        $('.js-next-step').click(function () {
            var thisNumber = $(this).closest('.step').attr('id').toString().slice(-1);
            console.log(thisNumber);
            if (thisNumber < 8) {
                var nextNumber = +thisNumber + +1;
                console.log(nextNumber);
                $('#step' + thisNumber).hide();
                $('#step' + nextNumber).show();
            }
        });
        $('.js-prev-step').click(function () {
            var thisNumber = $(this).closest('.step').attr('id').toString().slice(-1);
            if (thisNumber > 5) {
                var prevNumber = thisNumber - 1;
                $('#step' + thisNumber).hide();
                $('#step' + prevNumber).show();
            }
        });
    }

    changeOnlineSelectionSteps1();

    function getModal() {
        $('.btn_modal').click(function () {
            var modalId = $(this).attr('id');
            if ($('.' + modalId).hasClass('fakeRoistat')) {
                $('.fakeRoistat').addClass('check');
            }
            $('.modalOverlay').show();
            $('.' + modalId).show();
            $('body').css('overflow', 'hidden');
            $('.' + modalId + ' #' + modalId + '_phone').mask('+7 (999) 999-99-99');
            $('.' + modalId + ' .modalBtnBlock button').click(function () {
                var phone = $('.' + modalId + ' #' + modalId + '_phone').val();
                var brand = $('.' + modalId + ' #' + modalId + '_brand').val();
                var diameter = $('.' + modalId + ' #' + modalId + '_diameter').val();
                var price = $('.' + modalId + ' #' + modalId + '_price').val();
                $('.errMsg').hide();
                $('#' + modalId + '_phone').css('border-color','#00000040');
                if (phone == '') {
                    $('#' + modalId + '_phone').after('<div class="errMsg">Не заполнено поле</div>');
                    $('#' + modalId + '_phone').css('border-color','red');
                } else {
                    $.ajax({
                        url: '/avto-diski/mail.php',
                        type: 'GET',
                        data: 'modalId='+modalId+'&phone='+phone+'&brand='+brand+'&diameter='+diameter+'&price='+price+'&urlName='+location.href.replace('http://', ''),
                        dataType: 'html',
                        success: function (rezult) {
                            invoice();
                            $('.testBlock').html(rezult);
                            $('body').css('overflow', 'auto');
                            $('.' + modalId).hide();
                            $('.modalOverlay').hide();
                        }
                    })
                }
            });
            $('.' + modalId + ' .close').click(function () {
                $('body').css('overflow', 'auto');
                $('.' + modalId).hide();
                $('.modalOverlay').hide();
            });
            $('.modalOverlay').click(function () {
                $('body').css('overflow', 'auto');
                $('.' + modalId).hide();
                $('.modalOverlay').hide();
            });
        });
    }
    getModal();
    $('#step4 input').mask('+7 (999) 999-99-99');

    $('.modal2 .big-red-button, #online-selection_btn').click(function () {
        var parentForm = $(this).closest('.openWindow');
        var phone = parentForm.find('input[name=phone]').val();
        var brand = parentForm.find('select[name=brand]').val();
        var diameter = parentForm.find('select[name=diameter]').val();
        var price = parentForm.find('input[name=price]').val();
        var modalId = $(this).attr('id');
        if (phone == '') {
            parentForm.find('input[type=tel]').css('border-color','red');
        } else {
            console.log('modalId='+modalId+'&phone='+phone+'&brand='+brand+'&diameter='+diameter+'&price='+price+'&urlName='+location.href.replace('http://', ''));
            $.ajax({
                url: '/avto-diski/mail.php',
                type: 'GET',
                data: 'modalId='+modalId+'&phone='+phone+'&brand='+brand+'&diameter='+diameter+'&price='+price+'&urlName='+location.href.replace('http://', ''),
                dataType: 'html',
                success: function (rezult) {
                    if (modalId == 'modal6') {
                        alert('Спасибо! Ваша заявка отправлена. В ближайшее время мы с Вами свяжемся!');
                    }
                    $('.modal6').hide();
                    $('.modalOverlay').hide();
                    invoice();
                    var COMMENT = parentForm.attr('comment');
                    $.ajax({
                        url: 'https://wilgood.ru/handler_for_partners/',
                        type: 'GET',
                        data: 'type_partner=generatorprodaj&comment='+COMMENT+'&type_response=html&phone='+phone+'&unique_code='+generateHash()+'&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f',
                    }).done(json => {
                        if (json) {
                            console.log(json);
                        }
                    });
                }
            })
        }

    });

    function generateHash() {
        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    }

    function getWilgood () {
        $('.modalBtnBlock button').click(function (event) {
            event.preventDefault();
            const form = $(this).closest('.modalWindow'),
                COMMENT = form.attr('comment');
                var phone = form.find('input[name=phone]').val();
                if (phone !== '') {
                    $.ajax({
                        url: 'https://wilgood.ru/handler_for_partners/',
                        type: 'GET',
                        data: 'type_partner=generatorprodaj&comment='+COMMENT+'&type_response=html&phone='+phone+'&unique_code='+generateHash()+'&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f',
                    }).done(json => {
                        if (json) {
                            console.log(json);
                        }
                    });
                }
        });
    }
    getWilgood ();

        $('#reviews_carousel .item').click(function () {
            var imgSrc = $(this).find('img').attr('src');
            $('body').css('overflow', 'hidden');
            $('.modalOverlay').show();
            $('.modalOverlay').css('opacity','.7');
            $('.modalOverlay').after(
                '<div class="modalImg">'+
                '<img src="'+imgSrc+'">'+
                '</div>'
            );
            var topHeight = (window.innerHeight - $('.modalImg').height())/2;
            $('.modalImg').css('top',topHeight);
        });
        $('.modalOverlay').click(function () {
            $('.modalOverlay').hide();
            $('body').css('overflow', 'auto');
            $('.modalImg').remove();
        });

    var fakeRoistatWidth = ($(window).width() - $('.fakeRoistat').width()) / 2;
    $('.fakeRoistat').css('left', fakeRoistatWidth);

    setTimeout(function () {
        if (!$('.fakeRoistat').hasClass('check')) {
            $('.fakeRoistat').slideDown(500);
            $('.modalOverlay').show();
        }
    }, 20000);

    $('.fakeRoistat .close').click(function () {
        $('body').css('overflow', 'auto');
        $('.fakeRoistat').hide();
        $('.modalOverlay').hide();
    });
    $('.modalOverlay').click(function () {
        $('body').css('overflow', 'auto');
        $('.fakeRoistat').hide();
        $('.modalOverlay').hide();
    });

    $(document).mouseleave(function () {
        if (!$('.fakeRoistat').hasClass('check')) {
            $('.fakeRoistat').slideDown(500);
            $('.modalOverlay').show();
            $('.fakeRoistat').addClass('check');
        }
    });
});

const invoice = () => {
    const popupWindow = $('<div class="popup-overlay js-window">' +
        '<div class="popup-window js-popup" style="display: none;">' +
        '<div class="popup-window__body">' +
        '<div class="wrapper1">' +
        '<div class="wrapper1">' +
        '<div class="check"></div>' +
        '<p class="invoice">Спасибо!</p>' +
        '<p class="invoice">Ваша заявка отправлена.</p>' +
        '<p class="invoice">В ближайшее время мы с Вами свяжемся!</p>' +
        '</div>' +
        '</div></div>' +
        '</div>' +
        '</div>' +
        '</div>');
    $('body').prepend(popupWindow);
    $('.js-popup').slideDown('slow');
    $('.js-window').click(function (event) {
        $(this).remove();
    })
};