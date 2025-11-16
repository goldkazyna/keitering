@extends('layouts.app')

@section('title', 'Кейтеринг в Алматы - Ёжик кейтеринг')
@section('description', 'Услуги кейтеринга в Алматы: кофе-брейк, фуршет, выездной банкет. Организация питания на мероприятиях любого уровня.')
@section('keywords', 'кейтеринг астана, кофе брейк астана, фуршет астана, банкет астана')

@section('content')
<main>
    <!-- Герой -->
    <section class="city-hero">
        <div class="main">
            <h1>Кейтеринг в Алматы</h1>
            <p class="hero-subtitle">Организация питания на мероприятиях любого уровня</p>
        </div>
    </section>

	<!-- Вводный текст -->
	<section class="city-intro">
		<div class="main">
			<p class="intro-text">
				Компания «Ёжик Кейтеринг» предлагает полный спектр услуг выездного обслуживания в Алматы. 
				Более 20 лет опыта работы в сфере кейтеринга, собственное производство и профессиональная команда - 
				всё для вашего идеального мероприятия.
			</p>
		</div>
	</section>

    <!-- Наши услуги -->
    <section class="city-services">
        <div class="main">
            <h2>Наши услуги в Алматы</h2>
            
            <div class="services-grid">
                <!-- Кофе-брейк -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('{{ asset('img/coffee-break-about.jpg') }}');">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <path d="M18 8h1a4 4 0 0 1 0 8h-1M2 8h16v9a4 4 0 0 1-4 4H6a4 4 0 0 1-4-4V8z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M6 1v4M10 1v4M14 1v4" stroke="white" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                        </div>
                        <h3>Кофе-брейк</h3>
                        <p>Организация кофе-пауз для конференций, семинаров и деловых встреч. Три формата обслуживания от стандарта до премиума.</p>
                        <ul class="service-features">
                            <li>От 10 человек</li>
                            <li>Свежий кофе и выпечка</li>
                            <li>Профессиональная подача</li>
                        </ul>
                        <a href="{{ route('almaty.coffee-break') }}" class="service-btn">Подробнее</a>
                    </div>
                </div>

                <!-- Фуршет -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('{{ asset('img/furshet-about.jpg') }}');">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <path d="M12 2L2 7l10 5 10-5-10-5z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 17l10 5 10-5M2 12l10 5 10-5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </div>
                        <h3>Фуршет</h3>
                        <p>Выездное фуршетное обслуживание для корпоративов, презентаций и торжественных мероприятий. Широкий выбор закусок и напитков.</p>
                        <ul class="service-features">
                            <li>От 20 человек</li>
                            <li>Изысканные закуски</li>
                            <li>Стильная сервировка</li>
                        </ul>
                        <a href="{{ route('almaty.furshet') }}" class="service-btn">Подробнее</a>
                    </div>
                </div>

                <!-- Выездной банкет -->
                <div class="service-card">
                    <div class="service-image" style="background-image: url('{{ asset('img/banket-about.jpg') }}');">
                        <div class="service-overlay"></div>
                    </div>
                    <div class="service-content">
                        <div class="service-icon">
                            <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                                <rect x="2" y="7" width="20" height="15" rx="2" stroke="white" stroke-width="2"/>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16" stroke="white" stroke-width="2"/>
                            </svg>
                        </div>
                        <h3>Выездной банкет</h3>
                        <p>Полноценное банкетное обслуживание на вашей площадке. Горячие блюда, профессиональные официанты, весь необходимый инвентарь.</p>
                        <ul class="service-features">
                            <li>От 30 человек</li>
                            <li>Горячие блюда</li>
                            <li>Полный сервис</li>
                        </ul>
                        <a href="{{ route('almaty.banket') }}" class="service-btn">Подробнее</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Почему мы -->
    <section class="city-benefits">
        <div class="main">
            <h2>Почему выбирают нас в Алматы</h2>
            
            <div class="benefits-grid">
                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M12 2L15.09 8.26L22 9.27L17 14.14L18.18 21.02L12 17.77L5.82 21.02L7 14.14L2 9.27L8.91 8.26L12 2Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </div>
                    <h4>Опыт с 2018 года</h4>
                    <p>Филиал «Канапе-Кейтеринг» успешно работает в Алматы</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" stroke="white" stroke-width="2"/>
                            <circle cx="9" cy="7" r="4" stroke="white" stroke-width="2"/>
                            <path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Профессиональная команда</h4>
                    <p>Опытные повара и официанты</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z" stroke="white" stroke-width="2"/>
                            <path d="M9 22V12h6v10" stroke="white" stroke-width="2"/>
                        </svg>
                    </div>
                    <h4>Собственное производство</h4>
                    <p>Контроль качества на всех этапах</p>
                </div>

                <div class="benefit-item">
                    <div class="benefit-icon">
                        <svg width="50" height="50" viewBox="0 0 24 24" fill="none">
                            <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="white" stroke-width="2"/>
                            <path d="M22 4L12 14.01l-3-3" stroke="white" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <h4>Сервис «под ключ»</h4>
                    <p>Берём на себя все организационные вопросы</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="city-cta">
        <div class="main">
            <h2>Готовы организовать ваше мероприятие?</h2>
            <p style="margin-bottom:20px;">Свяжитесь с нами для расчёта стоимости и обсуждения деталей</p>
            
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
        grid-template-columns: 1fr;
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