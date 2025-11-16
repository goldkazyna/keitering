 
@extends('layouts.app')

@section('title', 'Кофе-брейк в Алматы - Ёжик кейтеринг')
@section('description', 'Организуем изысканные кофе-брейки в Алматы для конференций, семинаров, деловых встреч. Три формата: Стандарт, Бизнес, Премиум.')
@section('keywords', 'кофе брейк астана, кофе брейк на мероприятие, организация кофе брейка, кейтеринг астана')

@section('content')
<main>
    <!-- Главный баннер с фото -->
    <section class="service-hero" style="background-image: url('{{ asset('img/coffee-break-hero.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="main">
            <h1>Кофе-брейк в Алматы</h1>
            <p class="hero-subtitle">Вкусный отдых для продуктивных встреч</p>
        </div>
    </section>

    <!-- Описание -->
    <section class="service-intro">
        <div class="main">
            <p class="intro-text">
                Организуем изысканные кофе-брейки в Алматы для конференций, семинаров, деловых встреч и корпоративных мероприятий. 
                Наша команда берет на себя всё — от доставки и сервировки до подбора меню под формат и бюджет вашего события.
            </p>
        </div>
    </section>

    <!-- Что такое кофе-брейк - с фото -->
    <section class="service-about">
        <div class="main">
            <div class="about-content">
                <div class="about-image">
                    <img src="{{ asset('img/coffee-break-about.jpg') }}" alt="Кофе-брейк">
                </div>
                <div class="about-text">
                    <h2>Что такое кофе-брейк?</h2>
                    <p>
                        Кофе-брейк - это короткий перерыв между деловыми сессиями, который помогает участникам восстановить энергию 
                        и наладить неформальное общение. Мы создаем атмосферу уюта и вдохновения, где каждая чашка кофе - это возможность 
                        для новых идей и знакомств.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Форматы -->
    <section class="service-formats">
        <div class="main">
            <h2>Форматы и длительность</h2>
            <p class="section-subtitle">Мы предлагаем три готовых формата, адаптированных по уровню и бюджету:</p>
            
            <div class="formats-grid">
                <div class="format-card">
                    <h3>Стандартный</h3>
                    <p>Классический набор напитков и десертов, формат «без излишеств», но с качеством.</p>
                </div>
                
                <div class="format-card featured">
                    <div class="badge">Популярный</div>
                    <h3>Бизнес</h3>
                    <p>Дополнительно фрукты, снеки, лёгкие сэндвичи или канапе, чуть более просторная сервировка.</p>
                </div>
                
                <div class="format-card">
                    <h3>Премиум</h3>
                    <p>Высокий уровень: авторские десерты, безглютеновые и/или веган-опции, индивидуальные решения.</p>
                </div>
            </div>
            
            <p class="duration-info">
                <strong>Длительность обслуживания:</strong> от 30 минут до 7 часов (или по вашему сценарию)
            </p>
        </div>
    </section>

    <!-- Для каких мероприятий -->
    <section class="service-events">
        <div class="main">
            <h2>Для каких мероприятий подходит</h2>
            <div class="events-grid">
                <div class="event-item">
                    <div class="event-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <rect x="3" y="4" width="18" height="18" rx="2" stroke="white" stroke-width="2"/>
                            <path d="M16 2v4M8 2v4M3 10h18" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h4>Конференции и форумы</h4>
                </div>
                <div class="event-item">
                    <div class="event-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Семинары и тренинги</h4>
                </div>
                <div class="event-item">
                    <div class="event-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <circle cx="9" cy="7" r="4" stroke="white" stroke-width="2"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h4>Деловые встречи</h4>
                </div>
                <div class="event-item">
                    <div class="event-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <rect x="2" y="7" width="20" height="15" rx="2" stroke="white" stroke-width="2"/>
                            <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Презентации</h4>
                </div>
            </div>
            <p class="events-note">Планируете другое событие? Сообщите нам, и мы предложим наилучший вариант!</p>
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

    <!-- Пакеты с иконками -->
    <section class="service-packages">
        <div class="main">
            <h2>Пакеты-предложения</h2>
            <p class="section-subtitle">Готовые решения, которые можно подстроить под ваш бюджет</p>
            
            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M6 1v4M10 1v4M14 1v4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Стандарт</h3>
                    <p class="package-desc">Напитки + выпечка/десерты</p>
                    <a href="{{ route('kontakty') }}" class="package-btn">Узнать цену</a>
                </div>
                
                <div class="package-card featured">
                    <div class="badge">Популярный</div>
                    <div class="package-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h3>Бизнес</h3>
                    <p class="package-desc">Стандарт + фрукты, снеки, канапе</p>
                    <a href="{{ route('kontakty') }}" class="package-btn">Узнать цену</a>
                </div>
                
                <div class="package-card">
                    <div class="package-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h3>Премиум</h3>
                    <p class="package-desc">Полный комплекс с индивидуальными опциями</p>
                    <a href="{{ route('kontakty') }}" class="package-btn">Узнать цену</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Организационные моменты с иконками -->
    <section class="service-info">
        <div class="main">
            <h2>Организационные моменты</h2>
            
            <div class="info-grid">
                <div class="info-item">
                    <div class="info-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="white" stroke-width="2"/>
                            <circle cx="9" cy="7" r="4" stroke="white" stroke-width="2"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Минимальное количество гостей</h4>
                    <p>От 10 человек</p>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M9 11l3 3L22 4" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h4>Что входит в стоимость</h4>
                    <p>Доставка, установка и уборка, оборудование (кофемашина, посуда, столы, скатерти), профессиональный персонал</p>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="white" stroke-width="2"/>
                            <polyline points="9 22 9 12 15 12 15 22" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Сервировка</h4>
                    <p>Шведский стол или барная стойка по вашему желанию</p>
                </div>
                
                <div class="info-item">
                    <div class="info-icon">
                        <svg width="40" height="40" viewBox="0 0 24 24" fill="none">
                            <circle cx="12" cy="12" r="10" stroke="white" stroke-width="2"/>
                            <path d="M12 6v6l4 2" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h4>Сроки заказа</h4>
                    <p>Желательно за 1–2 дня до мероприятия</p>
                </div>
            </div>
            
            <p class="info-note">Работаем в будни, выходные и праздничные дни. Обслуживаем мероприятия по всей Алматы</p>
        </div>
    </section>

    <!-- Преимущества -->
    <section class="service-benefits">
        <div class="main">
            <h2>Почему стоит выбрать нас</h2>
            
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-number">20+</div>
                    <p>Лет опыта работы в сфере кейтеринга</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="white" stroke-width="2"/>
                            <path d="M9 22V12h6v10" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <p>Собственное производство</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            <path d="M22 4L12 14.01l-3-3" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <p>Сервис «под ключ»</p>
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