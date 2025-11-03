<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- SEO метатеги --}}
    <title>@yield('title', 'Ёжик кейтеринг')</title>
    <meta name="description" content="@yield('description', 'Кейтеринг любых мероприятий в Алматы и Астане')">
    <meta name="keywords" content="@yield('keywords', 'кейтеринг, алматы, астана')">
    
    {{-- Стили --}}
    <link rel="stylesheet" href="{{ asset('style/main.css') }}">
    <link rel="stylesheet" href="{{ asset('style/mainMobile.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logoFooter.png') }}" type="image/x-icon">
    
    @stack('styles') {{-- Для дополнительных стилей на конкретных страницах --}}
</head>
<body>
<header>
    <div class="main">
        <div class="head">
            <div>
                <img class="imgRectangle" src="{{ asset('img/rectangle.png') }}" alt="">
                <img class="imgBludo" src="{{ asset('img/logoP.png') }}" alt="">
                <img src="{{ asset('img/logo.png') }}" alt="">
            </div>
            <nav class="desktop-nav">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('almaty') }}">Города</a>
                <div class="dropdown">
                    <a href="{{ route('uslugi') }}" class="dropdown-toggle">Услуги</a>
                    <div class="dropdown-menu">
                        <a href="{{ route('uslugi.coffee-break') }}">Кофе брейк</a>
                        <a href="{{ route('uslugi.furshet') }}">Фуршет</a>
                        <a href="{{ route('uslugi.banket') }}">Выездной банкет</a>
                        <a href="{{ route('uslugi.vyezdnoy-keitering') }}">Выездной кейтеринг</a>
                    </div>
                </div>
                <a href="{{ route('o-kompanii') }}">О Компании</a>
                <a href="{{ route('portfolio') }}">Портфолио</a>
                <a href="{{ route('kontakty') }}">Контакты</a>
            </nav>
            <a class="linksHeader" href="{{ route('zakazat') }}">
                Заказать кейтеринг
            </a>
            <!-- Гамбургер кнопка -->
            <button class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
        <!-- Мобильное меню сбоку -->
        <div class="mobile-nav-overlay"></div>
        <nav class="mobile-nav">
            <div class="mobile-nav-header">
                <button class="close-menu">
                    <span>×</span>
                </button>
            </div>
            <div class="mobile-nav-content">
                <a href="{{ route('home') }}">Главная</a>
                <a href="{{ route('almaty') }}">Города</a>
                <a href="{{ route('o-kompanii') }}">О Компании</a>
                <a href="{{ route('portfolio') }}">Портфолио</a>
                <a href="{{ route('kontakty') }}">Контакты</a>
                <a class="mobile-order-btn" href="{{ route('zakazat') }}">Заказать кейтеринг</a>
            </div>
        </nav>
    </div>
</header>

{{-- Основной контент страницы --}}
@yield('content')

<footer>
<div class="main">
    <div class="blocksFooter">
        <div class="blockFooter">
            <img src="{{ asset('img/logoFooter.png') }}" alt="">
            <h2 class="blockFooterText">Кейтеринг любых мероприятий <br>
                в Алматы и Астане.</h2>
            <h2 class="blockFooterText">Решим все проблемы за вас! </h2>
            <div class="linksFooter">
                <a href="">
                    <img src="{{ asset('img/logoWathap.png') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('img/logoTg.png') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('img/logoInst.png') }}" alt="">
                </a>
                <a href="">
                    <img src="{{ asset('img/logoVk.png') }}" alt="">
                </a>
            </div>
        </div>
<div class="blockFooterContact">
    <div class="blockFooter">
        <h2 class="blockFooterTextTitle">Услуги</h2>
        <div class="linksFooterAbout">
            <ul>
                <li><a href="{{ route('uslugi.coffee-break') }}">Кофе-брейк</a></li>
                <li><a href="{{ route('uslugi.furshet') }}">Фуршет</a></li>
                <li><a href="{{ route('uslugi.banket') }}">Выездной банкет</a></li>
                <li><a href="{{ route('uslugi.vyezdnoy-keitering') }}">Выездной кейтеринг</a></li>
            </ul>
        </div>
    </div>
    <div class="blockFooter">
        <h2 class="blockFooterTextTitle">Города</h2>
        <div class="linksFooterAbout">
            <ul>
                <li><a href="{{ route('almaty') }}">Кейтеринг в Алматы</a></li>
                <li><a href="{{ route('astana') }}">Кейтеринг в Астане</a></li>
            </ul>
        </div>
    </div>
    <div class="blockFooter">
        <h2 class="blockFooterTextTitle">Контакты</h2>
        <div class="linksFooterAbout">
            <div class="contactsFooter">
                <img src="{{ asset('img/phone.png') }}" alt="">
                <p class="contactsFooterText">+7 (707) 817-17-88</p>
            </div>
            <div class="contactsFooter">
                <img src="{{ asset('img/mail.png') }}" alt="">
                <p class="contactsFooterText">hello@ezhik.kz</p>
            </div>
            <div class="contactsFooter">
                <img src="{{ asset('img/map.png') }}" alt="">
                <p class="contactsFooterText">г.Алматы, ул. Пушкина 34</p>
            </div>
            <div class="contactsFooter">
                <img src="{{ asset('img/clock.png') }}" alt="">
                <p class="contactsFooterText">Пн-Вс: 9:00 - 21:00</p>
            </div>
        </div>
    </div>
</div>
    </div>
    <div class="downBlock">
        <h2 class="downBlockText">© 2025 Ёжик кейтеринг. Все права защищены. </h2>
        <h2 class="downBlockText">Политика конфиденциальности. Блог. </h2>
    </div>
</div>
</footer>

<script src="{{ asset('script/index.js') }}"></script>
@stack('scripts') {{-- Для дополнительных скриптов на конкретных страницах --}}
</body>
</html>
 
