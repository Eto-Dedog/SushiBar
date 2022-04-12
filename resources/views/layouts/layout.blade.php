<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css')}}">
    <link rel="shortcut icon" href="{{ asset('img/home/favicon.png') }}" type="image/x-icon">
    <script src="{{ asset('js/main.js') }}" defer></script>
    @if($title == 'SushiBar')
        <script src="{{ asset('js/slider.js') }}" defer></script>
        <script src="{{ asset('js/special-sets.js') }}" defer></script>
    @else
    @endif

    @if($title == 'SushiBar - Аккаунт')
        <script src="{{ asset('js/userfulTab.js') }}" defer></script>
    @else
    @endif

    @if($title == 'SushiBar - Меню')
        <script src="{{ asset('js/menu.js') }}" defer></script>
    @else
    @endif

    @if($title == 'SushiBar - Продукты')
        <script src="{{ asset('js/products.js') }}" defer></script>
    @else
    @endif

</head>
<body>
<header class="section__header section">
    <div class="container">
        <div class="header__block block">
            <div class="header__auth nav">
                <div class="header__auth__box">
                    <a href="tel:+78005553535" class="header-tell header__auth__link link">Для саказа позвоните нам: <u>+7 (800) 555 35 35</u></a>
                    <button class="btn-auth burger"><img class="btn-burger-img" src="img/account/burger.svg" alt="account"></button>
                </div>
                <!-- /.header__auth__box -->
                <div class="header__auth__box">
                    <a href="/" class="header__auth__link link"><img src="img/home/logo.png" alt="logo" class="header__logo logo"></a>
                </div>
                <!-- /.header__auth__box -->
                <div class="header__auth__box">
                    <a href="#" class="header-mailing header__auth__box__link link mailing"><svg class="auth__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path d="M23.928 5.424c-0.024-0.648-0.552-1.152-1.176-1.152h-21.504c-0.648 0-1.176 0.528-1.176 1.176v13.128c0 0.648 0.528 1.176 1.176 1.176h21.504c0.648 0 1.176-0.528 1.176-1.176v-13.152zM22.512 5.4l-10.512 6.576-10.512-6.576h21.024zM1.248 16.992v-10.416l7.344 4.584-7.344 5.832zM1.224 18.456l8.352-6.624 2.064 1.32c0.192 0.12 0.432 0.12 0.624 0l2.064-1.32 8.4 6.648 0.024 0.096c0 0 0 0.024-0.024 0.024h-21.48c-0.024 0-0.024 0-0.024-0.024v-0.12zM22.752 6.648v10.344l-7.344-5.808 7.344-4.536z"></path></svg>Рассылка</a>
                    <a href="#" class="header-auth header__auth__box__link link authorization"><svg class="auth__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path d="M16.848 12.168c1.56-1.32 2.448-3.216 2.448-5.232 0-3.768-3.072-6.84-6.84-6.84s-6.864 3.072-6.864 6.84c0 2.016 0.888 3.912 2.448 5.232-4.080 1.752-6.792 6.216-6.792 11.136 0 0.36 0.288 0.672 0.672 0.672h21.072c0.36 0 0.672-0.288 0.672-0.672-0.024-4.92-2.76-9.384-6.816-11.136zM12.432 1.44c3.048 0 5.52 2.472 5.52 5.52 0 1.968-1.056 3.792-2.76 4.776l-0.048 0.024c0 0 0 0-0.024 0-0.048 0.024-0.096 0.048-0.144 0.096h-0.024c-0.792 0.408-1.632 0.624-2.544 0.624-3.048 0-5.52-2.472-5.52-5.52s2.52-5.52 5.544-5.52zM9.408 13.056c0.96 0.48 1.968 0.72 3.024 0.72s2.064-0.24 3.024-0.72c3.768 1.176 6.576 5.088 6.816 9.552h-19.68c0.264-4.44 3.048-8.376 6.816-9.552z"></path></svg>Авторизация или Регистрация</a>
                    <button class="btn-auth authorization"><img class="btn-auth-img" src="img/account/avatar.png" alt="account"></button>
                </div>
                <!-- /.header__auth__box -->
            </div>
            <!-- /.header__auth -->
            <nav class="header__nav nav">
                @if($title == 'SushiBar')
                    <a href="/" class="header__nav__link nav__link link active">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @elseif($title == 'SushiBar - Меню')
                    <a href="/" class="header__nav__link nav__link link">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link active">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @elseif($title == 'SushiBar - Информация')
                    <a href="/" class="header__nav__link nav__link link">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link active">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @elseif($title == 'SushiBar - Блог')
                    <a href="/" class="header__nav__link nav__link link ">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link active">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @elseif($title == 'SushiBar - О нас')
                    <a href="/" class="header__nav__link nav__link link">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link active">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @elseif($title == 'SushiBar - Контакты')
                    <a href="/" class="header__nav__link nav__link link">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link active">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @elseif($title !== 'SushiBar')
                    <a href="/" class="header__nav__link nav__link link">Главная</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="menu.html" class="header__nav__link nav__link link">Меню</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="information.html" class="header__nav__link nav__link link">Информация</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="blog.html" class="header__nav__link nav__link link">Блог</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="about.html" class="header__nav__link nav__link link">О&nbsp;нас</a>
                    <!-- /.header__nav__link nav__link link -->
                    <a href="contacts.html" class="header__nav__link nav__link link">Контакты</a>
                    <!-- /.header__nav__link nav__link link -->
                @endif

            </nav>
            <!-- /.header__nav nav -->
        </div>
        <!-- /.header__block block -->
    </div>
    <!-- /.container -->
</header>
<!-- /.section__header section -->

@yield('content')

<footer class="section__footer section">
    <div class="container">
        <div class="footer__block">
            <div class="footer__box">
                <h3 class="footer__title info__title title">Наш адрисс</h3>
                <a href="https://yandex.ru/maps/-/CCUBYXrPOD" class="text link footer__link" target="_blank">Суши ресторан: <br> ул. Маяковского, 9, Жуковский</a>
            </div>
            <!-- /.footer__box -->
            <div class="footer__box">
                <h3 class="footer__title info__title title">Информация</h3>
                <a href="about.html" class="text link footer__link">История ресторана</a>
                <span class="text link footer__link info-one">Политика конфиденциальности</span>
                <span class="text link footer__link info-two">Правила и условия</span>
            </div>
            <!-- /.footer__box -->
            <div class="footer__box">
                <h3 class="footer__title info__title title">Рабочие время</h3>
                <a href="https://yandex.ru/maps/-/CCUBYXrPOD" class="text link footer__link" target="_blank">Понедельник - пятница: С 8 утра до 10 вечера</a>
                <a href="https://yandex.ru/maps/-/CCUBYXrPOD" class="text link footer__link" target="_blank">Суббота: 10 утра - 12 вечера</a>
                <a href="https://yandex.ru/maps/-/CCUBYXrPOD" class="text link footer__link" target="_blank">Воскресенье: Закрыто</a>
            </div>
            <!-- /.footer__box -->
        </div>
        <!-- /.footer__block -->
    </div>
    <!-- /.container -->
</footer>
<!-- /.section__footer section -->
<section class="section__copyright section">
    <div class="container">
        <div class="copyright__block">
            <span class="copyright__text">Copyright © 2022 <strong>Or show communism</strong>. Created by <strong>Or go</strong></span>
        </div>
        <!-- /.copyright__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__copyright section -->
<a class="up" title="Наверх">↑</a>
<div class="modal__newsletters d-none">
    <div class="modal__newsletters__overlay">
    </div>
    <!-- /.modal__overlay -->
    <div class="modal__newsletters__body">
        <div class="modal__newsletters__box">
            <img src="img/home/all-right-man.png" alt="all-right-man" class="modal__newsletters__img">
        </div>
        <!-- /.modal__newsletters__box -->
        <div class="modal__newsletters__box">
            <h2 class="modal__newsletters__title">Присоединяйтесь к рассылке новостей
                <br> и <span class="attention">будьте в курсе событий!</span> </h2>
            <form action="#" method="post" class="newsletters__form newsletters__form-modal">
                <input type="email" placeholder="Введите пожалуйста E-mail" class="newsletters__input input" required>
                <input type="submit" class="newsletters__btn btn" value="+">
            </form>
            <span class="modal__spam">*Не волнуйтесь, мы не будем рассылать спам по почтовым ящикам наших клиентов</span>
        </div>
        <!-- /.modal__newsletters__box -->
        <div class="modal__newsletters__close modal__close">
            X
        </div>
        <!-- /.modal__clsoe -->
    </div>
    <!-- /.modal__body -->
</div>
<!-- /.modal -->
<div class="modal__user d-none">
    <div class="modal__user__overlay"></div>
    <div class="modal__user__body">
        <h2 class="modal__user__title">
            <a href="#" class="link modal__user__link">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24" class="modal__svg__img"><path d="M16.848 12.168c1.56-1.32 2.448-3.216 2.448-5.232 0-3.768-3.072-6.84-6.84-6.84s-6.864 3.072-6.864 6.84c0 2.016 0.888 3.912 2.448 5.232-4.080 1.752-6.792 6.216-6.792 11.136 0 0.36 0.288 0.672 0.672 0.672h21.072c0.36 0 0.672-0.288 0.672-0.672-0.024-4.92-2.76-9.384-6.816-11.136zM12.432 1.44c3.048 0 5.52 2.472 5.52 5.52 0 1.968-1.056 3.792-2.76 4.776l-0.048 0.024c0 0 0 0-0.024 0-0.048 0.024-0.096 0.048-0.144 0.096h-0.024c-0.792 0.408-1.632 0.624-2.544 0.624-3.048 0-5.52-2.472-5.52-5.52s2.52-5.52 5.544-5.52zM9.408 13.056c0.96 0.48 1.968 0.72 3.024 0.72s2.064-0.24 3.024-0.72c3.768 1.176 6.576 5.088 6.816 9.552h-19.68c0.264-4.44 3.048-8.376 6.816-9.552z"></path></svg>
                <br>Мой Аккаунт</a></h2>
        <div class="modal__user__no-auth">
            <div class="modal__user__btns">
                <div class="modal__user__btn modal__user__btn-active">Вход</div>
                <div class="modal__user__btn ">Регистрация</div>
            </div>
            <!-- /.modal__user__btns -->
            <form action="#" method="get" class="form-user form__modal__user-login">
                <div class="form__modal__user__box">
                    <label class="form__modal__user__label label" for="log-email">Введите ваш e-mail *</label>
                    <input class="form__modal__user__input input" type="email" id="log-email" required>
                </div>
                <!-- /.form__modal__user__box -->
                <div class="form__modal__user__box">
                    <label class="form__modal__user__label label" for="log-pass">Введите ваш пароль *</label>
                    <input class="form__modal__user__input input" type="password" id="log-pass" required>
                </div>
                <!-- /.form__modal__user__box -->
                <div class="form__modal__user__box-check d-none">
                    <input type="checkbox" id="log-check" class="form__modal__user__check">
                    <label class="form__modal__user__label label" for="log-check"> Запомни меня</label>
                    <a href="#" class="form__modal__user__lost-link link">Потеряли пароль?</a>
                </div>
                <!-- /.form__modal__user__box -->
                <div class="form__modal__user__box">
                    <input class="form__modal__user__input form__modal__user__input-btn input" type="submit" value="ВОЙТИ">
                </div>
                <!-- /.form__modal__user__box -->
            </form>
            <form action="#" method="post" class="form-user form__modal__user-reg d-none">
                <div class="form__modal__user__box">
                    <label class="form__modal__user__label label" for="reg-email">Введите ваш e-mail *</label>
                    <input class="form__modal__user__input input" type="email" id="reg-email" required>
                </div>
                <!-- /.form__modal__user__box -->
                <div class="form__modal__user__box">
                    <label class="form__modal__user__label label" for="reg-name">Введите имя вашего пользователя *</label>
                    <input class="form__modal__user__input input" type="text" id="reg-name" required>
                </div>
                <!-- /.form__modal__user__box -->
                <div class="form__modal__user__box">
                    <label class="form__modal__user__label label" for="reg-pass">Введите ваш пароль *</label>
                    <input class="form__modal__user__input input" type="password" id="reg-pass" required>
                </div>
                <!-- /.form__modal__user__box -->
                <div class="form__modal__user__box">
                    <input class="form__modal__user__input form__modal__user__input-btn input" type="submit" value="зарегистрироваться">
                </div>
                <!-- /.form__modal__user__box -->
            </form>
        </div>
        <!-- /.modal__user__no-auth -->
        <div class="modal__user__auth d-none">
            <a href="#" class="link modal__user__auth-link">Панель управления</a>
            <a href="#" class="link modal__user__auth-link">Отзывы</a>
            <a href="#" class="link modal__user__auth-link d-none">Адресс</a>
            <a href="#" class="link modal__user__auth-link ">Подробней об акаунте</a>
            <a href="#" class="link modal__user__auth-link">Выход</a>
        </div>
        <!-- /.modal__user__auth -->
        <div class="modal__user__close modal__close">
            X
        </div>
        <!-- /.modal__clsoe -->
    </div>
    <!-- /.modal__user__body -->

</div>
<!-- /.modal__user -->
<div class="modal__burger d-none">
    <div class="modal__burger__overlay"></div>
    <div class="modal__burger__body">
        <div class="header__block block">
            <nav class="burger__nav nav">
                <a href="/" class="header__auth__link link"><img src="img/home/logo.png" alt="logo" class="header__logo logo"></a>
                <a href="index.html" class="burger__nav__link nav__link link active">Главная</a>
                <!-- /.header__nav__link nav__link link -->
                <a href="menu.html" class="burger__nav__link nav__link link">Меню</a>
                <!-- /.header__nav__link nav__link link -->
                <a href="information.html" class="burger__nav__link nav__link link">Информация</a>
                <!-- /.header__nav__link nav__link link -->
                <a href="blog.html" class="burger__nav__link nav__link link">Блог</a>
                <!-- /.header__nav__link nav__link link -->
                <a href="about.html" class="burger__nav__link nav__link link">О&nbsp;нас</a>
                <!-- /.header__nav__link nav__link link -->
                <a href="contacts.html" class="burger__nav__link nav__link link">Контакты</a>
                <!-- /.header__nav__link nav__link link -->
                <span class="burger__nav__link nav__link link authorization auth-burger"><svg class="auth__icon" version="1.1" xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24"><path d="M16.848 12.168c1.56-1.32 2.448-3.216 2.448-5.232 0-3.768-3.072-6.84-6.84-6.84s-6.864 3.072-6.864 6.84c0 2.016 0.888 3.912 2.448 5.232-4.080 1.752-6.792 6.216-6.792 11.136 0 0.36 0.288 0.672 0.672 0.672h21.072c0.36 0 0.672-0.288 0.672-0.672-0.024-4.92-2.76-9.384-6.816-11.136zM12.432 1.44c3.048 0 5.52 2.472 5.52 5.52 0 1.968-1.056 3.792-2.76 4.776l-0.048 0.024c0 0 0 0-0.024 0-0.048 0.024-0.096 0.048-0.144 0.096h-0.024c-0.792 0.408-1.632 0.624-2.544 0.624-3.048 0-5.52-2.472-5.52-5.52s2.52-5.52 5.544-5.52zM9.408 13.056c0.96 0.48 1.968 0.72 3.024 0.72s2.064-0.24 3.024-0.72c3.768 1.176 6.576 5.088 6.816 9.552h-19.68c0.264-4.44 3.048-8.376 6.816-9.552z"></path></svg>Авторизация или Регистрация</span>
                <!-- /.header__nav__link nav__link link -->
            </nav>
            <!-- /.header__nav nav -->
        </div>
        <!-- /.header__block block -->
        <div class="modal__burger__close modal__close">
            X
        </div>
        <!-- /.modal__clsoe -->
    </div>
    <!-- /.modal__burger__body -->

</div>
<!-- /.modal__burger -->
<div class="modal__info modal__info-one d-none">
    <div class="modal__info__overlay modal__info__overlay-one"></div>
    <div class="modal__info__body modal__info__body-one">
        <h2 class="modal__info__title modal__info__title-one">Политика в отношении обработки персональных данных <br></h2>
        <p class="modal__info__text modal__info__text-one">
            1. Общие положения <br>
            Настоящая политика обработки персональных данных составлена в соответствии с требованиями Федерального закона от 27.07.2006. №152-ФЗ «О персональных данных» (далее - Закон о персональных данных) и определяет порядок обработки персональных данных и меры по обеспечению безопасности персональных данных, предпринимаемые Михайловым Иваном Сергеевичем (далее – Оператор). <br>
            1.1. Оператор ставит своей важнейшей целью и условием осуществления своей деятельности соблюдение прав и свобод человека и гражданина при обработке его персональных данных, в том числе защиты прав на неприкосновенность частной жизни, личную и семейную тайну. <br>
            1.2. Настоящая политика Оператора в отношении обработки персональных данных (далее – Политика) применяется ко всей информации, которую Оператор может получить о посетителях веб-сайта httpsː//thismywebsite·com. <br>
            2. Основные понятия, используемые в Политике <br>
            2.1. Автоматизированная обработка персональных данных – обработка персональных данных с помощью средств вычислительной техники. <br>
            2.2. Блокирование персональных данных – временное прекращение обработки персональных данных (за исключением случаев, если обработка необходима для уточнения персональных данных). <br>
            2.3. Веб-сайт – совокупность графических и информационных материалов, а также программ для ЭВМ и баз данных, обеспечивающих их доступность в сети интернет по сетевому адресу httpsː//thismywebsite·com. <br>
            2.4. Информационная система персональных данных — совокупность содержащихся в базах данных персональных данных, и обеспечивающих их обработку информационных технологий и технических средств. <br>
            2.5. Обезличивание персональных данных — действия, в результате которых невозможно определить без использования дополнительной информации принадлежность персональных данных конкретному Пользователю или иному субъекту персональных данных. <br>
            2.6. Обработка персональных данных – любое действие (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление, уничтожение персональных данных. <br>
            2.7. Оператор – государственный орган, муниципальный орган, юридическое или физическое лицо, самостоятельно или совместно с другими лицами организующие и (или) осуществляющие обработку персональных данных, а также определяющие цели обработки персональных данных, состав персональных данных, подлежащих обработке, действия (операции), совершаемые с персональными данными. <br>
            2.8. Персональные данные – любая информация, относящаяся прямо или косвенно к определенному или определяемому Пользователю веб-сайта httpsː//thismywebsite·com. <br>
            2.9. Персональные данные, разрешенные субъектом персональных данных для распространения, - персональные данные, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных путем дачи согласия на обработку персональных данных, разрешенных субъектом персональных данных для распространения в порядке, предусмотренном Законом о персональных данных (далее - персональные данные, разрешенные для распространения).<br>
            2.10. Пользователь – любой посетитель веб-сайта httpsː//thismywebsite·com.<br>
            2.11. Предоставление персональных данных – действия, направленные на раскрытие персональных данных определенному лицу или определенному кругу лиц.<br>
            2.12. Распространение персональных данных – любые действия, направленные на раскрытие персональных данных неопределенному кругу лиц (передача персональных данных) или на ознакомление с персональными данными неограниченного круга лиц, в том числе обнародование персональных данных в средствах массовой информации, размещение в информационно-телекоммуникационных сетях или предоставление доступа к персональным данным каким-либо иным способом.<br>
            2.13. Трансграничная передача персональных данных – передача персональных данных на территорию иностранного государства органу власти иностранного государства, иностранному физическому или иностранному юридическому лицу.<br>
            2.14. Уничтожение персональных данных – любые действия, в результате которых персональные данные уничтожаются безвозвратно с невозможностью дальнейшего восстановления содержания персональных данных в информационной системе персональных данных и (или) уничтожаются материальные носители персональных данных.<br>
            3. Основные права и обязанности Оператора<br>
            3.1. Оператор имеет право:<br>
            – получать от субъекта персональных данных достоверные информацию и/или документы, содержащие персональные данные;<br>
            – в случае отзыва субъектом персональных данных согласия на обработку персональных данных Оператор вправе продолжить обработку персональных данных без согласия субъекта персональных данных при наличии оснований, указанных в Законе о персональных данных;<br>
            – самостоятельно определять состав и перечень мер, необходимых и достаточных для обеспечения выполнения обязанностей, предусмотренных Законом о персональных данных и принятыми в соответствии с ним нормативными правовыми актами, если иное не предусмотрено Законом о персональных данных или другими федеральными законами.<br>
            3.2. Оператор обязан:<br>
            – предоставлять субъекту персональных данных по его просьбе информацию, касающуюся обработки его персональных данных;<br>
            – организовывать обработку персональных данных в порядке, установленном действующим законодательством РФ;<br>
            – отвечать на обращения и запросы субъектов персональных данных и их законных представителей в соответствии с требованиями Закона о персональных данных;<br>
            – сообщать в уполномоченный орган по защите прав субъектов персональных данных по запросу этого органа необходимую информацию в течение 30 дней с даты получения такого запроса;<br>
            – публиковать или иным образом обеспечивать неограниченный доступ к настоящей Политике в отношении обработки персональных данных;<br>
            – принимать правовые, организационные и технические меры для защиты персональных данных от неправомерного или случайного доступа к ним, уничтожения, изменения, блокирования, копирования, предоставления, распространения персональных данных, а также от иных неправомерных действий в отношении персональных данных;<br>
            – прекратить передачу (распространение, предоставление, доступ) персональных данных, прекратить обработку и уничтожить персональные данные в порядке и случаях, предусмотренных Законом о персональных данных;<br>
            – исполнять иные обязанности, предусмотренные Законом о персональных данных.<br>
            4. Основные права и обязанности субъектов персональных данных<br>
            4.1. Субъекты персональных данных имеют право:<br>
            – получать информацию, касающуюся обработки его персональных данных, за исключением случаев, предусмотренных федеральными законами. Сведения предоставляются субъекту персональных данных Оператором в доступной форме, и в них не должны содержаться персональные данные, относящиеся к другим субъектам персональных данных, за исключением случаев, когда имеются законные основания для раскрытия таких персональных данных. Перечень информации и порядок ее получения установлен Законом о персональных данных;<br>
            – требовать от оператора уточнения его персональных данных, их блокирования или уничтожения в случае, если персональные данные являются неполными, устаревшими, неточными, незаконно полученными или не являются необходимыми для заявленной цели обработки, а также принимать предусмотренные законом меры по защите своих прав;<br>
            – выдвигать условие предварительного согласия при обработке персональных данных в целях продвижения на рынке товаров, работ и услуг;<br>
            – на отзыв согласия на обработку персональных данных;<br>
            – обжаловать в уполномоченный орган по защите прав субъектов персональных данных или в судебном порядке неправомерные действия или бездействие Оператора при обработке его персональных данных;<br>
            – на осуществление иных прав, предусмотренных законодательством РФ.<br>
            4.2. Субъекты персональных данных обязаны:<br>
            – предоставлять Оператору достоверные данные о себе;<br>
            – сообщать Оператору об уточнении (обновлении, изменении) своих персональных данных.<br>
            4.3. Лица, передавшие Оператору недостоверные сведения о себе, либо сведения о другом субъекте персональных данных без согласия последнего, несут ответственность в соответствии с законодательством РФ.<br>
            5. Оператор может обрабатывать следующие персональные данные Пользователя<br>
            5.1. Фамилия, имя, отчество.<br>
            5.2. Электронный адрес.<br>
            5.3. Номера телефонов.<br>
            5.4. Также на сайте происходит сбор и обработка обезличенных данных о посетителях (в т.ч. файлов «cookie») с помощью сервисов интернет-статистики (Яндекс Метрика и Гугл Аналитика и других).<br>
            5.5. Вышеперечисленные данные далее по тексту Политики объединены общим понятием Персональные данные.<br>
            5.6. Обработка специальных категорий персональных данных, касающихся расовой, национальной принадлежности, политических взглядов, религиозных или философских убеждений, интимной жизни, Оператором не осуществляется.<br>
            5.7. Обработка персональных данных, разрешенных для распространения, из числа специальных категорий персональных данных, указанных в ч. 1 ст. 10 Закона о персональных данных, допускается, если соблюдаются запреты и условия, предусмотренные ст. 10.1 Закона о персональных данных.<br>
            5.8. Согласие Пользователя на обработку персональных данных, разрешенных для распространения, оформляется отдельно от других согласий на обработку его персональных данных. При этом соблюдаются условия, предусмотренные, в частности, ст. 10.1 Закона о персональных данных. Требования к содержанию такого согласия устанавливаются уполномоченным органом по защите прав субъектов персональных данных.<br>
            5.8.1 Согласие на обработку персональных данных, разрешенных для распространения, Пользователь предоставляет Оператору непосредственно.<br>
            5.8.2 Оператор обязан в срок не позднее трех рабочих дней с момента получения указанного согласия Пользователя опубликовать информацию об условиях обработки, о наличии запретов и условий на обработку неограниченным кругом лиц персональных данных, разрешенных для распространения.<br>
            5.8.3 Передача (распространение, предоставление, доступ) персональных данных, разрешенных субъектом персональных данных для распространения, должна быть прекращена в любое время по требованию субъекта персональных данных. Данное требование должно включать в себя фамилию, имя, отчество (при наличии), контактную информацию (номер телефона, адрес электронной почты или почтовый адрес) субъекта персональных данных, а также перечень персональных данных, обработка которых подлежит прекращению. Указанные в данном требовании персональные данные могут обрабатываться только Оператором, которому оно направлено.<br>
            5.8.4 Согласие на обработку персональных данных, разрешенных для распространения, прекращает свое действие с момента поступления Оператору требования, указанного в п. 5.8.3 настоящей Политики в отношении обработки персональных данных.<br>
            6. Принципы обработки персональных данных<br>
            6.1. Обработка персональных данных осуществляется на законной и справедливой основе.<br>
            6.2. Обработка персональных данных ограничивается достижением конкретных, заранее определенных и законных целей. Не допускается обработка персональных данных, несовместимая с целями сбора персональных данных.<br>
            6.3. Не допускается объединение баз данных, содержащих персональные данные, обработка которых осуществляется в целях, несовместимых между собой.<br>
            6.4. Обработке подлежат только персональные данные, которые отвечают целям их обработки.<br>
            6.5. Содержание и объем обрабатываемых персональных данных соответствуют заявленным целям обработки. Не допускается избыточность обрабатываемых персональных данных по отношению к заявленным целям их обработки.<br>
            6.6. При обработке персональных данных обеспечивается точность персональных данных, их достаточность, а в необходимых случаях и актуальность по отношению к целям обработки персональных данных. Оператор принимает необходимые меры и/или обеспечивает их принятие по удалению или уточнению неполных или неточных данных.<br>
            6.7. Хранение персональных данных осуществляется в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных. Обрабатываемые персональные данные уничтожаются либо обезличиваются по достижении целей обработки или в случае утраты необходимости в достижении этих целей, если иное не предусмотрено федеральным законом.<br>
            7. Цели обработки персональных данных<br>
            7.1. Цель обработки персональных данных Пользователя:<br>
            – информирование Пользователя посредством отправки электронных писем;<br>
            – заключение, исполнение и прекращение гражданско-правовых договоров;<br>
            – предоставление доступа Пользователю к сервисам, информации и/или материалам, содержащимся на веб-сайте httpsː//thismywebsite·com.<br>
            7.2. Также Оператор имеет право направлять Пользователю уведомления о новых продуктах и услугах, специальных предложениях и различных событиях. Пользователь всегда может отказаться от получения информационных сообщений, направив Оператору письмо на адрес электронной почты privacy@thismywebsite·com с пометкой «Отказ от уведомлений о новых продуктах и услугах и специальных предложениях».<br>
            7.3. Обезличенные данные Пользователей, собираемые с помощью сервисов интернет-статистики, служат для сбора информации о действиях Пользователей на сайте, улучшения качества сайта и его содержания.<br>
            8. Правовые основания обработки персональных данных<br>
            8.1. Правовыми основаниями обработки персональных данных Оператором являются:<br>
            – перечислите нормативно-правовые акты, регулирующие отношения, связанные с вашей деятельностью, например, если ваша деятельность связана с информационными технологиями, в частности с созданием сайтов, то здесь можно указать Федеральный закон "Об информации, информационных технологиях и о защите информации" от 27.07.2006 N 149-ФЗ;<br>
            – уставные документы Оператора;<br>
            – договоры, заключаемые между оператором и субъектом персональных данных;<br>
            – федеральные законы, иные нормативно-правовые акты в сфере защиты персональных данных;<br>
            – согласия Пользователей на обработку их персональных данных, на обработку персональных данных, разрешенных для распространения.<br>
            8.2. Оператор обрабатывает персональные данные Пользователя только в случае их заполнения и/или отправки Пользователем самостоятельно через специальные формы, расположенные на сайте httpsː//thismywebsite·com или направленные Оператору посредством электронной почты. Заполняя соответствующие формы и/или отправляя свои персональные данные Оператору, Пользователь выражает свое согласие с данной Политикой.<br>
            8.3. Оператор обрабатывает обезличенные данные о Пользователе в случае, если это разрешено в настройках браузера Пользователя (включено сохранение файлов «cookie» и использование технологии JavaScript).<br>
            8.4. Субъект персональных данных самостоятельно принимает решение о предоставлении его персональных данных и дает согласие свободно, своей волей и в своем интересе.<br>
            9. Условия обработки персональных данных<br>
            9.1. Обработка персональных данных осуществляется с согласия субъекта персональных данных на обработку его персональных данных.<br>
            9.2. Обработка персональных данных необходима для достижения целей, предусмотренных международным договором Российской Федерации или законом, для осуществления возложенных законодательством Российской Федерации на оператора функций, полномочий и обязанностей.<br>
            9.3. Обработка персональных данных необходима для осуществления правосудия, исполнения судебного акта, акта другого органа или должностного лица, подлежащих исполнению в соответствии с законодательством Российской Федерации об исполнительном производстве.<br>
            9.4. Обработка персональных данных необходима для исполнения договора, стороной которого либо выгодоприобретателем или поручителем по которому является субъект персональных данных, а также для заключения договора по инициативе субъекта персональных данных или договора, по которому субъект персональных данных будет являться выгодоприобретателем или поручителем.<br>
            9.5. Обработка персональных данных необходима для осуществления прав и законных интересов оператора или третьих лиц либо для достижения общественно значимых целей при условии, что при этом не нарушаются права и свободы субъекта персональных данных.<br>
            9.6. Осуществляется обработка персональных данных, доступ неограниченного круга лиц к которым предоставлен субъектом персональных данных либо по его просьбе (далее – общедоступные персональные данные).<br>
            9.7. Осуществляется обработка персональных данных, подлежащих опубликованию или обязательному раскрытию в соответствии с федеральным законом.<br>
            10. Порядок сбора, хранения, передачи и других видов обработки персональных данных<br>
            Безопасность персональных данных, которые обрабатываются Оператором, обеспечивается путем реализации правовых, организационных и технических мер, необходимых для выполнения в полном объеме требований действующего законодательства в области защиты персональных данных.<br>
            10.1. Оператор обеспечивает сохранность персональных данных и принимает все возможные меры, исключающие доступ к персональным данным неуполномоченных лиц.<br>
            10.2. Персональные данные Пользователя никогда, ни при каких условиях не будут переданы третьим лицам, за исключением случаев, связанных с исполнением действующего законодательства либо в случае, если субъектом персональных данных дано согласие Оператору на передачу данных третьему лицу для исполнения обязательств по гражданско-правовому договору.<br>
            10.3. В случае выявления неточностей в персональных данных, Пользователь может актуализировать их самостоятельно, путем направления Оператору уведомление на адрес электронной почты Оператора privacy@thismywebsite·com с пометкой «Актуализация персональных данных».<br>
            10.4. Срок обработки персональных данных определяется достижением целей, для которых были собраны персональные данные, если иной срок не предусмотрен договором или действующим законодательством.<br>
            Пользователь может в любой момент отозвать свое согласие на обработку персональных данных, направив Оператору уведомление посредством электронной почты на электронный адрес Оператора privacy@thismywebsite·com с пометкой «Отзыв согласия на обработку персональных данных».<br>
            10.5. Вся информация, которая собирается сторонними сервисами, в том числе платежными системами, средствами связи и другими поставщиками услуг, хранится и обрабатывается указанными лицами (Операторами) в соответствии с их Пользовательским соглашением и Политикой конфиденциальности. Субъект персональных данных и/или Пользователь обязан самостоятельно своевременно ознакомиться с указанными документами. Оператор не несет ответственность за действия третьих лиц, в том числе указанных в настоящем пункте поставщиков услуг.<br>
            10.6. Установленные субъектом персональных данных запреты на передачу (кроме предоставления доступа), а также на обработку или условия обработки (кроме получения доступа) персональных данных, разрешенных для распространения, не действуют в случаях обработки персональных данных в государственных, общественных и иных публичных интересах, определенных законодательством РФ.<br>
            10.7. Оператор при обработке персональных данных обеспечивает конфиденциальность персональных данных.<br>
            10.8. Оператор осуществляет хранение персональных данных в форме, позволяющей определить субъекта персональных данных, не дольше, чем этого требуют цели обработки персональных данных, если срок хранения персональных данных не установлен федеральным законом, договором, стороной которого, выгодоприобретателем или поручителем по которому является субъект персональных данных.<br>
            10.9. Условием прекращения обработки персональных данных может являться достижение целей обработки персональных данных, истечение срока действия согласия субъекта персональных данных или отзыв согласия субъектом персональных данных, а также выявление неправомерной обработки персональных данных.<br>
            11. Перечень действий, производимых Оператором с полученными персональными данными<br>
            11.1. Оператор осуществляет сбор, запись, систематизацию, накопление, хранение, уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление, доступ), обезличивание, блокирование, удаление и уничтожение персональных данных.<br>
            11.2. Оператор осуществляет автоматизированную обработку персональных данных с получением и/или передачей полученной информации по информационно-телекоммуникационным сетям или без таковой.<br>
            12. Трансграничная передача персональных данных<br>
            12.1. Оператор до начала осуществления трансграничной передачи персональных данных обязан убедиться в том, что иностранным государством, на территорию которого предполагается осуществлять передачу персональных данных, обеспечивается надежная защита прав субъектов персональных данных.<br>
            12.2. Трансграничная передача персональных данных на территории иностранных государств, не отвечающих вышеуказанным требованиям, может осуществляться только в случае наличия согласия в письменной форме субъекта персональных данных на трансграничную передачу его персональных данных и/или исполнения договора, стороной которого является субъект персональных данных.<br>
            13. Конфиденциальность персональных данных<br>
            Оператор и иные лица, получившие доступ к персональным данным, обязаны не раскрывать третьим лицам и не распространять персональные данные без согласия субъекта персональных данных, если иное не предусмотрено федеральным законом.<br>
            14. Заключительные положения<br>
            14.1. Пользователь может получить любые разъяснения по интересующим вопросам, касающимся обработки его персональных данных, обратившись к Оператору с помощью электронной почты privacy@thismywebsite·com.<br>
            14.2. В данном документе будут отражены любые изменения политики обработки персональных данных Оператором. Политика действует бессрочно до замены ее новой версией.<br>
            14.3. Актуальная версия Политики в свободном доступе расположена в сети Интернет по адресу httpsː//thismywebsite·com/privacy/.<br>
        </p>
    </div>
    <!-- /.modal__polyci__body -->
    <div class="modal__info__close modal__close">
        X
    </div>
    <!-- /.modal__clsoe -->
</div>
<!-- /.modal__policy -->
<div class="modal__info modal__info-two d-none">
    <div class="modal__info__overlay modal__info__overlay-two"></div>
    <div class="modal__info__body modal__info__body-two">
        <h2 class="modal__info__title modal__info__title-two">Пользовательское Соглашение<br></h2>
        <p class="modal__info__text modal__info__text-two">
            Пользовательское Соглашение<br>
            Настоящее Пользовательское Соглашение (Далее Соглашение) регулирует отношения между владельцем (далее или Администрация) с одной стороны и пользователем сайта с другой.<br>
            Сайт не является средством массовой информации.<br>
            <br>
            Используя сайт, Вы соглашаетесь с условиями данного соглашения.<br>
            Если Вы не согласны с условиями данного соглашения, не используйте сайт !<br>
            <br>
            Права и обязанности сторон<br>
            Пользователь имеет право:<br>
            - осуществлять поиск информации на сайте<br>
            - получать информацию на сайте<br>
            - использовать информацию сайта в личных некоммерческих целях<br>
            <br>
            Администрация имеет право:<br>
            - по своему усмотрению и необходимости создавать, изменять, отменять правила<br>
            - ограничивать доступ к любой информации на сайте<br>
            <br>
            Пользователь обязуется:<br>
            - не нарушать работоспособность сайта<br>
            - не использовать скрипты (программы) для автоматизированного сбора информации и/или взаимодействия с Сайтом и его Сервисами<br>
            <br>
            Администрация обязуется:<br>
            - поддерживать работоспособность сайта за исключением случаев, когда это невозможно по независящим от Администрации причинам.<br>
            <br>
            Ответственность сторон<br>
            - администрация не несет никакой ответственности за услуги, предоставляемые третьими лицами<br>
            - в случае возникновения форс-мажорной ситуации (боевые действия, чрезвычайное положение, стихийное бедствие и т. д.) Администрация не гарантирует сохранность информации, размещённой Пользователем, а также бесперебойную работу информационного ресурса<br>
            <br>
            Условия действия Соглашения<br>
            Данное Соглашение вступает в силу при любом использовании данного сайта.<br>
            Соглашение перестает действовать при появлении его новой версии.<br>
            Администрация оставляет за собой право в одностороннем порядке изменять данное соглашение по своему усмотрению.<br>
            Администрация не оповещает пользователей об изменении в Соглашении.<br>


            Соглашение разработано на базе юридических документов сервиса Правилль<br>
        </p>
    </div>
    <!-- /.modal__polyci__body -->
    <div class="modal__info__close modal__close">
        X
    </div>
    <!-- /.modal__clsoe -->
</div>
<!-- /.modal__policy -->
</body>
</html>