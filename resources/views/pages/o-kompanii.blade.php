@extends('layouts.app')

@section('title', 'О компании — Ёжик Кейтеринг | С 2003 года')
@section('description', 'Кейтеринг компания «Ёжик» — победитель премии «Кейтеринг года 2024». Работаем с 2003 года. Более 1000 успешных мероприятий в Алматы и Астане.')
@section('keywords', 'ёжик кейтеринг, о компании, кейтеринг компания алматы, история компании')
@section('content')
<main>
    <section class="about-section">
        <div class="main">
            <h1 class="about-title">О компании</h1>
            
            <!-- Вводный блок -->
            <div class="about-intro">
                <h2>Ресторан выездного обслуживания «Ёжик-кейтеринг»</h2>
                <p>Компания «Ёжик Кейтеринг» была создана в <strong>2003 году</strong> на базе производственного предприятия по выпуску кулинарных и кондитерских изделий, готовых к употреблению.</p>
            </div>

			<!-- Наши преимущества -->
			<div class="about-features">
				<div class="feature-card">
					<div class="feature-icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none">
							<path d="M3 9L12 2L21 9V20C21 20.5304 20.7893 21.0391 20.4142 21.4142C20.0391 21.7893 19.5304 22 19 22H5C4.46957 22 3.96086 21.7893 3.58579 21.4142C3.21071 21.0391 3 20.5304 3 20V9Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M9 22V12H15V22" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<h3>Собственная производственная база</h3>
					<p>Оснащена необходимым оборудованием, стационарным буфетом и кулинарным магазином</p>
				</div>
				
				<div class="feature-card">
					<div class="feature-icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none">
							<path d="M17 21V19C17 17.9391 16.5786 16.9217 15.8284 16.1716C15.0783 15.4214 14.0609 15 13 15H5C3.93913 15 2.92172 15.4214 2.17157 16.1716C1.42143 16.9217 1 17.9391 1 19V21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M9 11C11.2091 11 13 9.20914 13 7C13 4.79086 11.2091 3 9 3C6.79086 3 5 4.79086 5 7C5 9.20914 6.79086 11 9 11Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M23 21V19C22.9993 18.1137 22.7044 17.2528 22.1614 16.5523C21.6184 15.8519 20.8581 15.3516 20 15.13" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M16 3.13C16.8604 3.35031 17.623 3.85071 18.1676 4.55232C18.7122 5.25392 19.0078 6.11683 19.0078 7.005C19.0078 7.89318 18.7122 8.75608 18.1676 9.45769C17.623 10.1593 16.8604 10.6597 16 10.88" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<h3>Опытный персонал</h3>
					<p>В штате компании проверенный годами профессиональный персонал</p>
				</div>
				
				<div class="feature-card">
					<div class="feature-icon">
						<svg width="40" height="40" viewBox="0 0 24 24" fill="none">
							<path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M12 6V12L16 14" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</div>
					<h3>Более 20 лет опыта</h3>
					<p>Огромный опыт организации питания различного формата</p>
				</div>
			</div>

			<!-- История развития -->
			<div class="about-history">
				<h2 class="history-title">Наша история</h2>
				
				<div class="history-grid">
					<div class="history-card">
						<div class="history-year">2000-2005</div>
						<h3>Производство и доставка</h3>
						<p>Более 10 лет компания занималась производством кулинарных и кондитерских изделий, готовых к употреблению, и доставкой их по магазинам города, офисам и буфетам.</p>
					</div>

					<div class="history-card">
						<div class="history-year">2000-2005</div>
						<h3>Кафе-столовые и буфеты</h3>
						<p>Организация кафе-столовых в помещении Алматинского областного филиала АО «Народный банк Казахстана», буфеты в учебных заведениях, доставка корпоративного питания.</p>
					</div>

					<div class="history-card">
						<div class="history-year">2003</div>
						<h3>Первопроходцы кейтеринга</h3>
						<p>Одними из первых в республике начали оказывать услуги кейтеринга на тимбилдингах, пикниках, тренингах. Организация кофе-брейков, фуршетов, банкетов с выездным обслуживанием.</p>
					</div>

					<div class="history-card">
						<div class="history-year">2018</div>
						<h3>Открытие филиала в Астане</h3>
						<p>Начал работу филиал компании в Астане под названием «Канапе-Кейтеринг». Наша компания в столице активно работает и расширяется.</p>
					</div>
				</div>
			</div>

            <!-- Призыв к действию -->
            <div class="about-cta">
                <h2>Доверьте нам организацию вашего мероприятия</h2>
                <p>Более 20 лет опыта, собственное производство и профессиональная команда - всё для вашего идеального события</p>
                <div class="cta-buttons">
				<a href="https://wa.me/77012672992" target="_blank" class="btn-whatsapp">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z" fill="white"/>
					</svg>
					WhatsApp: +7 (701) 267-29-92
				</a>
				<a href="tel:+77012672992" class="btn-phone">
					<svg width="24" height="24" viewBox="0 0 24 24" fill="none">
						<path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
					</svg>
					Позвонить: +7 (701) 267-29-92
				</a>
			</div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
.about-section {
    padding: 60px 0;
    background: #fff;
    font-family: "Lora", sans-serif;
}

.about-title {
    font-size: 48px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 50px;
    color: #1A3853;
    font-family: "Lora", sans-serif;
    padding-top: 90px;
}

/* Вводный блок */
.about-intro {
    max-width: 900px;
    margin: 0 auto 60px;
    text-align: center;
}

.about-intro h2 {
    font-size: 28px;
    color: #1A3853;
    margin-bottom: 20px;
    font-weight: 600;
}

.about-intro p {
    font-size: 18px;
    line-height: 1.8;
    color: #333;
}

/* Преимущества */
.about-features {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 30px;
    margin-bottom: 80px;
}

.feature-card {
    background: #f8f9fa;
    padding: 40px 30px;
    border-radius: 12px;
    text-align: center;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.feature-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 30px rgba(0,0,0,0.1);
}

.feature-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
}

.feature-card h3 {
    font-size: 22px;
    color: #1A3853;
    margin-bottom: 15px;
    font-weight: 600;
}

.feature-card p {
    font-size: 16px;
    line-height: 1.6;
    color: #666;
}



/* Призыв к действию */
.about-cta {
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    padding: 60px;
    border-radius: 16px;
    text-align: center;
    color: white;
}

.about-cta h2 {
    font-size: 32px;
    margin-bottom: 15px;
    font-weight: 700;
}

.about-cta p {
    font-size: 18px;
    margin-bottom: 30px;
    opacity: 0.95;
}

.cta-buttons {
    display: flex;
    gap: 20px;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-whatsapp,
.btn-phone {
    padding: 15px 30px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 18px;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-flex;
    align-items: center;
    gap: 10px;
}

.btn-whatsapp {
    background: #25D366;
    color: white;
}

.btn-whatsapp:hover {
    background: #20BA5A;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(37, 211, 102, 0.3);
}

.btn-phone {
    background: white;
    color: #1A3853;
}

.btn-phone:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(255, 255, 255, 0.3);
}

.btn-phone svg path {
    stroke: #1A3853;
}

/* Мобильная адаптация */
@media (max-width: 768px) {
    .cta-buttons {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-whatsapp,
    .btn-phone {
       
        justify-content: center;
        font-size: 16px;
    }
}

.btn-primary,
.btn-secondary {
    padding: 15px 40px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 18px;
    font-weight: 600;
    transition: all 0.3s ease;
    display: inline-block;
}

.btn-primary {
    background: #FF750F;
    color: white;
}

.btn-primary:hover {
    background: #e66a0e;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(255, 117, 15, 0.3);
}

.btn-secondary {
    background: white;
    color: #1A3853;
}

.btn-secondary:hover {
    background: #f8f9fa;
    transform: translateY(-2px);
    box-shadow: 0 10px 25px rgba(255, 255, 255, 0.3);
}
/* История */
.about-history {
    margin-bottom: 80px;
}

.history-title {
    font-size: 36px;
    color: #1A3853;
    text-align: center;
    margin-bottom: 50px;
    font-weight: 700;
}

.history-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 30px;
}

.history-card {
    background: #fff;
    border: 2px solid #f0f0f0;
    border-radius: 12px;
    padding: 30px;
    transition: all 0.3s ease;
    position: relative;
    overflow: hidden;
}

.history-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 4px;
    height: 100%;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    transform: scaleY(0);
    transform-origin: top;
    transition: transform 0.3s ease;
}

.history-card:hover::before {
    transform: scaleY(1);
}

.history-card:hover {
    border-color: #50667E;
    box-shadow: 0 10px 30px rgba(26, 56, 83, 0.1);
    transform: translateY(-5px);
}

.history-year {
    display: inline-block;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    color: white;
    padding: 8px 20px;
    border-radius: 20px;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 15px;
}

.history-card h3 {
    font-size: 20px;
    color: #1A3853;
    margin-bottom: 12px;
    font-weight: 600;
}

.history-card p {
    font-size: 15px;
    line-height: 1.7;
    color: #666;
    margin: 0;
}

/* Преимущества - переделка иконок */
.feature-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 20px;
    background: linear-gradient(135deg, #1A3853 0%, #50667E 100%);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 40px;
}

/* Мобильная адаптация */
@media (max-width: 768px) {
    .history-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    .history-title {
        font-size: 28px;
        margin-bottom: 30px;
    }

    .history-card {
        padding: 25px;
    }

    .history-year {
        font-size: 14px;
        padding: 6px 16px;
    }

    .history-card h3 {
        font-size: 18px;
    }

    .history-card p {
        font-size: 14px;
    }
}
/* Мобильная адаптация */
@media (max-width: 768px) {
    .about-section {
        padding: 40px 0;
    }

    .main {
        padding: 0 20px;
    }

    .about-title {
        font-size: 32px;
        margin-bottom: 30px;
        padding-top: 40px;
    }

    .about-intro h2 {
        font-size: 24px;
    }

    .about-intro p {
        font-size: 16px;
    }

    .about-features {
        grid-template-columns: 1fr;
        gap: 20px;
    }

    

    .about-cta {
        padding: 40px 30px;
    }

    .about-cta h2 {
        font-size: 26px;
    }

    .about-cta p {
        font-size: 16px;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: stretch;
    }

    .btn-primary,
    .btn-secondary {
        width: 100%;
    }
}
</style>
@endpush