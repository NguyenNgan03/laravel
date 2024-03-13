@extends('layouts.client')
@section('titlet')
<h1>Trang chủ - </h1>
@endsection
@section('sidebar')
@parent
<h1>Home Sidebar</h1>


@endsection

@section ('content')
@if (session('msg'))
    <div class="alert alert-{session('type')}}">
        {{session('msg')}}
    </div>
@endif
<h1> Trang chủ </h1>
<x-alert type="info" :content="$message" data-icon="youtube" />
<!-- <x-inputs.button/>

<x-forms.button /> -->
<p><img src="https://vcdn1-dulich.vnecdn.net/2021/07/16/1-1626437591.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=i2M2IgCcw574LT-bXFY92g" alt="Ảnh"></p>
<p><a href="{{route('downImg',['link' => 'https://vcdn1-dulich.vnecdn.net/2021/07/16/1-1626437591.jpg?w=460&h=0&q=100&dpr=2&fit=crop&s=i2M2IgCcw574LT-bXFY92g'])}}" class="btn btn-primary">Download ảnh</a></p>
@endsection

@section ('css')
<style>
    img{
        max-width: 100%;
        height:auto;
    }
</style>

@endsection