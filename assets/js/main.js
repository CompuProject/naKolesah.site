!function () {
    function n(e, o, t) {
        function a(l, i) {
            if (!o[l]) {
                if (!e[l]) {
                    var c = "function" == typeof require && require;
                    if (!i && c)return c(l, !0);
                    if (r)return r(l, !0);
                    var p = new Error("Cannot find module '" + l + "'");
                    throw p.code = "MODULE_NOT_FOUND", p
                }
                var u = o[l] = {exports: {}};
                e[l][0].call(u.exports, function (n) {
                    return a(e[l][1][n] || n)
                }, u, u.exports, n, e, o, t)
            }
            return o[l].exports
        }

        for (var r = "function" == typeof require && require, l = 0; l < t.length; l++)a(t[l]);
        return a
    }

    return n
}()({
    1: [function (n, e, o) {
        "use strict";
        !function () {
            function n() {
                return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)
            }

            function e(n, e) {
                var o = n, t = "type=" + e;
                for (var a in o)t += "&" + a + "=" + o[a];
                $.ajax({url: "mail.php", type: "POST", data: t}).done(function (n) {
                    console.log(JSON.parse(n))
                }).fail(function (n) {
                    return console.log(n)
                })
            }

            var o = function () {
                var n = $('<div class="popup-overlay js-window"><div class="popup-window js-popup" style="display: none;"><div class="popup-window__body"><div class="wrapper1"><div class="wrapper1"><div class="check"></div><p class="invoice">Спасибо!</p><p class="invoice">Ваша заявка отправлена.</p><p class="invoice">В ближайшее время мы с Вами свяжемся!</p></div></div></div></div></div></div>');
                $("body").prepend(n), $(".js-popup").slideDown("slow"), $(".js-window").click(function (n) {
                    $(this).remove()
                })
            };
            $("#uid17").click(function (t) {
                t.preventDefault();
                var a = $("#callback-form"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Заказ обратного звонка&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "callback-top"), $(".area").click(), console.log(n), o(), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid40").click(function (t) {
                t.preventDefault();
                var a = $("#get-tyres"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Заказ шин&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "get-tyres"), $(".area").click(), o(), console.log(n), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid14").click(function (t) {
                t.preventDefault();
                var a = $("#left-widget-form"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Заказ шин из левого виджета&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "left-widget-get-tyres"), $(".area").click(), o(), console.log(n), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid43").click(function (t) {
                t.preventDefault();
                var a = $("#second-get-tyres-form"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Заказ шин&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "get-tyres"), $(".area").click(), o(), console.log(n), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid49").click(function (t) {
                t.preventDefault();
                var a = $("#check-variants"), r = a.find("select[name=car]"), l = a.find("input[name=phone]");
                l.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&brand=" + r.val() + "&comment=Подбор дисков по марке авто&type_response=html&phone=" + l.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({
                        phone: l.val(),
                        car: r.val()
                    }, "check-variants"), $(".area").click(), o(), console.log(n), l.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid54").click(function (t) {
                t.preventDefault();
                var a = $("#tire-fitting"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Заявка на подобор шин&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "tire-fitting"), $(".area").click(), o(), console.log(n), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid64").click(function (t) {
                t.preventDefault();
                var a = $("#store-amount"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Наличие мест на складе&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "store-amount"), $(".area").click(), o(), console.log(n), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid85").click(function (t) {
                t.preventDefault();
                var a = $("#check-variants-two"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=ПОСМОТРЕТЬ ВАРИАНТЫ ДЛЯ АВТО&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "check-variants-two"), $(".area").click(), o(), console.log(n), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            }), $("#uid88").click(function (t) {
                t.preventDefault();
                var a = $("#callback-bottom"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "POST",
                    data: "type_partner=generatorprodaj&comment=Заказ обратного звонка&type_response=html&phone=" + r.val() + "&unique_code=" + n() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (n) {
                    n && (e({phone: r.val()}, "callback-bottom"), $(".area").click(), console.log(n), o(), r.val(""))
                }).fail(function (n) {
                    return console.log(n)
                })
            })
        }()
    }, {}]
}, {}, [1]);
$(document).ready(function () {
    if ($(window).width() < 850) {
        $('#node848_meta img').click(function () {
            srcPath = $(this).attr('src');
            $('.mobileOverflow').css('display','block');
            $('.mobileScrine').css('display','block');
            if ($(window).width() < 450) {
                $('.mobileImg').css('top','45%');
            }
            $('.mobileCloseBtn').click(function () {
                if ($(this).css('display') == 'block') {
                    $('.mobileOverflow').css('display','none');
                    $('.mobileScrine').css('display','none');
                }
            });
            var data = [];
            var i = 1;
            $('#node848_meta .swiper-wrapper>.swiper-slide').each(function () {
                if ($(this).hasClass('swiper-slide-active')) {
                    data[0] = $(this).find('img').attr("src");
                } else {
                    data[i++] = $(this).find('img').attr("src");
                }
            });
            $('.mobileImg').html('<img src="'+data[0]+'">');
            var count = 0;
            $('.mobileRight').click(function () {
                if (count < data.length-1) {
                    count++;
                    $('.mobileImg').html('<img src="'+data[count]+'">');
                }
            });
            $('.mobileLeft').click(function () {
                if (count != 0) {
                    count--;
                    $('.mobileImg').html('<img src="'+data[count]+'">');
                }
            });
        });
    }
    $('input[name=phone]').mask('+7 (999) 999-99-99');

    function getModal() {
        $('.btn_modal').click(function () {
            var modalId = $(this).attr('id');
            if ($('.' + modalId).hasClass('fakeRoistat')) {
                $('.fakeRoistat').addClass('check');
            }
            $('.modalOverlay').show();
            $('.' + modalId).show();
            $('body').css('overflow', 'hidden');
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
    function sendModal() {
        $('.fakeRoistat_btn').click(function () {
            var parentForm = $(this).closest('.inputForm');
            var data = [];
            var phone = $('#modal7_phone').val();
            var modalName = parentForm.attr('modalName');
            $('.errMsg').hide();
            if ($('#modal7_phone').val() == '') {
                parentForm.find('input[name=phone]').after('<div class="errMsg">Не заполнено поле</div>');
                parentForm.find('input[name=phone]').css('border-color', 'red');
            } else {
                console.log(data);
                $.ajax({
                    url: '/hranenie-shin/mail.php',
                    type: 'POST',
                    data: 'type=' + modalName + '&phone=' + phone + '&urlName=' + location.href.replace('http://', ''),
                    // data: data,
                    // dataType: 'html',
                    success: function (rezult) {
                        $('.test').html(rezult);
                        parentForm.hide();
                        $('.modalOverlay').show().delay(3000).fadeOut();
                        $('.successMsg').show().delay(3000).fadeOut();
                        $('body').css('overflow', 'auto');
                        $('.modalOverlay').click(function () {
                            $('.modalOverlay').hide();
                            $('.successMsg').hide();
                        });
                    }
                });
            }
        });
    }
    sendModal();

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
            $('#modal7_phone').mask("+7 (999) 999-99-99");
            $('.modalOverlay').show();
            $('.fakeRoistat').addClass('check');
        }
    });


    if (siteUrl == 'shini') {
        $('.phoneBlk').html('8 (800) 550-06-58');
    } else if (siteUrl == '') {
        $('.phoneBlk').html('8 (800) 222-31-96');
    }
});
/*******карта******************/

if ($(window).width() > 768) {
    $('._maps').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A414e14fc8682eb7396f6441a39b86933843a693d39507368696b1c873df16cea&amp;width=426&amp;height=390&amp;lang=ru_RU&amp;scroll=false"></script>');
} else {
    $('._maps').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A414e14fc8682eb7396f6441a39b86933843a693d39507368696b1c873df16cea&amp;width=290&amp;height=240&amp;lang=ru_RU&amp;scroll=false"></script>');
};