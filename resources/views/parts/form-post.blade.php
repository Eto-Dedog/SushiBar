@csrf
<div class="container">
    <div class="form-c-e-box">
        <label class="label-c-e" for="name-c-e-post">Введите имя поста</label>
        <input type="text" class="input input-c-e" placeholder="Имя поста" required id="name-c-e-post" name="post_name" value="{{ old('post_name') ?? $post->post_name ?? '' }}">
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="desc-c-e-post">Введите текст поста</label>
        <textarea type="text" class="input textarea-c-e" placeholder="Текст поста *Если редактируете запись нажмите на поле*" required id="desc-c-e-post" name="post_text" autofocus="" onfocus="this.innerHTML='{{ old('post_text') ?? $post->post_text ?? '' }}'"></textarea>
    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <label class="label-c-e" for="image-c-e-post">Загрузите картинку</label>
        @if($title == "SushiBar - Создание Поста")
        <input type="file" class="input input-c-e" id="image-c-e-post" name="post_img" value="{{ old('post_img') ?? $post->post_img ?? '' }}" accept=".jpg,.jpeg,.png" required>
        @else
        <input type="file" class="input input-c-e" id="image-c-e-post" name="post_img" value="{{ old('post_img') ?? $post->post_img ?? '' }}" accept=".jpg,.jpeg,.png">
        @endif

    </div>
    <!-- /.form__contacts__box -->
    <div class="form-c-e-box">
        <input type="submit" value="Создать" class="submit-c-e">
    </div>
    <!-- /.form__contacts__box -->
</div>
<!-- /.contacts -->
