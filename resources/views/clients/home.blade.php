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

@endsection

@section('css')

@endsection

@section('js')

@endsection