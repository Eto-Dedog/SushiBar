@extends('layouts/layout', ['title' => "SushiBar - Письма"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Письма</h1>
                <a href="/account" class="promo__info__text text link promo__link">Главаная > Аккаунт ></a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__promo-sub-one section -->
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
                        <h3 class="title">Письма</h3>
                        {{ $feedbacks->links() }}
                        <div class="comments__post all-info">
                            @foreach($feedbacks as $feedback)
                                <div class="comment__post">
                                    <div class="comment__box">
                                        <h3 class="comment__title">{{$feedback->feedback_email}}</h3>
                                        <h3 class="comment__title">{{$feedback->feedback_first_name}}</h3>
                                        <h3 class="comment__title">{{$feedback->feedback_last_name}}</h3>
                                        <strong class="comment__date">{{$feedback->feedback_user_date}}</strong>
                                        <p class="comment__text">{{$feedback->feedback_text}}</p>
                                        <strong class="comment__date">{{$feedback->created_at->diffForHumans()}}</strong>
                                        <form action="{{ route('feedback.destroy', ['id' => $feedback->feedback_id]) }}" method="post" onsubmit="if (confirm('Точно удалить сообщение?')) {return true} else { return false }">
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
                        {{ $feedbacks->links() }}
                    </div>
                    <!-- /.comments__post__block -->
                </div>
            </div>
        </div>
    </section>
@endsection
