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

        });
    };
    getModal();

    //обработка форм
    function sendModal() {
        $('.form1-cover .modalSubmit').click(function (e) {
            e.preventDefault();
            var parentForm = $(this).closest('.form1-cover');
            //var data = [];
            var phone = parentForm.find('input[name=phone]').val();
            phone = phone.replace(/\s+/g,'');
            var modalName = parentForm.attr('id');
            var brand = parentForm.find('select[name=brand] option:selected').text();
            brand = brand.replace(/\s+/g,'');
            var diameter = parentForm.find('select[name=diameter] option:selected').text();
            diameter = diameter.replace(/\s+/g,'');
            var price = parentForm.find('.irs-single').text();

            $('.errMsg').hide();
            if (phone == '') {
                parentForm.find('input[name=phone]').after('<div class="errMsg">Не заполнено поле</div>');
                parentForm.find('input[name=phone]').css('border-color', 'red');
            } else {
                console.log('type=' + modalName + '&phone=' + phone + '&brand=' + brand + '&diameter=' + diameter + '&price=' + price + '&urlName=' + location.href.replace('http://', ''));

                $.ajax({
/*ПОМЕНЯТЬ*/        url: '/testovii2/mail1.php',
                    type: 'POST',
                    data: 'type=' + modalName + '&phone=' + phone + '&brand=' + brand + '&diameter=' + diameter + '&price=' + price + '&urlName=' + location.href.replace('http://', ''),
                    // data: data,
                    // dataType: 'html',
                    success: function (rezult) {
                        //$('.test').html(rezult);

                        if (modalName != 'raschet-stoimosti-form' && modalName != 'raschet-stoimosti-form-mobile') {
                            parentForm.hide();
                            //$('.modal-dialog').hide();
                            $('.modal').hide();
                        };

                        $('.successMsg').show().delay(3000).fadeOut();
                        $('.modal-backdrop.fade.in').delay(3000).fadeOut();
                        $('.successMsg,.modal-backdrop.fade.in').click(function () {
                            $('.successMsg,.modal-backdrop.fade.in').hide();
                        })
                        //$('.modal').attr('aria-hidden', true);
                    }
                });
            }
        });
    }

    sendModal();


})//readyEnd

