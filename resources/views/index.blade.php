@extends('layouts/layout', ['title' => "SushiBar"])

@section('content')
<section class="section__promo-one section__promo-one-adpt section">
    <div class="container">
        <div class="promo__block sl-1-block">
            <h1 class="promo__title">Cохраняй<br>спокойствие &<br> ешь суши</h1>
            <span class="promo__info__text text">Вы не можете купить счастье, но вы можете купить суши, и это достаточно близко.</span>
            <button class="promo__btn btn mailing">Узнайте больше</button>
        </div>
        <!-- /.promo__block -->
    </div>
    <!-- /.container -->
</section>
<section class="slider">
    <section class="item section__promo-one section">
        <div class="container">
            <div class="promo__block sl-1-block">
                <h1 class="promo__title">Cохраняй<br>спокойствие &<br> ешь суши</h1>
                <span class="promo__info__text text">Вы не можете купить счастье, но вы можете купить суши, и это достаточно близко.</span>
                <button class="promo__btn btn mailing">Узнайте больше</button>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="item section__promo-two section d-none">
        <div class="container">
            <div class="promo__block sl-2-block">
                <h1 class="promo__title">Традиционные<br> рецепты <br>из японии</h1>
                <span class="promo__info__text text">Так-же как и сами повара!</span>
                <button class="promo__btn btn mailing">Узнайте больше</button>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="item section__promo-three section d-none">
        <div class="container">
            <div class="promo__block sl-3-block">
                <h1 class="promo__title">Традиционные<br> рецепты <br>из японии</h1>
                <span class="promo__info__text text">Так-же как и сами повара!</span>
                <button class="promo__btn btn mailing">Узнайте больше</button>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.slider -->
    <a href="#" class="prev" onclick="minusSlide()">&#10094;</a>
    <a href="#" class="next" onclick="plusSlide()">&#10095;</a>
</section>
<!-- /.slider -->
<section class="section__special section">
    <div class="container">
        <div class="special__block">
            <div class="special__info__box">
                <h2 class="special__title title">
                    Закажите <strong class="attention">более чем на 13999₽</strong> и получите бонусный набор бесплатно!
                </h2>
                <!-- /.special__title title -->
                <p class="special__text text">
                    Мы всегда рады делать спец предложения и акции для наших любимых клиентов! А так-же несколько раз в год в ресторане мы делаем фестивальное меню, подстать фестивалю который сейчас проходит в Японии!
                </p>
                <!-- /.special__text text -->
                <button class="special__btn btn mailing">Узнайте больше</button>
            </div>
            <!-- /.special__info__box -->
            <div class="special__img__box">
                <img src="img/home/all-right-man.png" alt="all-right-man" class="special__img__box-img">
            </div>
            <!-- /.special__img__box -->
        </div>
        <!-- /.special__block -->
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
<section class="section__popular section">
    <div class="container">
        <div class="popular__block">
            <h2 class="pupular__title title">Популярные продукты</h2>
                {{-- Сделать вывод 8 случайных продуктов  --}}
            <span class="popular__text text">Много вкусного! Много разного!</span>
            <div class="product__cards">
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-1.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Сет Саке Норимаки</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Темпура из креветок, крабовое мясо, огурец и авокадо с острым майонезом и угрем</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">999₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-2.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Калифорния Темаки 3шт.</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">999₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-3.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Магуро Темаки 5шт.</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Нори, лосось 250 г, горки, укроп, авокадо, васаби</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">1999₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-4.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Роллы Дракона 6шт.</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">1499₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-5.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Драконий Ролл</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Фаршированный унаги и крабовой палочкой, завернутый тонкими слоями авокадо и покрытый сверху</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">1499₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-6.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Драконий Ролл 6шт.</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">1499₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-7.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Острые суши с икрой</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Нори, рис, красная икра</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">1599₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
                <div class="product__card">
                    <div class="product__card__box">
                        <img src="img/menu/ct-2-8.jpg" alt="roll" class="product__card__img">
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box product__card__info">
                        <h3 class="product__card__title">Рулоны дракона Новые 6шт</h3>
                        <!-- /.product__card__title -->
                        <p class="product__card__text text">Нори, лосось 250 г, горки, укроп, авокадо, васаби</p>
                    </div>
                    <!-- /.product__card__box -->
                    <div class="product__card__box">
                        <span class="product__card__price text">1499₽</span>
                    </div>
                    <!-- /.product__card__box -->
                </div>
                <!-- /.product__card -->
            </div>
            <!-- /.product__cards -->
        </div>
        <!-- /.popular__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__popular section -->
<section class="section__newsletters section">
    <div class="container">
        <div class="newsletters__block">
            <span class="attention newsletters__attention">Подпишитесь на рассылку новостей!</span>
            <h2 class="newsletters__title title">ТОЛЬКО САМЫЕ АКТУАЛЬНЫЕ</h2>
            <p class="newsletters__text text">Мы присылаем только самые важные и актуальные новости о акциях и событиях в нашем ресторане.</p>
            <form action="#" method="post" class="newsletters__form">
                <input type="email" placeholder="Введите пожалуйста E-mail" class="newsletters__input input" required>
                <input type="submit" class="newsletters__btn btn" value="+">
            </form>
        </div>
        <!-- /.newsletters__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__newsletters section -->
<section class="section__categories section">
    <div class="container">
        <div class="categories__block">
            <h2 class="categories__title title">Популярные категории</h2>
            <span class="categories__text text">Каждый найдёт любимую!</span>
            <div class="categories__cards">
                @foreach($categories as $categorie)
                    <a href="menu" class="categories__card">
                        <img src="{{$categorie->categories_img}}" alt="category" class="categories__card__img">
                        <h3 class="categories__card__titel">{{$categorie->categories_name}}</h3>
                    </a>
                @endforeach
            </div>
            <!-- /.categories__cards -->
        </div>
        <!-- /.categories__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__categories section -->
<section class="section__sets section">
    <div class="container">
        <div class="sets__block">
            <h2 class="sets__title title">Особенные сеты</h2>
            <span class="sets__text text">Сеты для тебя и для неё</span>
            <nav class="sets__nav__btns">
                <span class="sets__nav__btn sets__active">Премиум Сет</span>
                <span class="sets__nav__btn ">Сет Саке Наруками</span>
                <span class="sets__nav__btn ">Сет Роллс</span>
            </nav>
            <!-- /.nav__sets__slide -->
            <div class="sets__slides">
                <div class="sets__slide">
                    <div class="sets__slide__box d-none">
                        <img src="img/home/set-1.jpg" alt="set" class="sets__slide__img">
                    </div>
                    <!-- /.img__sets__slide -->
                    <div class="sets__slide__box sets__sliede__box-one">
                        <div class="product__cards">
                            @foreach($products as $product)
                                @if($product->productSet_id == 1)
                                <div class="product__card">
                                    <div class="product__card__box">
                                        <img src="{{$product->products_img}}" alt="roll" class="product__card__img">
                                    </div>
                                    <!-- /.product__card__box -->
                                    <div class="product__card__box product__card__info">
                                        <h3 class="product__card__title">{{$product->products_name}}</h3>
                                        <!-- /.product__card__title -->
                                        <p class="product__card__text text">{{$product->products_desc}}</p>
                                    </div>
                                    <!-- /.product__card__box -->
                                    <div class="product__card__box">
                                        <span class="product__card__price text">{{$product->products_price}}</span>
                                    </div>
                                    <!-- /.product__card__box -->
                                </div>
                                <!-- /.product__card -->
                                @endif
                            @endforeach
                        </div>
                        <!-- /.product__cards -->
                        <div class="sets__price">
                            <span class="sets__price__old">0</span>
                            <span class="sets__price__new">0</span>
                        </div>
                        <!-- /.sets__price -->
                        <a href="contacts" class="sets__btn btn link">
                            Забранировать столик
                        </a>
                        <!-- /.sets__btn -->
                    </div>
                    <!-- /.sets__slide__box -->
                </div>
                <!-- /.sets__slide -->
                <div class="sets__slide d-none">
                    <div class="sets__slide__box d-none">
                        <img src="img/home/set-2.jpg" alt="set" class="sets__slide__img">
                    </div>
                    <!-- /.img__sets__slide -->
                    <div class="sets__slide__box sets__sliede__box-two">
                        <div class="product__cards">
                            @foreach($products as $product)
                                @if($product->productSet_id == 2)
                                    <div class="product__card">
                                        <div class="product__card__box">
                                            <img src="{{$product->products_img}}" alt="roll" class="product__card__img">
                                        </div>
                                        <!-- /.product__card__box -->
                                        <div class="product__card__box product__card__info">
                                            <h3 class="product__card__title">{{$product->products_name}}</h3>
                                            <!-- /.product__card__title -->
                                            <p class="product__card__text text">{{$product->products_desc}}</p>
                                        </div>
                                        <!-- /.product__card__box -->
                                        <div class="product__card__box">
                                            <span class="product__card__price text">{{$product->products_price}}</span>
                                        </div>
                                        <!-- /.product__card__box -->
                                    </div>
                                    <!-- /.product__card -->
                                @endif
                            @endforeach
                        </div>
                        <!-- /.product__cards -->
                        <div class="sets__price">
                            <span class="sets__price__old">0</span>
                            <span class="sets__price__new">0</span>
                        </div>
                        <!-- /.sets__price -->
                        <div class="sets__btn btn">
                            Забранировать столик
                        </div>
                        <!-- /.sets__btn -->
                    </div>
                    <!-- /.sets__slide__box -->
                </div>
                <!-- /.sets__slide -->
                <div class="sets__slide d-none">
                    <div class="sets__slide__box d-none">
                        <img src="img/home/set-3.jpg" alt="set" class="sets__slide__img">
                    </div>
                    <!-- /.img__sets__slide -->
                    <div class="sets__slide__box sets__sliede__box-three">
                        <div class="product__cards">
                            @foreach($products as $product)
                                @if($product->productSet_id == 3)
                                    <div class="product__card">
                                        <div class="product__card__box">
                                            <img src="{{$product->products_img}}" alt="roll" class="product__card__img">
                                        </div>
                                        <!-- /.product__card__box -->
                                        <div class="product__card__box product__card__info">
                                            <h3 class="product__card__title">{{$product->products_name}}</h3>
                                            <!-- /.product__card__title -->
                                            <p class="product__card__text text">{{$product->products_desc}}</p>
                                        </div>
                                        <!-- /.product__card__box -->
                                        <div class="product__card__box">
                                            <span class="product__card__price text">{{$product->products_price}}</span>
                                        </div>
                                        <!-- /.product__card__box -->
                                    </div>
                                    <!-- /.product__card -->
                                @endif
                            @endforeach
                        </div>
                        <!-- /.product__cards -->
                        <div class="sets__price">
                            <span class="sets__price__old">0</span>
                            <span class="sets__price__new">0</span>
                        </div>
                        <!-- /.sets__price -->
                        <div class="sets__btn btn">
                            Забранировать столик
                        </div>
                        <!-- /.sets__btn -->
                    </div>
                    <!-- /.sets__slide__box -->
                </div>
                <!-- /.sets__slide -->
            </div>
            <!-- /.sets__slides -->
        </div>
        <!-- /.sets__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__sets section -->
<section class="section__news section">
    <div class="container">
        <div class="news__block">
            <h2 class="news__title title">Новости и Мероприятия</h2>
            <span class="news__text text">Последние новости и мероприятия</span>
            <div class="news__cards">
                @foreach($posts as $post )
                    <div class="news__card">
                        <img src="{{$post->post_img}}" alt="news" class="news__card__img">
                        <h3 class="news__card__title text">{{$post->post_name}}</h3>
                        <span class="news__card__date text"><img src="img/home/calendar.svg" alt="calendar" class="news__card__icon"> {{$post->created_at}} {{-- <img src="img/home/comment.svg" alt="calendar" class="news__card__icon"> 0  --}} </span>
                        <p class="news__card__text text">{{substr($post->post_text, 0, 50)}}</p>
                        <a href="{{ route('posts.show', ['id' => $post->post_id]) }}" class="news__card__btn text link">Продолжить чтение</a>
                    </div>
                    <!-- /.news__card -->
                @endforeach
            </div>
            <!-- /.news__cards -->
        </div>
        <!-- /.news__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__news section -->
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
