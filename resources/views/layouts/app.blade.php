<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
    {{-- SEO метатеги --}}
    <title>@yield('title', 'Ёжик кейтеринг')</title>
    <meta name="description" content="@yield('description', 'Кейтеринг любых мероприятий в Алматы и Астане')">
    <meta name="keywords" content="@yield('keywords', 'кейтеринг, алматы, астана')">
	{{-- Open Graph и Twitter Cards --}}
	@include('partials.open-graph')
	
	
	
    <meta name="google-site-verification" content="gtC9No-MdSjHNyzw4y-WMYLMTb3Xg5osUKTPb43eVHk" />
    {{-- Стили --}}
    <link rel="stylesheet" href="{{ asset('style/main.css') }}">
    <link rel="stylesheet" href="{{ asset('style/mainMobile.css') }}">
    <link rel="shortcut icon" href="{{ asset('img/logoFooter.png') }}" type="image/x-icon">
    
    @stack('styles') {{-- Для дополнительных стилей на конкретных страницах --}}
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript">
		(function(m,e,t,r,i,k,a){
			m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
			m[i].l=1*new Date();
			for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
			k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
		})(window, document,'script','https://mc.yandex.ru/metrika/tag.js?id=105734901', 'ym');

		ym(105734901, 'init', {ssr:true, webvisor:true, clickmap:true, ecommerce:"dataLayer", accurateTrackBounce:true, trackLinks:true});
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/105734901" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
<header>
    <div class="main">
        <div class="head">
            <div>
                <a href="{{ route('home') }}"><img class="imgRectangle" src="{{ asset('img/rectangle.png') }}" alt=""></a>
                <a href="{{ route('home') }}"><img class="imgBludo" src="{{ asset('img/logoP.png') }}" alt=""></a>
                <a href="{{ route('home') }}"><img src="{{ asset('img/logo.png') }}" alt="" class="logo"></a>
            </div>
            <nav class="desktop-nav">
				<a href="{{ route('home') }}">Главная</a>
				
				<div class="dropdown">
					<a href="" class="dropdown-toggle">Города</a>
					<div class="dropdown-menu">
						<a href="{{ route('almaty') }}">Алматы</a>
						<a href="{{ route('astana') }}">Астана</a>
					</div>
				</div>
				
				<div class="dropdown">
					<a href="{{ route('uslugi') }}" class="dropdown-toggle">Услуги</a>
					<div class="dropdown-menu">
						<a href="{{ route('uslugi.coffee-break') }}">Кофе брейк</a>
						<a href="{{ route('uslugi.furshet') }}">Фуршет</a>
						<a href="{{ route('uslugi.banket') }}">Выездной банкет</a>
						<a href="{{ route('uslugi.arenda-oborudovaniya') }}">Аренда оборудования</a>
						
					</div>
				</div>
				
				<div class="dropdown">
					<a href="{{ route('menu') }}" class="dropdown-toggle">Меню</a>
					<div class="dropdown-menu">
						<a href="{{ route('menu.coffee-break') }}">Меню кофе брейка</a>
						<a href="{{ route('menu.furshet') }}">Фуршетное меню</a>
						<a href="{{ route('menu.banket') }}">Банкетное меню</a>
						<a href="{{ route('iftar') }}">Ифтар</a>
					</div>
				</div>
				
				<div class="dropdown">
					<a href="{{ route('ceny') }}" class="dropdown-toggle">Цены</a>
					<div class="dropdown-menu">
						<a href="{{ route('ceny.almaty') }}">Цены на кейтеринг в Алматы</a>
						<a href="{{ route('ceny.astana') }}">Цены на кейтеринг в Астане</a>
					</div>
				</div>
				
				<div class="dropdown">
					<a href="" class="dropdown-toggle">Наша компания</a>
					<div class="dropdown-menu">
						<a href="{{ route('o-kompanii') }}">О Компании</a>
						<a href="{{ route('portfolio') }}">Портфолио</a>
						<a href="{{ route('blog') }}">Блог</a>
						<a href="{{ route('kontakty') }}">Контакты</a>
					</div>
				</div>
			</nav>
            <a class="linksHeader" href="tel:+7 (701) 267-29-92">
				Позвонить
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
				
				<!-- Города -->
				<div class="mobile-dropdown">
					<button class="mobile-dropdown-toggle">
						Города
						<span class="arrow">▼</span>
					</button>
					<div class="mobile-dropdown-menu">
						<a href="{{ route('almaty') }}">Алматы</a>
						<a href="{{ route('astana') }}">Астана</a>
					</div>
				</div>
				
				<!-- Услуги -->
				<div class="mobile-dropdown">
					<button class="mobile-dropdown-toggle">
						Услуги
						<span class="arrow">▼</span>
					</button>
					<div class="mobile-dropdown-menu">
						<a href="{{ route('uslugi.coffee-break') }}">Кофе брейк</a>
						<a href="{{ route('uslugi.furshet') }}">Фуршет</a>
						<a href="{{ route('uslugi.banket') }}">Выездной банкет</a>
						<a href="{{ route('uslugi.vyezdnoy-keitering') }}">Выездной кейтеринг</a>
					</div>
				</div>
				
				<!-- Меню -->
				<div class="mobile-dropdown">
					<button class="mobile-dropdown-toggle">
						Меню
						<span class="arrow">▼</span>
					</button>
					<div class="mobile-dropdown-menu">
						<a href="{{ route('menu.coffee-break') }}">Меню кофе брейка</a>
						<a href="{{ route('menu.furshet') }}">Фуршетное меню</a>
						<a href="{{ route('menu.banket') }}">Банкетное меню</a>
					</div>
				</div>
				
				<!-- Цены -->
				<div class="mobile-dropdown">
					<button class="mobile-dropdown-toggle">
						Цены
						<span class="arrow">▼</span>
					</button>
					<div class="mobile-dropdown-menu">
						<a href="{{ route('ceny.almaty') }}">Цены на кейтеринг в Алматы</a>
						<a href="{{ route('ceny.astana') }}">Цены на кейтеринг в Астане</a>
					</div>
				</div>
				
				<!-- Наша компания -->
				<div class="mobile-dropdown">
					<button class="mobile-dropdown-toggle">
						Наша компания
						<span class="arrow">▼</span>
					</button>
					<div class="mobile-dropdown-menu">
						<a href="{{ route('o-kompanii') }}">О Компании</a>
						<a href="{{ route('portfolio') }}">Портфолио</a>
						<a href="{{ route('blog') }}">Блог</a>
						<a href="{{ route('kontakty') }}">Контакты</a>
					</div>
				</div>
				
				<a class="mobile-order-btn" href="tel:+77012672992">Позвонить</a>
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
                <a href="https://wa.me/77012672992">
                    <img src="{{ asset('img/logoWathap.png') }}" alt="">
                </a>
                <a href="https://t.me/ezhikcatering">
                    <img src="{{ asset('img/logoTg.png') }}" alt="">
                </a>
                <a href="https://www.instagram.com/ezhikcatering.kz?igsh=MXJtODRxOW15cjNjYQ%3D%3D&utm_source=qr">
                    <img src="{{ asset('img/logoInst.png') }}" alt="">
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
				<li><a href="{{ route('uslugi.arenda-oborudovaniya') }}">Аренда оборудования</a></li>
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
				<p class="contactsFooterText">Алматы: +7 (701) 267-29-92</p>
            </div>
			<div class="contactsFooter">
                <img src="{{ asset('img/phone.png') }}" alt="">
				<p class="contactsFooterText">Астана: +7 (701) 110-00-11</p>
            </div>
            <div class="contactsFooter">
                <img src="{{ asset('img/mail.png') }}" alt="">
                <p class="contactsFooterText">info@ezhik-catering.kz</p>
            </div>
            <div class="contactsFooter">
                <img src="{{ asset('img/map.png') }}" alt="">
                <p class="contactsFooterText">г.Алматы, ул. Пятницкого, 73</p>
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
<!-- Плавающая кнопка WhatsApp -->
    <a href="https://wa.me/77012672992" target="_blank" class="whatsapp-float" aria-label="Написать в WhatsApp">
        <svg width="32" height="32" viewBox="0 0 24 24" fill="none">
            <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="white"/>
        </svg>
    </a>
	{{-- Schema.org разметка --}}
	@include('partials.schema-org')
    @stack('scripts')
	
	
	<style>

	/* ===================================
   Плавающая кнопка WhatsApp
   =================================== */
.linksFooterAbout ul li a{color:#ffffff;}
.whatsapp-float {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 60px;
    height: 60px;
    background: #25D366;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    z-index: 9999;
    transition: all 0.3s ease;
    text-decoration: none;
    animation: pulse 2s infinite;
}

.whatsapp-float:hover {
    background: #20BA5A;
    transform: scale(1.1);
    box-shadow: 0 6px 30px rgba(37, 211, 102, 0.6);
    animation: none;
}

.whatsapp-float svg {
    width: 32px;
    height: 32px;
}

/* Анимация пульсации */
@keyframes pulse {
    0% {
        box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    }
    50% {
        box-shadow: 0 4px 30px rgba(37, 211, 102, 0.7);
        transform: scale(1.05);
    }
    100% {
        box-shadow: 0 4px 20px rgba(37, 211, 102, 0.4);
    }
}

/* Мобильная адаптация */
@media (max-width: 768px) {
    .whatsapp-float {
        bottom: 20px;
        right: 20px;
        width: 56px;
        height: 56px;
    }
    .mobile-nav-content{
		width:70%;
	}
	.mobile-dropdown-menu a{
		padding:10px;
		border-left:10px solid #1A3853;
	}
	.mobile-dropdown-menu{
		background:#ffffff;
	}
    .whatsapp-float svg {
        width: 28px;
        height: 28px;
    }
	.logo{
		width:150px;
	}
	.mobile-dropdown-toggle{
		padding:0px;
	}
	
	.imgBludo{
       display:none;
	}
	.head{
padding: 15px 0px 15px 0px;
gap: 14rem;
	}
	.mobile-nav-content{
		padding: 20px 20px 20px 20px !important;
	}
}
	</style>
</body>
</html>
</body>
</html>
 
