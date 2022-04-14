@extends('layouts/layout', ['title' => "SushiBar - О нас"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">О нас</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
    <section class="section__about section">
        <div class="container">
            <div class="about__block">
                <div class="about__box">
                    <div class="about__box__work-hours">
                        <h4 class="about__box__work-hours__title about__small__title">Рабочие часы</h4>
                        <p class="about__box__work-hours__text text"><strong>Понедельник - пятница:</strong> С 8 утра до 10 вечера</p>
                        <p class="about__box__work-hours__text text"><strong>Суббота:</strong> C 10 утра - 12 вечера</p>
                        <p class="about__box__work-hours__text text"><strong>Воскресенье: </strong> Закрыто</p>
                    </div>
                    <!-- /.about__box__work-hours -->
                    <div class="about__box__events">
                        <h4 class="about__box__events__title about__small__title">Специальные мероприятия</h4>
                        <p class="about__box__events__text text">Последнию субботу каждого месяца!</p>
                    </div>
                    <!-- /.about__box__events -->
                    <a href="contacts" class="about__box__contacts btn link">КОНТАКТЫ</a>
                    <!-- /.about__box__contacts -->
                </div>
                <!-- /.about__box -->
                <div class="about__box">
                    <div class="about__box__history">
                        <h2 class="about__box__history__title title">МЫ СЕМЬЯ КОБАЯСИ И ЭТО НАШ <br> РЕСТОРАН!</h2>
                        <p class="about__box__history__text text">С давних пор мы занимаемся рестаранным бизнесом, и в этом нам нет равных! Мы знаем как удивить клиента лучшим сервисом от ностоящих японцев</p>
                    </div>
                    <!-- /.about__box__history -->
                    <div class="about__box__history__cards">
                        <div class="about__box__history__card">
                            <h3 class="about__box__history__card__title">РЕЦЕПТЫ ИЗ ЯПОНИИ</h3>
                            <p class="about__box__history__card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus at eius ea quibusdam tempora maiores quos provident perferendis veritatis, eos iste animi? Natus neque autem eum sint alias eaque.</p>
                        </div>
                        <!-- /.about__box__history__card -->
                        <div class="about__box__history__card">
                            <h3 class="about__box__history__card__title">2000 ЛЕТ ТРАДИЦИИ</h3>
                            <p class="about__box__history__card__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus temporibus at eius ea quibusdam tempora maiores quos provident perferendis veritatis, eos iste animi? Natus neque autem eum sint alias eaque.</p>
                        </div>
                        <!-- /.about__box__history__card -->
                    </div>
                    <!-- /.about__box__history__cards -->
                </div>
                <!-- /.about__box -->
            </div>
            <!-- /.about__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__about section -->
    <section class="section__support section">
        <div class="container">
            <div class="support__block">
                <div class="special__card">
                    <div class="special__card__box">
                        <img src="img/home/phone-icon.png" alt="phone" class="special__card__img">
                    </div>
                    <!-- /.special__card__box -->
                    <div class="special__card__box">
                        <h3 class="special__card__title">Круглосуточная <br> поддержка 24/7</h3>
                        <!-- /.special__card__title -->
                        <span class="special__card__text">Позвоните нам и забронируйте столик!</span>
                        <!-- /.special__card__text -->
                    </div>
                    <!-- /.special__card__box -->
                    <div class="special__card__box">
                        <a href="tel:+78005553535" class="special__card__title special__card__phone link">
                            +7&nbsp;(800)&nbsp;555&nbsp;35&nbsp;35
                        </a>
                    </div>
                    <!-- /.special__card__box -->
                </div>
                <!-- /.special__card -->
                <div class="special__card">
                    <div class="special__card__box">
                        <img src="img/home/master.png" alt="master" class="special__card__img special__card__img-master">
                    </div>
                    <!-- /.special__card__box -->
                </div>
                <!-- /.special__card -->
            </div>
            <!-- /.support__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__support section -->
@endsection
