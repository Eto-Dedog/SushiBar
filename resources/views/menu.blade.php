@extends('layouts/layout', ['title' => "SushiBar - Меню"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Наше меню</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__product section">
        <div class="container">
            <div class="product__block">
                <div class="product__nav">
                    <h3>Кликните по категории!</h3>
                    <div class="categories__cards">
                        @foreach($categories as $categorie)
                            <div class="categories__card">
                                <img src="{{ $categorie->categories_img }}" alt="category" class="categories__card__img">
                                <h3 class="categories__card__titel">{{ $categorie->categories_name }}</h3>
                                <!-- <p class="categories__card__text text"></p> -->
                            </div>
                        @endforeach
                    </div>
                    <!-- /.categories__cards -->
                </div>
                <!-- /.product__nav -->
                @foreach($categories as $categorie)
                    <div class="product__cards d-none">
                        @foreach($products as $product)
                            @if($product->productCategory_id == $categorie->categories_id)
                            <div class="product__card">
                                <div class="product__card__box">
                                    <img src="{{ $product->products_img }}" alt="product" class="product__card__img">
                                </div>
                                <!-- /.product__card__box -->
                                <div class="product__card__box product__card__info">
                                    <h3 class="product__card__title">{{ $product->products_name }}</h3>
                                    <!-- /.product__card__title -->
                                    <p class="product__card__text text">{{ Str::limit($product->products_desc, 65, ' ...') }}</p>
                                </div>
                                <!-- /.product__card__box -->
                                <div class="product__card__box">
                                    <span class="product__card__price text">{{ $product->products_price }}</span>
                                </div>
                                <!-- /.product__card__box -->
                            </div>
                            @endif
                        @endforeach
                    </div>
                @endforeach
            </div>
            <!-- /.popular__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__popular section -->
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
