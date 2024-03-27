<h1>Thêm chuyên mục</h1>
<form method="post" action="<?php echo route('category.add') ?>">
    <div>
        <input type="text" name="category-name" placeholder="Tên">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <button type="submit">Thêm chuyên mục</button>
</form>