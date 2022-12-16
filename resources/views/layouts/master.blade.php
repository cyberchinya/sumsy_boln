<!DOCTYPE html>
<body lang="ru">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>@yield('title')</title>
    <meta content="" name="description">
    @csrf
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="{{ asset('assets/img/herb3.png') }}" rel="icon">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- Версия для слепых -->
    <link href="{{ asset('assets/sleep/css/special.min.css') }}">
    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
</head>
@yield('styles')

<body>
<!-- COOKIE -->
<style>.mcook{z-index:1000;font-family:'Segoe UI',Tahoma,Geneva,Verdana,sans-serif;font-size:12px;background-color:#f2f2f2;display:flex;align-items:center;opacity:0;visibility:hidden;transform:translatey(100%);position:fixed;bottom:0;left:0;right:0;transition:.2s}.mcook.mvisible{opacity:1;visibility:visible;transform:none}.mcook__container{max-width:1200px;padding-left:10px;padding-right:10px;margin:0 auto;padding-top:10px;padding-bottom:10px;position:relative}.mcook a{color:#1893ed}.mcook a:hover{text-decoration:none}.mcook__close{position:absolute;right:-2px;top:0;transition:.3s;cursor:pointer}.mcook__close svg{transition:.2s}.mcook__close:hover svg{transform:rotate(90deg)}.mcook__close svg{width:7px;height:7px}</style>
<div class="mcook mvisible">
    <div class="mcook__container">
        <div class="mcook__text">
            Для повышения удобства работы с сайтом  "Сюмсинская районная больница" <a target="_blank" href="http://sumsi.udmmed.ru/about/politika_obrabotki_pers_dannykh.php">использует файлы cookie</a>. В cookie содержатся данные о прошлых посещениях сайта. Если вы не хотите, чтобы эти данные обрабатывались, отключите cookie в настройках браузера.
        </div>
        <div class="mcook__close" onclick="hideMcook()">
            <svg width="10" height="10" viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M1 1L9 9" stroke="#575757" stroke-width="1.6" stroke-linecap="round"/>
                <path d="M1 9L9 1" stroke="#575757" stroke-width="1.6" stroke-linecap="round"/>
            </svg>
        </div>
    </div>
</div>
<script>function readCookie(e){for(var o=e+"=",n=document.cookie.split(";"),i=0;i<n.length;i++){for(var r=n[i];" "==r.charAt(0);)r=r.substring(1,r.length);if(0==r.indexOf(o))return r.substring(o.length,r.length)}return null}if("no"==readCookie("hideMcook")){var elem=document.querySelector(".mcook");elem.classList.remove("mvisible")}function hideMcook(){console.log("no"),document.cookie="hideMcook=no",document.querySelector(".mcook").classList.remove("mvisible")}</script>
<!-- COOKIE -->
@include('layouts.header')

@yield('content')

@include('layouts.contact')

@include('layouts.footer')
<script src="{{ asset('assets/vendor/purecounter/purecounter.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<!-- версия для слепых -->
<script src="{{ asset('assets/sleep/js/jquery.js') }}"></script>
<script src="{{ asset('assets/sleep/js/uhpv-full.min.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>
<div style="display:none;">
<div id="modalbox">
    <h2 class="informac">Информация</h2>
    <p>Ознакомьтесь пожалуйста с&nbsp;материалами по&nbsp;профилактике злокачественных новообразований и&nbsp;заполните анкету.</p>
    <a href="http://sumsi.udmmed.ru/personal/anketa_podozreniya_na_rak.php" class="fancybox-inline">заполнить анкету</a>

</div>
</div>


@yield('scripts')
</body>
