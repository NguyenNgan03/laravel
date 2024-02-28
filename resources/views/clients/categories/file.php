<h1>Upload file</h1>
<form action="<?php echo route('category.upload') ?>"  enctype="multipart/form-data" method="POST">
    <div>
        <input type="file" name="photo">
    </div>
    <?php echo csrf_field() ?>
    <!-- <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>"> -->
    <button type="submit">Upload</button>
</form>