@extends('layouts/layout', ['title' => "SushiBar - Продукты"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Продукты</h1>
                <a href="{{ route('account.index') }}" class="promo__info__text text link promo__link">Главаная > Аккаунт ></a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
    <section class="section__sorts section">
        <div class="container">
            <div class="sorts__block">
                <h3>Кликните по категории!</h3>
            </div>
            <!-- /.sorts__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__sorts section">
        <div class="container">
            <div class="sorts__block">
                <div class="sorts__category">
                    <h3 class="sorts__category-title">Категории</h3>
                    @foreach($categories as $categorie)
                        <div class="sorts__category-btn">
                            {{$categorie->categories_name}}
                            <img class="sorts__category-btn-img" src="{{$categorie->categories_img}}" alt="">
                        </div>
                    @auth()
                        @if(Auth::user()->role == 404)
                        <div class="btns__block sorts__category-btn-adm">
                            <a href="{{ route('categories.edit', ['id' => $categorie->categories_id]) }}" class="news__card__btn text link">Редактировать</a>
                            <form action="{{ route('categories.destroy', ['id' => $categorie->categories_id]) }}" method="post" onsubmit="if (confirm('Точно удалить категорию? Все продукты и отзывы в ней будут удалины!')) {return true} else { return false }">
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="news__card__btn text link" value="Удалить">
                            </form>
                        </div>
                        @endif
                    @endauth
                    @endforeach
                </div>
                <!-- /.sorts__category -->
                @foreach($categories as $categorie)
                <div class="account__sorts-cards d-none">
                    @foreach($products as $product)
                    @if($product->productCategory_id == $categorie->categories_id)
                    <a href="{{ route('categoriesItem.show', ['id' => $product->product_id]) }}" class="account__sorts-card link">
                            <img src="{{$product->products_img}}" alt="product" class="account__sorts-card-img">
                            <span class="account__sorts-card-category">{{$product->categories_name}}</span>
                            <h4 class="account__sorts-card-title">{{$product->products_name}}</h4>
                            <span class="account__sorts-card-price">{{$product->products_price}}</span>
                        </a>
                        <!-- /.account__dashboard-card -->
                    @endif
                    @endforeach
                </div>
                <!-- /.account__sorts-cards -->
                @endforeach
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
                        <img src="{{ asset('img/home/phone-icon.png') }}" alt="phone" class="special__card__img">
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
                        <img src="{{ asset('img/home/master.png')  }}" alt="master" class="special__card__img special__card__img-master">
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
