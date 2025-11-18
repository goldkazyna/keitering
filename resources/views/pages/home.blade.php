@extends('layouts.app')

@section('title', 'Ёжик кейтеринг - Главная')
@section('description', 'Кейтеринг услуги в Алматы и Астане. Организация кофе-брейков, фуршетов и банкетов.')
@section('keywords', 'кейтеринг алматы, кейтеринг астана, фуршет, банкет, кофе брейк')

@section('content')
<style>
@media (max-width: 768px) {
.ttt{
	padding-top:100px;
}
.company{
	padding-top:0px;
}
.blockCompanyMainTextTitel{
	font-size: 25px;
}
.blockCompanyMainText{
	padding-top:90px;
}
.blockCompanyMainTextDescription{
	font-size: 17px;
}
.moreCompanyAling{
	        padding-top: 40px;
}
.whyWeCard, .servicesCard{
	width:100%;
}
.priceSevices, .imgServices{
	justify-content: center;
}
.imgServicesMain{
	        width: 340px;
}
.textPrice{
	padding:30px 10px 0px 10px;
}
}
</style>
<section class="mainSection">
    <div class="video-bg">
        <video autoplay muted loop playsinline>
            <source src="video/video1.mp4" type="video/mp4">
            <source src="video/video1.mp4" type="video/webm">
            Ваш браузер не поддерживает видео
        </video>
        <div class="video-overlay"></div>
    </div>


    <div class="main">
        <div class="mainText">
            <h1 class="ttt">ИЗЫСКАННЫЙ КЕЙТЕРИНГ <br>
                ДЛЯ ВАШЕГО СОБЫТИЯ  <br>В АЛМАТЫ ИЛИ В АСТАНЕ</h1>
        </div>
        <h2 class="mainSectionTitle">ОРГАНИЗАЦИЯ ФУРШЕТОВ, БАНКЕТОВ И КОФЕ БРЕЙКОВ</h2>
        <h2 class="developerText">Доставка и сервис премиум класса!</h2>
        <div class="btnMainSection">
            <div class="btnMainOne">
                <a class="btnMainSectionOne" href="">
                    Получить расчёт
                    <img src="img/arrow.png">
                </a>
                <a class="btnMainSectionTwo" href="">
                    Меню
                </a>
            </div>
        </div>
    </div>
</section>



<section class="company">
    <div class="main">

    <div class="blockCompany">

        <div class="blockCompanyMainText">
            <img class="companyLogo" src="img/decorLeft.png" alt="">
            <h2 class="blockCompanyMainTextTitel">Компания Ёжик - Ваш надежный партнер</h2>
            <img class="companyLogo" src="img/decorRight.png" alt="">
        </div>

        <p class="blockCompanyMainTextDescription">Добро пожаловать в кейтеринг компанию «Ёжик» — победителя премии «Кейтеринг года 2024». <br>
            Мы понимаем, что организация идеального мероприятия — это больше, чем просто еда.<br>
            Это создание незабываемой атмосферы, где каждый гость чувствует себя особенным.</p>

        <div class="blockCompanyCard">
            <div class="blockCompanyCards" >
            <h2 class="blockCompanyCardsNumber">12</h2>
        <p class="blockCompanyCardsTitle">Лет на рынке Казахстана</p>
            </div>
            <div class="blockCompanyCards" >
                <h2 class="blockCompanyCardsNumber">800+</h2>
                <p class="blockCompanyCardsTitle">Проведенных мероприятий</p>
            </div>
            <div class="blockCompanyCards" >
                <h2 class="blockCompanyCardsNumber">200></h2>
                <p class="blockCompanyCardsTitle">Довольных клиентов</p>
            </div>
            <div class="blockCompanyCards" >
                <h2 class="blockCompanyCardsNumber">02</h2>
                <p class="blockCompanyCardsTitle">Работаем в Алматы и Астане</p>
            </div>
        </div>

<div class="moreCompanyAling">
    <a href="" class="moreCompany">
        Подробнее о компании
        <img src="img/arrow.png" alt="">
    </a>
</div>

    </div>

    </div>
</section>

<section class="whyWe">
<div class="main">
    <div class="blockCompanyMainText">
        <img class="companyLogo" src="img/decorLeft.png" alt="">
        <h2 class="blockCompanyMainTextTitel">Почему выбирают нас?</h2>
        <img class="companyLogo" src="img/decorRight.png" alt="">
    </div>

    <div class="whyWeCars">
        <div class="whyWeCard">
            <img class="whyWeCarsImg" src="img/kitchen.png" alt="">
            <h2 class="whyWeCardTItle">Авторская кухня</h2>
            <p class="whyWeCardAbout">Уникальные рецепты <br>
                от шеф повара</p>
        </div>

        <div class="whyWeCard">
            <img class="whyWeCarsImg" src="img/developer.png" alt="">
            <h2 class="whyWeCardTItle">Быстрая доставка</h2>
            <p class="whyWeCardAbout">Точно в срок<br>
                по Алмате и Астане</p>
        </div>
        <div class="whyWeCard">
            <img class="whyWeCarsImg" src="img/diamond.png" alt="">
            <h2 class="whyWeCardTItle">Премиум сервис</h2>
            <p class="whyWeCardAbout">профессиональное <br> обслуживание</p>
        </div>
        <div class="whyWeCard">
            <img class="whyWeCarsImg" src="img/money.png" alt="">
            <h2 class="whyWeCardTItle">Гибкие цены</h2>
            <p class="whyWeCardAbout">Решения для любого <br>
                бюджетаа</p>
        </div>
    </div>

    <div class="moreCompanyAling">
        <a href="" class="moreCompany">
            Получить консультацию
            <img src="img/arrow.png" alt="">
        </a>
    </div>

</div>
</section>

<section class="services">
    <div class="main">
        <div class="blockCompanyMainText">
            <img class="companyLogo" src="img/decorLeft.png" alt="">
            <h2 class="blockCompanyMainTextTitel">Наши услуги</h2>
            <img class="companyLogo" src="img/decorRight.png" alt="">
        </div>

        <div class="servicesCards">

            <div class="servicesCard">
                <h2 class="servicesCardTitle">Кофе - брейк</h2>
                <div class="imgServices">
                    <div class="imgServicesText">
                        
                    </div>
                    <img class="imgServicesMain" src="img/services1.png" alt="">
                </div>
                <div class="priceSevices">
                    <span class="priceSevicesTitle">Цена от:</span>
                    <h2 class="priceSevicesAbout">2 800 тг/чел</h2>
                </div>
                <a class="servicesLinksText" href="">
                <div class="servicesLinks">
                        Подробнее
                </div>
                </a>
            </div>

            <div class="servicesCard">
                <h2 class="servicesCardTitle">Фуршет</h2>
                <div class="imgServices">
                    <div class="imgServicesText">
                        
                    </div>
                    <img class="imgServicesMain" src="img/services2.png" alt="">
                </div>
                <div class="priceSevices">
                    <span class="priceSevicesTitle">Цена от:</span>
                    <h2 class="priceSevicesAbout">2 800 тг/чел</h2>
                </div>
                <a class="servicesLinksText" href="">
                    <div class="servicesLinks">
                        Подробнее
                    </div>
                </a>
            </div>


            <div class="servicesCard">
                <h2 class="servicesCardTitle">Кофе - брейк</h2>
                <div class="imgServices">
                    <div class="imgServicesText">
                       
                    </div>
                    <img class="imgServicesMain" src="img/services3.png" alt="">
                </div>
                <div class="priceSevices">
                    <span class="priceSevicesTitle">Цена от:</span>
                    <h2 class="priceSevicesAbout">2 800 тг/чел</h2>
                </div>
                <a class="servicesLinksText" href="">
                    <div class="servicesLinks">
                        Подробнее
                    </div>
                </a>
            </div>
        </div>

        <div class="moreServices">

            <p class="moreServicesText">Нужна другая услуга? Позвоните нам!</p>
            <a href="" class="moreServicesLinks">
                Написать в WhatsApp
                <img src="img/whatsAppGreen.png" alt="WhatsApp" class="icon-default">
                <img src="img/watcapWite.png" alt="WhatsApp" class="icon-hover">
            </a>
        </div>
        <div class="moreCompanyAling">
            <a href="" class="moreCompany">
                Получить консультацию
                <img src="img/arrow.png" alt="">
            </a>
        </div>

    </div>
</section>

<section class="price">
<div class="main">
    <div class="blockCompanyMainText">
        <img class="companyLogo" src="img/decorLeft.png" alt="">
        <h2 class="blockCompanyMainTextTitel">Готовые решения с ценами</h2>
        <img class="companyLogo" src="img/decorRight.png" alt="">
    </div>

    <div class="priceCards">

    <div class="priceCard">
            <div class="textCardPrice">
            <h2 class="textCardPriceTitle">Фуршет</h2>
            <div>
                <ul>
                    <li>Стандарт — от 4 300 тг/чел</li>
                    <li>Бизнес — от 6 150 тг/чел</li>
                    <li>Премиум — от 9 300 тг/чел</li>
                    <li>Готовые сеты — от 9 000 тг/чел</li>
                </ul>
            </div>
        </div>

        <div class="">
            <img src="img/price1.png" alt="">
        </div>
    </div>

        <div class="priceCard">
            <div class="textCardPrice">
                <h2 class="textCardPriceTitle">Кофе - брейк</h2>
                <div>
                    <ul>
                        <li>Стандарт — от 2 800 тг/чел</li>
                        <li>Бизнес — от 4 200 тг/чел</li>
                        <li>Премиум — от 6 530 тг/чел</li>
                    </ul>
                </div>
            </div>

            <div class="">
                <img src="img/price2.png" alt="">
            </div>
        </div>


        <div class="priceCard">
            <div class="textCardPrice">
                <h2 class="textCardPriceTitle">Банкет</h2>
                <div>
                    <ul>
                        <li>Стандарт — от 15 000 тг/чел</li>
                        <li>Премиум — от 20 000 тг/чел</li>
                    </ul>
                </div>
            </div>

            <div class="">
                <img src="img/price3.png" alt="">
            </div>
        </div>
    </div>

    <p class="textPrice">Варианты меню представлены для примера из расчета на 50 человек. <br>
        Менеджеры подберут меню под любые ваши пожелания на любое количество гостей.</p>


    <div class="btnPrice">
        <a class="btnMainSectionOne" href="">
            Смотреть все цены
            <img src="img/arrow.png">
        </a>
        <a class="btnPriceOne" href="">
            Заказать рассчёт
        </a>

    </div>

</div>
</section>

<section class="clients">
    <div class="main">
        <div class="blockCompanyMainText">
            <img class="companyLogo" src="img/decorLeft.png" alt="">
            <h2 class="blockCompanyMainTextTitel">Наши клиенты</h2>
            <img class="companyLogo" src="img/decorRight.png" alt="">
        </div>
<h2 class="clientsMainText">
    Мы работает с ведущими компаниями Казахстана
</h2>

        <div class="clientsLogos">
            <div class="image-comparison-different">
                <img src="img/macGrey.png" alt="" class="static-gray">
                <img src="img/img.png" alt="" class="hover-color">
            </div>

            <div class="image-comparison-different">
                <img src="img/hyndaiGrey.png" alt="" class="static-gray">
                <img src="img/hyndaiColor.png" alt="" class="hover-color">
            </div>

            <div class="image-comparison-different">
                <img src="img/homeCredit.png" alt="" class="static-gray">
                <img src="img/homeCredCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/nurbank.png" alt="" class="static-gray">
                <img src="img/nurbankCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/deloitte.png" alt="" class="static-gray">
                <img src="img/deloiteCol.png" alt="" class="hover-color">
            </div>
            <div></div>
            <div class="image-comparison-different">
                <img src="img/loreal.png" alt="" class="static-gray">
                <img src="img/lorealCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/sumruk.png" alt="" class="static-gray">
                <img src="img/sumrucCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/blgryp.png" alt="" class="static-gray">
                <img src="img/blgroupCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/micrasoft.png" alt="" class="static-gray">
                <img src="img/micrasoftLog.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/nomad.png" alt="" class="static-gray">
                <img src="img/nomandCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/pg.png" alt="" class="static-gray">
                <img src="img/pgCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/binorica.png" alt="" class="static-gray">
                <img src="img/binoricaCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/stroi.png" alt="" class="static-gray">
                <img src="img/stoiCol.png" alt="" class="hover-color">
            </div>
            <div class="image-comparison-different">
                <img src="img/kcell.png" alt="" class="static-gray">
                <img src="img/kcellCol.png" alt="" class="hover-color">
            </div>
        </div>



    </div>
</section>

<section class="work">
    <div class="main">

        <div class="blockCompanyMainText">
            <img class="companyLogo" src="img/decorLeft.png" alt="">
            <h2 class="blockCompanyMainTextTitel">Наши работы</h2>
            <img class="companyLogo" src="img/decorRight.png" alt="">
        </div>

        <div class="workCadrs">

            <div class="imgCard">
                <a href="">
                    <img class="imgWork" src="img/work1.png" alt="">
                    <div class="alingWorkText">
                        <p class="work-date">22.10.2025</p>
                        <h2 class="work-title">Текст в несколько предложений в три строки, описывающий услугу кратко, но достаточно ёмко, больше текста к...</h2>
                    </div>
                </a>


            </div>

            <div class="imgCardTwo">
                <div class="imgCard">
                    <a href="">
                        <img class="imgWork" src="img/work2.png" alt="">
                        <div class="alingWorkText">
                            <p class="work-date">22.10.2025</p>
                            <h2 class="work-title">Текст в несколько предложений в три строки, описывающий услугу кратко, но достаточно ёмко, больше текста к...</h2>
                        </div>
                    </a>
                </div>
                <div class="imgCard">
                    <a href="">
                        <img class="imgWork" src="img/work3.png" alt="">
                        <div class="alingWorkText">
                            <p class="work-date">22.10.2025</p>
                            <h2 class="work-title">Текст в несколько предложений в три строки, описывающий услугу кратко, но достаточно ёмко, больше текста к...</h2>
                        </div>
                    </a>

                </div>
            </div>


        </div>
        <div class="moreCompanyAling">
            <a href="" class="moreCompany">
                Смотреть все работы
                <img src="img/arrow.png" alt="">
            </a>
        </div>

    </div>
</section>

<section class="reviews">
    <div class="main">
        <div class="blockCompanyMainText">
            <img class="companyLogo" src="img/decorLeft.png" alt="">
            <h2 class="blockCompanyMainTextTitel">Отзывы наших клиентов</h2>
            <img class="companyLogo" src="img/decorRight.png" alt="">
        </div>


    <div class="reviewCadrs" >
        <div class="reviews-slider-container">
            <button class="slider-arrow slider-arrow-prev">‹</button>
            <div class="reviews-slider">
                <div class="reviewCadr">
                    <div class="video-container">
                        <video src="video/reviews.mp4" loop>
                            Ваш браузер не поддерживает видео
                        </video>
                        <button class="play-pause-btn">⏸</button>
                    </div>
                    <h2>ТОО ”Рога и копыта”</h2>
                    <div class="reviewCadrText">
                        <p>Алексей</p>
                        <p>Директолог</p>
                    </div>
                </div>

                <div class="reviewCadr">
                    <div class="video-container">
                        <video src="video/reviews.mp4" loop>
                            Ваш браузер не поддерживает видео
                        </video>
                        <button class="play-pause-btn">⏸</button>
                    </div>
                    <h2>Компания "Вектор"</h2>
                    <div class="reviewCadrText">
                        <p>Мария</p>
                        <p>Маркетолог</p>
                    </div>
                </div>

                <div class="reviewCadr">
                    <div class="video-container">
                        <video src="video/reviews.mp4" loop>
                            Ваш браузер не поддерживает видео
                        </video>
                        <button class="play-pause-btn">⏸</button>
                    </div>
                    <h2>Компания "Вектор"</h2>
                    <div class="reviewCadrText">
                        <p>Мария</p>
                        <p>Маркетолог</p>
                    </div>
                </div>


                <div class="reviewCadr">
                    <div class="video-container">
                        <video src="video/reviews.mp4" loop>
                            Ваш браузер не поддерживает видео
                        </video>
                        <button class="play-pause-btn">⏸</button>
                    </div>
                    <h2>Компания "Вектор"</h2>
                    <div class="reviewCadrText">
                        <p>Мария</p>
                        <p>Маркетолог</p>
                    </div>
                </div>


                <div class="reviewCadr">
                    <div class="video-container">
                        <video src="video/reviews.mp4" loop>
                            Ваш браузер не поддерживает видео
                        </video>
                        <button class="play-pause-btn">⏸</button>
                    </div>
                    <h2>Компания "Вектор"</h2>
                    <div class="reviewCadrText">
                        <p>Мария</p>
                        <p>Маркетолог</p>
                    </div>
                </div>
            </div>
            <button class="slider-arrow slider-arrow-next">›</button>
        </div>


    </div>


    </div>
</section>

<section class="zakaz">
    <div class="main">
        <div class="main">
            <div class="blockCompanyMainText">
                <img class="companyLogo" src="img/decorLeft.png" alt="">
                <h2 class="blockCompanyMainTextTitel">Закажите кейтеринг прямо сейчас</h2>
                <img class="companyLogo" src="img/decorRight.png" alt="">
            </div>
        </div>
        <p class="zakazTitielText">Оставьте заявку, и наш менеджер свяжется с вами в течение 15 минут</p>

        <div class="forms">
            <form method="post" action="#">
            <label>
                Ваше имя
                <input type="text" placeholder="Ваше имя" >
            </label>
                <label>
                    Телефон
                    <input type="number" placeholder="+7" >
                </label>
                <label>
                    Комментарий
                    <textarea placeholder="Ваш комментарий"> </textarea>
                </label>

                <div class="buttons">
                    <button class="btnSubmit" type="submit">
                        <a href="">
                            Отправить заявку
                        </a>
                    </button>
                </div>


            </form>

            <div class="imgForm">
                <img src="img/formImg.png" alt="">
            </div>

        </div>


    </div>

</section>
@endsection 
