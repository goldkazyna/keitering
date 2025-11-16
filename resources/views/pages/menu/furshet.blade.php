@extends('layouts.app')

@section('title', 'Фуршетное меню - Ёжик кейтеринг')
@section('description', 'Организуем изысканные фуршеты для корпоративов, свадеб, презентаций. От классического до коктейльного формата.')
@section('keywords', 'фуршет астана, фуршетное обслуживание, организация фуршета, кейтеринг астана')

@section('content')
<main>
    <!-- Главный баннер -->
    <section class="service-hero" style="background-image: url('{{ asset('img/furshet-hero.jpg') }}');">
        <div class="hero-overlay"></div>
        <div class="main">
            <h1>Фуршетное меню</h1>
            <p class="hero-subtitle">Элегантный формат для стильных событий</p>
        </div>
    </section>

    

    <!-- Меню -->
	<section class="service-menu">
		<div class="main">
			<h2>Меню и ассортимент</h2>
			
			<div class="menu-grid-three">
				<div class="menu-column">
					<h3>Холодные закуски</h3>
					<ul>
						<li>Канапе с рыбой, мясом, овощами и сыром</li>
						<li>Тарталетки с паштетом, салатом, икрой, муссом</li>
						<li>Брускетты с прошутто, авокадо, ростбифом или томатами</li>
						<li>Сырные и мясные тарелки</li>
					</ul>
				</div>
				
				<div class="menu-column">
					<h3>Горячие закуски</h3>
					<ul>
						<li>Мини-шашлычки из курицы, говядины, креветок</li>
						<li>Жульены в тарталетках</li>
						<li>Мини-рулеты и роллы в ассортименте</li>
					</ul>
				</div>
				
				<div class="menu-column">
					<h3>Салаты и основные блюда</h3>
					<ul>
						<li>Салаты в порционной подаче</li>
						<li>Мини-порции горячих блюд (медальоны, рыба, гарниры)</li>
					</ul>
				</div>

				<div class="menu-column">
					<h3>Десерты и фрукты</h3>
					<ul>
						<li>Мини-чизкейки, тарты, пирожные</li>
						<li>Макаруны, эклеры</li>
						<li>Фруктовые ассорти</li>
					</ul>
				</div>

				<div class="menu-column">
					<h3>Напитки</h3>
					<ul>
						<li>Безалкогольные - лимонады, соки, вода, морсы</li>
						<li>По запросу организация выездного бара</li>
					</ul>
				</div>

				<div class="menu-column">
					<h3>Тематические и специальные меню</h3>
					<ul>
						<li>Европейская, азиатская и восточная кухня</li>
						<li>Национальные казахские блюда в современном исполнении</li>
						<li>Специальные опции: вегетарианские, веганские, халяль и безглютеновые варианты</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

    

    <!-- Контакты и заказ -->
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
/* Используем те же базовые стили, что и для кофе-брейка */
.service-hero,
.service-intro,
.service-about,
.service-formats,
.service-menu,
.service-themes,
.service-info,
.service-additional,
.service-pricing,
.service-geography,
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
    padding-bottom: 60px;
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

/* О фуршете с фото */
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
    margin-bottom: 15px;
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
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 40px;
}

.format-card {
    background: #f8f9fa;
    padding: 30px 20px;
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
    font-size: 20px;
    color: #1A3853;
    margin-bottom: 12px;
    font-weight: 600;
}

.format-card p {
    font-size: 15px;
    line-height: 1.6;
    color: #666;
}

.format-details {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 20px;
}

.detail-item {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    font-size: 16px;
    color: #333;
}

.detail-icon {
    font-size: 24px;
    margin-right: 10px;
}

/* Меню - 4 колонки */
.service-menu {
    background: #f8f9fa;
}

.menu-grid-four {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 40px;
}

.menu-column {
    background: white;
    padding: 30px 25px;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.menu-column h3 {
    font-size: 20px;
    color: #1A3853;
    margin-bottom: 20px;
    font-weight: 600;
    text-align: center;
}

.menu-column ul {
    list-style: none;
    padding: 0;
}

.menu-column ul li {
    padding: 8px 0;
    padding-left: 20px;
    position: relative;
    font-size: 14px;
    color: #666;
    line-height: 1.6;
}

.menu-column ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #50667E;
    font-weight: 700;
}

.menu-additional {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 30px 40px;
    border-radius: 12px;
    color: white;
    text-align: center;
}

.menu-additional h3 {
    font-size: 24px;
    margin-bottom: 15px;
}

.menu-additional p {
    font-size: 16px;
    line-height: 1.7;
}

/* Тематические меню */
.service-themes {
    background: white;
}

.themes-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.theme-card {
    background: #f8f9fa;
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    transition: all 0.3s ease;
}

.theme-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

.theme-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.theme-card h4 {
    font-size: 16px;
    color: #1A3853;
    font-weight: 600;
    line-height: 1.6;
}

/* Информация */
.service-info {
    background: #f8f9fa;
}

.info-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 25px;
    margin-bottom: 40px;
}

.info-item {
    padding: 30px 20px;
    background: white;
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

.service-formats-list {
    background: white;
    padding: 40px;
    border-radius: 12px;
}

.service-formats-list h3 {
    font-size: 24px;
    color: #1A3853;
    margin-bottom: 20px;
    text-align: center;
}

.service-formats-list ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-bottom: 20px;
}

.service-formats-list ul li {
    padding: 12px 20px;
    background: #f8f9fa;
    border-radius: 8px;
    text-align: center;
    font-size: 15px;
    color: #333;
}

.note {
    text-align: center;
    font-size: 14px;
    color: #666;
    font-style: italic;
}

/* Дополнительные услуги */
.service-additional {
    background: white;
}

.additional-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.additional-item {
    padding: 25px;
    background: #f8f9fa;
    border-radius: 12px;
    border-left: 4px solid #50667E;
}

.additional-item h4 {
    font-size: 18px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 600;
}

.additional-item p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Цены */
.service-pricing {
    background: #f8f9fa;
}

.pricing-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.pricing-info {
    background: white;
    padding: 40px;
    border-radius: 12px;
}

.pricing-item {
    margin-bottom: 25px;
    padding-bottom: 25px;
    border-bottom: 1px solid #e0e0e0;
}

.pricing-item:last-child {
    border-bottom: none;
    margin-bottom: 0;
    padding-bottom: 0;
}

.pricing-item h4 {
    font-size: 18px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 600;
}

.pricing-item p {
    font-size: 16px;
    color: #666;
    margin: 0;
}

.pricing-item .price {
    font-size: 28px;
    color: #50667E;
    font-weight: 700;
}

.pricing-benefits {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 40px;
    border-radius: 12px;
    color: white;
}

.pricing-benefits h3 {
    font-size: 24px;
    margin-bottom: 20px;
}

.pricing-benefits ul {
    list-style: none;
    padding: 0;
    margin-bottom: 20px;
}

.pricing-benefits ul li {
    padding: 10px 0;
    padding-left: 25px;
    position: relative;
    font-size: 16px;
}

.pricing-benefits ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #FFD700;
    font-weight: 700;
    font-size: 18px;
}

.pricing-benefits .note {
    color: rgba(255,255,255,0.9);
    padding-top: 20px;
    border-top: 1px solid rgba(255,255,255,0.2);
}

/* География */
.service-geography {
    background: white;
}

.geography-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.geography-content > p {
    font-size: 18px;
    color: #333;
    margin-bottom: 20px;
}

.geography-content ul {
    list-style: none;
    padding: 0;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 15px;
    margin-bottom: 30px;
}

.geography-content ul li {
    padding: 15px 20px;
    background: #f8f9fa;
    border-radius: 8px;
    font-size: 16px;
    color: #333;
}

/* CTA */
.service-cta {
    background: #f8f9fa;
    text-align: center;
}

.service-cta h2 {
    margin-bottom: 15px;
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
    .menu-grid-four,
    .themes-grid,
    .additional-grid,
    .geography-content ul {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .info-grid {
        grid-template-columns: repeat(2, 1fr);
        gap: 20px;
    }

    .pricing-content {
        grid-template-columns: 1fr;
    }

    .service-formats-list ul {
        grid-template-columns: 1fr;
    }

    .format-details {
        grid-template-columns: 1fr;
    }

    .format-card.featured {
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
/* Меню - 3 колонки */
.menu-grid-three {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

/* Пакеты */
.service-packages {
    background: white;
}

.packages-grid-three {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
}

.package-card {
    background: white;
    border: 2px solid #e0e0e0;
    border-radius: 12px;
    overflow: hidden;
    transition: all 0.3s ease;
    position: relative;
}

.package-card.featured {
    border-color: #50667E;
    box-shadow: 0 10px 30px rgba(26, 56, 83, 0.15);
    transform: scale(1.05);
}

.package-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 40px rgba(0,0,0,0.15);
}

.package-header {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 30px 20px;
    text-align: center;
    color: white;
}

.package-header h3 {
    font-size: 28px;
    margin-bottom: 15px;
    font-weight: 700;
}

.package-price {
    font-size: 36px;
    font-weight: 700;
}

.package-list {
    list-style: none;
    padding: 30px 25px;
    margin: 0;
}

.package-list li {
    padding: 12px 0;
    padding-left: 25px;
    position: relative;
    font-size: 15px;
    color: #666;
    border-bottom: 1px solid #f0f0f0;
    line-height: 1.6;
}

.package-list li:last-child {
    border-bottom: none;
}

.package-list li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #50667E;
    font-weight: 700;
    font-size: 18px;
}

.package-btn {
    display: block;
    margin: 0 25px 30px;
    padding: 15px 30px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 8px;
    font-weight: 600;
    transition: all 0.3s ease;
}

.package-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(26, 56, 83, 0.3);
}

/* Организация и сервис - упрощённо */
.info-simple {
    background: #f8f9fa;
    padding: 40px 50px;
    border-radius: 12px;
    margin-bottom: 40px;
}

.info-simple ul {
    list-style: none;
    padding: 0;
    margin: 0;
}

.info-simple ul li {
    padding: 15px 0;
    padding-left: 30px;
    position: relative;
    font-size: 18px;
    color: #333;
    border-bottom: 1px solid #e0e0e0;
}

.info-simple ul li:last-child {
    border-bottom: none;
}

.info-simple ul li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: #50667E;
    font-weight: 700;
    font-size: 20px;
}

.formats-title {
    font-size: 24px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 25px;
    font-weight: 600;
}

.formats-simple {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 20px;
    margin-bottom: 20px;
}

.format-simple-item {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
    color: #333;
    font-weight: 500;
}

/* Время и логистика */
.service-logistics {
    background: white;
}

.logistics-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
    margin-bottom: 30px;
}

.logistics-item {
    background: #f8f9fa;
    padding: 30px 25px;
    border-radius: 12px;
    text-align: center;
}

.logistics-item h4 {
    font-size: 18px;
    color: #1A3853;
    margin-bottom: 15px;
    font-weight: 600;
}

.logistics-item p {
    font-size: 16px;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

.logistics-note {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    padding: 25px 40px;
    border-radius: 8px;
    text-align: center;
    font-size: 16px;
    line-height: 1.7;
}

/* Дополнительные услуги - упрощённо */
.additional-simple {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 25px;
}

.additional-simple-item {
    background: #f8f9fa;
    padding: 25px 20px;
    border-radius: 12px;
    text-align: center;
}

.additional-simple-item h4 {
    font-size: 18px;
    color: #1A3853;
    margin-bottom: 10px;
    font-weight: 600;
}

.additional-simple-item p {
    font-size: 14px;
    color: #666;
    line-height: 1.6;
    margin: 0;
}

/* Цены - новый дизайн */
.pricing-cards {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 40px;
}

.pricing-card {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    color: white;
}

.pricing-icon {
    width: 70px;
    height: 70px;
    margin: 0 auto 20px;
    background: rgba(255,255,255,0.2);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.pricing-card h4 {
    font-size: 18px;
    margin-bottom: 15px;
    font-weight: 600;
    opacity: 0.95;
}

.price-big {
    font-size: 42px;
    font-weight: 700;
    margin: 10px 0;
}

.price-text {
    font-size: 20px;
    font-weight: 600;
    margin: 10px 0;
}

.pricing-card p {
    font-size: 16px;
    margin: 0;
    opacity: 0.9;
}

.pricing-benefits-box {
    background: #f8f9fa;
    padding: 40px;
    border-radius: 12px;
    text-align: center;
}

.pricing-benefits-box h3 {
    font-size: 28px;
    color: #1A3853;
    margin-bottom: 30px;
    font-weight: 700;
}

.benefits-list {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
    margin-bottom: 30px;
}

.benefit-badge {
    background: white;
    padding: 15px 30px;
    border-radius: 25px;
    font-size: 16px;
    color: #1A3853;
    font-weight: 600;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.cancellation-note {
    font-size: 16px;
    color: #666;
    font-style: italic;
    padding-top: 20px;
    border-top: 2px solid #e0e0e0;
}

/* Мобильная адаптация для новых блоков */
@media (max-width: 768px) {
    .menu-grid-three,
    .packages-grid-three,
    .formats-simple,
    .logistics-grid,
    .additional-simple,
    .pricing-cards {
        grid-template-columns: 1fr;
    }

    .package-card.featured {
        transform: scale(1);
    }

    .benefits-list {
        flex-direction: column;
        align-items: stretch;
    }
}
</style>
@endpush