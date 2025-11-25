@extends('layouts.app')

@section('title', 'Аренда оборудования, посуды и текстиля - Ёжик Кейтеринг')
@section('description', 'Профессиональное оборудование, мебель, посуда и текстиль в аренду для мероприятий в Алматы и Астане')

@section('content')
<main>
    <!-- Герой -->
    <section class="city-hero">
        <div class="main">
            <h1>Аренда оборудования, посуды и текстиля</h1>
            <p class="hero-subtitle">Всё необходимое для идеального мероприятия</p>
        </div>
    </section>

    <!-- Вводный текст -->
    <section class="city-intro">
        <div class="main">
            <p class="intro-text">
                Компания «Ёжик Кейтеринг» предоставляет в аренду профессиональное оборудование, мебель, посуду и текстиль для любых форматов мероприятий - от делового кофе-брейка до выездного банкета на сотни гостей. Мы позаботимся о том, чтобы Ваше событие выглядело безупречно, без лишних хлопот и переплат.
            </p>
        </div>
    </section>

    <!-- Услуги аренды -->
    <section class="city-services">
        <div class="main">
            <h2>Что мы предлагаем в аренду</h2>
            
            <div class="services-grid">
                <!-- Посуда -->
                <div class="service-card">
                    <div class="service-image" style="background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                                <circle cx="12" cy="12" r="6" stroke="white" stroke-width="2"/>
                                <circle cx="12" cy="12" r="2" fill="white"/>
                            </svg>
                        </div>
                        <h3>Посуда</h3>
                        <p>Мы предлагаем посуду на любой стиль и формат мероприятия:</p>
                        <ul class="service-features">
                            <li>Фарфор премиум-класса - тарелки, чашки, блюда разных диаметров</li>
                            <li>Стеклянная посуда - фужеры, бокалы, стаканы для воды, вина, шампанского, коктейлей</li>
                            <li>Приборы из нержавеющей стали - столовые, десертные и сервировочные наборы</li>
                            <li>Одноразовая посуда премиум-сегмента - из экологичных материалов</li>
                            <li>Посуда для десертов и фуршета - креманки, тарталетки, подставки</li>
                        </ul>
                        <p style="font-size: 14px; color: #1A3853; font-weight: 600; margin-top: 15px; text-align: center;">
                            💎 Всё идеально чистое, отполированное и готовое к сервировке
                        </p>
                    </div>
                </div>

                <!-- Мебель и оборудование -->
                <div class="service-card">
                    <div class="service-image" style="background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <rect x="3" y="8" width="18" height="12" rx="2" stroke="white" stroke-width="2"/>
                                <path d="M7 8V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2" stroke="white" stroke-width="2"/>
                                <line x1="3" y1="13" x2="21" y2="13" stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Мебель и оборудование</h3>
                        <p>Создаём функциональную и эстетичную зону для гостей:</p>
                        <ul class="service-features">
                            <li>Банкетные и фуршетные столы</li>
                            <li>Коктейльные столы</li>
                            <li>Стулья и банкетные кресла (с чехлами или без)</li>
                            <li>Шатры, тенты - защита от солнца и дождя</li>
                            <li>Освещение и гирлянды - для создания атмосферы вечера</li>
                            <li>Бойлеры, кофемашины, мармиты, гриль и холодильники</li>
                            <li>Генераторы и удлинители - для автономных площадок</li>
                        </ul>
                        <p style="font-size: 14px; color: #1A3853; font-weight: 600; margin-top: 15px; text-align: center;">
                            🔧 Всё оборудование проверено, доставляется и монтируется нашей командой
                        </p>
                    </div>
                </div>

                <!-- Текстиль -->
                <div class="service-card">
                    <div class="service-image" style="background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <path d="M3 6h18M3 12h18M3 18h18" stroke="white" stroke-width="2" stroke-linecap="round"/>
                                <circle cx="7" cy="6" r="1" fill="white"/>
                                <circle cx="7" cy="12" r="1" fill="white"/>
                                <circle cx="7" cy="18" r="1" fill="white"/>
                            </svg>
                        </div>
                        <h3>Текстиль и оформление</h3>
                        <p>Мы создаём настроение через детали:</p>
                        <ul class="service-features">
                            <li>Скатерти и юбки для фуршетных столов (белые, цветные, под стиль бренда)</li>
                            <li>Чехлы на стулья, банты и ленты</li>
                            <li>Салфетки тканевые и декоративные дорожки</li>
                            <li>Драпировки и текстильное оформление залов</li>
                            <li>Возможность брендирования (логотип на текстиле)</li>
                        </ul>
                        <p style="font-size: 14px; color: #1A3853; font-weight: 600; margin-top: 15px; text-align: center;">
                            🌸 При желании добавим флористику и декоративные элементы
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Условия аренды -->
    <section class="city-benefits">
        <div class="main">
            <h2>Условия аренды</h2>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="white" stroke-width="2"/>
                            <circle cx="12" cy="10" r="3" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Минимальный заказ</h4>
                    <p>От 10 единиц каждого вида или общая сумма от 30 000 ₸</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <rect x="1" y="3" width="15" height="13" rx="2" stroke="white" stroke-width="2"/>
                            <path d="M16 8h2a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4" stroke="white" stroke-width="2"/>
                            <circle cx="6" cy="19" r="2" stroke="white" stroke-width="2"/>
                            <circle cx="18" cy="19" r="2" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Доставка и монтаж</h4>
                    <p>В зависимости от расстояния, по договорённости. Монтаж рассчитывается индивидуально</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h4>Срок аренды</h4>
                    <p>От 1 дня, возможны пролонгации. Залог вносится при получении и возвращается после проверки</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="white" stroke-width="2"/>
                            <path d="M22 4L12 14.01l-3-3" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h4>Санитарная обработка</h4>
                    <p>Всё оборудование проходит санитарную обработку и упаковку перед доставкой</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Оплата и дополнительные услуги -->
    <section class="city-services" style="background: #f8f9fa;">
        <div class="main">
            <h2>Оплата и дополнительные услуги</h2>
            
            <div class="services-grid" style="grid-template-columns: repeat(2, 1fr);">
                <!-- Оплата -->
                <div class="service-card">
                    <div class="service-image" style="background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="5" width="20" height="14" rx="2" stroke="white" stroke-width="2"/>
                                <line x1="2" y1="10" x2="22" y2="10" stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Оплата и гарантии</h3>
                        <ul class="service-features">
                            <li>Предоплата - 50% от суммы заказа</li>
                            <li>Окончательный расчёт - после возврата оборудования</li>
                            <li>Всё оборудование проходит санитарную обработку и упаковку перед доставкой</li>
                            <li>При повреждении или утрате взимается компенсация только за конкретную единицу</li>
                        </ul>
                    </div>
                </div>

                <!-- Дополнительные услуги -->
                <div class="service-card">
                    <div class="service-image" style="background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" stroke="white" stroke-width="2"/>
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5" stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Дополнительные услуги</h3>
                        <ul class="service-features">
                            <li>Установка и демонтаж шатров, мебели и оборудования</li>
                            <li>Декорирование зала и сервировка столов</li>
                            <li>Работа координатора на площадке</li>
                            <li>Комплексная подготовка мероприятия «под ключ»</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="city-cta">
        <div class="main">
            <h2>✨ «Ёжик Кейтеринг» - всё, что нужно для стильного и удобного мероприятия</h2>
            <p style="margin-bottom:20px;">Мы привезём, установим, оформим - Вам останется только наслаждаться праздником</p>
            
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
                    Алматы: +7 (701) 267-29-92
                </a>

                <a href="tel:+77011100011" class="cta-contact phone">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                    Астана: +7 (701) 110-00-11
                </a>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
/* Общие стили */

.city-intro,
.city-services,
.city-benefits,
.city-cta {
    padding: 60px 0;
    font-family: "Lora", sans-serif;
}

/* Герой */
.city-hero {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-align: center;
    padding: 0px 0 60px 0;
    font-family: "Lora", sans-serif;
}

.city-hero h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
}

.hero-subtitle {
    font-size: 22px;
    opacity: 0.95;
}

/* Вводный текст */
.city-intro {
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

/* Услуги */
.city-services {
    background: white;
}

h2 {
    font-size: 36px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 50px;
    font-weight: 700;
}

.services-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.service-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.service-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.service-image {
    height: 250px;
    background-size: cover;
    background-position: center;
    position: relative;
}

.service-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(135deg, rgba(26, 56, 83, 0.7) 0%, rgba(80, 102, 126, 0.7) 100%);
}

.service-content {
    padding: 30px;
    position: relative;
}

.service-icon {
    width: 80px;
    height: 80px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: -55px auto 20px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.2);
}

.service-content h3 {
    font-size: 24px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 15px;
    font-weight: 700;
}

.service-content p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    text-align: center;
    margin-bottom: 20px;
}

.service-features {
    list-style: none;
    padding: 0;
    margin-bottom: 25px;
}

.service-features li {
    padding: 8px 0;
    padding-left: 25px;
    position: relative;
    font-size: 14px;
    color: #666;
    text-align: left;
}

.service-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #50667E;
    font-weight: 700;
}

.service-btn {
    display: block;
    text-align: center;
    padding: 12px 30px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.service-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 56, 83, 0.3);
}

/* Преимущества */
.city-benefits {
    background: #f8f9fa;
}

.benefits-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.benefit-item {
    text-align: center;
    padding: 30px 20px;
    background: white;
    border-radius: 12px;
    transition: all 0.3s ease;
}

.benefit-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.benefit-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.benefit-item h4 {
    font-size: 18px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 600;
}

.benefit-item p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
}

/* CTA */
.city-cta {
    background: white;
    text-align: center;
}

.city-cta h2 {
    margin-bottom: 15px;
}

.city-cta > p {
    font-size: 18px;
    color: #666;
    margin-bottom: 50px;
}

.cta-contacts {
    display: flex;
    gap: 20px;
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
    .city-hero h1{
        padding-top:0px;
    }
    .city-hero {
        padding-top: 100px;
        padding-bottom: 40px;
    }

    .city-hero h1 {
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

    .services-grid {
        grid-template-columns: 1fr !important;
        gap: 30px;
    }

    .benefits-grid {
        grid-template-columns: repeat(1, 1fr);
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