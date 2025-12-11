@extends('layouts.app')

@section('title', 'Контакты — Ёжик Кейтеринг | Алматы и Астана')
@section('description', 'Контакты кейтеринг компании «Ёжик». Алматы: +7 701 267-29-92, ул. Пятницкого, 73. Астана: +7 701 110-00-11. Работаем ежедневно с 9:00 до 21:00.')
@section('keywords', 'контакты ёжик кейтеринг, телефон кейтеринг, адрес кейтеринг алматы')

@section('content')
<main>
    <section class="contacts-section">
        <div class="main">
            <h1 class="contacts-title">Контакты</h1>
            
            <div class="contacts-grid">
                <!-- Блок с контактной информацией -->
                <div class="contacts-info">
                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('img/map.png') }}" alt="Адрес">
                        </div>
                        <div class="contact-details">
                            <h3>Адрес</h3>
                            <p>Казахстан, г. Алматы<br>ул. Пятницкого, 73</p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('img/phone.png') }}" alt="Телефон">
                        </div>
                        <div class="contact-details">
                            <h3>Телефоны</h3>
                            <p>	
								Алматы<br/>
                                <a href="tel:+77273090957">+7 (727) 309-09-57</a><br>
                                <a href="tel:+77012672992">+7 (701) 267-29-92</a>
								<br>
								<br>
								Астана<br/>
                                <a href="tel77011100011">+7 (701) 110-00-11</a><br>
                         
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('img/mail.png') }}" alt="Email">
                        </div>
                        <div class="contact-details">
                            <h3>Email</h3>
                            <p>
                                <a href="mailto:farida_ikrieva@mail.ru">farida_ikrieva@mail.ru</a>
                            </p>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">
                            <img src="{{ asset('img/clock.png') }}" alt="Время работы">
                        </div>
                        <div class="contact-details">
                            <h3>Время работы</h3>
                            <p>Пн-Вс: 9:00 - 21:00</p>
                        </div>
                    </div>

                    <!-- Социальные сети -->
                    <div class="contact-item">
                        <div class="contact-icon-empty">
                            <!-- Пустой блок для выравнивания -->
                        </div>
                        <div class="contact-details">
                            <h3>Мы в социальных сетях</h3>
                            <div class="social-links">
                                <a href="https://wa.me/77012672992" target="_blank" rel="noopener" title="WhatsApp" class="social-icon">
                                    <img src="{{ asset('img/logoWathap.png') }}" alt="WhatsApp">
                                </a>
                                <a href="https://t.me/ezhikcatering" target="_blank" rel="noopener" title="Telegram" class="social-icon">
                                    <img src="{{ asset('img/logoTg.png') }}" alt="Telegram">
                                </a>
                                <a href="https://www.instagram.com/ezhikcatering.kz?igsh=MXJtODRxOW15cjNjYQ%3D%3D&utm_source=qr" target="_blank" rel="noopener" title="Instagram" class="social-icon">
                                    <img src="{{ asset('img/logoInst.png') }}" alt="Instagram">
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Карта -->
                <div class="contacts-map">
                    <iframe 
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2906.4947359849777!2d76.94558431549398!3d43.23840397913682!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38836967e1e1e1e1%3A0x1e1e1e1e1e1e1e1!2z0YPQuy4g0J_Rj9GC0L3QuNGG0LrQvtCz0L4sIDczLCDQkNC70LzQsNGC0YsgMDUwMDQw!5e0!3m2!1sru!2skz!4v1234567890123!5m2!1sru!2skz"
                        width="100%" 
                        height="100%" 
                        style="border:0;" 
                        allowfullscreen="" 
                        loading="lazy" 
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('styles')
<style>
.contacts-section {
    padding: 60px 0;
    background: #fff;
    font-family: "Lora", sans-serif;
}

.contacts-title {
    font-size: 48px;
    font-weight: 700;
    text-align: center;
    margin-bottom: 50px;
    color: #1A3853;
    font-family: "Lora", sans-serif;
    padding-top: 90px;
}

.contacts-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
}

.contacts-info {
    display: flex;
    flex-direction: column;
    gap: 30px;
}

.contact-item {
    display: flex;
    gap: 20px;
    align-items: flex-start;
}

.contact-icon {
    width: 25px;
    height: 25px;
    flex-shrink: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #50667E;
    border-radius: 50%;
    padding: 10px;
}

.contact-icon img {
    width: 80%;
    height: auto;
    filter: brightness(0) invert(1);
}

.contact-icon-empty {
    width: 45px;
    height: 45px;
    flex-shrink: 0;
}

.contact-details {
    flex: 1;
}

.contact-details h3 {
    font-size: 20px;
    font-weight: 600;
    margin-bottom: 8px;
    color: #1A3853;
    font-family: "Lora", sans-serif;
}

.contact-details p {
    font-size: 16px;
    line-height: 1.6;
    color: #333;
    margin: 0;
    font-family: "Lora", sans-serif;
}

.contact-details a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s;
    font-family: "Lora", sans-serif;
}

.contact-details a:hover {
    color: #FF750F;
}

.social-links {
    display: flex;
    gap: 15px;
    margin-top: 10px;
}

.social-icon {
    width: 25px;
    height: 25px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: #50667E;
    border-radius: 50%;
    padding: 8px;
    transition: transform 0.3s, background 0.3s;
}

.social-icon:hover {
    transform: scale(1.1);
    background: #FF750F;
}

.social-icon img {
    width: 100%;
    height: auto;
    filter: brightness(0) invert(1);
}

.contacts-map {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
    min-height: 500px;
}

/* Мобильная адаптация */
@media (max-width: 768px) {
    .contacts-grid {
        grid-template-columns: 1fr;
    }
    
    .contacts-title {
        font-size: 32px;
        margin-bottom: 20px;
    }
}
/* Мобильная адаптация */
@media (max-width: 768px) {
    .contacts-section {
        padding: 40px 0;
    }

    .main {
        padding: 0 20px;
    }

    .contacts-grid {
        grid-template-columns: 1fr;
    }
    
    .contacts-title {
        font-size: 32px;
        margin-bottom: 20px;
        padding-top: 40px;
    }

    .contacts-info {
        gap: 25px;
    }

    .contact-item {
        gap: 15px;
    }

    .contacts-map {
        min-height: 300px;
        margin-top: 30px;
    }

    .social-links {
        gap: 12px;
    }
}

/* Для очень маленьких экранов */
@media (max-width: 480px) {
    .main {
        padding: 0 16px;
    }

    .contacts-title {
        font-size: 28px;
        padding-top: 30px;
    }

    .contact-details h3 {
        font-size: 18px;
    }

    .contact-details p {
        font-size: 14px;
    }
}
</style>
@endpush