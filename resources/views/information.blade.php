@extends('layouts/layout', ['title' => "SushiBar - Информация"])

@section('content')
    <section class="section__promo-sub-one section">
        <div class="container">
            <div class="promo__sub-block sl-1-block">
                <h1 class="promo__sub-title">Информация</h1>
                <a href="/" class="promo__info__text text link promo__link">Главаная > </a>
            </div>
            <!-- /.promo__block -->
        </div>
        <!-- /.container -->
    </section>
    <section class="section__information section">
        <div class="container">
            <div class="information__block">
                <div class="information__video__block">
                    <div class="information__video__box">
                        <iframe width="550" height="315" src="https://www.youtube.com/embed/bHCt2NG4UZk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="information__video__box">
                        <h2 class="info__title title"> <strong>Йоши Фудзивара</strong> научит вас как <br> готовить суши!</h2>
                        <p class="info__text text">
                            Кухню ресторана возглавляет Фудзивара Йошихиро, шеф-повар и совладелец, специально переехавший в Россию для участия в этом проекте. Именно Фудзиваре Йошихиро, или просто Йоши ресторан обязан, как названием так и теми нестандартными, необычными японскими блюдами, которые до сих пор не встречались в Черкассах и которые отличают наш ресторан от других ресторанов японской кухни.
                        </p>
                    </div>
                    <!-- /.information__title__box -->
                </div>
                <!-- /.information__video__block -->
                <div class="information__steps__block">
                    <div class="steps__cards">
                        <div class="steps__card">
                            <h3 class="steps__card__title">Как правильно разделывать и нарезать рыбу?</h3>
                            <p class="steps__card__text info__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil quis odio quasi ad pariatur architecto blanditiis debitis nam, quidem, minima in labore, culpa laudantium aut? Quos impedit dolore sint necessitatibus..</p>
                        </div>
                        <!-- /.steps__card -->
                        <div class="steps__card">
                            <h3 class="steps__card__title">Как правильно раскладывать рис?</h3>
                            <p class="steps__card__text info__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil quis odio quasi ad pariatur architecto blanditiis debitis nam, quidem, minima in labore, culpa laudantium aut? Quos impedit dolore sint necessitatibus..</p>
                        </div>
                        <!-- /.steps__card -->
                        <div class="steps__card">
                            <h3 class="steps__card__title">Какие ингредиенты нужно обязательно добавлять?</h3>
                            <p class="steps__card__text info__text">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nihil quis odio quasi ad pariatur architecto blanditiis debitis nam, quidem, minima in labore, culpa laudantium aut? Quos impedit dolore sint necessitatibus..</p>
                        </div>
                        <!-- /.steps__card -->
                    </div>
                </div>
                <!-- /.information__steps__block -->
                <div class="information__recipe__block">
                    <h3 class="recipe__block__title">Продукты для рецепта <span class="sub-info">наведи на продукт*</span></h3>
                    <div class="recipe__cards">
                        <div class="recipe__card">
                            <img src="img/information/ingredient-1.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Нори</h4>
                            <span class="recipe__card__text recipe__card__nori">1 лист</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-2.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Срой тунец</h4>
                            <span class="recipe__card__text recipe__card__nori">100 г</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-3.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Соевый соус</h4>
                            <span class="recipe__card__text recipe__card__nori">100 мл</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-4.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Васаби</h4>
                            <span class="recipe__card__text recipe__card__nori">30 г</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-5.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Рис</h4>
                            <span class="recipe__card__text recipe__card__nori">30 г</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-6.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Сахар</h4>
                            <span class="recipe__card__text recipe__card__nori">10 г</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-7.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Уксус</h4>
                            <span class="recipe__card__text recipe__card__nori">10 мл</span>
                        </div>
                        <!-- /.recipe__card -->
                        <div class="recipe__card">
                            <img src="img/information/ingredient-8.png" alt="ingredient" class="recipe__card__img">
                            <h4 class="recipe__card__title">Авокадо</h4>
                            <span class="recipe__card__text recipe__card__nori">100 г</span>
                        </div>
                        <!-- /.recipe__card -->
                    </div>
                    <!-- /.recipe__cards -->
                </div>
                <!-- /.information__recipe__cards -->
            </div>
            <!-- /.information__block -->
        </div>
        <!-- /.container -->
    </section>
    <!-- /.section__information section -->
@endsection
