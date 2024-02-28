<form method="POST" action="/unicode">
    <div>
        <input type="text" name="username" placeholder="Your name">
        <input type="hidden" name="_method" value="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    </div>
    <button type="submit">Submit</button>
</form>