@extends('layouts/layout', ['title' => "SushiBar - Рассылка"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Рассылка</h1>
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
                        <h3 class="title">Рассылка</h3>
                        {{ $mailings->links() }}
                        <div class="comments__post all-info">
                            @foreach($mailings as $mailing)
                                <div class="comment__post">
                                    <div class="comment__box">
                                        <h3 class="comment__title">{{$mailing->mailing_email}}</h3>
                                        <strong class="comment__date">{{$mailing->created_at->diffForHumans()}}</strong>
                                        <form action="{{ route('mailing.destroy', ['id' => $mailing->mailing_id]) }}" method="post" onsubmit="if (confirm('Точно удалить сообщение?')) {return true} else { return false }">
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
                        {{ $mailings->links() }}
                    </div>
                    <!-- /.comments__post__block -->
                </div>
            </div>
        </div>
    </section>
@endsection
