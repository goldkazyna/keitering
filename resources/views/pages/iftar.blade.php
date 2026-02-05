@extends('layouts.app')

@section('title', 'Ифтар в Алматы — заказать Ифтар на Рамадан 2025 | Ёжик Кейтеринг')
@section('description', 'Организация Ифтар в Алматы на Рамадан 2025. Доставка сетов, выездной Ифтар с полным сервисом, Ифтар на студии. Сеты от 7 000 ₸. Халяль меню. Заказать: +7 701 267-29-92')
@section('keywords', 'ифтар алматы, ифтар доставка, ифтар кейтеринг, рамадан 2025, ифтар заказать, ауызашар алматы, ифтар меню')

@section('content')
<main>
    <!-- Герой -->
    <section class="service-hero" style="background-image: url('{{ asset('img/iftar-hero.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="main">
            <h1>Ифтар в Алматы</h1>
            <p class="hero-subtitle">Организуем тёплый и вкусный Ифтар для вас, вашей семьи и коллег</p>
        </div>
    </section>

    <!-- Вводный текст -->
    <section class="service-intro">
        <div class="main">
            <p class="intro-text">
                Рамадан 2025 начинается 17 февраля. Компания «Ёжик Кейтеринг» предлагает три формата организации Ифтар в Алматы: 
                доставка готовых сетов, выездное обслуживание на вашей локации и проведение Ифтар на нашей студии. 
                Все блюда — халяль.
            </p>
        </div>
    </section>

    <!-- 3 формата -->
    <section class="service-formats">
        <div class="main">
            <h2>Форматы проведения Ифтар</h2>
            <p class="section-subtitle">Выберите удобный вариант для вашего мероприятия</p>

            <div class="formats-grid">
                <div class="format-card">
                    <h3>Доставка сетов</h3>
                    <p>Доставка выпечки, закусок, салатов и горячих блюд в крафтовой упаковке. Минимальный заказ — на 5 персон.</p>
                </div>

                <div class="format-card featured">
                    <div class="badge">Популярный</div>
                    <h3>Выездной Ифтар</h3>
                    <p>Полная организация на вашей локации — в офис, домой или на площадку. Сервировка, посуда, персонал.</p>
                </div>

                <div class="format-card">
                    <h3>Ифтар на студии</h3>
                    <p>Приглашаем на уютную студию. Вместимость 25–30 человек. Всё включено: еда, сервировка, атмосфера.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Сет №1 — Меню -->
    <section class="service-menu">
        <div class="main">
            <h2>Сет №1 — Полный Ифтар · 10 000 ₸/чел</h2>
            <p class="section-subtitle">Минимальный заказ — на 5 персон. Доставка в крафтовой одноразовой посуде.</p>

            <div class="menu-grid">
                <div class="menu-column">
                    <h3>Основное меню</h3>

                    <div class="menu-category">
                        <h4>Выпечка</h4>
                        <ul>
                            <li>Мини-лепёшки, 50 гр</li>
                            <li>Баурсаки, 30 гр</li>
                            <li>Самса с мясом / с курицей (на выбор), 50 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Салаты (2 на выбор)</h4>
                        <ul>
                            <li>Салат свекольный с яблоками и орехами, 100 гр</li>
                            <li>Салат с баклажанами хрустящими, 100 гр</li>
                            <li>Салат с курицей и картофелем пай «Ёжик», 100 гр</li>
                            <li>Салат Оливье с мясом отварным, 100 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Холодные закуски</h4>
                        <ul>
                            <li>Овощная нарезка и сыр с дип-соусами, 150 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Первое горячее (1 на выбор)</h4>
                        <ul>
                            <li>Куриный суп-лапша, 250 гр</li>
                            <li>Сорпа из баранины / говядины, 250 гр</li>
                            <li>Борщ из говядины, 250 гр</li>
                            <li>Крем-суп (чечевичный, сырный), 250 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Горячие блюда (1 на выбор)</h4>
                        <ul>
                            <li>Куырдак из баранины, 350 гр</li>
                            <li>Филе судака с гарниром, 350 гр</li>
                            <li>Фрикадельки в восточном соусе с пампушками, 350 гр</li>
                            <li>Манты в ассортименте, 5 шт</li>
                            <li>Лагман суру / гуру, 400 гр</li>
                        </ul>
                    </div>
                </div>

                <div class="menu-column highlight">
                    <h3>Десерт, напитки и доставка</h3>

                    <div class="menu-category">
                        <h4>Десерт (2 на выбор)</h4>
                        <ul>
                            <li>Финики, 2 шт</li>
                            <li>Восточное ассорти (курага, изюм, орехи, жент, иримшик, курт), 500 гр</li>
                            <li>Мини-пирожные (молочная девочка, вупи-пай, медовый), 50 гр</li>
                            <li>Профитроли со взбитыми сливками, 40 гр</li>
                            <li>Синнабоны мини, 40 гр</li>
                            <li>Фруктовое ассорти, 500 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Напитки</h4>
                        <ul>
                            <li>Вода без газа, 0,5 л</li>
                            <li>Морс ягодный (на выбор), 200 гр</li>
                            <li>Компот из сухофруктов (на выбор), 200 гр</li>
                        </ul>
                    </div>

                    <p class="menu-note">В стоимость включено: крафтовая одноразовая посуда, ланч-боксы, приборы, салфетки и доставка по Алматы</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Сет №2 — Меню -->
    <section class="service-menu" style="background: #f8f9fa;">
        <div class="main">
            <h2>Сет №2 — Базовый Ифтар · 7 000 ₸/чел</h2>
            <p class="section-subtitle">Минимальный заказ — на 5 персон. Доставка в крафтовой одноразовой посуде.</p>

            <div class="menu-grid">
                <div class="menu-column" style="background: white;">
                    <h3>Основное меню</h3>

                    <div class="menu-category">
                        <h4>Выпечка</h4>
                        <ul>
                            <li>Мини-лепёшки, 50 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Холодные закуски</h4>
                        <ul>
                            <li>Овощная нарезка и сыр с дип-соусами, 150 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Первое горячее (1 на выбор)</h4>
                        <ul>
                            <li>Куриный суп-лапша, 250 гр</li>
                            <li>Борщ из говядины, 250 гр</li>
                            <li>Крем-суп (чечевичный, сырный), 250 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Горячие блюда (1 на выбор)</h4>
                        <ul>
                            <li>Манты в ассортименте, 5 шт</li>
                            <li>Лагман суру / гуру, 400 гр</li>
                        </ul>
                    </div>
                </div>

                <div class="menu-column highlight">
                    <h3>Десерт, напитки и доставка</h3>

                    <div class="menu-category">
                        <h4>Десерт (2 на выбор)</h4>
                        <ul>
                            <li>Финики, 2 шт</li>
                            <li>Фруктовое ассорти, 500 гр</li>
                        </ul>
                    </div>

                    <div class="menu-category">
                        <h4>Напитки</h4>
                        <ul>
                            <li>Вода без газа, 0,5 л</li>
                        </ul>
                    </div>

                    <p class="menu-note">В стоимость включено: крафтовая одноразовая посуда, ланч-боксы, приборы, салфетки и доставка по Алматы</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Пакеты-предложения -->
    <section class="service-packages">
        <div class="main">
            <h2>Пакеты-предложения</h2>
            <p class="section-subtitle">Готовые решения для вашего Ифтар</p>

            <div class="packages-grid">
                <div class="package-card">
                    <div class="package-icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <rect x="1" y="3" width="15" height="13" rx="2"/>
                            <path d="M16 8h2a2 2 0 012 2v6a2 2 0 01-2 2h-2"/>
                            <path d="M5 21h14"/>
                            <path d="M12 17v4"/>
                            <path d="M8 17v4"/>
                        </svg>
                    </div>
                    <h3>Базовый</h3>
                    <p class="package-desc">Сет №2 с доставкой — сытный Ифтар в удобной упаковке</p>
                    <a href="https://wa.me/77012672992?text=Здравствуйте!%20Хочу%20заказать%20Ифтар%20Сет%20№2" class="package-btn">7 000 ₸/чел</a>
                </div>

                <div class="package-card featured">
                    <div class="badge">Популярный</div>
                    <div class="package-icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/>
                            <circle cx="9" cy="7" r="4"/>
                            <path d="M23 21v-2a4 4 0 00-3-3.87"/>
                            <path d="M16 3.13a4 4 0 010 7.75"/>
                        </svg>
                    </div>
                    <h3>Полный</h3>
                    <p class="package-desc">Сет №1 с доставкой — расширенное меню с салатами и десертами</p>
                    <a href="https://wa.me/77012672992?text=Здравствуйте!%20Хочу%20заказать%20Ифтар%20Сет%20№1" class="package-btn">10 000 ₸/чел</a>
                </div>

                <div class="package-card">
                    <div class="package-icon">
                        <svg width="36" height="36" viewBox="0 0 24 24" fill="none" stroke="white" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
                            <polyline points="9,22 9,12 15,12 15,22"/>
                        </svg>
                    </div>
                    <h3>На студии</h3>
                    <p class="package-desc">Полная организация Ифтар у нас, 25–30 человек</p>
                    <a href="https://wa.me/77012672992?text=Здравствуйте!%20Интересует%20Ифтар%20на%20студии" class="package-btn">Узнать цену</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Почему мы -->
    <section class="service-benefits">
        <div class="main">
            <h2>Почему выбирают нас</h2>

            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-number">20+</div>
                    <p>лет опыта в кейтеринге в Алматы</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-number">5 000+</div>
                    <p>проведённых мероприятий</p>
                </div>
                <div class="benefit-card">
                    <div class="benefit-number">100%</div>
                    <p>халяль продукты</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="service-cta">
        <div class="main">
            <h2>Закажите Ифтар прямо сейчас</h2>
            <p class="cta-subtitle">Ураза начинается 17 февраля. Свяжитесь с нами — поможем выбрать идеальный вариант. Доставка только по Алматы.</p>

            <div class="cta-contacts">
                <a href="https://wa.me/77012672992?text=Здравствуйте!%20Хочу%20заказать%20Ифтар" target="_blank" class="cta-contact whatsapp">
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
.service-hero,
.service-intro,
.service-formats,
.service-menu,
.service-packages,
.service-benefits,
.service-cta {
    padding: 60px 0;
    font-family: "Lora", sans-serif;
}

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
    top: 0; left: 0; right: 0; bottom: 0;
    background: linear-gradient(135deg, rgba(26, 56, 83, 0.85) 0%, rgba(80, 102, 126, 0.85) 100%);
    z-index: 1;
}

.service-hero .main { position: relative; z-index: 2; }
.service-hero h1 { font-size: 48px; font-weight: 700; margin-bottom: 15px; }
.hero-subtitle { font-size: 22px; opacity: 0.95; }

.service-intro { background: #f8f9fa; }
.intro-text { font-size: 20px; line-height: 1.8; text-align: center; max-width: 900px; margin: 0 auto; color: #333; }

h2 { font-size: 36px; color: #1A3853; text-align: center; margin-bottom: 40px; font-weight: 700; }
.section-subtitle { text-align: center; font-size: 18px; color: #666; margin-bottom: 40px; }

.service-formats { background: white; }
.formats-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; margin-bottom: 40px; }
.format-card { background: #f8f9fa; padding: 40px 30px; border-radius: 12px; text-align: center; border: 2px solid transparent; transition: all 0.3s ease; position: relative; }
.format-card.featured { border-color: #50667E; background: white; box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15); transform: scale(1.05); }
.format-card:hover { transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
.badge { position: absolute; top: -15px; left: 50%; transform: translateX(-50%); background: linear-gradient(135deg, #1A3853 0%, #50667E 100%); color: white; padding: 5px 20px; border-radius: 20px; font-size: 14px; font-weight: 600; }
.format-card h3 { font-size: 24px; color: #1A3853; margin-bottom: 15px; font-weight: 600; }
.format-card p { font-size: 16px; line-height: 1.6; color: #666; }

.service-menu { background: white; }
.menu-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 40px; }
.menu-column { background: #f8f9fa; padding: 40px; border-radius: 12px; }
.menu-column.highlight { background: linear-gradient(135deg, #1A3853 0%, #50667E 100%); color: white; }
.menu-column h3 { font-size: 24px; color: #1A3853; margin-bottom: 25px; font-weight: 600; }
.menu-column.highlight h3 { color: white; }
.menu-category { margin-bottom: 25px; }
.menu-category h4 { font-size: 18px; color: #50667E; margin-bottom: 10px; font-weight: 600; }
.menu-column.highlight h4 { color: rgba(255,255,255,0.9); }
.menu-column ul { list-style: none; padding: 0; }
.menu-column ul li { padding: 8px 0; padding-left: 20px; position: relative; font-size: 15px; color: #666; }
.menu-column.highlight ul li { color: rgba(255,255,255,0.9); }
.menu-column ul li::before { content: '✓'; position: absolute; left: 0; color: #50667E; font-weight: 700; }
.menu-column.highlight ul li::before { color: #FFD700; }
.menu-note { margin-top: 20px; padding-top: 20px; border-top: 1px solid rgba(255,255,255,0.2); font-size: 14px; font-style: italic; }

.service-packages { background: #f8f9fa; }
.packages-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
.package-card { background: white; padding: 40px 30px; border-radius: 12px; text-align: center; border: 2px solid #e0e0e0; transition: all 0.3s ease; position: relative; }
.package-card.featured { border-color: #50667E; box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15); transform: scale(1.05); }
.package-card:hover { border-color: #50667E; transform: translateY(-5px); box-shadow: 0 10px 30px rgba(0,0,0,0.1); }
.package-icon { width: 80px; height: 80px; margin: 0 auto 20px; background: linear-gradient(135deg, #1A3853 0%, #50667E 100%); border-radius: 50%; display: flex; align-items: center; justify-content: center; }
.package-card h3 { font-size: 26px; color: #1A3853; margin-bottom: 15px; font-weight: 700; }
.package-desc { font-size: 16px; color: #666; margin-bottom: 25px; line-height: 1.6; }
.package-btn { display: inline-block; padding: 12px 30px; background: linear-gradient(135deg, #1A3853 0%, #50667E 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease; }
.package-btn:hover { transform: translateY(-2px); box-shadow: 0 5px 15px rgba(26, 56, 83, 0.3); }

.service-benefits { background: #f8f9fa; }
.benefits-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 30px; }
.benefit-card { background: linear-gradient(135deg, #1A3853 0%, #50667E 100%); padding: 40px 30px; border-radius: 12px; text-align: center; color: white; }
.benefit-number { font-size: 48px; font-weight: 700; margin-bottom: 15px; }
.benefit-card p { font-size: 16px; line-height: 1.6; }

.service-cta { background: white; text-align: center; }
.service-cta h2 { margin-bottom: 15px; }
.cta-subtitle { font-size: 18px; color: #666; margin-bottom: 50px; }
.cta-contacts { display: flex; gap: 30px; justify-content: center; flex-wrap: wrap; }
.cta-contact { padding: 18px 40px; border-radius: 8px; text-decoration: none; font-size: 18px; font-weight: 600; display: inline-flex; align-items: center; gap: 12px; transition: all 0.3s ease; }
.cta-contact.whatsapp { background: #25D366; color: white; }
.cta-contact.whatsapp:hover { background: #20BA5A; transform: translateY(-2px); box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3); }
.cta-contact.phone { background: linear-gradient(135deg, #1A3853 0%, #50667E 100%); color: white; }
.cta-contact.phone:hover { transform: translateY(-2px); box-shadow: 0 10px 25px rgba(26, 56, 83, 0.3); }

@media (max-width: 768px) {
    .service-hero { padding-top: 0px; padding-bottom: 40px; min-height: 300px; }
    .service-hero h1 { font-size: 32px; }
    .hero-subtitle { font-size: 18px; }
    h2 { font-size: 28px; margin-bottom: 30px; }
    .intro-text { font-size: 16px; }
    .formats-grid, .menu-grid, .packages-grid, .benefits-grid { grid-template-columns: 1fr; gap: 20px; }
    .format-card.featured, .package-card.featured { transform: scale(1); }
    .cta-contacts { flex-direction: column; align-items: stretch; gap: 15px; }
    .cta-contact { justify-content: center; }
}
</style>
@endpush