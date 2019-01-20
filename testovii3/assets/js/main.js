//правки
/////////////////////////////////////////////
/*****************************************/


$(document).ready(function () {
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
            var sezon = parentForm.find('input:checked ~ span').html();
            if(!!sezon){sezon = sezon.replace(/\s+/g,'');} else {sezon='';};
            var price = parentForm.find('.irs-single').text();
            price = price.replace(/\s+/g,'');
            $('.errMsg').hide();

            if (phone == '') {
                parentForm.find('input[name=phone]').after('<div class="errMsg">Не заполнено поле</div>');
                parentForm.find('input[name=phone]').css('border-color', 'red');
            } else {
                console.log('type=' + modalName + '&phone=' + phone + '&brand=' + brand + '&diameter=' + diameter + '&sezon=' + sezon + '&price=' + price + '&urlName=' + location.href.replace('http://', ''));

                $.ajax({
                    url: '/testovii3/mail.php',
                    type: 'POST',
                    data: 'type=' + modalName + '&phone=' + phone + '&brand=' + brand + '&diameter=' + diameter + '&sezon=' + sezon+ '&price=' + price + '&urlName=' + location.href.replace('http://', ''),
                    // data: data,
                    // dataType: 'html',
                    success: function (rezult) {


                        if (modalName != 'posmotret-varianty-form' && modalName != 'posmotret-varianty-form-mobile' && modalName != 'onlain-podbor-shin-form' && modalName != 'onlain-podbor-shin-form-mobile') {
                            parentForm.hide();

                            $('.modal').hide();
                        };

                        $('.successMsg').show().delay(3000).fadeOut();
                        $('.modal-backdrop.fade.in').delay(3000).fadeOut();
                        $('.modalOverlay').delay(3000).fadeOut();
                        $('.successMsg,.modal-backdrop.fade.in').click(function () {
                            $('.successMsg,.modal-backdrop.fade.in').hide();
                        });

                    }
                });
            }
        });
    }

    sendModal();
/*
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
    });*/
});
