@extends('layouts.app')

@section('title', 'Цены на кейтеринг в Астане — Ёжик Кейтеринг')
@section('description', 'Цены на кейтеринг в Астане: кофе-брейк от 2 500 ₸, фуршет от 6 000 ₸, банкет от 18 000 ₸. Доставка по городу. Заказать: +7 701 110-00-11')
@section('keywords', 'цены кейтеринг астана, стоимость фуршета астана, цены банкет астана')

@section('content')
<main>
    <!-- Главный баннер -->
    <section class="pricing-hero">
        <div class="main">
            <h1>Цены на кейтеринг в Астане</h1>
            <p class="hero-subtitle">Прозрачные цены и гибкие пакеты для любого мероприятия</p>
        </div>
    </section>

    <!-- Описание -->
    <section class="pricing-intro">
        <div class="main">
            <div class="intro-content">
                <h2>Профессиональный кейтеринг по честным ценам</h2>
                <p>
                    Компания «Ёжик Кейтеринг» предоставляет услуги выездного обслуживания в Астане. 
                    Мы предлагаем конкурентные цены на кейтеринг без скрытых доплат — вы платите только за то, 
                    что получаете. В стоимость включены доставка, сервировка, обслуживание и уборка.
                </p>
                <div class="intro-features">
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Прозрачное ценообразование</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Без скрытых доплат</span>
                    </div>
                    <div class="feature-item">
                        <span class="feature-icon">✓</span>
                        <span>Гибкие пакеты услуг</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Кофе-брейк -->
    <section class="service-pricing-section">
        <div class="main">
            <div class="service-pricing-header">
                <div class="service-icon">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                        <path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" stroke="white" stroke-width="2"/>
                        <path d="M6 1v4M10 1v4M14 1v4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                    </svg>
                </div>
                <h2>Кофе-брейк</h2>
                <p>Идеально для конференций, семинаров и деловых встреч</p>
            </div>

            <div class="simple-packages">
                <div class="simple-package-card">
                    <h3>Стандарт</h3>
                    <div class="package-price">от 2 800 ₸</div>
                    <p class="price-note">за человека</p>
                    <a href="{{ route('astana.coffee-break') }}" class="package-link">Подробнее →</a>
                </div>

                <div class="simple-package-card featured">
                    <div class="popular-badge">Популярный</div>
                    <h3>Бизнес</h3>
                    <div class="package-price">от 4 200 ₸</div>
                    <p class="price-note">за человека</p>
                    <a href="{{ route('astana.coffee-break') }}" class="package-link">Подробнее →</a>
                </div>

                <div class="simple-package-card">
                    <h3>Премиум</h3>
                    <div class="package-price">от 6 530 ₸</div>
                    <p class="price-note">за человека</p>
                    <a href="{{ route('astana.coffee-break') }}" class="package-link">Подробнее →</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Фуршет -->
    <section class="service-pricing-section alt">
        <div class="main">
            <div class="service-pricing-header">
                <div class="service-icon">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                        <path d="M12 2L2 7l10 5 10-5-10-5z" stroke="white" stroke-width="2"/>
                        <path d="M2 17l10 5 10-5M2 12l10 5 10-5" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <h2>Фуршет</h2>
                <p>Элегантный формат для корпоративов, презентаций и торжеств</p>
            </div>

            <div class="detailed-packages">
                <div class="detailed-package-card">
                    <div class="package-header-small">
                        <h3>Комфорт</h3>
                        <div class="package-price-small">10 000 ₸</div>
                    </div>
                    <ul class="package-list-compact">
                        <li>Чай, кофе</li>
                        <li>Вода, безалкогольные напитки (не менее 2-х видов)</li>
                        <li>Фуршетные салаты (2 вида)</li>
                        <li>Холодные закуски / канапе (3 вида)</li>
                        <li>Горячие закуски (1 вид)</li>
                        <li>Десерты / выпечка (2 вида)</li>
                        <li>Сезонные фрукты и ягоды</li>
                    </ul>
                    <a href="{{ route('astana.furshet') }}" class="package-btn-small">Заказать</a>
                </div>

                <div class="detailed-package-card featured">
                    <div class="popular-badge">Популярный</div>
                    <div class="package-header-small">
                        <h3>Бизнес</h3>
                        <div class="package-price-small">15 000 ₸</div>
                    </div>
                    <ul class="package-list-compact">
                        <li>Чай, кофе</li>
                        <li>Вода, безалкогольные напитки (не менее 3-х видов)</li>
                        <li>Фуршетные салаты (3 вида)</li>
                        <li>Холодные закуски / канапе (5 видов)</li>
                        <li>Горячие закуски (2 вида)</li>
                        <li>Десерты / выпечка (3 вида)</li>
                        <li>Сезонные фрукты и ягоды</li>
                    </ul>
                    <a href="{{ route('astana.furshet') }}" class="package-btn-small">Заказать</a>
                </div>

                <div class="detailed-package-card">
                    <div class="package-header-small">
                        <h3>Премиум</h3>
                        <div class="package-price-small">20 000 ₸</div>
                    </div>
                    <ul class="package-list-compact">
                        <li>Чай, кофе, вода, безалкогольные напитки (не менее 3-х видов)</li>
                        <li>Салаты (3 вида)</li>
                        <li>Холодные закуски / канапе (4 вида)</li>
                        <li>Горячие закуски (2 вида)</li>
                        <li>Горячие блюда (2 вида)</li>
                        <li>Гарниры (2 вида)</li>
                        <li>Выпечка (1 вид)</li>
                        <li>Десерты (2 вида)</li>
                    </ul>
                    <a href="{{ route('astana.furshet') }}" class="package-btn-small">Заказать</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Выездной банкет -->
    <section class="service-pricing-section">
        <div class="main">
            <div class="service-pricing-header">
                <div class="service-icon">
                    <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                        <rect x="2" y="7" width="20" height="15" rx="2" stroke="white" stroke-width="2"/>
                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" stroke="white" stroke-width="2"/>
                    </svg>
                </div>
                <h2>Выездной банкет</h2>
                <p>Полноценное ресторанное обслуживание на вашей площадке</p>
            </div>

            <div class="detailed-packages">
                <div class="detailed-package-card">
                    <div class="package-header-small">
                        <h3>Комфорт</h3>
                        <div class="package-price-small">18 000 ₸</div>
                    </div>
                    <ul class="package-list-compact">
                        <li>Чай, кофе, вода, безалкогольные напитки (не менее 2-х видов)</li>
                        <li>Салаты (2 вида)</li>
                        <li>Холодные закуски (2 вида)</li>
                        <li>Горячие закуски (1 вид)</li>
                        <li>Горячие блюда (2 вида на выбор)</li>
                        <li>Гарниры (2 вида на выбор)</li>
                        <li>Выпечка (1 вид)</li>
                        <li>Десерты (1 вид)</li>
                    </ul>
                    <a href="{{ route('astana.banket') }}" class="package-btn-small">Заказать</a>
                </div>

                <div class="detailed-package-card featured">
                    <div class="popular-badge">Популярный</div>
                    <div class="package-header-small">
                        <h3>Бизнес</h3>
                        <div class="package-price-small">22 000 ₸</div>
                    </div>
                    <ul class="package-list-compact">
                        <li>Чай, кофе, вода, безалкогольные напитки (не менее 3-х видов)</li>
                        <li>Салаты (3 вида)</li>
                        <li>Холодные закуски (2 вида)</li>
                        <li>Горячие закуски (2 вида)</li>
                        <li>Горячие блюда (2 вида)</li>
                        <li>Гарниры (2 вида)</li>
                        <li>Выпечка (2 вида)</li>
                        <li>Десерты (2 вида)</li>
                        <li>Сезонные фрукты и ягоды</li>
                    </ul>
                    <a href="{{ route('astana.banket') }}" class="package-btn-small">Заказать</a>
                </div>

                <div class="detailed-package-card">
                    <div class="package-header-small">
                        <h3>Премиум</h3>
                        <div class="package-price-small">26 000 ₸</div>
                    </div>
                    <ul class="package-list-compact">
                        <li>Чай, кофе, вода, безалкогольные напитки (не менее 3-х видов)</li>
                        <li>Салаты (4 вида)</li>
                        <li>Холодные закуски (3 вида)</li>
                        <li>Горячие закуски (2 вида)</li>
                        <li>Горячие блюда (2 вида)</li>
                        <li>Гарниры (2 вида)</li>
                        <li>Выпечка (2 вида)</li>
                        <li>Десерты (2 вида)</li>
                        <li>Сезонные фрукты/ягоды</li>
                        <li>Орехи и сухофрукты</li>
                    </ul>
                    <a href="{{ route('astana.banket') }}" class="package-btn-small">Заказать</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Дополнительная информация -->
    <section class="pricing-info">
        <div class="main">
            <h2>Что входит в стоимость</h2>
            <div class="info-grid">
                <div class="info-card">
                    <h4>Доставка и логистика</h4>
                    <p>Привезём всё необходимое в любую точку Астаны</p>
                </div>
                <div class="info-card">
                    <h4>Оборудование и посуда</h4>
                    <p>Столы, скатерти, посуда, приборы, салфетки</p>
                </div>
                <div class="info-card">
                    <h4>Профессиональный персонал</h4>
                    <p>Официанты, повара, координатор мероприятия</p>
                </div>
                <div class="info-card">
                    <h4>Уборка после мероприятия</h4>
                    <p>Полная уборка площадки и вывоз оборудования</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="pricing-cta">
        <div class="main">
            <h2>Нужна консультация по ценам?</h2>
            <p class="cta-subtitle">Свяжитесь с нами для индивидуального расчёта и уточнения деталей</p>
            
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
.pricing-hero,
.pricing-intro,
.service-pricing-section,
.pricing-info,
.pricing-cta {
    padding: 60px 0;
    font-family: "Lora", sans-serif;
}

/* Герой */
.pricing-hero {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-align: center;
    padding: 0px 0 60px 0;
}

.pricing-hero h1 {
    font-size: 48px;
    font-weight: 700;
    margin-bottom: 15px;
}

.hero-subtitle {
    font-size: 22px;
    opacity: 0.95;
}

/* Введение */
.pricing-intro {
    background: white;
}

.intro-content {
    max-width: 900px;
    margin: 0 auto;
    text-align: center;
}

.intro-content h2 {
    font-size: 32px;
    color: #1A3853;
    margin-bottom: 20px;
    font-weight: 700;
}

.intro-content p {
    font-size: 18px;
    line-height: 1.8;
    color: #333;
    margin-bottom: 30px;
}

.intro-features {
    display: flex;
    gap: 30px;
    justify-content: center;
    flex-wrap: wrap;
}

.feature-item {
    display: flex;
    align-items: center;
    gap: 10px;
    font-size: 16px;
    color: #333;
}

.feature-icon {
    width: 30px;
    height: 30px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
}

/* Секции услуг */
.service-pricing-section {
    background: #f8f9fa;
}

.service-pricing-section.alt {
    background: white;
}

.service-pricing-header {
    text-align: center;
    margin-bottom: 50px;
}

.service-icon {
    width: 90px;
    height: 90px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.service-pricing-header h2 {
    font-size: 36px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 700;
}

.service-pricing-header p {
    font-size: 18px;
    color: #666;
}

/* Простые пакеты (Кофе-брейк) */
.simple-packages {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    max-width: 1000px;
    margin: 0 auto;
}

.simple-package-card {
    background: white;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    padding: 40px 30px;
    text-align: center;
    transition: all 0.3s ease;
    position: relative;
}

.simple-package-card.featured {
    border-color: #50667E;
    box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15);
    transform: scale(1.05);
}

.simple-package-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.popular-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    padding: 5px 20px;
    border-radius: 20px;
    font-size: 13px;
    font-weight: 600;
}

.simple-package-card h3 {
    font-size: 28px;
    color: #1A3853;
    margin-bottom: 20px;
    font-weight: 700;
}

.simple-package-card .package-price {
    font-size: 40px;
    color: #50667E;
    font-weight: 700;
    margin-bottom: 10px;
}

.price-note {
    font-size: 16px;
    color: #666;
    margin-bottom: 25px;
}

.package-link {
    display: inline-block;
    padding: 12px 30px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.package-link:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 56, 83, 0.3);
}

/* Детальные пакеты (Фуршет, Банкет) */
.detailed-packages {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.detailed-package-card {
    background: white;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
}

.detailed-package-card.featured {
    border-color: #50667E;
    box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15);
    transform: scale(1.02);
}

.detailed-package-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.package-header-small {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 25px 20px;
    text-align: center;
    color: white;
}

.package-header-small h3 {
    font-size: 24px;
    margin-bottom: 10px;
    font-weight: 700;
}

.package-price-small {
    font-size: 32px;
    font-weight: 700;
}

.package-list-compact {
    list-style: none;
    padding: 25px 20px;
    margin: 0;
}

.package-list-compact li {
    padding: 10px 0;
    padding-left: 20px;
    position: relative;
    font-size: 14px;
    color: #666;
    border-bottom: 1px solid #f0f0f0;
    line-height: 1.5;
}

.package-list-compact li:last-child {
    border-bottom: none;
}

.package-list-compact li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #50667E;
    font-weight: 700;
    font-size: 16px;
}

.package-btn-small {
    display: block;
    margin: 0 20px 25px;
    padding: 12px 25px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.package-btn-small:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 56, 83, 0.3);
}

/* Информация */
.pricing-info {
    background: white;
}

.pricing-info h2 {
    font-size: 36px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 50px;
    font-weight: 700;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
}

.info-card {
    background: #f8f9fa;
    padding: 30px 25px;
    border-radius: 12px;
    text-align: center;
}

.info-card h4 {
    font-size: 18px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 600;
}

.info-card p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* CTA */
.pricing-cta {
    background: #f8f9fa;
    text-align: center;
}

.pricing-cta h2 {
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

    .pricing-hero {
        padding-top: 100px;
        padding-bottom: 40px;
    }

    .pricing-hero h1 {
        font-size: 32px;
    }
	.pricing-hero h1 {
        padding-top:0px;
    }
    .hero-subtitle {
        font-size: 18px;
    }

    h2 {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .intro-features {
        flex-direction: column;
        align-items: center;
    }

    .simple-packages,
    .detailed-packages,
    .info-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .simple-package-card.featured,
    .detailed-package-card.featured {
        transform: scale(1);
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
