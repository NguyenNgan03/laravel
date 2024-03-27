<h1>Upload ảnh</h1>
<form method="post" action="<?php echo route('category.file') ?>" enctype="multipart/form-data">
    <div>
        <input type="file" name="photo" id="">
    </div>
    <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">
    <button type="submit">Thêm chuyên mục</button>
</form>