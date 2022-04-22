@extends('layouts/layout', ['title' => "SushiBar - Контакты"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Контакты</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
    <section class="section__map section">
        <div class="map__block">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3188.3828133621214!2d38.12262523363036!3d55.592839442906985!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x414abf45cfde0aad%3A0xa7dde8455b072386!2z0IHRiNC4INCh0YPRiNC4!5e0!3m2!1sru!2sru!4v1648102345535!5m2!1sru!2sru" width="3200px" height="720px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <!-- /.map__block -->
    </section>
    <!-- /.section__about section -->
    <div class="section__contacts section">
        <div class="container">
            <div class="contacts__block">
                <a href="https://yandex.ru/maps/-/CCUBYXrPOD" class="contacts__link text link">
                    <img src="img/contacts/map-pin.svg" alt="map" class="contacts__link__img">
                    <span class="contacts__link__text">ул. Маяковского, 9, Жуковский</span>
                </a>
                <!-- /.contacts__link -->
                <a href="tel:+78005553535" class="contacts__link text link">
                    <img src="img/contacts/phone.svg" alt="map" class="contacts__link__img">
                    <span class="contacts__link__text">+7&nbsp;(800)&nbsp;555&nbsp;35&nbsp;35</span>
                </a>
                <!-- /.contacts__link -->
                <a href="mailto:gg@gg.com" class="contacts__link text link">
                    <img src="img/contacts/mail.svg" alt="map" class="contacts__link__img">
                    <span class="contacts__link__text">gg@gg.com</span>
                </a>
                <!-- /.contacts__link -->
            </div>
            <!-- /.contacts__block -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.section__contacts section -->
    <form action="{{ route('feedback.store') }}" method="post" class="form__contacts">
        @csrf
        <div class="container">
            <h2 class="title">Хотите что-то Спросить? заказать столик? не стесняйтесь!</h2>
            <div class="form__contacts__box">
                <input type="text" class="input input__contacts" placeholder="Ваше Имя" required name="feedback_first_name" value="{{ old('feedback_first_name') ?? '' }}">
                <input type="text" class="input input__contacts" placeholder="Ваше Фамилия" required name="feedback_last_name" value="{{ old('feedback_last_name') ?? '' }}">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form__contacts__box">
                <input type="email" class="input input__contacts" placeholder="Ваш E-mail" required name="feedback_email" value="{{ old('feedback_email') ?? '' }}">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form__contacts__box">
                <input type="datetime-local" class="input input__contacts" name="feedback_user_date" value="{{ old('feedback_user_date') ?? '' }}">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form__contacts__box">
                <textarea cols="128" rows="10" placeholder="Ваше сообщение" class="input textarea__contacts" required name="feedback_text" autofocus="" onfocus="this.innerHTML='{{ old('feedback_text') ?? '' }}'"></textarea>
            </div>
            <!-- /.form__contacts__box -->
            <div class="form__contacts__box">
                <input type="submit" value="Отправить" class="submit__contacts">
            </div>
            <!-- /.form__contacts__box -->
        </div>
        <!-- /.contacts -->
    </form>
    <section class="section__special section__special-contacts section">
        <div class="container">
            <div class="special__cards">
                <div class="special__card">
                    <div class="special__card__box">
                        <img src="img/home/icon-phone.png" alt="phone" class="special__card__img">
                    </div>
                    <!-- /.special__card__box -->
                    <div class="special__card__box">
                        <h3 class="special__card__title">Круглосуточная поддержка 24/7</h3>
                        <!-- /.special__card__title -->
                        <span class="special__card__text">Позвоните нам и забронируйте столик!</span>
                        <!-- /.special__card__text -->
                    </div>
                    <!-- /.special__card__box -->
                    <div class="special__card__box">
                        <strong class="special__card__attention">24 часа <br> 7 дней</strong>
                    </div>
                    <!-- /.special__card__box -->
                </div>
                <!-- /.special__card -->
                <div class="special__card">
                    <div class="special__card__box">
                        <img src="img/home/cake-icon.png" alt="cake-icon" class="special__card__img">
                    </div>
                    <!-- /.special__card__box -->
                    <div class="special__card__box">
                        <h3 class="special__card__title">Специальный ланч</h3>
                        <!-- /.special__card__title -->
                        <span class="special__card__text text">Лучшая цена для начала!</span>
                        <!-- /.special__card__text -->
                    </div>
                    <!-- /.special__card__box -->
                    <div class="special__card__box">
                        <strong class="special__card__attention">от 1499₽</strong>
                    </div>
                    <!-- /.special__card__box -->
                </div>
                <!-- /.special__card -->
            </div>
            <!-- /.special__cards -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__special section -->
@endsection
