<h2>Demo View Unicode </h2>
@if(session('mess'))
    <div class="alert alert-success">
        {{ session('mess')}}
    </div>
@endif
<form action="" method="POST">
    <input type="text" name= "username" placeholder="Usename..." value="{{old('username')}}">
    <button type="submit">Submit</button>
    @csrf
</form>