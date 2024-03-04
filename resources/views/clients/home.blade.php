@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

@section('sidebar')
{{-- @parent --}}
<h3>Home Sidebar</h3>
@endsection
@section('content')
<h1>Home Page</h1>
@datetime("2024-03-05 05:00:00")
@include('clients.contents.side')
@include('clients.contents.about')
@datetime("2024-03-05 05:00:00")

@env('production')
    <p>Production Enviroment</p>
@elseenv('test')
    <p>Test Enviroment</p>
@else
    <p> Dev Enviroment</p>
@endenv

<x-alert type="info" :content='$message' data-icon= "facebook" />
@endsection

@section('css')

@endsection

@section('js')

@endsection