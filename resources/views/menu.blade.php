@extends('layouts/layout', ['title' => "SushiBar - Меню"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Наше меню</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__product section">
        <div class="container">
            <div class="product__block">
                <div class="product__nav">
                    <div class="categories__cards">
                        <div class="categories__card categories__card-active">
                            <img src="img/menu/category-1.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Супы</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-2.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Роллы</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-3.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Горячие Роллы</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-4.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Салаты</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-5.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Сашими</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-6.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Напитки</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-7.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Алкогольные <br> напитки</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <div class="categories__card">
                            <img src="img/menu/category-8.jpg" alt="category" class="categories__card__img">
                            <h3 class="categories__card__titel">Сладкие Роллы</h3>
                            <!-- <p class="categories__card__text text"></p> -->
                        </div>
                        <!-- /.categories__card -->
                    </div>
                    <!-- /.categories__cards -->
                </div>
                <!-- /.product__nav -->
                <div class="product__cards product__cards-soups">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Тайский суп с морепродуктами</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Кокосовое молоко, острый соус, грибы, грибы, коктейль из морепродуктов</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Суп из морепродуктов</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Рыба, камабоко и креветки, поданные на грибной основе шиитаке</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Суп из кабачков Кабоча</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Кабачок кабоча, несоленое сливочное масло, куриный бульон, молоко</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Морковный суп</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Морковь, картофель, лук, чеснок, сельдерей, овощной бульон, сливки</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-5.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Суп Мисо</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Свежий тофу подается в домашнем бульоне мисо</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-6.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Вермишель</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Паста Паоло (вермишель), лук, лавровый лист, черный перец, соус Паоло (Примавера), морковь, оливковое масло</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-7.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Кенчиндзиру</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Комбу, сушеные грибы шиитаке, конняку, дайкон, морковь, сатоимо, зеленый лук/зеленый лук</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1599₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-1-8.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сливочно-томатный суп</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Помидоры, сыр, специи, оливковое масло</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-roll d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет Саке Норимаки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Темпура из креветок, крабовое мясо, огурец и авокадо с острым майонезом и угрем</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Калифорния Темаки 3шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Магуро Темаки 5шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Нори, лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Роллы Дракона 6шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-5.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Драконий Ролл</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Фаршированный унаги и крабовой палочкой, завернутый тонкими слоями авокадо и покрытый сверху</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-6.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Драконий Ролл 6шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-7.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Острые суши с икрой</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Нори, рис, красная икра</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1599₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-8.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Рулоны дракона Новые 6шт</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Нори, лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-9.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Икра рыбы сакуры</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Рис, лосось, огурец, икра</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-10.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Саке Нигири 3шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Креветки, укроп, сливочный сыр, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-11.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Трилистник</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Свежий лосось, тунец, крабовая палочка и авокадо, завернутые в тонкий ломтик огурца</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1599₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-2-12.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">хрустящий рулет с кремом</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">копченый лосось, крабовая палочка и авокадо, смешанные с майонезом, покрытые тобико</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-hot d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-3-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет Саке Норимаки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Темпура из креветок, крабовое мясо, огурец и авокадо с острым майонезом и угрем</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-3-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Калифорния Темаки 3шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-3-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Роллы Дракона 6шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-3-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Драконий Ролл</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Фаршированный унаги и крабовой палочкой, завернутый тонкими слоями авокадо и покрытый сверху</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-3-5.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Рулоны дракона Новые 6шт</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Нори, лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-3-6.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Трилистник</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Свежий лосось, тунец, крабовая палочка и авокадо, завернутые в тонкий ломтик огурца</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1599₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-salads d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-4-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет Саке Норимаки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Темпура из креветок, крабовое мясо, огурец и авокадо с острым майонезом и угрем</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-4-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Рулоны дракона Новые 6шт</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Нори, лосось 250 г, горки, укроп, авокадо, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-4-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Вермишель</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Паста Паоло (вермишель), лук, лавровый лист, черный перец, соус Паоло (Примавера), морковь, оливковое масло</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-4-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Кенчиндзиру</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Комбу, сушеные грибы шиитаке, конняку, дайкон, морковь, сатоимо, зеленый лук/зеленый лук</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1599₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-sashimi d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-5-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет Саке Норимаки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Темпура из креветок, крабовое мясо, огурец и авокадо с острым майонезом и угрем</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-5-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Саке Нигири 3шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Креветки, укроп, сливочный сыр, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-5-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">хрустящий рулет с кремом</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">копченый лосось, крабовая палочка и авокадо, смешанные с майонезом, покрытые тобико</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-5-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет роллов</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Копченый лосось и сливочный сыр, слегка обвалянный в хрустящей темпуре</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-drinks d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-6-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Напитки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Отдохните от жары и оживитесь с нашим легким, свежим, уникальным фирменным блюдом</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-6-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Гранатовый лимонад</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Охладитесь с нашей чистой смесью маракуйи, лимона и граната</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-6-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Арбузный сок</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Прохладный и вкусный напиток для утоления жажды</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-6-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Зеленый Поворот</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Освежающее сочетание киви и зеленого яблока</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-alco d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-7-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Пиво</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Прохлодное пиво</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-7-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Лефф Блондинка</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Пивной Лефф Блондин</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-7-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Напитки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Отдохните от жары и оживитесь с нашим легким, свежим, уникальным фирменным блюдом</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-7-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Арбузный сок</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Прохладный и вкусный напиток для утоления жажды</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
                <div class="product__cards product__cards-sweet d-none">
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-8-1.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет Саке Норимаки</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Темпура из креветок, крабовое мясо, огурец и авокадо с острым майонезом и угрем</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">999₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-8-2.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Саке Нигири 3шт.</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Креветки, укроп, сливочный сыр, васаби</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-8-3.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">хрустящий рулет с кремом</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">копченый лосось, крабовая палочка и авокадо, смешанные с майонезом, покрытые тобико</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                    <div class="product__card">
                        <div class="product__card__box">
                            <img src="img/menu/ct-8-4.jpg" alt="product" class="product__card__img">
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box product__card__info">
                            <h3 class="product__card__title">Сет роллов</h3>
                            <!-- /.product__card__title -->
                            <p class="product__card__text text">Копченый лосось и сливочный сыр, слегка обвалянный в хрустящей темпуре</p>
                        </div>
                        <!-- /.product__card__box -->
                        <div class="product__card__box">
                            <span class="product__card__price text">1499₽</span>
                        </div>
                        <!-- /.product__card__box -->
                    </div>
                    <!-- /.product__card -->
                </div>
                <!-- /.product__cards -->
            </div>
            <!-- /.popular__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__popular section -->
    <section class="section__support section">
        <div class="container">
            <div class="support__block">
                <div class="special__card">
                    <div class="special__card__box">
                        <img src="img/home/phone-icon.png" alt="phone" class="special__card__img">
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
                        <img src="img/home/master.png" alt="master" class="special__card__img special__card__img-master">
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
