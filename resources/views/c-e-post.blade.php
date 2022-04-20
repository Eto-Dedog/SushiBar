@extends('layouts/layout', ['title' => "SushiBar - Создание Поста"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Создание Поста</h1>
                <a href="/account" class="promo__info__text text link promo__link">Главаная > Аккаунт ></a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="sc-admin-bar">
        <div class="container">
            <div class="account__dashboard-btns admin-bar admin-bar-c-e">
                <a href="c-e-categories" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Категорию%</a>
                <a href="c-e-product" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Продукты%</a>
                <a href="c-e-post" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Пост%</a>
            </div>
            <!-- /.account__useful-btns -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.sc-admin-bar -->
    <form action="{{ route('posts.store') }}" method="post" class="form-c-e" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="form-c-e-box">
                <label class="label-c-e" for="name-c-e-post">Введите имя поста</label>
                <input type="text" class="input input-c-e" placeholder="Имя поста" required id="name-c-e-post" name="post_name">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="desc-c-e-post">Введите текст поста</label>
                <textarea type="text" class="input textarea-c-e" placeholder="Текст поста" required id="desc-c-e-post" name="post_text"></textarea>
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="image-c-e-post">Загрузите картинку</label>
                <input type="file" class="input input-c-e" required id="image-c-e-post" name="post_img">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <input type="submit" value="Создать" class="submit-c-e">
            </div>
            <!-- /.form__contacts__box -->
        </div>
        <!-- /.contacts -->
    </form>
@endsection
