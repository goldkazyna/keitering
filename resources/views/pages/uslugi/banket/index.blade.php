@extends('layouts.app')

@section('title', 'Выездной банкет — заказать банкет в Алматы и Астане')
@section('description', 'Организация выездных банкетов. Пакеты от 18 000 ₸/чел. Полное меню, персонал, оборудование. Свадьбы, юбилеи, корпоративы. Заказать: +7 701 267-29-92')
@section('keywords', 'банкет, выездной банкет, банкет алматы, банкет астана, организация банкета, свадебный банкет, корпоративный банкет')

@section('content')
<main>
    <!-- Главный баннер -->
    <section class="service-hero">
        <div class="main">
            <h1>Выездной банкет</h1>
            <p class="hero-subtitle">Ресторанный сервис там, где удобно вам</p>
        </div>
    </section>

    <!-- Описание -->
    <section class="service-intro">
        <div class="main">
            <p class="intro-text">
                Организуем выездные банкеты в Астане и Алматы — на природе, в шатрах, на террасах, 
                в загородных резиденциях и любых площадках по вашему выбору. Мы превращаем любую локацию 
                в изысканный ресторан: с профессиональной кухней, сервировкой, обслуживанием и декором.
            </p>
        </div>
    </section>

    <!-- Выбор города -->
    <section class="city-selector">
        <div class="main">
            <h2>Выберите город</h2>
            
            <div class="cities-grid">
                <a href="{{ route('astana.banket') }}" class="city-card">
                    <div class="city-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="white" stroke-width="2"/>
                            <circle cx="12" cy="10" r="3" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Астана</h3>
                    <p>Выездной банкет в столице</p>
                    <div class="city-arrow">→</div>
                </a>

                <a href="{{ route('almaty.banket') }}" class="city-card">
                    <div class="city-icon">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="none">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="white" stroke-width="2"/>
                            <circle cx="12" cy="10" r="3" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h3>Алматы</h3>
                    <p>Выездной банкет в южной столице</p>
                    <div class="city-arrow">→</div>
                </a>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="service-cta">
        <div class="main">
            <h2>Готовы обсудить ваше мероприятие?</h2>
            <p class="cta-subtitle">Свяжитесь с нами для расчёта стоимости и обсуждения деталей</p>
            
            <div class="cta-contacts">
                <a href="https://wa.me/77012672992" target="_blank" class="cta-contact whatsapp">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="white"/>
                    </svg>
                    Написать в WhatsApp
                </a>
                
                <a href="tel:+77012672992" class="cta-contact phone">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Позвонить
                </a>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
/* Общие стили */
.service-hero,
.service-intro,
.city-selector,
.service-cta {
    padding: 60px 0;
    font-family: "Lora", sans-serif;
}

/* Герой */
.service-hero {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-align: center;

}
.service-hero {
    padding: 0px 0 60px 0 !important;
}
.service-hero h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
}
.service-hero {
    padding: 0px 0 60px 0 !important;
}
.hero-subtitle {
    font-size: 22px;
    opacity: 0.95;
}

/* Вводный текст */
.service-intro {
    background: #f8f9fa;
}

.intro-text {
    font-size: 20px;
    line-height: 1.8;
    text-align: center;
    max-width: 900px;
    margin: 0 auto;
    color: #333;
}

/* Выбор города */
.city-selector {
    background: white;
}

.city-selector h2 {
    font-size: 36px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 50px;
    font-weight: 700;
}

.cities-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 40px;
    max-width: 900px;
    margin: 0 auto;
}

.city-card {
    background: white;
    border: 3px solid #e0e0e0;
    border-radius: 16px;
    padding: 50px 40px;
    text-align: center;
    text-decoration: none;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.city-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    opacity: 0;
    transition: opacity 0.3s ease;
    z-index: 0;
}

.city-card:hover::before {
    opacity: 1;
}

.city-card:hover {
    border-color: #50667E;
    transform: translateY(-10px);
    box-shadow: 0 20px 50px rgba(26, 56, 83, 0.3);
}

.city-card > * {
    position: relative;
    z-index: 1;
}

.city-icon {
    width: 100px;
    height: 100px;
    margin: 0 auto 25px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: all 0.3s ease;
}

.city-card:hover .city-icon {
    background: rgba(255,255,255,0.2);
}

.city-card h3 {
    font-size: 32px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 700;
    transition: color 0.3s ease;
}

.city-card:hover h3 {
    color: white;
}

.city-card p {
    font-size: 18px;
    color: #666;
    margin-bottom: 20px;
    transition: color 0.3s ease;
}

.city-card:hover p {
    color: rgba(255,255,255,0.9);
}

.city-arrow {
    font-size: 32px;
    color: #50667E;
    font-weight: 700;
    transition: all 0.3s ease;
}

.city-card:hover .city-arrow {
    color: white;
    transform: translateX(10px);
}

/* CTA */
.service-cta {
    background: #f8f9fa;
    text-align: center;
}

.service-cta h2 {
    font-size: 36px;
    color: #1A3853;
    margin-bottom: 15px;
    font-weight: 700;
}

.cta-subtitle {
    font-size: 18px;
    color: #666;
    margin-bottom: 60px;
}

.cta-contacts {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.cta-contact {
    padding: 18px 40px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 18px;
    font-weight: 600;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    transition: all 0.3s ease;
}

.cta-contact.whatsapp {
    background: #25D366;
    color: white;
}

.cta-contact.whatsapp:hover {
    background: #20BA5A;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
}

.cta-contact.phone {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
}

.cta-contact.phone:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(26, 56, 83, 0.3);
}

/* Мобильная адаптация */
@media (max-width: 768px) {
    .main {
        padding: 0 20px;
    }

    .service-hero {
        padding-top: 100px;
        padding-bottom: 40px;
    }

    .service-hero h1 {
        font-size: 32px;
    }

    .hero-subtitle {
        font-size: 18px;
    }

    .city-selector h2,
    .service-cta h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .intro-text {
        font-size: 16px;
    }

    .cities-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .cta-contacts {
        flex-direction: column;
        align-items: stretch;
    }

    .cta-contact {
        justify-content: center;
    }
}
</style>
@endpush