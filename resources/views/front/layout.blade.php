<!DOCTYPE html>
<html>
<head>
    <title>@yield('seo_title')</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.png" type="image/png">
    <meta name="description" content="@yield('meta_description')">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300i,400,400i,700&display=swap&subset=cyrillic" 
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Arimo&display=swap&subset=cyrillic" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <script src="https://kit.fontawesome.com/43938b8f9e.js"></script>
    <script
        src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
        crossorigin="anonymous"></script>
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
</head>
<body>
<button class="uk-button uk-button-default uk-hidden@m menu-button" type="button" uk-toggle="target: #offcanvas-menu" uk-sticky>Меню</button>
<div id="offcanvas-menu" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <div class="uk-offcanvas-bar main-mobile-menu">
            <button class="uk-offcanvas-close" type="button" uk-close></button>
            <nav class="uk-navbar-container navbar-black navbar uk-margin-medium-top" uk-navbar>
                <div class="uk-container uk-container-expand">
                    <ul class="uk-navbar-nav uk-subnav" uk-navbar>
                        <!--<li><a class="color-white" href="/" onclick=location.reload();>Главная</a></li>-->
                        <!--<li><a class="color-white" href="/#works" onclick=location.reload();>Наши работы</a></li>-->
                        <li>
                            <a class="color-white" href="/#works" onclick=location.reload();>Наши работы</a>
                            <!--<div uk-dropdown="mode: hover;">-->
                            <!--    <ul class="uk-nav uk-dropdown-nav">-->
                            <!--        <li><a href="/#kitchen" onclick=location.reload();>Кухни</a></li>-->
                            <!--        <li><a href="/#prih" onclick=location.reload();>Прихожие</a></li>-->
                            <!--        <li><a href="/#sleep" onclick=location.reload();>В гостинную</a></li>-->
                            <!--        <li><a href="/#bath" onclick=location.reload();>В ванную</a></li>-->
                            <!--        <li><a href="/#shkaf" onclick=location.reload();>Шкаф-купе</a></li>-->
                            <!--    </ul>-->
                            <!--</div>-->
                        </li>
                        <li><a class="color-white" href="/#stage" onclick=location.reload();>Этапы работы</a></li>
                        <li><a class="color-white" href="/#why" onclick=location.reload();>Почему мы</a></li>
                        <li><a class="color-white" href="/#question" onclick=location.reload();>Рассрочка</a></li>
                        <li><a class="color-white" href="/#contacts" onclick=location.reload();>Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>
@if(Request::segment(1)) 
    <header class="inner-header page_{{ $page->id}}">
        <div class="uk-container">
            <div uk-grid class="uk-flex uk-flex-middle">
                <div class="uk-width-1-3@m uk-text-center uk-text-left@s uk-visible@s">
                    <div class="uk-navbar-right@s uk-navbar-center">
                        <ul class="social uk-navbar-nav">
                            <li>
                                <a href="viber://chat?number=%2B375333613767" class="viber" title="viber" target="_blank"><i class="fab fa-viber"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=375333613767" class="whatsapp" title="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://vk.com/club170388691" class="vk" title="vkontakte" target="_blank"><i class="fab fa-vk"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/klikmebel.by/?hl=ru" class="inst" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-visible@s">
                    <div class="uk-text-center color-white logo">
                        <a href="/"><img src="images/logo-white.png" alt="Логотип klikmebel"></a>
                    </div>
                </div>
                <div class="uk-width-1-3@m color-white uk-text-right">
                    <a href="tel:+375445553704" class="color-white uk-visible@s">+375 (44) 555-37-04</a> <br>
                    <a href="tel:+375333613767" class="color-white uk-visible@s">+375 (33) 361-37-67</a>
                    <div uk-navbar>
                    </div>
                    <div class="uk-width-1-3@m uk-text-center uk-text-left@s uk-hidden@s">
                        <a href="tel:+375445553704" class="color-white">+375 (44) 555-37-04</a> <br>
                        <a href="tel:+375333613767" class="color-white">+375 (33) 361-37-67</a>
                    </div>
                    <div class="uk-width-1-3@m uk-hidden@s">
                        <div class="uk-text-center color-white logo">
                            <a href="/"><img src="images/logo-white.png" alt="Логотип klikmebel"></a>
                        </div>
                    </div>
                    <ul class="social uk-navbar-nav uk-hidden@s uk-text-center" style="justify-content: center;">
                        <li>
                            <a href="viber://chat?number=%2B375333613767" class="viber" title="viber" target="_blank"><i class="fab fa-viber"></i></a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=375333613767" class="whatsapp" title="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://vk.com/club170388691" class="vk" title="vkontakte" target="_blank"><i class="fab fa-vk"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/klikmebel.by/?hl=ru" class="inst" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">
            <nav class="uk-navbar-container navbar-black navbar uk-margin-medium-top" uk-navbar>
                <div class="uk-container uk-container-expand">
                    <ul class="uk-navbar-nav uk-visible@m" uk-navbar>
                        <li>
                            <a class="color-white" href="#">Наши работы <span uk-icon="icon:  triangle-down"></span></a>
                            <div uk-dropdown="mode: hover;">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="/kuhni">Кухни</a></li>
                                    <li><a href="/prihozhie">Прихожие</a></li>
                                    <li><a href="/sleep">В гостинную</a></li>
                                    <li><a href="/bath">В ванную</a></li>
                                    <li><a href="/shkaf-kupe">Шкаф-купе</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="color-white" href="/stage">Этапы работы</a></li>
                        <li><a class="color-white" href="/why-we">Почему мы</a></li>
                        <li><a class="color-white" href="/question">Рассрочка</a></li>
                        <li><a class="color-white" href="/contacts">Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
@else
<header class="uk-position-relative">
    <div class="overlay uk-position-absolute"></div>
    <div class="uk-position-absolute uk-width uk-position-z-index uk-margin-large-top mobile-class">
        <div class="uk-container">
            <div uk-grid class="uk-flex uk-flex-middle">
                <div class="uk-width-1-3@m uk-text-center uk-text-left@s uk-visible@s">
                    <div class="uk-navbar-right@s uk-navbar-center">
                        <ul class="social uk-navbar-nav">
                            <li>
                                <a href="viber://chat?number=%2B375333613767" class="viber" title="viber" target="_blank"><i class="fab fa-viber"></i></a>
                            </li>
                            <li>
                                <a href="https://api.whatsapp.com/send?phone=375333613767" class="whatsapp" title="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                            </li>
                            <li>
                                <a href="https://vk.com/club170388691" class="vk" title="vkontakte" target="_blank"><i class="fab fa-vk"></i></a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/klikmebel.by/?hl=ru" class="inst" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="uk-width-1-3@m uk-visible@s">
                    <div class="uk-text-center color-white logo">
                        <!--klikmebel.by-->
                        <img src="images/logo-white.png" alt="">
                    </div>
                </div>
                <div class="uk-width-1-3@m color-white uk-text-right">
                    <a href="tel:+375445553704" class="color-white uk-visible@s">+375 (44) 555-37-04</a> <br>
                    <a href="tel:+375333613767" class="color-white uk-visible@s">+375 (33) 361-37-67</a>
                    <div uk-navbar>
                    </div>
                    <div class="uk-width-1-3@m uk-text-center uk-text-left@s uk-hidden@s">
                        <a href="tel:+375445553704" class="color-white">+375 (44) 555-37-04</a> <br>
                        <a href="tel:+375333613767" class="color-white">+375 (33) 361-37-67</a>
                    </div>
                    <div class="uk-width-1-3@m uk-hidden@s">
                        <div class="uk-text-center color-white logo">
                            <!--klikmebel.by-->
                            <img src="images/logo-white.png" alt="">
                        </div>
                    </div>
                    <ul class="social uk-navbar-nav uk-hidden@s uk-text-center" style="justify-content: center;">
                        <li>
                            <a href="viber://chat?number=%2B375333613767" class="viber" title="viber" target="_blank"><i class="fab fa-viber"></i></a>
                        </li>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=375333613767" class="whatsapp" title="whatsapp" target="_blank"><i class="fab fa-whatsapp"></i></a>
                        </li>
                        <li>
                            <a href="https://vk.com/club170388691" class="vk" title="vkontakte" target="_blank"><i class="fab fa-vk"></i></a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/klikmebel.by/?hl=ru" class="inst" title="instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div uk-sticky="animation: uk-animation-slide-top; sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; cls-inactive: uk-navbar-transparent uk-light; top: 200">
            <nav class="uk-navbar-container navbar-black navbar uk-margin-medium-top" uk-navbar>
                <div class="uk-container uk-container-expand">
                    <ul class="uk-navbar-nav uk-visible@m" uk-navbar>
                        <!--<li><a class="color-white" href="#" uk-scroll>Главная</a></li>-->
                        <!--<li><a class="color-white" href="#works" uk-scroll>Наши работы</a></li>-->
                        <li>
                            <a class="color-white" href="/#works" uk-scroll>Наши работы <span uk-icon="icon:  triangle-down"></span></a>
                            <div uk-dropdown="mode: hover;">
                                <ul class="uk-nav uk-dropdown-nav">
                                    <li><a href="/#kitchen" uk-scroll>Кухни</a></li>
                                    <li><a href="/#prih" uk-scroll>Прихожие</a></li>
                                    <li><a href="/#sleep" uk-scroll>В гостинную</a></li>
                                    <li><a href="/#bath" uk-scroll>В ванную</a></li>
                                    <li><a href="/#shkaf" uk-scroll>Шкаф-купе</a></li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="color-white" href="#stage" uk-scroll>Этапы работы</a></li>
                        <li><a class="color-white" href="#why" uk-scroll>Почему мы</a></li>
                        <li><a class="color-white" href="#question" uk-scroll>Рассрочка</a></li>
                        <li><a class="color-white" href="#contacts" uk-scroll>Контакты</a></li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow="animation: scale;autoplay: true;autoplay-interval: 3000">
        <div class="test-info" style="position: absolute;
    left: 0;
    top: 50%;
    z-index: 10;
    right: 0;
    text-align: center;">
            <h2 uk-slideshow-parallax="x: 100,-100" style="    font-family: 'Arimo', sans-serif;
    font-size: 50px;
    margin-bottom: 22px;
    color: #fff;
    line-height: 60px;">Мебель под заказ от 200 рублей</h2>
            <h3 uk-slideshow-parallax="x: 100,-100" style="    font-family: 'Arimo', sans-serif;
    font-size: 60px;
    margin-bottom: 22px;
    color: #00a3bb;
    line-height: 60px;">рассрочка 0%<br> скидка в ноябре 11%</h3>
            <p class="uk-h4">
                <button class="uk-button uk-button-default button-more" uk-toggle="target: #feedback" type="button">Узнать больше</button>
            </p>
        </div>
        <ul class="uk-slideshow-items" uk-height-viewport="min-height: 300">
            <li>
                <img src="images/slide-1.jpg" alt="">
                <div class="uk-position-center uk-position-small uk-text-center">

                </div>
            </li>
            <li>
                <img src="images/slide-2.jpg" alt="">
                <div class="uk-position-center uk-position-small uk-text-center">
                    <!--<h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>-->
                    <!--<h3 uk-slideshow-parallax="x: 100,-100">Second heading</h3>-->
                    <!--<p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>-->
                </div>
            </li>
            <li>
                <img src="images/slide-3.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <!--<h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>-->
                    <!--<h3 uk-slideshow-parallax="x: 100,-100">Second heading</h3>-->
                    <!--<p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>-->
                </div>
            </li>
            <li>
                <img src="images/slide-4.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <!--<h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>-->
                    <!--<h3 uk-slideshow-parallax="x: 100,-100">Second heading</h3>-->
                    <!--<p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>-->
                </div>
            </li>
            <li>
                <img src="images/slide-5.jpg" alt="" uk-cover>
                <div class="uk-position-center uk-position-small uk-text-center">
                    <!--<h2 uk-slideshow-parallax="x: 100,-100">Heading</h2>-->
                    <!--<h3 uk-slideshow-parallax="x: 100,-100">Second heading</h3>-->
                    <!--<p uk-slideshow-parallax="x: 200,-200">Lorem ipsum dolor sit amet.</p>-->
                </div>
            </li>
        </ul>
        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>
    </div>
</header> 
@endif


@yield('content')
<footer class="uk-section" id="contacts">
    <div class="uk-container">
        <div class="uk-text-left@s uk-text-center color-white logo uk-padding uk-padding-remove-horizontal uk-margin-medium-bottom">
            <!--klikmebel.by-->
            <img src="images/logo.png" alt="">
        </div>
        <div class="contacts uk-child-width-1-2@m uk-child-width-1-2@s uk-child-width-1-1 uk-text-center uk-text-left@s" uk-grid>
            <div>
                <p class="uk-margin-remove">ИП Федоткин С.Н.</p>
                <p class="uk-margin-remove">УНП 491432785</p>
                <p class="uk-margin-remove">г. Гомель</p>
            </div>
            <div>
                <div class="uk-text-right@s uk-text-center">
                    <p><a href="tel:+375445553704" class="color-white">+375 (44) 555-37-04</a> <br>
                        <a href="tel:+375333613767" class="color-white">+375 (33) 361-37-67</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
<a class="pulse uk-button uk-button-default" uk-toggle="target: #offcanvas-flip">
    <div class="bloc"></div>
    <div class="phone"></div>
</a>
<a class="only-mobile" uk-toggle="target: #offcanvas-flip">Подобрать мебель</a>
<!-- This is the modal -->
<div id="feedback" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Заказать звонок</h2>
        <form method="post" action="{{ route('send.mail') }}">
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Ваше имя" name="userName" id="userName1" required>
                <div id="userName-info1"></div>
            </div>
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="+375 (11) 111-11-11" name="userPhone" id="userPhone1" required>
                <div id="userPhone-info1"></div>
            </div>
            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-default" type="button" id="send1">Заказать</button>
            </div>
        </form>
    </div>
</div>
<div id="response" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title uk-text-center">Спасибо за вашу заявку</h2>
        <p>Наши менеджеры свяжутся с вами в течении 1 часа. <br>Спасибо что выбрали нас!</p>
        <p class="uk-text-right">
            <button class="uk-button uk-button-default uk-modal-close" type="button">Закрыть</button>
        </p>
    </div>
</div>
<div id="offcanvas-flip" uk-offcanvas="flip: true; overlay: true">
    <div class="uk-offcanvas-bar offcanvas-bar">
        <button class="uk-offcanvas-close" type="button" uk-close></button>
        <h3>Подобрать мебель</h3>
        <form method="post" action="function/contact_mail.php" class="choose-form">
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="Ваше имя" name="userName" id="userName" required="required">
                <div id="userName-info"></div>
            </div>
            <div class="uk-margin">
                <input class="uk-input" type="text" placeholder="+375 (11) 111-11-11" name="userPhone" id="userPhone" required="required">
                <div id="userPhone-info"></div>
            </div>
            <div class="uk-margin uk-text-center">
                <button class="uk-button uk-button-primary" type="button" id="send">Подобрать</button>
            </div>
        </form>
    </div>
</div>
<script>
    $( document ).ready(function() {

        function sendContact() {
            var valid;
            valid = validateContact();
            if(valid) {
                $.ajax({
                    url: "/send",
                    data:{
                        username: $("#userName").val(),
                        userphone: $("#userPhone").val()
                    },
                    type: "POST",
                    success:function(data){
                        UIkit.modal('#response').show();
                    },
                    error:function (){}
                });
            }
        }

        function validateContact() {
            var valid = true;
            $(".demoInputBox").css('background-color','');
            $(".info").html('');

            if(!$("#userName").val()) {
                $("#userName-info").html("(Обязательно поле)");
                $("#userName").css('background-color','#FFFFDF');
                valid = false;
            }
            if(!$("#userPhone").val()) {
                $("#userPhone-info").html("(Обязательное поле)");
                $("#userPhone").css('background-color','#FFFFDF');
                valid = false;
            }

            return valid;
        }

        $( "#send" ).click(function( event ) {
            event.preventDefault();
            sendContact();
        });

        function sendContact1() {
            var valid;
            valid = validateContact1();
            if(valid) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                $.ajax({
                    url: "/send",
                    data:{
                        username: $("#userName1").val(),
                        userphone: $("#userPhone1").val()
                    },
                    type: "POST",
                    success:function(data){
                        UIkit.modal('#response').show();
                    },
                    error:function (){}
                });
            }
        }

        function validateContact1() {
            var valid = true;
            $(".demoInputBox").css('background-color','');
            $(".info").html('');

            if(!$("#userName1").val()) {
                $("#userName-info1").html("(Обязательно поле)");
                $("#userName1").css('background-color','#FFFFDF');
                valid = false;
            }
            if(!$("#userPhone1").val()) {
                $("#userPhone-info1").html("(Обязательное поле)");
                $("#userPhone1").css('background-color','#FFFFDF');
                valid = false;
            }

            return valid;
        }

        $( "#send1" ).click(function( event ) {
            event.preventDefault();
            sendContact1();
        });

        function sendContact2() {
            var valid;
            valid = validateContact2();
            if(valid) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                    }
                });
                $.ajax({
                    url: "/send",
                    data:{
                        username: $("#userName2").val(),
                        userphone: $("#userPhone2").val()
                    },
                    type: "POST",
                    success:function(data){
                        UIkit.modal('#response').show();
                        setTimeout(function(){
                            location.reload();
                        }, 3000);
                    },
                    error:function (){}
                });
            }
        }

        function validateContact2() {
            var valid = true;
            $(".demoInputBox").css('background-color','');
            $(".info").html('');

            if(!$("#userName2").val()) {
                $("#userName-info2").html("(Обязательно поле)");
                $("#userName2").css('background-color','#fff');
                valid = false;
            }
            if(!$("#userPhone2").val()) {
                $("#userPhone-info2").html("(Обязательное поле)");
                $("#userPhone2").css('background-color','#fff');
                valid = false;
            }

            return valid;
        }

        $( "#send2" ).click(function( event ) {
            event.preventDefault();
            sendContact2();
        });
    });
</script>
@include('front.partials.statistics')
</body>
</html>
