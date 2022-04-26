@extends('layouts/layout', ['title' => "SushiBar - Пост"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Информация Поста</h1>
                <span>
              <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
              <a href="/blog" class="promo__info__text text link promo__link">Блог > </a>
              </span>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__post section">
        <div class="container">
            @foreach($post as $pos)
                <div class="post__block">
                    <div class="news__cards">
                        <div class="news__card">
                            <div class="news__card__box">
                                <img src="{{$pos->post_img}}" alt="news" class="news__card__img">
                            </div>
                            <!-- /.news__card__box -->
                            <div class="news__card__box">
                                <h2 class="news__card__title text">{{$pos->post_name}}</h2>
                                <span class="news__card__date text"><img src="{{ asset('img/home/calendar.svg') }}" alt="calendar" class="news__card__icon"> {{$pos->created_at->diffForHumans()}}  / Пост создал:<span class="link post__create">{{$pos->user_name}}</span>{{--  / <img src="img/home/eye.svg" alt="eye" class="news__card__icon"> 0 / <img src="img/home/comment.svg" alt="calendar" class="news__card__icon"> 0  --}}</span>
                                <p class="news__card__text text">{{$pos->post_text}}</p>
                            </div>
                            <!-- /.news__card__box -->
                        </div>
                        <!-- /.news__card -->
                    </div>
                    <!-- /.news__cards -->

                    <div class="social__links">
                        <a href="https://twitter.com" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/twitter.svg') }}" alt="social__img"></a>
                        <a href="https://facebook.com" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/facebook.svg') }} " alt="social__img"></a>
                        <a href="https://vk.com" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/vk.svg') }} " alt="social__img"></a>
                        <a href="https://www.pinterest.ru" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/pinterest.svg') }} " alt="social__img"></a>
                        <a href="https://mail.ru" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/mail.svg') }} " alt="social__img"></a>
                        <a href="https://www-linkedin.com" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/linkedin.svg') }} " alt="social__img"></a>
                        <a href="https://web.whatsapp.com" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/whatsapp.svg') }} " alt="social__img"></a>
                        <a href="https://www.skype.com/ru/features/skype-web/" target="_blank" class="social__link link"><img class="social__link__img" src="{{ asset('img/blog/social/skype.svg') }} " alt="social__img"></a>
                    </div>
                    <!-- /.social__links -->
                    @auth()
                        @if(Auth::user()->role == 404)
                            <div class="btns__block">
                                <a href="{{ route('posts.edit', ['id' => $pos->post_id]) }}" class="news__card__btn text link">Редактировать</a>
                                <form action="{{ route('posts.destroy', ['id' => $pos->post_id]) }}" method="post" onsubmit="if (confirm('Точно удалить пост? Все комментарии будут удалины!')) {return true} else { return false }">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="news__card__btn text link" value="Удалить">
                                </form>
                            </div>
                            <!-- /.btns__post -->
                        @endif
                    @endauth

                </div>
                <!-- /.blog__block -->
            @endforeach

        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__blog section -->
    <section class="section__other__post section">
        <div class="container">
            <div class="other__post__block">
                <h2 class="other__post__title title">Другие посты</h2>
                <div class="news__cards">
                    @foreach($posts as $post)
                        <div class="news__card">
                            <img src="{{$post->post_img}}" alt="news" class="news__card__img">
                            <h3 class="news__card__title text">{{$post->post_name}}</h3>
                            <span class="news__card__date text"><img src="{{asset('img/home/calendar.svg')}}" alt="calendar" class="news__card__icon"> {{$post->created_at->diffForHumans()}} {{-- <img src="img/home/comment.svg" alt="calendar" class="news__card__icon"> 0  --}} </span>
                            <p class="news__card__text text">{{substr($post->post_text, 0, 50)}}</p>
                            <a href="{{ route('posts.show', ['id' => $post->post_id]) }}" class="news__card__btn text link">Продолжить чтение</a>
                        </div>
                        <!-- /.news__card -->
                    @endforeach
                </div>
                <!-- /.news__cards -->
            </div>
            <!-- /.other__post__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__other__post section -->
    <section class="section__comments__post section">
        <div class="container">
            <div class="comments__post__block">
                @guest
                    <h2 class="other__post__title title">Что-бы оставить каментарий Зарегистрируйтесь!</h2>
                @else
                    <form action="{{route('reviews.store')}}" class="form__comment__post" method="post">
                        @csrf
                        <input type="text" class="d-none" value="{{$pos->post_id}}" name="post_id">
                        <textarea class="form__coment__post__textarea" cols="120" rows="10" placeholder="Комментарий" required name="review_text"></textarea>
                        <input class="form__comment__post__btn" type="submit" value="Оставить комментарий">
                    </form>
                @endguest
                <h3 class="comments__post__block-nums"><span class="comments__post__block-num">0</span> комментарий в "{{ $pos->post_name }}"</h3>
                <div class="comments__post">
                    @foreach($reviews as $review)
                            <div class="comment__post">
                                <div class="comment__box">
                                    <img src="{{$review->user_avatar ?? Auth::user()->user_avatar ?? asset('/storage/avatar.png')}}" alt="avatar">
                                </div>
                                <!-- /.comment__box -->
                                <div class="comment__box">
                                    <h3 class="comment__title">{{$review->user_name}}</h3>
                                    <strong class="comment__date">{{$review->created_at->diffForHumans()}}</strong>
                                    <p class="comment__text">{{$review->review_text}}</p>
                                    @auth()
                                        @if(Auth::user()->role == 404 || Auth::user()->user_id == $review->reviewUser_id)
                                            <div class="comment__tool">
                                                {{--  <span class="comment__link link">Редактировать</span>--}}
                                                <form action="{{ route('reviews.destroy', ['id' => $review->review_id]) }}" method="post" onsubmit="if (confirm('Точно удалить сообщение?')) {return true} else { return false }">
                                                    @csrf
                                                    @method('DELETE')
                                                    <input type="submit" class="comment__link link" value="Удалить">
                                                </form>
                                            </div>
                                        @endif
                                    @endauth
                                </div>
                                <!-- /.comment__box -->
                            </div>
                            <!-- /.comment__post -->
                    @endforeach
                </div>
                <!-- /.comments__post -->
            </div>
            <!-- /.comments__post__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__comments__post section -->
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
                        <img src="{{ asset('img/home/master.png') }}" alt="master" class="special__card__img special__card__img-master">
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
