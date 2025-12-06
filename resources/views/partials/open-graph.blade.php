{{-- Open Graph мета-теги для соцсетей --}}

{{-- Основные OG теги --}}
<meta property="og:site_name" content="Ёжик Кейтеринг">
<meta property="og:locale" content="ru_RU">
<meta property="og:type" content="@yield('og_type', 'website')">
<meta property="og:title" content="@yield('og_title', $__env->yieldContent('title', 'Ёжик кейтеринг'))">
<meta property="og:description" content="@yield('og_description', $__env->yieldContent('description', 'Кейтеринг любых мероприятий в Алматы и Астане. Кофе-брейки, фуршеты, банкеты с 2003 года.'))">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="@yield('og_image', asset('img/og-image.jpg'))">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">
<meta property="og:image:alt" content="Ёжик Кейтеринг - услуги кейтеринга в Алматы и Астане">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="@yield('og_title', $__env->yieldContent('title', 'Ёжик кейтеринг'))">
<meta name="twitter:description" content="@yield('og_description', $__env->yieldContent('description', 'Кейтеринг любых мероприятий в Алматы и Астане'))">
<meta name="twitter:image" content="@yield('og_image', asset('img/og-image.jpg'))">

{{-- Дополнительные мета-теги --}}
<meta name="robots" content="index, follow">
<meta name="author" content="Ёжик Кейтеринг">
<meta name="geo.region" content="KZ">
<meta name="geo.placename" content="Almaty, Astana">
<link rel="canonical" href="{{ url()->current() }}">

{{-- Языковые альтернативы (если будут) --}}
<link rel="alternate" hreflang="ru" href="{{ url()->current() }}">
<link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">