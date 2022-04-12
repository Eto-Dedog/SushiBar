@extends('layouts/layout', ['title' => "SushiBar - Блог"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Блог</h1>
                <a href="" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__blog section">
        <div class="container">
            <div class="blog__block">
                <div class="news__cards">
                    <div class="news__card">
                        <div class="news__card__box">
                            <img src="img/blog/news-1.jpg" alt="news" class="news__card__img">
                        </div>
                        <!-- /.news__card__box -->
                        <div class="news__card__box">
                            <h2 class="news__card__title text">Сообщение с цитатой</h2>
                            <span class="news__card__date text"><img src="img/home/calendar.svg" alt="calendar" class="news__card__icon"> Март 13, 2022 / <img src="img/home/eye.svg" alt="eye" class="news__card__icon"> 0 / <img src="img/home/comment.svg" alt="calendar" class="news__card__icon"> 0 </span>
                            <p class="news__card__text text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sint placeat similique sequi reiciendis harum? Quibusdam facere placeat pariatur necessitatibus officiis voluptatibus, quod, sapiente nobis, odit eveniet illo repellendus error? ...</p>
                            <a href="/post" class="news__card__btn text link">Продолжить чтение</a>
                        </div>
                        <!-- /.news__card__box -->
                    </div>
                    <!-- /.news__card -->
                    <div class="news__card">
                        <div class="news__card__box">
                            <img src="img/home/news-2.jpg" alt="news" class="news__card__img">
                        </div>
                        <!-- /.news__card__box -->
                        <div class="news__card__box">
                            <h2 class="news__card__title text">Японская выставка в честь 8 марта</h2>
                            <span class="news__card__date text"><img src="img/home/calendar.svg" alt="calendar" class="news__card__icon"> Март 8, 2022 / <img src="img/home/eye.svg" alt="eye" class="news__card__icon"> 0 / <img src="img/home/comment.svg" alt="calendar" class="news__card__icon"> 0 </span>
                            <p class="news__card__text text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sint placeat similique sequi reiciendis harum? Quibusdam facere placeat pariatur necessitatibus officiis voluptatibus, quod, sapiente nobis, odit eveniet illo repellendus error? ...</p>
                            <a href="/post" class="news__card__btn text link">Продолжить чтение</a>
                        </div>
                        <!-- /.news__card__box -->
                    </div>
                    <!-- /.news__card -->
                    <div class="news__card">
                        <div class="news__card__box">
                            <img src="img/home/news-3.jpg" alt="news" class="news__card__img">
                        </div>
                        <!-- /.news__card__box -->
                        <div class="news__card__box">
                            <h2 class="news__card__title text">Ребята из Google earth</h2>
                            <span class="news__card__date text"><img src="img/home/calendar.svg" alt="calendar" class="news__card__icon"> Февраль 23, 2022 / <img src="img/home/eye.svg" alt="eye" class="news__card__icon"> 0 / <img src="img/home/comment.svg" alt="calendar" class="news__card__icon"> 0 </span>
                            <p class="news__card__text text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit sint placeat similique sequi reiciendis harum? Quibusdam facere placeat pariatur necessitatibus officiis voluptatibus, quod, sapiente nobis, odit eveniet illo repellendus error? ...</p>
                            <a href="/post" class="news__card__btn text link">Продолжить чтение</a>
                        </div>
                        <!-- /.news__card__box -->
                    </div>
                    <!-- /.news__card -->
                </div>
                <!-- /.news__cards -->
            </div>
            <!-- /.blog__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__blog section -->
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