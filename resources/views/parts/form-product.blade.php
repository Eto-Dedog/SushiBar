@csrf
<div class="container">
    <div class="form-c-e-box">
        <label class="label-c-e" for="select-product">Выберите категорию</label>
        <select class="form-c-e-select" name="productCategory_id" id="select-product"  required>
{{--            <option class="form-c-e-option" value="{{ old('productCategory_id') ?? $product->productCategory_id ?? '' }}" selected>{{ old('productCategory_id') ?? $product->productCategory_id ?? '' }}</option>--}}
            <option class="form-c-e-option" value="1">Супы</option>
            <option class="form-c-e-option" value="2">Роллы</option>
            <option class="form-c-e-option" value="3">Горячие Роллы</option>
        </select>
        <!-- /# -->
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="name-c-e-product">Введите имя продукта</label>
        <input type="text" class="input input-c-e" placeholder="Имя продукта" required id="name-c-e-product" name="products_name" value="{{ old('products_name') ?? $product->products_name ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="desc-c-e-product">Введите описание продукта</label>
        <textarea type="text" class="input textarea-c-e" placeholder="Описание продукта" required id="desc-c-e-product" name="products_desc" autofocus="" onfocus="this.innerHTML='{{ old('products_desc') ?? $product->products_desc ?? '' }}'"></textarea>
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="price-c-e-product">Введите цену продукта</label>
        <input type="number" class="input input-c-e" placeholder="Цена продукта" required id="price-c-e-product" name="products_price" value="{{ old('products_price') ?? $product->products_price ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="image-c-e-product">Загрузите картинку</label>
        <input type="file" class="input input-c-e" id="image-c-e-product" name="products_img" value="{{ old('products_img') ?? $product->products_img ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="special-set">Входит ли в особенные сеты 1-3<br> 1-Премиум Сет <br> 2-Сет Саке Наруками <br> 3-Сет Роллс</label>
        <input type="text" class="input input-c-e" placeholder="Необезательное поле*" id="special-set" name="productSet_id" value="{{ old('productSet_id') ?? $product->productSet_id ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <input type="submit" value="Создать" class="submit-c-e">
    </div>
    <!-- /.form__contacts__box -->
</div>
<!-- /.contacts -->
