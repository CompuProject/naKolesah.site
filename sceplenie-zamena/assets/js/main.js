$(document).ready(function () {
    var siteUrl = location.href.replace('https://nakolesah.site/','').replace('/','');
    $("input[name=phone]").click(function () {
        $(this).focus();
    });
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
            sendModal();
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

    function sendModal() {
        $('.modalBtnBlock button').click(function () {
            var parentId = $(this).closest('.inputForm');
            var phone = parentId.find('input[name=phone]').val();
            var brand = parentId.find('input[name=brand]').val();
            var year = parentId.find('input[name=year]').val();
            var detail = parentId.find('input[name=detail]').val();
            var date = parentId.find('input[name=date]').val();
            var modalName = parentId.attr('modalName');
            $('.errMsg').hide();
            parentId.find('input[name=phone]').css('border-color', '#00000040');
            if (phone == '') {
                parentId.find('input[name=phone]').after('<div class="errMsg">Не заполнено поле</div>');
                parentId.find('input[name=phone]').css('border-color', 'red');
            } else {
                $.ajax({
                    url: '/sceplenie-zamena/mail.php',
                    type: 'GET',
                    data: 'modalName=' + modalName + '&phone=' + phone + '&brand=' + brand + '&year=' + year + '&detail=' + detail + '&date=' + date + '&urlName=' + location.href.replace('http://', ''),
                    dataType: 'html',
                    success: function (rezult) {
                        console.log(rezult);
                        if (parentId.hasClass('modalWindow')) {
                            parentId.hide();
                        }
                        $('.modalOverlay').show().delay(3000).fadeOut();
                        $('.successMsg').show().delay(3000).fadeOut();
                        $('body').css('overflow', 'auto');
                        parentId.find('input').val('');
                        $('.modalOverlay').click(function () {
                            $('.modalOverlay').hide();
                            $('.successMsg').hide();
                        });
                    }
                })
            }
        });
    }

    getModal();
    sendModal();

    $('input[name=phone]').mask('+7 (999) 999-99-99');

    function generateHash() {
        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    }

    function getWilgood() {
        $('.modalBtnBlock button').click(function (event) {
            // event.preventDefault();
            var form = $(this).closest('.inputForm'),
                COMMENT = form.attr('comment');
            var phone = form.find('input[name=phone]').val();
            if (phone !== '') {
                $.ajax({
                    url: 'https://wilgood.ru/handler_for_partners/',
                    type: 'GET',
                    data: 'type_partner=generatorprodaj&comment=' + COMMENT + '&type_response=html&phone=' + phone + '&unique_code=' + generateHash() + '&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f',
                }).done(json => {
                    if (json) {
                        console.log(json);
                    }
                });
            }
        });
    }

    getWilgood();

    if ($(document).width() < 850) {
        $('#modal2').html('Узнать стоимость замены');
        $('#modal3').html('Записаться на диагностику сцепления');
        $('#modal4').html('Получить бесплатную консультацию');
    }


    $(".hamburgerMenu").click(function () {
        if ($(this).hasClass('cross')) {
            $(this).removeClass("cross");
            $('.mobileMenu_list').hide();
        } else {
            $(this).addClass("cross");
            $('.mobileMenu_list').css('display', 'flex');
        }
    });

    /*Плавающая шапка*/
    if ($(window).width() < 850) {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 1) {
                $('.mobileMenu').addClass("sticky");
            } else {
                $('.mobileMenu').removeClass("sticky");
            }
        });
    }
    /*КАРТА*/
    var mapWidth = $(document).width() - 30;
    if ($(window).width() < 1000) {
        $('.mapBlock script').remove();
        $('.mapBlock').html('<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A8ccbcbd2badfcda066f4a751bbe30ad016424ac0c567a63c934fa530302827b2&amp;width=' + mapWidth + '&amp;height=299&amp;lang=ru_RU&amp;scroll=true"></script>');
        $('.mapBlock').addClass('pt-4');
    } else if ($(window).width() > 500 && $(window).width() < 1000) {
        var greenBtn = $('.greenBtnLink').html();
        $('.greenBtnRow').hide();
        $('.mobileMenuLeftBlock').removeClass('col-9 col-sm-9 col-md-9');
        $('.mobileMenuLeftBlock').addClass('col-6 col-sm-6 col-md-6');
        $('.mobileMenuLeftBlock').after('<div class="col-5,col-sm-5,col-md-5 newBlock">' + greenBtn + '</div>');
    } else if ($(window).width() < 500 || $(window).width() > 1000) {
        $('.newBlock').remove();
        $('.mobileMenuLeftBlock').addClass('col-9 col-sm-9 col-md-9');
        $('.mobileMenuLeftBlock').removeClass('col-6 col-sm-6 col-md-6');

    }

    /*Изменение размеров модальных окон*/
    if ($(window).width() < 1600 && $(window).width() > 850) {
        var currentWidth = '500';
        console.log($(window).width());
        var leftWidth = ($(window).width() - currentWidth) / 2 + 'px';
        $('.modalWindow').css('width', currentWidth + 'px');
        $('.modalWindow').css('left', leftWidth);
    } else if ($(window).width() > 1500) {
        $('.modalWindow').css('width', '25%');
        $('.modalWindow').css('left', '40%');
    }
    $(window).resize(function () {
        if ($(window).width() < 1600 && $(window).width() > 850) {
            var currentWidth = $('.modalWindow').width();
            console.log($(window).width());
            var leftWidth = ($(window).width() - currentWidth) / 2 + 'px';
            $('.modalWindow').css('width', currentWidth + 'px');
            $('.modalWindow').css('left', leftWidth);
        } else if ($(window).width() > 1500) {
            if (!$('.modalWindow').hasClass('fakeRoistat')) {
                $('.modalWindow').css('width', '25%');
                $('.modalWindow').css('left', '40%');
            }
        }
    });

    /*Видео блок*/
    $('.module2_videoBlock').click(function () {
        $('.modalOverlay').show();
        $('body').css('overflow', 'hidden');
        $('.modalOverlay').after(
            '<div class="modalWindow modalVideo" style="display: block;width: 560px; height: 315px">' +
            '<iframe width="100%" height="100%" src="https://www.youtube.com/embed/Q2YcxH1LcMY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>' +
            '</div>'
        );
        $('.modalOverlay').click(function () {
            $('body').css('overflow', 'auto');
            $('.modalVideo').remove();
            $('.modalOverlay').hide();
        });
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
