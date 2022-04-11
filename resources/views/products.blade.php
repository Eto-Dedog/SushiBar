@extends('layouts/layout', ['title' => "SushiBar - Продукты"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Продукты</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
    <section class="section__sorts section">
        <div class="container">
            <div class="sorts__block">
                <div class="sorts__category">
                    <h3 class="sorts__category-title">Категории</h3>
                    <div class="sorts__category-btn sorts__category-btn-active">Алкогольные напитки</div>
                    <div class="sorts__category-btn">Напитки</div>
                    <div class="sorts__category-btn">Горячие роллы</div>
                    <div class="sorts__category-btn">Роллы</div>
                    <div class="sorts__category-btn">Салаты</div>
                    <div class="sorts__category-btn">Сашими</div>
                    <div class="sorts__category-btn">Супы</div>
                    <div class="sorts__category-btn">Сладкие роллы</div>
                    <!-- /.sorts__category-link link -->
                </div>
                <!-- /.sorts__category -->
                <div class="account__sorts-cards">
                    <a href="/product" class="account__sorts-card link">
                        <img src="img/menu/ct-7-1.jpg" alt="product" class="account__sorts-card-img">
                        <span class="account__sorts-card-category">Алкогольные напитки</span>
                        <h4 class="account__sorts-card-title">Пиво</h4>
                        <span class="account__sorts-card-price">999₽</span>
                    </a>
                    <!-- /.account__dashboard-card -->
                    <a href="/product" class="account__sorts-card link">
                        <img src="img/menu/ct-7-2.jpg" alt="product" class="account__sorts-card-img">
                        <span class="account__sorts-card-category">Алкогольные напитки</span>
                        <h4 class="account__sorts-card-title">Лефф Блондинка</h4>
                        <span class="account__sorts-card-price">1499₽</span>
                    </a>
                    <!-- /.account__dashboard-card -->
                    <a href="/product" class="account__sorts-card link">
                        <img src="img/menu/ct-7-3.jpg" alt="product" class="account__sorts-card-img">
                        <span class="account__sorts-card-category">Алкогольные напитки</span>
                        <h4 class="account__sorts-card-title">Напитки</h4>
                        <span class="account__sorts-card-price">999₽</span>
                    </a>
                    <!-- /.account__dashboard-card -->
                    <a href="/product" class="account__sorts-card link">
                        <img src="img/menu/ct-7-4.jpg" alt="product" class="account__sorts-card-img">
                        <span class="account__sorts-card-category">Алкогольные напитки</span>
                        <h4 class="account__sorts-card-title">Арбузный сок</h4>
                        <span class="account__sorts-card-price">1499₽</span>
                    </a>
                    <!-- /.account__dashboard-card -->
                </div>
                <!-- /.account__sorts-cards -->
            </div>
            <!-- /.sorts__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__sorts section -->
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
