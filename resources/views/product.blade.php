@extends('layouts/layout', ['title' => "SushiBar - Продукт"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Лефф Блондинка</h1>
                <span>
                <a href="/" class="promo__info__text text link promo__link">Главаная ></a>
                <a href="/products" class="promo__info__text text link promo__link">Продукты ></a>
              </span>

            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
    <section class="section__sort section">
        <div class="container">
            @foreach($products as $product)
                    <div class="sort__block">
                        <div class="sort__block__info-box">
                            <img src="{{ $product->products_img}}" alt="drinks" class="sort__block__info-box-img">
                        </div>
                        <!-- /.sort__block__info-img -->
                        <div class="sort__block__info-box">
                            <h3 class="sort__block__info-box-title">Информация о продукте</h3>
                            <span class="sort__block__info-box-price">{{ $product->products_price}} ₽</span>
                            <p class="sort__block__info-box-description sort__block__info-box-description-text">{{ $product->products_name}}</p>
                            <span class="sort__block__info-box-description">Категория: <a href="products" class="link sort__block__info-box-link"> {{ $product->categories_name}}</a></span>
{{--                            <span class="sort__block__info-box-description d-none">Ярлык: <a href="#" class="link sort__block__info-box-link">Алкоголь</a></span>--}}
                            <span class="sort__block__info-box-description">Делитесь:
                        <a href="https://twitter.com" target="_blank" class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/twitter.svg" alt="social__link"></a>
                        <a href="https://facebook.com" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/facebook.svg" alt="social__link"></a>
                        <a href="https://vk.com" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/vk.svg" alt="social__link"></a>
                        <a href="https://www.pinterest.ru" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/pinterest.svg" alt="social__link"></a>
                        <a href="https://mail.ru" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/mail.svg" alt="social__link"></a>
                        <a href="https://www-linkedin.com" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/linkedin.svg" alt="social__link"></a>
                        <a href="https://web.whatsapp.com" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/whatsapp.svg" alt="social__link"></a>
                        <a href="https://www.skype.com/ru/features/skype-web/" target="_blank"  class="link sort__block__info-box-link"><img class="sort__block__info-box-link-img" src="img/blog/social/skype.svg" alt="social__link"></a>
            </span>
                        </div>
                        <!-- /.sort__block__info-text -->
                    </div>
                    <!-- /.sort__block -->
            @endforeach

        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__sort section -->
    <section class="section__reviews section">
        <div class="container">
            <h2 class="reviews__title">Отзовы (<span class="reviews__title-num">1</span>)</h2>
            <div class="reviews__block">
                <div class="rewiews__box">
                    <h3 class="reviews__sub-title">Отзовы</h3>
                    <div class="comments__post">
                        @foreach($comments as $comment)
                                <div class="comment__post">
                                    <div class="comment__box">
                                        <img src="{{$comment->user_avatar}}" alt="avatar">
                                    </div>
                                    <!-- /.comment__box -->
                                    <div class="comment__box">
                                        <h3 class="comment__title">{{$comment->user_name}}</h3>
                                        <strong class="comment__date">{{$comment->created_at}}</strong>
                                        <p class="comment__text">{{$comment->comment_text}}</p>
                                        <div class="comment__tool">
                                            <span class="comment__link link">Редактировать</span>
                                            <span class="comment__link link ">Удалить</span>
                                        </div>
                                    </div>
                                    <!-- /.comment__box -->
                                    <div class="comment__box d-none">
                                        <div class="stars__box">
                                            <div class="stars">
                                                <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                            </div>
                                            <!-- /.stars -->
                                        </div>
                                    </div>
                                    <!-- /.comment__box -->
                                </div>
                                <!-- /.comment__post -->
                        @endforeach
                    </div>
                    <!-- /.comments__cards -->
                </div>
                <!-- /.rewiews__box -->
                <div class="rewiews__box">
                    <h3 class="reviews__sub-title">Добавьте отзыв</h3>
                    <form action="#" method="post" class="reviews__form">
                        <div class="reviews__form__box">
                            <h4 class="reviews__form-text d-none">Ваша оценка *</h4>
                            <div class="stars__box d-none">
                                <div class="stars">
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                </div>
                                <!-- /.stars -->
                                <div class="stars">
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                </div>
                                <!-- /.stars -->
                                <div class="stars">
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                </div>
                                <!-- /.stars -->
                                <div class="stars">
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                </div>
                                <!-- /.stars -->
                                <div class="stars">
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                    <div class="star"><img src="img/REVIEWS/star.svg" alt="star" class="star"></div>
                                </div>
                                <!-- /.stars -->
                            </div>
                            <!-- /.stars__box -->
                            <h4 class="reviews__form-text">Ваш отзыв *</h4>
                            <textarea cols="80" rows="10" class="reviews__form-textarea" required name="comment_text"></textarea>
                            <input type="submit" value="Оставить отзыв" class="reviews__form-btn btn-two">
                        </div>
                        <!-- /.reviews__form__box -->
                    </form>
                    <!-- /.reviews__post -->
                </div>
                <!-- /.rewiews__box -->
            </div>
            <!-- /.reviews__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__reviews section -->
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
