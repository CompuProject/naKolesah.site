<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/diagnostika/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/diagnostika/assets/css/main.css">
    <link href="//cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css" type="text/css" rel="stylesheet" />



    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">

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

</head>
<body>


<header class="header">
    <div class="container">


        <div class="hamburger1 header--mobile">
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
                                                <p>НА КОЛЁСАХ</p>
                                                <p><strong>22 автоцентра</strong> в каждом районе</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header__top-phone-callback">
                <a class="btn_modal" id="modal1" onclick="yaCounter51444706.reachGoal('ZK'); return true;" href="tel:+78005508275">
                                Позвонить бесплатно
                </a>
            </div>
        </div>
        <div class="header__top">
            <div class="header__top-logo">
                <img src="/diagnostika/assets/img/logo.png" alt="На колёсах">
            </div>
            <div class="header__top-company">
                <p><b>22 автоцентра</b> в каждом районе Москвы</p>
                <p><b>15 лет</b> в бизнесе</p>
            </div>
            <div class="header__top-phone">
                <div class="header__top-phone-number">
                    <p>8 (800) 550-82-75</p>
                    <p>Бесплатно по России</p>
                </div>
                <div class="header__top-phone-callback">
                    <button class="btn_modal" id="modal1" onclick="yaCounter51444706.reachGoal('ZVONOK'); return true;">
                            <span class="text">
                                Заказать звонок
                            </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="header__menu">
            <ul class="list-inline">
                <li><a class="scrollto" href="#inclusive">Что входит в диагностику</a></li>
                <li><a class="scrollto" href="#addresses">Адреса</a></li>
                <li><a class="scrollto" href="#reviews">Отзывы</a></li>
                <li><a class="scrollto" href="#appointment">Запись онлайн</a></li>
            </ul>
        </div>
    </div>

    <script>
        $(".hamburger1").click(function () {
            if($(".header__menu").hasClass("mobile")) {
                $(".header__menu").removeClass("mobile");
            } else {
                $(".header__menu").addClass("mobile");
            }
        });
        $(".header__menu li a").click(function () {
            if($(".header__menu").hasClass("mobile")) {
                $(".header__menu").removeClass("mobile");
            }
        });
    </script>
</header>