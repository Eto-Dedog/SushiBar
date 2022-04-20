@extends('layouts/layout', ['title' => "SushiBar - Создание Продукта"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Создание Продукта</h1>
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
    <form method="post" class="form-c-e" action="{{ route('categoriesItem.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="form-c-e-box">
                <label class="label-c-e" for="select-product">Выберите категорию</label>
                <select class="form-c-e-select" name="productCategory_id" id="select-product" required>
                    <option class="form-c-e-option" value="" disabled selected>Выберите категорию</option>
                    <option class="form-c-e-option" value="1">Супы</option>
                    <option class="form-c-e-option" value="2">Роллы</option>
                    <option class="form-c-e-option" value="3">Горячие Роллы</option>
                </select>
                <!-- /# -->
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="name-c-e-product">Введите имя продукта</label>
                <input type="text" class="input input-c-e" placeholder="Имя продукта" required id="name-c-e-product" name="products_name">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="desc-c-e-product">Введите описание продукта</label>
                <textarea type="text" class="input textarea-c-e" placeholder="Описание продукта" required id="desc-c-e-product" name="products_desc"></textarea>
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="price-c-e-product">Введите цену продукта</label>
                <input type="number" class="input input-c-e" placeholder="Цена продукта" required id="price-c-e-product" name="products_price">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="image-c-e-product">Загрузите картинку</label>
                <input type="file" class="input input-c-e" required id="image-c-e-product" name="products_img">
            </div>
            <!-- /.form__contacts__box -->
            <div class="form-c-e-box">
                <label class="label-c-e" for="special-set">Входит ли в особенные сеты 1-3<br> 1-Премиум Сет <br> 2-Сет Саке Наруками <br> 3-Сет Роллс</label>
                <input type="text" class="input input-c-e" placeholder="Необезательное поле*" id="special-set" name="productSet_id">
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
