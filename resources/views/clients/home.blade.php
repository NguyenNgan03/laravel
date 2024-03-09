@extends('layouts.client')

@section('title')
{{ $title }}
@endsection

@section('sidebar')
{{-- @parent --}}
<h3>Home Sidebar</h3>
@endsection

@section('content')

@if(session('msg'))
<div class="alert alert-{{ session('type')}}">
{{ session('msg') }}
</div>
@endif
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

<x-alert type="info" :content='$message' data-icon="facebook" />
<p><img src="https://www.pbs.org/wnet/nature/files/2020/07/Dolphin.png" alt=""></p>

<p><a href="{{route('download-image').'?image='.('storage/z5200872043343_c527b682ea35379bb0b5a8aa104436e8.jpg')}}" class="btn btn-primary">Download img</a></p>

<p><a href="{{route('download-doc').'?file='.('storage/CV.pdf')}}" class="btn btn-primary">Download PDF</a></p>

@endsection

@section('css')
<style>
    img {
        max-width: 100%;
        height: auto;
    }
</style>

@endsection

@section('js')

@endsection