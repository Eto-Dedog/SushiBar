@extends('layouts/layout', ['title' => "SushiBar - Все комментарии"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Все комментарии</h1>
                <a href="/account" class="promo__info__text text link promo__link">Главаная > Аккаунт ></a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__profile">
        <div class="container">
            <div class="account__block">
                <div class="account__useful account__reviews all__account__reviews">
                    <div class="comments__post__block">
                        <div class="account__dashboard-btns admin-bar">
                            <a href="{{ route('mailing.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Рассылка%</a>
                            <a href="{{ route('feedback.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Письма%</a>
                            <a href="{{ route('allReviews.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Комментарии%</a>
                            <a href="{{ route('allComments.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Отзывы%</a>
                        </div>
                        <!-- /.account__useful-btns -->
                        <h3 class="title">Отзывы</h3>
                        {{ $comments->links() }}
                        <div class="comments__post">
                            @foreach($comments as $comment)
                                    <div class="comment__post">
                                        <div class="comment__box">
                                            <img src="{{$comment->user_avatar ?? asset('/storage/avatar.png')}}" alt="avatar">
                                        </div>
                                        <!-- /.comment__box -->
                                        <div class="comment__box">
                                            <h3 class="comment__title">{{$comment->user_name}}</h3>
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
                            @endforeach
                        </div>
                        <!-- /.comments__post -->
                        {{ $comments->links() }}
                    </div>
                    <!-- /.comments__post__block -->
                </div>
            </div>
        </div>
    </section>
@endsection
