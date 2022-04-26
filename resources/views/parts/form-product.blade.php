@csrf
<div class="container">
    <div class="form-c-e-box">
        <label class="label-c-e" for="select-product">Выберите категорию</label>
        <select class="form-c-e-select" name="productCategory_id" id="select-product"  required>
            @if($title == "SushiBar - Создание Продукта")
            @else
                <option class="form-c-e-option form-c-e-option-bag" value="{{ $products->productCategory_id }}" selected>{{ $products->categories_name }}</option>
            @endif
            @foreach($categories as $categorie)
            <option class="form-c-e-option" value="{{ $categorie->categories_id }}">{{$categorie->categories_name}}</option>
            @endforeach
        </select>
        <!-- /# -->
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="name-c-e-product">Введите имя продукта</label>
        <input type="text" class="input input-c-e" placeholder="Имя продукта" required id="name-c-e-product" name="products_name" value="{{ old('products_name') ?? $products->products_name ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="desc-c-e-product">Введите описание продукта</label>
        <textarea type="text" class="input textarea-c-e" placeholder="Описание продукта" required id="desc-c-e-product" name="products_desc" autofocus="" onfocus="this.innerHTML='{{ old('products_desc') ?? $products->products_desc ?? '' }}'"></textarea>
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="price-c-e-product">Введите цену продукта</label>
        <input type="number" class="input input-c-e" placeholder="Цена продукта" required id="price-c-e-product" name="products_price" value="{{ old('products_price') ?? $products->products_price ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="image-c-e-product">Загрузите картинку</label>
        @if($title == "SushiBar - Создание Продукта")
            <input type="file" class="input input-c-e" id="image-c-e-product" name="products_img" value="{{ old('products_img') ?? $products->products_img ?? '' }}" accept=".jpg,.jpeg,.png" required>
        @elseif($title == "SushiBar - Редактирование Продукта")
            <input type="file" class="input input-c-e" id="image-c-e-product" name="products_img" value="{{ old('products_img') ?? $products->products_img ?? '' }}" accept=".jpg,.jpeg,.png">
        @endif
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="special-set">Входит ли в особенные сеты 1-3<br> 1-Премиум Сет <br> 2-Сет Саке Наруками <br> 3-Сет Роллс</label>
        <input type="text" class="input input-c-e" placeholder="Необезательное поле*" id="special-set" name="productSet_id" value="{{ old('productSet_id') ?? $products->productSet_id ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <input type="submit" value="Создать" class="submit-c-e">
    </div>
    <!-- /.form__contacts__box -->
</div>
<!-- /.contacts -->
