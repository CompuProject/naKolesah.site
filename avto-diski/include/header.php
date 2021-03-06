<?php
function isMobile()
{
    return preg_match("/(android|webos|avantgo|iphone|ipad|ipod|blackberry|iemobile|bolt|boost|cricket|docomo|fone|hiptop|mini|opera mini|kitkat|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/main1.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab:400,700&amp;subset=cyrillic" rel="stylesheet">
    <title>Сеть из 22-х автоцентров по всей Москве</title>
    <link rel="icon" type="image/png" href="//u10.filesonload.ru/cc9ef35356d18c722781599f1b8cae78/e5d388c5baafaaab24a32e5bafc0181a.png">
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.maskedinput/1.4.1/jquery.maskedinput.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script>
        (function(w, d, s, h, id) {
            w.roistatProjectId = id; w.roistatHost = h;
            var p = d.location.protocol == "https:" ? "https://" : "http://";
            var u = /^.*roistat_visit=[^;]+(.*)?$/.test(d.cookie) ? "/dist/module.js" : "/api/site/1.0/"+id+"/init";
            var js = d.createElement(s); js.charset="UTF-8"; js.async = 1; js.src = p+h+u; var js2 = d.getElementsByTagName(s)[0]; js2.parentNode.insertBefore(js, js2);
        })(window, document, 'script', 'cloud.roistat.com', 'cb5eaad87366afa54f53f0b311781e73');
    </script>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript" >
        <?
        $siteUrl = str_replace('index.php','',$_SERVER['SCRIPT_NAME']);
        $yaId = [
            "/zamena-stekla/" => "51444802",
            "/zamena-stekol/" => "51444793",
        ];
        ?>
        (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
            m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
        (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(<?=$yaId[$siteUrl]?>, "init", {
            id:<?=$yaId[$siteUrl]?>,
            clickmap:true,
            trackLinks:true,
            accurateTrackBounce:true,
            webvisor:true
        });
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/51962525" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
</head>
<body>
<header class="header">
    <div class="container">
        <div class="hamburger1">
            <div plp-hamburger-root="">
                <div class="hamburger1-header">
                    <div plp-hamburger-toggle="" il-action="toggle" class="hamburger1-toggle is-collapsed">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                    <div class="hamburger1-altmenu">
                        <div class="cont">
                            <div class="node node92 widget widget-text">
                                <div class="wrapper1">
                                    <div class="wrapper2">
                                        <div class="">
                                            <div class="textable">
                                                <p style="line-height: 0.5;"><span style="font-family: "Russo One"><span style="font-size: 20px;"><span style="color: rgb(235, 44, 49);"><strong>НА КОЛЁСАХ</strong></span></span></span></p>
                                                <p style="text-align: left; line-height: 0.5;"><span style="color: rgb(0,0,0);"><span style="font-size: 14px;"><span style="font-family: "Roboto Light"><strong>22 автоцентра</strong> в каждом районе</span></span></span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="hamburger_menu">
                    <div class="hamburger_menu_elementHalf"><a href="#addres">Адреса</a></div>
                    <div class="hamburger_menu_elementHalf"><a href="#rewies">Отзывы</a></div>
                    <div class="hamburger_menu_elementFull"><a href="#selection">Онлайн подбор</a></div>
                </div>
                <div class="hamburger_menu_btnBlock">
                    <form action="tel:88002220986">
    <button type="submit" class="hamburger_menu_btn">Позвонить бесплатно</button>
</form>
                    
                </div>
                <div class="hamburger_menu_text">Более 14 лет на рынке</div>
                <div class="hamburger_menu_text phone">8 (800) 222-09-86</div>
            </div>
        </div>
        <div class="header__top">
            <div class="header__top-logo">
                <a href="/"><img src="assets/img/logo.png" alt="На колёсах"></a>
            </div>
            <div class="header__top-company">
			    <p>Сеть автоцентров</p>
                <p style="color: rgb(201, 0, 0);"><b>в каждом районе Москвы</b></p>
                <p>Более 14 лет на рынке</p>
            </div>
            <div class="header__top-phone">
                <div class="header__top-phone-number">
				<span class="text">8 (800) 222-09-86</span>
                    <p>Бесплатный звонок по РФ</p>
                </div>
                <div class="header__top-phone-callback">
                    <button class="btn_modal" id="modal1" onclick="ym(<?=$yaId[$siteUrl]?>, 'reachGoal', 'PZ'); return true;">
						<span class="text">
                                Перезвоните мне
                                <span class="ripple rippleEffect" style="width:196px; height:196px; left:-98px; top:-48px;"></span>
                            </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <script>
        $(".hamburger1-toggle").click(function () {
            if ($('.hamburger_menu').hasClass('active')) {
                $('.hamburger_menu').removeClass('active');
                $(this).removeClass('is-expanded').addClass('is-collapsed');
            } else {
                $('.hamburger_menu').addClass('active');
                $(this).addClass('is-expanded').removeClass('is-collapsed');
            }
        });
//        $(".hamburger1").click(function () {
//            if($(".header__menu").hasClass("mobile")) {
//                $(".header__menu").removeClass("mobile");
//            } else {
//                $(".header__menu").addClass("mobile");
//            }
//        });
//        $(".header__menu li a").click(function () {
//            if($(".header__menu").hasClass("mobile")) {
//                $(".header__menu").removeClass("mobile");
//            }
//        });
    </script>
</header>