@extends('layouts.app')

@section('title', 'Меню Кофе-брейка - Ёжик кейтеринг')
@section('description', 'Организуем изысканные кофе-брейки для конференций, семинаров, деловых встреч. Три формата: Стандарт, Бизнес, Премиум.')
@section('keywords', 'кофе брейк астана, кофе брейк на мероприятие, организация кофе брейка, кейтеринг астана')

@section('content')
<main>
    <!-- Главный баннер с фото -->
    <section class="service-hero" style="background-image: url('{{ asset('img/coffee-break-hero.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="main">
            <h1>Меню Кофе-брейка</h1>
            <p class="hero-subtitle">Вкусный отдых для продуктивных встреч</p>
        </div>
    </section>



    
    <!-- Меню -->
    <section class="service-menu">
        <div class="main">
            <h2>Меню и ассортимент</h2>
            
            <div class="menu-grid">
                <div class="menu-column">
                    <h3>Базовое меню</h3>
                    
                    <div class="menu-category">
                        <h4>Напитки</h4>
                        <ul>
                            <li>Свежесваренный кофе (эспрессо, американо, капучино)</li>
                            <li>Чёрный и зелёный чай</li>
                            <li>Питьевая вода</li>
                            <li>Натуральный сок</li>
                        </ul>
                    </div>
                    
                    <div class="menu-category">
                        <h4>Выпечка и десерты</h4>
                        <ul>
                            <li>Круассаны</li>
                            <li>Сэндвичи</li>
                            <li>Печенье</li>
                            <li>Несладкая выпечка</li>
                        </ul>
                    </div>
                    
                    <div class="menu-category">
                        <h4>Фрукты и снеки</h4>
                        <ul>
                            <li>Сезонные фрукты</li>
                            <li>Лёгкие снеки</li>
                        </ul>
                    </div>
                </div>
                
                <div class="menu-column highlight">
                    <h3>Дополнительные опции</h3>
                    <ul>
                        <li>Сэндвичи и канапе</li>
                        <li>Лёгкие салаты</li>
                        <li>Безалкогольные коктейли</li>
                        <li>Вегетарианское меню</li>
                        <li>Веганское меню</li>
                        <li>Безглютеновые варианты</li>
                    </ul>
                    <p class="menu-note">Все детали меню обсуждаем индивидуально под формат мероприятия</p>
                </div>
            </div>
        </div>
    </section>

    

    <!-- Контакты и заказ -->
    <section class="service-cta">
        <div class="main">
            <h2>Готовы обсудить ваше мероприятие?</h2>
            <p class="cta-subtitle">Свяжитесь с нами, и мы подберём идеальное решение</p>
            
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
.service-about,
.service-formats,
.service-events,
.service-menu,
.service-packages,
.service-info,
.service-benefits,
.service-cta {
    padding: 60px 0;
    font-family: "Lora", sans-serif;
}

/* Герой с фото */
.service-hero {
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    color: white;
    text-align: center;
    padding-top: 150px;
    position: relative;
    min-height: 400px;
}

.hero-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);
    z-index: 1;
}

.service-hero .main {
    position: relative;
    z-index: 2;
}

.service-hero h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
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

/* О кофе-брейке с фото */
.service-about {
    background: white;
}

.about-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 50px;
    align-items: center;
}

.about-image img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    border-radius: 12px;
    box-shadow: 0 10px 30px rgba(0,0,0,0.15);
}

.about-text h2 {
    text-align: left;
    margin-bottom: 25px;
}

.about-text p {
    font-size: 18px;
    line-height: 1.8;
    color: #333;
}

/* Общие заголовки */
h2 {
    font-size: 36px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 40px;
    font-weight: 700;
}

.section-subtitle {
    text-align: center;
    font-size: 18px;
    color: #666;
    margin-bottom: 40px;
}

/* Форматы */
.service-formats {
    background: white;
}

.formats-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.format-card {
    background: #f8f9fa;
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid transparent;
    transition: all 0.3s ease;
    position: relative;
}

.format-card.featured {
    border-color: #50667E;
    background: white;
    box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15);
    transform: scale(1.05);
}

.format-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.badge {
    position: absolute;
    top: -15px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    padding: 5px 20px;
    border-radius: 20px;
    font-size: 14px;
    font-weight: 600;
}

.format-card h3 {
    font-size: 24px;
    color: #1A3853;
    margin-bottom: 15px;
    font-weight: 600;
}

.format-card p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
}

.duration-info {
    text-align: center;
    font-size: 16px;
    color: #333;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

/* Мероприятия */
.service-events {
    background: #f8f9fa;
}

.events-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 30px;
}

.event-item {
    text-align: center;
}

.event-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 15px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.event-item h4 {
    font-size: 16px;
    color: #1A3853;
    font-weight: 600;
}

.events-note {
    text-align: center;
    font-size: 16px;
    color: #666;
    font-style: italic;
}

/* Меню */
.service-menu {
    background: white;
}

.menu-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.menu-column {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 12px;
}

.menu-column.highlight {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
}

.menu-column h3 {
    font-size: 24px;
    color: #1A3853;
    margin-bottom: 25px;
    font-weight: 600;
}

.menu-column.highlight h3 {
    color: white;
}

.menu-category {
    margin-bottom: 25px;
}

.menu-category h4 {
    font-size: 18px;
    color: #50667E;
    margin-bottom: 10px;
    font-weight: 600;
}

.menu-column.highlight h4 {
    color: rgba(255,255,255,0.9);
}

.menu-column ul {
    list-style: none;
    padding: 0;
}

.menu-column ul li {
    padding: 8px 0;
    padding-left: 20px;
    position: relative;
    font-size: 15px;
    color: #666;
}

.menu-column.highlight ul li {
    color: rgba(255,255,255,0.9);
}

.menu-column ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #50667E;
    font-weight: 700;
}

.menu-column.highlight ul li::before {
    color: #FFD700;
}

.menu-note {
    margin-top: 20px;
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,0.2);
    font-size: 14px;
    font-style: italic;
}

/* Пакеты с иконками */
.service-packages {
    background: #f8f9fa;
}

.packages-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.package-card {
    background: white;
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    border: 2px solid #e0e0e0;
    transition: all 0.3s ease;
    position: relative;
}

.package-card.featured {
    border-color: #50667E;
    box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15);
    transform: scale(1.05);
}

.package-card:hover {
    border-color: #50667E;
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.package-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.package-card h3 {
    font-size: 26px;
    color: #1A3853;
    margin-bottom: 15px;
    font-weight: 700;
}

.package-desc {
    font-size: 16px;
    color: #666;
    margin-bottom: 25px;
    line-height: 1.6;
}

.package-btn {
    display: inline-block;
    padding: 12px 30px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.package-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 56, 83, 0.3);
}

/* Информация с иконками */
.service-info {
    background: white;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 30px;
}

.info-item {
    padding: 30px 20px;
    background: #f8f9fa;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
}

.info-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.info-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.info-item h4 {
    font-size: 16px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 600;
}

.info-item p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.info-note {
    text-align: center;
    font-size: 16px;
    color: #666;
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
}

/* Преимущества */
.service-benefits {
    background: #f8f9fa;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.benefit-card {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    color: white;
}

.benefit-number {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
}

.benefit-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-card p {
    font-size: 16px;
    line-height: 1.6;
}

/* CTA */
.service-cta {
    background: white;
    text-align: center;
}

.service-cta h2 {
    margin-bottom: 15px;
}

.cta-subtitle {
    font-size: 18px;
    color: #666;
    margin-bottom: 50px;
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
        min-height: 300px;
    }

    .service-hero h1 {
        font-size: 32px;
    }

    .hero-subtitle {
        font-size: 18px;
    }

    h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .intro-text {
        font-size: 16px;
    }

    .about-content {
        grid-template-columns: 1fr;
        gap: 30px;
    }

    .about-image img {
        height: 300px;
    }

    .about-text h2 {
        text-align: center;
    }

    .formats-grid,
    .events-grid,
    .menu-grid,
    .packages-grid,
    .benefits-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .info-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .format-card.featured,
    .package-card.featured {
        transform: scale(1);
    }

    .cta-contacts {
        flex-direction: column;
        align-items: stretch;
        gap: 15px;
    }

    .cta-contact {
        justify-content: center;
    }
}
</style>
@endpush