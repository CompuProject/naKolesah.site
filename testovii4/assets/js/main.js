//правки
/////////////////////////////////////////////
/*****************************************/
siteUrl='';

$(document).ready(function () {
    if (siteUrl == "zamena-grm") {
        $(".changePhone").html("8 (800) 222-35-69");
    } else if (siteUrl == "grm-zamena") {
        $(".changePhone").html("8 (800) 222-35-74");
    }
    //маска телефона для input popup
    $('input[name=phone]').click(function () {
        $(this).focus();
    });
    $('input[name=phone]').mask('+7 (999) 999-99-99');

    //обработка кнопки вызова modal
    function getModal() {
        $('.btnModal').click(function (e) {
            e.preventDefault();
            var modalId = $(this).attr('id');
            $('.form1-cover[data-mod=' + modalId + ']').show();
            $('.form1-cover[data-mod=' + modalId + ']').closest('.modal').show();
            if (modalId == "modal6") {
                $('.modalOverlay').show();
            }
        });
    };
    getModal();

    //обработка форм
    function sendModal() {
        $('.form1-cover .modalSubmit').click(function (e) {
            e.preventDefault();
            var parentForm = $(this).closest('.form1-cover');
            var phone = parentForm.find('input[name=phone]').val();
            phone = phone.replace(/\s+/g,'');
            var modalName = parentForm.attr('id');
            var brand = parentForm.find('select[name=brand] option:selected').text();
            brand = brand.replace(/\s+/g,'');
            var diameter = parentForm.find('select[name=diameter] option:selected').text();
            diameter = diameter.replace(/\s+/g,'');
            var year = parentForm.find('select[name=year] option:selected').text();
            year = year.replace(/\s+/g,'');
            var price = parentForm.find('.irs-single').text();
            price = price.replace(/\s+/g,'');
            $('.errMsg').hide();

            if (phone == '') {
                parentForm.find('input[name=phone]').after('<div class="errMsg">Не заполнено поле</div>');
                parentForm.find('input[name=phone]').css('border-color', 'red');
            } else {
                console.log('type=' + modalName + '&phone=' + phone + '&brand=' + brand + '&diameter=' + diameter + '&year=' + year + '&price=' + price + '&urlName=' + location.href.replace('http://', ''));

                $.ajax({
                    url: '/testovii4/mail.php',
                    type: 'POST',
                    data: 'type=' + modalName + '&phone=' + phone + '&brand=' + brand + '&diameter=' + diameter + '&year=' + year+ '&price=' + price + '&urlName=' + location.href.replace('http://', ''),
                    // data: data,
                    // dataType: 'html',
                    success: function (rezult) {


                        if (!parentForm.hasClass('nohidemodal')) {
                            parentForm.hide();
                            $('.modal').hide();
                        } else {
                            $('.modalOverlay').show();
                        };

                        $('.successMsg').show().delay(3000).fadeOut();
                        $('.modal-backdrop.fade.in').delay(3000).fadeOut();
                        $('.modalOverlay').delay(3000).fadeOut();
                        $('.successMsg,.modal-backdrop.fade.in,.modalOverlay').click(function () {
                            $('.successMsg,.modal-backdrop.fade.in,.modalOverlay').hide();
                        });

                    }
                });
            }
        });
    }

    sendModal();

    function generateHash() {
        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    }

    function getWilgood() {
        $('.form1-cover .modalSubmit').click(function (event) {
            // event.preventDefault();
            var form = $(this).closest('.form1-cover'),
                COMMENT = form.attr('id');
            var phone = form.find('input[name=phone]').val();
            phone = phone.replace(/\s+/g,'');
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
