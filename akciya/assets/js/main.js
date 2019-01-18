$(document).ready(function () {
    $("input[name=phone]").mask('+7 (999) 999-99-99');
    $("input[name=phone]").click(function () {
        $(this).focus();
    });
    $(".main_form button").click(function () {
        var phone = $("input[name=phone]").val();
        if (phone == '') {
            $("input[name=phone]").css('border-color','red');
        } else {
            $.ajax({
                url: '/akciya/mail.php',
                type: 'GET',
                data: 'phone=' + phone + '&urlName=' + location.href.replace('https://', ''),
                dataType: 'html',
                success: function (rezult) {
                    $("input[name=phone]").val('');
                    $('.modalOverlay').show().delay(3000).fadeOut();
                    $('.successMsg').show().delay(3000).fadeOut();
                    $.ajax({
                        url: 'https://wilgood.ru/handler_for_partners/',
                        type: 'POST',
                        data: 'type_partner=generatorprodaj&comment=akciya_page&type_response=html&phone='+phone+'&unique_code='+generateHash()+'&hash=Agf0FDw6gkRuqsfOQB7cqK9k60qD17f',
                    }).done(json => {
                        if (json) {
                            console.log(json);
                        }
                    });
                }
            });
        }
    });

    function generateHash() {
        return Math.random().toString(36).substring(2, 15) + Math.random().toString(36).substring(2, 15);
    }
});
