@extends('layouts/layout', ['title' => "SushiBar - Все отзывы"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Все отзывы</h1>
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
                            <a href="{{ route('allReviews.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Отзывы%</a>
                            <a href="{{ route('allComments.index') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Комментарии%</a>
                        </div>
                        <!-- /.account__useful-btns -->
                        <h3 class="title">Отзывы</h3>
                        {{ $reviews->links() }}
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
                                            <form action="{{ route('reviews.destroy', ['id' => $review->review_id]) }}" method="post" onsubmit="if (confirm('Точно удалить сообщение?')) {return true} else { return false }">
                                                @csrf
                                                @method('DELETE')
                                                <input type="submit" class="comment__link link" value="Удалить">
                                            </form>
                                        </div>
                                        <!-- /.comment__box -->
                                    </div>
                                    <!-- /.comment__post -->
                            @endforeach
                        </div>
                        <!-- /.comments__post -->
                        {{ $reviews->links() }}
                    </div>
                    <!-- /.comments__post__block -->
                </div>
            </div>
        </div>
    </section>
@endsection
