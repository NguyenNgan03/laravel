@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

@section('content')
<h1>Add Product</h1>
<form action="" method="post">
    <input type="text" name="username">
    <!-- <input type="hidden" name="_token" value="{{csrf_token()}}"> -->

    @csrf
    @method('put')
    <button type="submit">Submit</button>
</form>
@endsection

@section('css')

@endsection

@section('js')

@endsection