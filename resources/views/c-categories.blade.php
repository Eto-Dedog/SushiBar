@extends('layouts/layout', ['title' => "SushiBar - Создать Категорию"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Создание Категории</h1>
                <a href="/account" class="promo__info__text text link promo__link">Главаная > Аккаунт ></a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="sc-admin-bar">
        <div class="container">
            <div class="account__dashboard-btns admin-bar admin-bar-c-e">
                <a href="{{ route('categories.create') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Категорию%</a>
                <a href="{{ route('categoriesItem.create') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Продукты%</a>
                <a href="{{ route('posts.create') }}" class="account__dashboard-btn account__dashboard-btn-ad">%Создать%<br>%Пост%</a>
            </div>
            <!-- /.account__useful-btns -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.sc-admin-bar -->
    <form action="{{ route('categories.store') }}" method="post" class="form-c-e" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="form-c-e-box">
                <label class="label-c-e" for="name-c-e-categories">Введите название категории</label>
                <input type="text" class="input input-c-e" placeholder="Имя категории" required id="name-c-e-categories" name="categories_name">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="image-c-e-categories">Загрузите картинку</label>
                <input type="file" class="input input-c-e" required id="image-c-e-categories" name="categories_img">
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
