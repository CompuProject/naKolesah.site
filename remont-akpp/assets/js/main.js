!function () {
    function e(n, o, t) {
        function a(l, i) {
            if (!o[l]) {
                if (!n[l]) {
                    var c = "function" == typeof require && require;
                    if (!i && c)return c(l, !0);
                    if (r)return r(l, !0);
                    var u = new Error("Cannot find module '" + l + "'");
                    throw u.code = "MODULE_NOT_FOUND", u
                }
                var p = o[l] = {exports: {}};
                n[l][0].call(p.exports, function (e) {
                    return a(n[l][1][e] || e)
                }, p, p.exports, e, n, o, t)
            }
            return o[l].exports
        }

        for (var r = "function" == typeof require && require, l = 0; l < t.length; l++)a(t[l]);
        return a
    }

    return e
}()({
    1: [function (e, n, o) {
        "use strict";
        !function () {
            function e() {
                return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)
            }

            function n(e, n) {
                var o = e, t = "type=" + n;
                for (var a in o)t += "&" + a + "=" + o[a];
                $.ajax({url: "/remont-akpp/mail.php", type: "POST", data: t}).done(function (e) {
                    console.log(JSON.parse(e))
                }).fail(function (e) {
                    return console.log(e)
                })
            }

            var o = function () {
                var e = $('<div class="popup-overlay js-window"><div class="popup-window js-popup" style="display: none;"><div class="popup-window__body"><div class="wrapper1"><div class="wrapper1"><div class="check"></div><p class="invoice">Спасибо!</p><p class="invoice">Ваша заявка отправлена.</p><p class="invoice">В ближайшее время мы с Вами свяжемся!</p></div></div></div></div></div></div>');
                $("body").prepend(e), $(".js-popup").slideDown("slow"), $(".js-window").click(function (e) {
                    $(this).remove()
                })
            };
            $("#uid4").click(function (t) {
                t.preventDefault();
                var a = $("#callback-form, #node10_meta"), r = a.find("input[name=phone]");
                console.log(r.val());
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=Заказ обратного звонка&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val(),urlName: location.href.replace('http://','')}, "callback-top"), $(".area").click(), console.log(e),
                        // o(),
                        r.val(""))

                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid10, #uid62").click(function (t) {
                console.log('123');
                t.preventDefault();
                var a = $("#get-tyres, #node137_meta"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ АКПП&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val(),urlName: location.href.replace('http://','')}, "get-tyres"), $(".area").click(),
                        // o(),
                        console.log(e), r.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid7, #uid59").click(function (t) {
                t.preventDefault();
                var a = $("#left-widget-get-tyres, #node82_meta"), r = a.find("select[name=marks-auto]"), l = a.find("select[name=type-akpp]"), i = a.find("input[name=phone]");
                i.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&marks-auto=" + r.val() + "&type-akpp=" + l.val() + "&comment=УЗНАТЬ СТОИМОСТЬ РЕМОНТА&type_response=html&phone=" + i.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({
                        phone: i.val(),
                        marks_auto: r.val(),
                        type_akpp: l.val(),
                        urlName: location.href.replace('http://','')
                    }, "left-widget-get-tyres"), $(".area").click(),
                        // o(),
                        console.log(e), i.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid13, #uid65").click(function (t) {
                t.preventDefault();
                var a = $("#second-get-tyres-form, #node217_meta"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=ПОЛУЧИТЬ КОНСУЛЬТАЦИЮ&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val(),urlName: location.href.replace('http://','')}, "second-get-tyres-form"), $(".area").click(),
                        // o(),
                        console.log(e), r.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid28, #uid80").click(function (t) {
                t.preventDefault();
                var a = $("#bronirovanie, #node435_meta"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=ЗАПИСАТЬСЯ НА ДИАГНОСТИКУ АКПП&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val(),urlName: location.href.replace('http://','')}, "bronirovanie"), $(".area").click(),
                        // o(),
                        console.log(e), r.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid31, #uid83").click(function (t) {
                t.preventDefault();
                var a = $("#node456_meta, #node482_meta, #tire-fitting, #node479_meta"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=ПЕРЕЗВОНИТЕ МНЕ&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val(),urlName: location.href.replace('http://','')}, "tire-fitting"), $(".area").click(),
                        // o(),
                        console.log(e), r.val(""))
                }).fail(function (e) {
                    return console.log(e)
                });
            })/*, $("#uid48").click(function (t) {
                t.preventDefault();
                var a = $("#store-amount"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=ЗАПИСАТЬСЯ НА ШИНОМОНТАЖ В БЛИЖАЙШИЙ АВТОЦЕНТР&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val()}, "store-amount"), $(".area").click(), o(), console.log(e), r.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid54").click(function (t) {
                t.preventDefault();
                var a = $("#callback-bottom"), r = a.find("input[name=phone]");
                r.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&comment=Заказ обратного звонка&type_response=html&phone=" + r.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({phone: r.val()}, "callback-bottom"), $(".area").click(), console.log(e), o(), r.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            }), $("#uid51").click(function (t) {
                t.preventDefault();
                var a = $("#order"), r = a.find("input[name=name]"), l = a.find("input[name=email]");
                l.val() && $.ajax({
                    url: "https://wilgood.ru/handler_for_partners/",
                    type: "GET",
                    data: "type_partner=generatorprodaj&name=" + r.val() + "&comment=ЗАБРОНИРОВАТЬ МЕСТО НА СКЛАДЕ&type_response=html&email=" + l.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                }).done(function (e) {
                    e && (n({
                        name: r.val(),
                        email: l.val()
                    }, "order"), $(".area").click(), console.log(e), o(), l.val(""))
                }).fail(function (e) {
                    return console.log(e)
                })
            })*/
        }()
    }, {}]
}, {}, [1]);
$(document).ready(function () {
    $("input[name=phone]").click(function () {
        $(this).focus();
    });
    $('input[name=phone]').mask('+7 (999) 999-99-99');
    $('input[autocomplete=tel]').mask('+7 (999) 999-99-99');

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

    $("#uid25, #uid77").click(function (t) {
        t.preventDefault();
        var a = $("#cost, #node346_meta"), r = a.find("select[name=mark]"), l = a.find("select[name=type-akpp]"), i = a.find("input[name=phone]");
        i.val() && $.ajax({
            url: "https://wilgood.ru/handler_for_partners/",
            type: "GET",
            data: "type_partner=generatorprodaj&mark=" + r.val() + "&type-akpp=" + l.val() + "&comment=УЗНАТЬ СТОИМОСТЬ РЕМОНТА&type_response=html&phone=" + i.val() + "&unique_code=" + e() + "&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
        }).done(function (e) {
            e && (n({
                phone: i.val(),
                mark: r.val(),
                type_akpp: l.val(),
                urlName: location.href.replace('http://','')
            }, "cost"), $(".area").click(),
                // o(),
                console.log(e), i.val(""))
        }).fail(function (e) {
            return console.log(e)
        })
    });
    function e() {
        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)
    }
    function n(e, n) {
        var o = e, t = "type=" + n;
        for (var a in o)t += "&" + a + "=" + o[a];
        $.ajax({url: "/remont-akpp/mail.php", type: "POST", data: t}).done(function (e) {
            console.log(JSON.parse(e))
        }).fail(function (e) {
            return console.log(e)
        })
    }
    var o = function () {
        var e = $('<div class="popup-overlay js-window"><div class="popup-window js-popup" style="display: none;"><div class="popup-window__body"><div class="wrapper1"><div class="wrapper1"><div class="check"></div><p class="invoice">Спасибо!</p><p class="invoice">Ваша заявка отправлена.</p><p class="invoice">В ближайшее время мы с Вами свяжемся!</p></div></div></div></div></div></div>');
        $("body").prepend(e), $(".js-popup").slideDown("slow"), $(".js-window").click(function (e) {
            $(this).remove()
        })
    };
});