@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

@section('content')
<h1>Add Product</h1>
<form action="" method="post">
    @if($errors->any())
    <div class="alert alert-danger text-center">
        {{ $errorMessage }}
    </div>
    @endif

    <div class="mb-3">
        <label for="">Name product: </label>
        <input type="text" class="form-control" name="product_name" placeholder="Product name...." value="{{old('product_name')}}">
        @error('product_name')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>

    <div class="mb-3">
        <label for="">Price product: </label>
        <input type="text" class="form-control" name="product_price" placeholder="Product price...." value="{{old('product_price')}}">
        @error('product_price')
        <span style="color: red;">{{$message}}</span>
        @enderror
    </div>

    <button class="btn btn-primary" type="submit">Add</button>
    @csrf
</form>
@endsection

@section('css')

@endsection

@section('js')

@endsection