$(document).ready(function () {

    // smooth scroll
    $("a.scrollto").click(function () {
        var elementClick = $(this).attr("href");
        var destination = $(elementClick).offset().top - 150;
        jQuery("html:not(:animated),body:not(:animated)").animate({
            scrollTop: destination
        }, 800);
        return false;
    });

    //input range init
    $(".range-example-start").asRange({
        step: 1000,
        range: false,
        min: 1000,
        max: 80000,
        value: 39000
    });

    function getModal() {
        $('.btn_modal').click(function () {
            var modalId = $(this).attr('id');
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
                        url: '/diagnostika/mail.php',
                        type: 'GET',
                        data: 'modalId='+modalId+'&phone='+phone+'&brand='+brand+'&diameter='+diameter+'&price='+price,
                        dataType: 'html',
                        success: function (rezult) {
                            $('.testBlock').html(rezult);
                            $('body').css('overflow', 'auto');
                            alert('Спасибо! Ваша заявка отправлена. В ближайшее время мы с Вами свяжемся!');
                            $('.' + modalId).fadeOut('slow');
                            $('.modalOverlay').fadeOut('slow');
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

    $('#modal6').click(function () {
        var parentForm = $(this).closest('form.modalWindow');
        var phone = parentForm.find('input[type=tel]').val();
        var brand = parentForm.find('select[name=brand]').val();
        var diameter = parentForm.find('select[name=diameter]').val();
        var price = parentForm.find('input[name=price]').val();
        var modalId = 'modal6';
        if (phone == '') {
            parentForm.find('input[type=tel]').css('border-color','red');
        } else {
            $.ajax({
                url: '/diagnostika/mail.php',
                type: 'GET',
                data: 'modalId='+modalId+'&phone='+phone+'&brand='+brand+'&diameter='+diameter+'&price='+price,
                dataType: 'html',
                success: function (rezult) {
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
                    type: 'POST',
                    data: 'type_partner='+generateHash()+'&comment='+COMMENT+'&type_response=html&phone='+phone+'&unique_code=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f&type=POST',
                }).done(json => {
                    if (json) {
                        console.log(json);
                    }
                }).fail(error => console.log(error));;
            }
        });
    }
    getWilgood ();

});


