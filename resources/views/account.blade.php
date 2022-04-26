@extends('layouts/layout', ['title' => "SushiBar - Аккаунт"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Мой аккаунт</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
    <section class="section__profile">
        <div class="container">
            <div class="account__block">
                <div class="account__control">
                    <div class="account__control__box">
                        <img src="{{ asset('img/account/avatar.png') ?? Auth::user()->user_avatar }}" alt="avatar" class="account__control__box-img">
                        <h3 class="account__control__box-name">{{ Auth::user()->user_name }}</h3>
                        <span class="account__control__box-email">{{ Auth::user()->email }}</span>
                        <span class="account__control__box-email">{{ Auth::user()->first_name }}</span>
                        <span class="account__control__box-email">{{ Auth::user()->last_name }}</span>
                    </div>
                    <!-- /.profile__control__box -->
                    <div class="btn__account btn__account-active"><img src="img/account/calendar.svg" alt="calendar" class="btn__account-img"> <span>Панель управления</span></div>
                    <div class="btn__account"><img src="img/account/pen.svg" alt="pen" class="btn__account-img"> <span>Отзывы</span></div>
                    <div class="btn__account"><img src="img/account/pen.svg" alt="pen" class="btn__account-img"> <span>Комментарии</span></div>
{{--                    <div class="btn__account"><img src="img/account/upload.svg" alt="upload" class="btn__account-img"> <span>Аватарка</span></div>--}}
{{--                    <div class="btn__account"><img src="img/account/avatar.svg" alt="avatar" class="btn__account-img"> <span>Подробней об акаунте</span></div>--}}
                    <div class="btn__account"><img src="img/account/logout.svg" alt="logout" class="btn__account-img"> <span>Выход</span></div>
                    <!-- /.btn__profile -->
                </div>
                <!-- /.profile__control -->
                <div class="account__useful account__dashboard">
                    <h2 class="account__useful-title account__dashboard-title">Добро пожаловать на страницу вашей учетной записи</h2>
                    <p class="account__useful-text account__dashboard-test">Привет, <strong>user-name</strong>, сегодня отличный день, чтобы проверить страницу своей учетной записи. Вы также можете проверить:</p>
                    <div class="account__dashboard-btns">
                        <a href="{{ route('categories.index') }}" class="account__dashboard-btn"><img src="img/account/calendar.svg" alt="pen" class="btn__account-img"> Продукты</a>
{{--                        <div class="account__dashboard-btn"><img src="img/account/pen.svg" alt="pen" class="btn__account-img"> Отзывы</div>--}}
{{--                        <div class="account__dashboard-btn"><img src="img/account/avatar.svg" alt="avatar" class="btn__account-img"> Подробней об акаунте</div>--}}
                    </div>
                    <!-- /.account__useful-btns -->
                    @auth()
                        @if(Auth::user()->role == 404)
                            <div class="account__dashboard-btns admin-bar admin-bar-c-e">
                                <a href="{{ route('categories.create') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Категорию%</a>
                                <a href="{{ route('categoriesItem.create') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Продукты%</a>
                                <a href="{{ route('posts.create') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Пост%</a>
                            </div>
                            <!-- /.account__useful-btns -->
                            <div class="account__dashboard-btns admin-bar">
                                <a href="{{ route('mailing.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Рассылка%</a>
                                <a href="{{ route('feedback.index')  }}" class="account__dashboard-btn account__dashboard-btn-ad">%Письма%</a>
                                <a href="{{ route('allReviews.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Комментарии%</a>
                                <a href="{{ route('allComments.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Отзывы%</a>
                            </div>
                            <!-- /.account__useful-btns -->
                        @endif
                    @endauth
                    <h2 class="account__dashboard-cards-title">Вам может понравиться...</h2>
                    <div class="account__sort-cards">
                        @foreach($randProd as $randPro)
                            <a href="#" class="account__sort-card link">
                                <img src="{{ $randPro->products_img }}" alt="product" class="account__sort-card-img">
                                <h4 class="account__sort-card-title">{{ $randPro->products_name }}</h4>
                                <span class="account__sort-card-price">{{ $randPro->products_price }}₽</span>
                            </a>
                            <!-- /.account__dashboard-card -->
                        @endforeach

{{--                        <a href="#" class="account__sort-card link">--}}
{{--                            <img src="img/menu/ct-1-2.jpg" alt="product" class="account__sort-card-img">--}}
{{--                            <span class="account__sort-card-category">Супы</span>--}}
{{--                            <h4 class="account__sort-card-title">Тайский суп с морепродуктами</h4>--}}
{{--                            <span class="account__sort-card-price">999₽</span>--}}
{{--                        </a>--}}
{{--                        <!-- /.account__dashboard-card -->--}}
{{--                        <a href="#" class="account__sort-card link">--}}
{{--                            <img src="img/menu/ct-1-3.jpg" alt="product" class="account__sort-card-img">--}}
{{--                            <span class="account__sort-card-category">Супы</span>--}}
{{--                            <h4 class="account__sort-card-title">Тайский суп с морепродуктами</h4>--}}
{{--                            <span class="account__sort-card-price">999₽</span>--}}
{{--                        </a>--}}
{{--                        <!-- /.account__dashboard-card -->--}}
                    </div>
                    <!-- /.account__sort-cards -->
                </div>
                <!-- /.account__useful profile__dashboard -->
                <div class="account__useful account__reviews d-none">
                    <div class="comments__post__block">
                        <h3>Отзывы</h3>
                        <div class="comments__post">
                            @foreach($comments as $comment)
                                    @if( $comment->commentUser_id == Auth::user()->user_id)
                                    <div class="comment__post">
                                        <div class="comment__box">
                                            <img src="{{Auth::user()->user_avatar ?? asset('/storage/avatar.png')}}" alt="avatar">
                                        </div>
                                        <!-- /.comment__box -->
                                        <div class="comment__box">
                                            <h3 class="comment__title">{{Auth::user()->user_name}}</h3>
                                            <h3 class="comment__title">{{Auth::user()->user_avatar}}</h3>
                                            <strong class="comment__date">{{$comment->created_at->diffForHumans()}}</strong>
                                            <p class="comment__text">{{$comment->comment_text}}</p>
                                            <form action="{{ route('comments.destroy', ['id' => $comment->comment_id]) }}" method="post" onsubmit="if (confirm('Точно удалить сообщение?')) {return true} else { return false }">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="comment__link link" value="Удалить">
                                            </form>
                                        </div>
                                        <!-- /.comment__box -->
                                        <div class="comment__box">
                                            <div class="stars__box">
                                                @if($comment->comment_rate == 1)
                                                    <div class="stars">
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                    </div>
                                                    <!-- /.stars -->
                                                @elseif($comment->comment_rate == 2)
                                                    <div class="stars">
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                    </div>
                                                    <!-- /.stars -->
                                                @elseif($comment->comment_rate == 3)
                                                    <div class="stars">
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                    </div>
                                                    <!-- /.stars -->
                                                @elseif($comment->comment_rate == 4)
                                                    <div class="stars">
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                    </div>
                                                    <!-- /.stars -->
                                                @elseif($comment->comment_rate == 5)
                                                    <div class="stars">
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                        <div class="star"><img src="{{ asset('img/REVIEWS/star.svg') }}" alt="star" class="star"></div>
                                                    </div>
                                                    <!-- /.stars -->
                                                @endif
                                            </div>
                                        </div>
                                        <!-- /.comment__box -->
                                    </div>
                                    <!-- /.comment__post -->
                                    @endif
                                @endforeach
                        </div>
                        <!-- /.comments__post -->
                    </div>
                    <!-- /.comments__post__block -->
                </div>
                <div class="account__useful account__reviews d-none">
                    <div class="comments__post__block">
                        <h3>Комментарии к постам</h3>
                        <div class="comments__post">
                            @foreach($reviews as $review)
                                @if( $review->reviewUser_id == Auth::user()->user_id)
                                <div class="comment__post">
                                            <div class="comment__box">
                                                <img src="{{$review->user_avatar ?? Auth::user()->user_avatar ?? asset('/storage/avatar.png')}}" alt="avatar">
                                            </div>
                                            <!-- /.comment__box -->
                                            <div class="comment__box">
                                                <h3 class="comment__title">{{Auth::user()->user_name}}</h3>
                                                <strong class="comment__date">{{$review->created_at->diffForHumans()}}</strong>
                                                <p class="comment__text">{{$review->review_text}}</p>
                                                <form action="{{ route('reviews.destroy', ['id' => $review->review_id]) }}" method="post" onsubmit="if (confirm('Точно удалить сообщение?')) {return true} else { return false }">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="comment__link link" value="Удалить">
                                                </form>
                                            </div>
                                            <!-- /.comment__box -->
                                        </div>
                                        <!-- /.comment__post -->
                                @endif
                            @endforeach
                        </div>
                        <!-- /.comments__post -->
                    </div>
                    <!-- /.comments__post__block -->
                </div>
                <!-- /.account__useful profile__reviews -->
{{--                <div class="account__useful account__upload d-none">--}}
{{--                    <form action="#" method="post" class="form__account__upload">--}}
{{--                        @csrf--}}
{{--                        <h3>Загрузите новою аватарку</h3>--}}
{{--                        <input type="file" class="input__account__upload" id="input__account__upload" required name="user_avatar">--}}
{{--                        <label class="label__account__upload" for="input__account__upload">Только файлы jpg/jpeg/png весом мение 50мб *</label>--}}
{{--                        <input type="submit" class="form__account__upload-btn btn-two">--}}
{{--                    </form>--}}
{{--                </div>--}}
                <!-- /.account__useful profile__upload -->
{{--                <div class="account__useful account__details  d-none">--}}
{{--                    <form action="#" method="post" class="form__account__details">--}}
{{--                        <div class="form__account__details__box">--}}
{{--                            <label class="form__account__details-label" for="user-details">Имя пользователя</label>--}}
{{--                            <input class="form__account__details-input" type="text" id="user-details" required>--}}
{{--                        </div>--}}
{{--                        <!-- /.form__account__details__box -->--}}
{{--                        <div class="form__account__details__box">--}}
{{--                            <label class="form__account__details-label" for="email-details">E-mail</label>--}}
{{--                            <input class="form__account__details-input" type="email" id="email-details" required>--}}
{{--                        </div>--}}
{{--                        <!-- /.form__account__details__box -->--}}
{{--                        <div class="from__account__details__reset-pass">--}}
{{--                            <h3 class="from__account__details__reset-pass-title">Смена пораля</h3>--}}
{{--                            <div class="form__account__details__box">--}}
{{--                                <label class="form__account__details-label" for="old-pass">Старый пароль</label>--}}
{{--                                <input class="form__account__details-input" type="password" id="old-pass" required>--}}
{{--                            </div>--}}
{{--                            <!-- /.form__account__details__box -->--}}
{{--                            <div class="form__account__details__box">--}}
{{--                                <label class="form__account__details-label" for="new-pass">Новый пароль</label>--}}
{{--                                <input class="form__account__details-input" type="password" id="new-pass" required>--}}
{{--                            </div>--}}
{{--                            <!-- /.form__account__details__box -->--}}
{{--                            <div class="form__account__details__box">--}}
{{--                                <label class="form__account__details-label" for="repeat-new-pass">Повторите новый пароль</label>--}}
{{--                                <input class="form__account__details-input" type="password" id="repeat-new-pass" required>--}}
{{--                            </div>--}}
{{--                            <!-- /.form__account__details__box -->--}}
{{--                        </div>--}}
{{--                        <!-- /.from__account__details__reset-pass -->--}}
{{--                        <div class="form__account__details__box">--}}
{{--                            <input class="form__account__details-input form__account__details-btn" type="submit" id="email-details" value="Сохранить изменения">--}}
{{--                        </div>--}}
{{--                        <!-- /.form__account__details__box -->--}}
{{--                    </form>--}}
{{--                </div>--}}
                <!-- /.account__useful profile__upload -->
                <div class="account__useful account__logount d-none">
                        <h3>Вы хотите выйти из аккаунта?</h3>
                        <a class="form__account__logount-btn" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
                            Выйти
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                </div>
                <!-- /.account__useful profile__upload -->
            </div>
            <!-- /.profile__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__profile -->
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
