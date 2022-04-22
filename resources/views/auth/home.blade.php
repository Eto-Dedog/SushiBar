@extends('layouts/layout', ['title' => "SushiBar - Вы успешно Авторизировались!"])

@section('content')
<section class="section__promo-sub-one section">
    <div class="container">
        <div class="promo__sub-block sl-1-block">
            <h1 class="promo__sub-title">Вы успешно Авторизировались!</h1>
            <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
        </div>
        <!-- /.promo__block -->
    </div>
    <!-- /.container -->
</section>
<section class="section__special section">
    <div class="container">
        <div class="special__block">
            <div class="special__info__box">
                <h2 class="special__title title">
                    <strong class="attention">@if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Вы успешно Авторизировались!</strong>
                </h2>
            </div>
            <!-- /.special__info__box -->
            <div class="special__img__box">
                <img src="img/home/all-right-man.png" alt="all-right-man" class="special__img__box-img">
            </div>
            <!-- /.special__img__box -->
        </div>
        <!-- /.special__block -->
    </div>
    <!-- /.container -->
</section>
<!-- /.section__special section -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
