@csrf
<div class="container">
    <div class="form-c-e-box">
        <label class="label-c-e" for="name-c-e-categories">Введите название категории</label>
        <input type="text" class="input input-c-e" placeholder="Имя категории" required id="name-c-e-categories" name="categories_name" value="{{ old('categories_name') ?? $categories->categories_name ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="image-c-e-categories">Загрузите картинку</label>
        <input type="file" class="input input-c-e" id="image-c-e-categories" name="categories_img" value="{{ old('categories_img') ?? $categories->categories_img ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <input type="submit" value="Создать" class="submit-c-e">
    </div>
    <!-- /.form__contacts__box -->
</div>
<!-- /.contacts -->
