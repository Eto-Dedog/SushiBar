@extends('layouts/layout', ['title' => "SushiBar - Редактирование Категорию"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Редактирование Категории</h1>
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
    <form action="{{ route('categories.update', ['id' => $categories->categories_id]) }}" method="post" class="form-c-e" enctype="multipart/form-data">
        @method('PATCH')
        @include('parts.form-categories')
    </form>
@endsection
