!function () {
    function t(o, e, n) {
        function r(i, l) {
            if (!e[i]) {
                if (!o[i]) {
                    var c = "function" == typeof require && require;
                    if (!l && c)return c(i, !0);
                    if (a)return a(i, !0);
                    var d = new Error("Cannot find module '" + i + "'");
                    throw d.code = "MODULE_NOT_FOUND", d
                }
                var s = e[i] = {exports: {}};
                o[i][0].call(s.exports, function (t) {
                    return r(o[i][1][t] || t)
                }, s, s.exports, t, o, e, n)
            }
            return e[i].exports
        }

        for (var a = "function" == typeof require && require, i = 0; i < n.length; i++)r(n[i]);
        return r
    }

    return t
}()({
    1: [function (t, o, e) {
        "use strict";
        $(document).ready(function () {
            function t() {
                return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15)
            }

            $("a.scrollto").click(function () {
                var t = $(this).attr("href"), o = $(t).offset().top - 150;
                return jQuery("html:not(:animated),body:not(:animated)").animate({scrollTop: o}, 800), !1
            }), function () {
                $(".btn_modal").click(function () {
                    var t = $(this).attr("id");
                    if ($('.' + t).hasClass('fakeRoistat')) {
                        $('.fakeRoistat').addClass('check');
                    }
                    $(".modalOverlay").show(), $("." + t).show(), $("body").css("overflow", "hidden"), $("." + t + " #" + t + "_phone").mask("+7 (999) 999-99-99"), $("." + t + " .modalBtnBlock button").click(function () {
                        var o = $("." + t + " #" + t + "_phone").val(), e = $("." + t + " #" + t + "_brand").val(), n = $("." + t + " #" + t + "_diameter").val(), r = $("." + t + " #" + t + "_price").val();
                        $(".errMsg").hide(), $("#" + t + "_phone").css("border-color", "#00000040"), "" == o ? ($("#" + t + "_phone").after('<div class="errMsg">Не заполнено поле</div>'), $("#" + t + "_phone").css("border-color", "red")) : $.ajax({
                                url: "/diagnostika/mail.php",
                                type: "GET",
                                data: "modalId=" + t + "&phone=" + o + "&brand=" + e + "&diameter=" + n + "&price=" + r + "&urlName" + location.href.replace('http://',''),
                                dataType: "html",
                                success: function (o) {
                                    $(".testBlock").html(o), $("body").css("overflow", "auto"), alert("Спасибо! Ваша заявка отправлена. В ближайшее время мы с Вами свяжемся!"), $("." + t).fadeOut("slow"), $(".modalOverlay").fadeOut("slow")
                                }
                            })
                    }), $("." + t + " .close").click(function () {
                        $("body").css("overflow", "auto"), $("." + t).hide(), $(".modalOverlay").hide()
                    }), $(".modalOverlay").click(function () {
                        $("body").css("overflow", "auto"), $("." + t).hide(), $(".modalOverlay").hide()
                    })
                })
            }(), $("#step4 input").mask("+7 (999) 999-99-99"),
                $("#appointment_btn, .fakeRoistatBtnBlock").click(function () {
                    console.log(location.href.replace('http://',''));
                var t = $(this).closest(".openForm"),
                    p = t.attr('id'),
                    o = t.find("input[type=tel]").val(), e = t.find("select[name=brand]").val(), n = t.find("select[name=diameter]").val(), r = t.find("input[name=price]").val();
                "" == o ? t.find("input[type=tel]").css("border-color", "red") : $.ajax({
                        url: "/diagnostika/mail.php",
                        type: "GET",
                        data: "modalId=" + p + "&phone=" + o + "&brand=" + e + "&diameter=" + n + "&price=" + r + "&urlName" + location.href.replace('http://',''),
                        dataType: "html",
                        success: function (t) {
                            alert('Спасибо! Ваша заявка отправлена. В ближайшее время мы с Вами свяжемся!');
                        }
                    })
            }), function () {
                $(".modalBtnBlock button").click(function (o) {
                    o.preventDefault();
                    var e = $(this).closest(".modalWindow"), n = e.attr("comment"), r = e.find("input[name=phone]").val();
                    "" !== r && $.ajax({
                        url: "https://wilgood.ru/handler_for_partners/",
                        type: "POST",
                        data: "type_partner=generatorprodaj&comment=" + n + "&type_response=html&phone=" + r + "&unique_code" + t() + "=&type=POST&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f"
                    }).done(function (t) {
                        t && console.log(t)
                    }).fail(function (t) {
                        return console.log(t)
                    })
                })
            }(), $(".appointment input").mask("+7(999) 999-99-99")
        })
    }, {}]
}, {}, [1]);
$(document).ready(function () {
    if ($(document).width() < 850) {
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
    }

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
});